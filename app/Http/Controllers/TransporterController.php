<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\Transporter;
use Illuminate\Support\Facades\Validator;
use App\Exports\TransporterExport;
use Maatwebsite\Excel\Facades\Excel;

class TransporterController extends Controller
{

    public function create() {
  
        return view('pages.admin.transporter.create');
    }

    public function store(Request $req) {
        $validator = $req->validate([
            'name' => ['required','regex:/^[a-zA-Z0-9\s]*$/'],
            'email' => ['required','email'],
            'phone' => ['required','regex:/^[0-9]*$/'],
        ],
        [
            'name.required' => 'Please enter the name !',
            'name.regex' => 'Please enter the valid name !',
            'email.required' => 'Please enter the email !',
            'email.email' => 'Please enter the valid email !',
            'phone.required' => 'Please enter the phone !',
            'phone.regex' => 'Please enter the valid phone !',
        ]);

        $country = new Transporter;
        $country->name = $req->name;
        $country->email = $req->email;
        $country->phone = $req->phone;
        $country->description = $req->description;
        $country->status = $req->status == "on" ? 1 : 0;
        $result = $country->save();
        if($result){
            return redirect()->intended('admin/transporter')->with('success_status', 'Data Stored successfully.');
        }else{
            return redirect()->intended('admin/transporter/create')->with('error_status', 'Something went wrong. Please try again');
        }
    }

    public function edit($id) {
        $country = Transporter::findOrFail($id);
        return view('pages.admin.transporter.edit')->with('country',$country);
    }

    public function update(Request $req, $id) {
        $country = Transporter::findOrFail($id);
        $validator = $req->validate([
            'name' => ['required','regex:/^[a-zA-Z0-9\s]*$/'],
            'email' => ['required','email'],
            'phone' => ['required','regex:/^[0-9]*$/'],
        ],
        [
            'name.required' => 'Please enter the name !',
            'name.regex' => 'Please enter the valid name !',
            'email.required' => 'Please enter the email !',
            'email.email' => 'Please enter the valid email !',
            'phone.required' => 'Please enter the phone !',
            'phone.regex' => 'Please enter the valid phone !',
        ]);

        $country->name = $req->name;
        $country->email = $req->email;
        $country->phone = $req->phone;
        $country->description = $req->description;
        $country->status = $req->status == "on" ? 1 : 0;
        $result = $country->save();
        if($result){
            return redirect()->intended('admin/transporter/edit/'.$country->id)->with('success_status', 'Data Updated successfully.');
        }else{
            return redirect()->intended('admin/transporter/edit/'.$country->id)->with('error_status', 'Something went wrong. Please try again');
        }
    }

    public function delete($id){
        $country = Transporter::findOrFail($id);
        $country->delete();
        return redirect()->intended('admin/transporter')->with('success_status', 'Data Deleted successfully.');
    }

    public function view(Request $request) {
        if ($request->has('search')) {
            $search = $request->input('search');
            $country = Transporter::where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })->paginate(10);
        }else{
            $country = Transporter::orderBy('id', 'DESC')->paginate(10);
        }
        return view('pages.admin.transporter.list')->with('country', $country);
    }

    public function display($id) {
        $country = Transporter::findOrFail($id);
        return view('pages.admin.transporter.display')->with('country',$country);
    }

    public function excel(){
        return Excel::download(new TransporterExport, 'transporter.xlsx');
    }


}
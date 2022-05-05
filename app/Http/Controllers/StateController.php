<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\State;
use App\Models\Country;

class StateController extends Controller
{

    public function create() {
  
        return view('pages.admin.states.create')->with('countries', Country::all());
    }

    public function store(Request $req) {
        $validator = $req->validate([
            'name' => ['required','string','regex:/^[a-zA-Z\s]*$/'],
            'country' => ['required'],
            'description' => ['nullable','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
        ],
        [
            'name.required' => 'Please enter the name !',
            'name.string' => 'Please enter the valid name !',
            'name.regex' => 'Please enter the valid name !',
            'country.required' => 'Please select a country !',
            'description.regex' => 'Please enter the valid description !',
        ]);


        $country = new State;
        $country->name = $req->name;
        $country->country_id = $req->country;
        $country->description = $req->description;
        $country->status = $req->status == "on" ? 1 : 0;
        $result = $country->save();
        if($result){
            return redirect()->intended('admin/state')->with('success_status', 'Data Stored successfully.');
        }else{
            return redirect()->intended('admin/state/create')->with('error_status', 'Something went wrong. Please try again');
        }
    }

    public function edit($id) {
        $state = State::findOrFail($id);
        return view('pages.admin.states.edit')->with('state',$state)->with('countries', Country::all());
    }

    public function update(Request $req, $id) {
        $country = State::findOrFail($id);
        $validator = $req->validate([
            'name' => ['required','string','regex:/^[a-zA-Z\s]*$/'],
            'country' => ['required'],
            'description' => ['nullable','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
        ],
        [
            'name.required' => 'Please enter the name !',
            'name.string' => 'Please enter the valid name !',
            'name.regex' => 'Please enter the valid name !',
            'country.required' => 'Please select a country !',
            'description.regex' => 'Please enter the valid description !',
        ]);

        $country->name = $req->name;
        $country->country_id = $req->country;
        $country->description = $req->description;
        $country->status = $req->status == "on" ? 1 : 0;
        $result = $country->save();
        if($result){
            return redirect()->intended('admin/state/edit/'.$country->id)->with('success_status', 'Data Updated successfully.');
        }else{
            return redirect()->intended('admin/state/edit/'.$country->id)->with('error_status', 'Something went wrong. Please try again');
        }
    }

    public function delete($id){
        $country = State::findOrFail($id);
        $country->delete();
        return redirect()->intended('admin/state')->with('success_status', 'Data Deleted successfully.');
    }

    public function view(Request $request) {
        if ($request->has('search')) {
            $search = $request->input('search');
            $country = State::where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('description', 'like', '%' . $search . '%');
            })->paginate(10);
        }else{
            $country = State::orderBy('id', 'DESC')->paginate(10);
        }
        return view('pages.admin.states.list')->with('country', $country);
    }

    public function display($id) {
        $country = State::findOrFail($id);
        return view('pages.admin.states.display')->with('country',$country);
    }


}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\VehicleAmenity;
use App\Models\VehicleDisplayImage;
use App\Models\Amenity;
use App\Models\VehicleType;
use Illuminate\Support\Facades\Validator;
use App\Exports\VehicleTypeExport;
use Maatwebsite\Excel\Facades\Excel;

class VehicleController extends Controller
{
    public function create() {
  
        return view('pages.admin.vehicle.create')->with('vehicletypes',VehicleType::all())->with('amenities',Amenity::where('for', 1)->get());
    }

    public function store(Request $req) {
        $rules = array(
            'name' => ['required','string','regex:/^[a-zA-Z\s]*$/'],
            'seating' => ['required','numeric','regex:/^[0-9]*$/'],
            'vehicletype' => ['required','regex:/^[0-9]*$/'],
            'amenity' => ['required','array','min:1'],
            'amenity.*' => ['required','regex:/^[0-9]*$/'],
            'image' => ['required','image','mimes:jpeg,png,jpg,webp'],
            'upload' => ['required','array','min:1'],
            'upload.*' => ['required','image','mimes:jpeg,png,jpg,webp'],
            'description' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
        );
        $messages = array(
            'name.required' => 'Please enter the name !',
            'name.string' => 'Please enter the valid name !',
            'name.regex' => 'Please enter the valid name !',
            'seating.required' => 'Please enter the seating !',
            'seating.numeric' => 'Please enter number for seating !',
            'seating.regex' => 'Please enter the valid seating !',
            'vehicletype.required' => 'Please enter the vehicle type !',
            'vehicletype.regex' => 'Please enter the valid vehicle type !',
            'image.required' => 'Please select a display image !',
            'image.image' => 'Please enter a valid display image !',
            'image.mimes' => 'Please enter a valid display image !',
            'description.regex' => 'Please enter the valid description !',
        );

        $validator = Validator::make($req->all(), $rules, $messages);
        if($validator->fails()){
            return response()->json(["form_error"=>$validator->errors()], 400);
        }

        $country = new Vehicle;
        $country->name = $req->name;
        $country->seating = $req->seating;
        $country->vehicletype_id = $req->vehicletype;
        $country->description = $req->description;
        $country->status = $req->status == "on" ? 1 : 0;
        if($req->hasFile('image')){
            $newImage = time().'-'.$req->image->getClientOriginalName();
            $req->image->move(public_path('vehicle'), $newImage);
            $country->image = $newImage;
        }
        $result = $country->save();

        for($i=0; $i < count($req->amenity); $i++) { 
            $amenity = new VehicleAmenity;
            $amenity->vehicle_id = $country->id;
            $amenity->amenity_id = $req->amenity[$i];
            $amenity->save();
        }

        if($req->hasFile('upload')){
            for($i=0; $i < count($req->upload); $i++) { 
                $uploadImage = new VehicleDisplayImage;
                $uploadImage->vehicle_id = $country->id;
                $newUploadImage = time().'-'.$req->upload[$i]->getClientOriginalName();
                $req->upload[$i]->move(public_path('vehicle'), $newUploadImage);
                $uploadImage->image = $newUploadImage;
                $uploadImage->save();
            }
        }

        if($result){
            return response()->json(["url"=>empty($req->refreshUrl)?'admin/vehicle':$req->refreshUrl, "message" => "Data Stored successfully.", "data" => $country], 201);
        }else{
            return response()->json(["error"=>"something went wrong. Please try again"], 400);
        }
    }

    public function edit($id) {
        $country = Vehicle::findOrFail($id);
        return view('pages.admin.vehicle.edit')->with('country',$country)->with('vehicletypes',VehicleType::all())->with('amenities',Amenity::where('for', 1)->get());
    }

    public function update(Request $req, $id) {
        $country = Vehicle::findOrFail($id);
        $rules = array(
            'name' => ['required','string','regex:/^[a-zA-Z\s]*$/'],
            'seating' => ['required','numeric','regex:/^[0-9]*$/'],
            'vehicletype' => ['required','regex:/^[0-9]*$/'],
            'amenity' => ['required','array','min:1'],
            'amenity.*' => ['required','regex:/^[0-9]*$/'],
            'image' => ['nullable','image','mimes:jpeg,png,jpg,webp'],
            'upload' => ['nullable','array','min:1'],
            'upload.*' => ['nullable','image','mimes:jpeg,png,jpg,webp'],
            'description' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
        );
        $messages = array(
            'name.required' => 'Please enter the name !',
            'name.string' => 'Please enter the valid name !',
            'name.regex' => 'Please enter the valid name !',
            'seating.required' => 'Please enter the seating !',
            'seating.numeric' => 'Please enter number for seating !',
            'seating.regex' => 'Please enter the valid seating !',
            'vehicletype.required' => 'Please enter the vehicle type !',
            'vehicletype.regex' => 'Please enter the valid vehicle type !',
            'image.image' => 'Please enter a valid display image !',
            'image.mimes' => 'Please enter a valid display image !',
            'description.regex' => 'Please enter the valid description !',
        );

        $validator = Validator::make($req->all(), $rules, $messages);
        if($validator->fails()){
            return response()->json(["form_error"=>$validator->errors()], 400);
        }

        $country->name = $req->name;
        $country->seating = $req->seating;
        $country->vehicletype_id = $req->vehicletype;
        $country->description = $req->description;
        $country->status = $req->status == "on" ? 1 : 0;
        if($req->hasFile('image')){
            if($country->image!=null){
                unlink(public_path('vehicle/'.$country->image)); 
            }
            $newImage = time().'-'.$req->image->getClientOriginalName();
            $req->image->move(public_path('vehicle'), $newImage);
            $country->image = $newImage;
        }
        $result = $country->save();

        $deleteAmenity = VehicleAmenity::where('vehicle_id',$country->id)->delete();
        for($i=0; $i < count($req->amenity); $i++) { 
            $amenity = new VehicleAmenity;
            $amenity->vehicle_id = $country->id;
            $amenity->amenity_id = $req->amenity[$i];
            $amenity->save();
        }

        if($req->hasFile('upload')){
            for($i=0; $i < count($req->upload); $i++) { 
                $uploadImage = new VehicleDisplayImage;
                $uploadImage->vehicle_id = $country->id;
                $newUploadImage = time().'-'.$req->upload[$i]->getClientOriginalName();
                $req->upload[$i]->move(public_path('vehicle'), $newUploadImage);
                $uploadImage->image = $newUploadImage;
                $uploadImage->save();
            }
        }

        if($result){
            return response()->json(["url"=>empty($req->refreshUrl)?'admin/vehicle':$req->refreshUrl, "message" => "Data Stored successfully.", "data" => $country], 201);
        }else{
            return response()->json(["error"=>"something went wrong. Please try again"], 400);
        }
    }

    public function delete($id){
        $country = Vehicle::findOrFail($id);
        if($country->image!=null){
            unlink(public_path('vehicle/'.$country->image)); 
        }
        $country->delete();
        return redirect()->intended('admin/vehicle-type')->with('success_status', 'Data Deleted successfully.');
    }

    public function view(Request $request) {
        if ($request->has('search')) {
            $search = $request->input('search');
            $country = Vehicle::where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('description', 'like', '%' . $search . '%');
            })->paginate(10);
        }else{
            $country = Vehicle::orderBy('id', 'DESC')->paginate(10);
        }
        return view('pages.admin.vehicle.list')->with('country', $country);
    }

    public function display($id) {
        $country = Vehicle::findOrFail($id);
        return view('pages.admin.vehicle.display')->with('country',$country);
    }

    public function excel(){
        return Excel::download(new VehicleTypeExport, 'city.xlsx');
    }
}

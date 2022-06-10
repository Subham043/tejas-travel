<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\LocalRide;
use App\Models\State;
use App\Models\VehicleType;
use App\Models\PackageType;
use Illuminate\Support\Facades\Validator;
use App\Support\For\BookingType;

class LocalRideController extends Controller
{

    public function create() {
  
        return view('pages.admin.localride.create')->with('states', State::all())->with('packagetypes', PackageType::all())->with('vehicletypes', VehicleType::all())->with('bookingtypes', BookingType::lists());
    }

    public function store(Request $req) {
        $rules = array(
            'booking_type' => ['required','regex:/^[0-9]*$/'],
            'vehicletype_id' => ['required','regex:/^[0-9]*$/'],
            'vehicle_id' => ['required','regex:/^[0-9]*$/'],
            'packagetype_id' => ['required','regex:/^[0-9]*$/'],
            'default_notes' => ['required','regex:/^[0-9]*$/'],
            'notes' => ['required'],
            'default_description' => ['required','regex:/^[0-9]*$/'],
            'description' => ['required'],
            'default_terms_condition' => ['required','regex:/^[0-9]*$/'],
            'terms_condition' => ['required'],
            'default_include_exclude' => ['required','regex:/^[0-9]*$/'],
            'include_exclude' => ['required'],
            'base_price' => ['required','regex:/^[1-9]*\.\d{1,2}$/'],
            'additional_price_per_km' => ['required','regex:/^[1-9]*\.\d{1,2}$/'],
            'additional_price_per_hr' => ['required','regex:/^[1-9]*\.\d{1,2}$/'],
            'additional_price_festival' => ['required','regex:/^[1-9]*\.\d{1,2}$/'],
            'additional_price_weekend' => ['required','regex:/^[1-9]*\.\d{1,2}$/'],
            'advance_during_booking' => ['required','regex:/^[1-9]*\.\d{1,2}$/'],
            'advance_during_travel_start' => ['required','regex:/^[1-9]*\.\d{1,2}$/'],
            'advance_during_travel_complete' => ['required','regex:/^[1-9]*\.\d{1,2}$/'],
            'gst' => ['required','regex:/^[1-9]*\.\d{1,2}$/'],
            'discount' => ['required','regex:/^[1-9]*\.\d{1,2}$/'],
            'included_km' => ['required','regex:/^[0-9]*$/'],
            'included_day' => ['required','regex:/^[0-9]*$/'],
            'included_hr' => ['required','regex:/^[0-9]*$/'],
            'driver_charges_per_day' => ['required','regex:/^[0-9]*$/'],
            'driver_charges_per_night' => ['required','regex:/^[0-9]*$/'],
            'state' => ['required'],
            'city' => ['required','array','min:1'],
            'city.*' => ['required','regex:/^[0-9]*$/'],
            'specialdatefare' => ['required','array','min:1'],
            'specialdatefare.*' => ['required'],
        );
        $messages = array(
            'booking_type.required' => 'Please enter the booking type !',
            'booking_type.regex' => 'Please enter the valid booking type !',
            'packagetype_id.required' => 'Please enter the package type !',
            'packagetype_id.regex' => 'Please enter the valid package type !',
            'vehicle_id.required' => 'Please enter the vehicle !',
            'vehicle_id.regex' => 'Please enter the valid vehicle !',
            'default_notes.required' => 'Please enter the default notes !',
            'default_notes.regex' => 'Please enter the valid default notes !',
            'default_description.required' => 'Please enter the default description !',
            'default_description.regex' => 'Please enter the valid default description !',
            'default_include_exclude.required' => 'Please enter the default includes/excludes !',
            'default_include_exclude.regex' => 'Please enter the valid default includes/excludes !',
            'default_terms_condition.required' => 'Please enter the default terms & condtion !',
            'default_terms_condition.regex' => 'Please enter the valid default terms & condtion !',
            'phone.required' => 'Please enter the phone !',
            'phone.regex' => 'Please enter the valid phone !',
            'state.required' => 'Please select a state !',
        );
        $validator = Validator::make($req->all(), $rules, $messages);
        if($validator->fails()){
            return response()->json(["form_error"=>$validator->errors()], 400);
        }

        $country = new Transporter;
        $country->name = $req->name;
        $country->email = $req->email;
        $country->phone = $req->phone;
        $country->description = $req->description;
        $country->state_id = $req->state;
        $country->status = $req->status == "on" ? 1 : 0;
        $result = $country->save();
        for($i=0; $i < count($req->city); $i++) { 
            $city = new TransporterCity;
            $city->transporter_id = $country->id;
            $city->city_id = $req->city[$i];
            $city->save();
        }
        for($i=0; $i < count($req->vehicle); $i++) { 
            $city = new TransporterVehicle;
            $city->transporter_id = $country->id;
            $city->vehicle_id = $req->vehicle[$i];
            $city->save();
        }
        
        if($result){
            return response()->json(["url"=>empty($req->refreshUrl)?URL::to('/').'/admin/transporter':$req->refreshUrl, "message" => "Data Stored successfully.", "data" => $country], 201);
        }else{
            return response()->json(["error"=>"something went wrong. Please try again"], 400);
        }
    }



}
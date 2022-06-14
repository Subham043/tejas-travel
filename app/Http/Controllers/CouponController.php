<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\Coupon;
use App\Models\VehicleType;
use App\Models\CouponVehicleTypes;
use Illuminate\Support\Facades\Validator;
use App\Support\For\RideType;
use App\Support\For\CustomerType;
use App\Support\For\UseType;
use App\Support\For\DiscountType;
use App\Models\Common;

class CouponController extends Controller
{

    public function create() {
  
        return view('pages.admin.coupon.create')->with('vehicletypes', VehicleType::all())->with('ridetypes', RideType::lists())->with('customertypes', CustomerType::lists())->with('usetypes', UseType::lists())->with('discounttypes', DiscountType::lists());
    }

    public function store(Request $req) {
        $rules = array(
            'ride_type' => ['required','regex:/^[0-9]*$/'],
            'customer_type' => ['required','regex:/^[0-9]*$/'],
            'use_type' => ['required','regex:/^[0-9]*$/'],
            'discount_type' => ['required','regex:/^[0-9]*$/'],
            'terms_condition' => ['required'],
            'discount' => ['required','regex:/^[1-9]*\.\d{1,2}$/'],
            'no_of_use' => ['required','regex:/^[0-9]*$/'],
            'min_invoice_amount' => ['required','regex:/^[0-9]*$/'],
            'max_discount' => ['required','regex:/^[0-9]*$/'],
            'vehicletype' => ['required','array','min:1'],
            'vehicletype.*' => ['required','regex:/^[0-9]*$/'],
            'start_date' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
            'end_date' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
            'name' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
            'code' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
        );
        $messages = array(
            'ride_type.required' => 'Please enter the ride type !',
            'ride_type.regex' => 'Please enter the valid ride type !',
            'customer_type.required' => 'Please enter the customer type !',
            'customer_type.regex' => 'Please enter the valid customer type !',
            'use_type.required' => 'Please enter the use type !',
            'use_type.regex' => 'Please enter the valid use type !',
            'discount_type.required' => 'Please enter the discount type !',
            'discount_type.regex' => 'Please enter the valid discount type !',
            'terms_condition.required' => 'Please enter the terms & condtion !',
            'discount.required' => 'Please enter the discount !',
            'discount.regex' => 'Please enter the valid discount !',
            'no_of_use.required' => 'Please enter the no. of use !',
            'no_of_use.regex' => 'Please enter the valid no. of use !',
            'min_invoice_amount.required' => 'Please enter the min invoice amount !',
            'min_invoice_amount.regex' => 'Please enter the valid min invoice amount !',
            'max_discount.required' => 'Please enter the max discount !',
            'max_discount.regex' => 'Please enter the valid max discount !',
            'name.required' => 'Please enter the name !',
            'name.regex' => 'Please enter the valid name !',
            'code.required' => 'Please enter the code !',
            'code.regex' => 'Please enter the valid code !',
        );

        $validator = Validator::make($req->all(), $rules, $messages);
        if($validator->fails()){
            return response()->json(["form_error"=>$validator->errors()], 400);
        }

        $country = new Coupon;
        $country->ride_type = $req->ride_type;
        $country->customer_type = $req->customer_type;
        $country->use_type = $req->use_type;
        $country->discount_type = $req->discount_type;
        $country->name = $req->name;
        $country->code = $req->code;
        $country->terms_condition = $req->terms_condition;
        $country->terms_condition_formatted = $req->terms_condition_formatted;
        $country->discount = $req->discount;
        $country->no_of_use = $req->no_of_use;
        $country->min_invoice_amount = $req->min_invoice_amount;
        $country->max_discount = $req->max_discount;
        $country->start_date = $req->start_date;
        $country->end_date = $req->end_date;
        $country->status = $req->status == "on" ? 1 : 0;
        $result = $country->save();
        for($i=0; $i < count($req->vehicletype); $i++) { 
            $city = new CouponVehicleTypes;
            $city->coupon_id = $country->id;
            $city->vehicletype_id = $req->vehicletype[$i];
            $city->save();
        }
        
        if($result){
            return response()->json(["url"=>empty($req->refreshUrl)?URL::to('/').'/admin/local-ride':$req->refreshUrl, "message" => "Data Stored successfully.", "data" => $country], 201);
        }else{
            return response()->json(["error"=>"something went wrong. Please try again"], 400);
        }
    }

    public function edit($id) {
        $country = LocalRide::findOrFail($id);
        return view('pages.admin.localride.edit')->with('country',$country)->with('states', State::all())->with('cities', City::where('state_id',$country->state_id)->get())->with('packagetypes', PackageType::all())->with('vehicletypes', VehicleType::all())->with('bookingtypes', BookingType::lists())->with('vehicles', Vehicle::where('vehicletype_id',$country->vehicletype_id)->get());
    }

    public function update(Request $req, $id) {
        $country = LocalRide::findOrFail($id);

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
            'state_id' => ['required'],
            'city' => ['required','array','min:1'],
            'city.*' => ['required','regex:/^[0-9]*$/'],
            'start_date' => ['required','array','min:1'],
            'start_date.*' => ['required'],
            'end_date' => ['required','array','min:1'],
            'end_date.*' => ['required'],
            'price' => ['required','array','min:1'],
            'price.*' => ['required'],
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
            'base_price.required' => 'Please enter the base price !',
            'base_price.regex' => 'Please enter the valid base price !',
            'additional_price_per_km.required' => 'Please enter the additional price per km !',
            'additional_price_per_km.regex' => 'Please enter the valid additional price per km !',
            'additional_price_per_hr.required' => 'Please enter the additional price per hr !',
            'additional_price_per_hr.regex' => 'Please enter the valid additional price per hr !',
            'additional_price_festival.required' => 'Please enter the additional price festival !',
            'additional_price_festival.regex' => 'Please enter the valid additional price festival !',
            'additional_price_weekend.required' => 'Please enter the additional price weeknd !',
            'additional_price_weekend.regex' => 'Please enter the valid additional price weeknd !',
            'advance_during_booking.required' => 'Please enter the advance during booking !',
            'advance_during_booking.regex' => 'Please enter the valid advance during booking !',
            'advance_during_travel_start.required' => 'Please enter the advance during travel start !',
            'advance_during_travel_start.regex' => 'Please enter the valid advance during travel start !',
            'advance_during_travel_complete.required' => 'Please enter the advance during travel complete !',
            'advance_during_travel_complete.regex' => 'Please enter the valid advance during travel complete !',
            'discount.required' => 'Please enter the discount !',
            'discount.regex' => 'Please enter the valid discount !',
            'gst.required' => 'Please enter the gst !',
            'gst.regex' => 'Please enter the valid gst !',
            'included_km.required' => 'Please enter the included km !',
            'included_km.regex' => 'Please enter the valid included km !',
            'included_day.required' => 'Please enter the included day !',
            'included_day.regex' => 'Please enter the valid included day !',
            'included_hr.required' => 'Please enter the included hr !',
            'included_hr.regex' => 'Please enter the valid included hr !',
            'driver_charges_per_day.required' => 'Please enter the driver charges per day !',
            'driver_charges_per_day.regex' => 'Please enter the valid driver charges per day !',
            'driver_charges_per_night.required' => 'Please enter the driver charges per night !',
            'driver_charges_per_night.regex' => 'Please enter the valid driver charges per night !',
            'state_id.required' => 'Please select a state !',
        );

        if($req->booking_type==2){
            $rules['from_date'] = 'required' ;
            $messages['from_date.required'] = 'Please enter the from date' ;
            $rules['to_date'] = 'required' ;
            $messages['to_date.required'] = 'Please enter the to date' ;
        }

        if($req->default_notes==2){
            $rules['notes'] = 'required' ;
            $messages['notes.required'] = 'Please enter the notes' ;
        }

        if($req->default_description==2){
            $rules['description'] = 'required' ;
            $messages['description.required'] = 'Please enter the description' ;
        }

        if($req->default_terms_condition==2){
            $rules['terms_condition'] = 'required' ;
            $messages['terms_condition.required'] = 'Please enter the terms & condition' ;
        }

        if($req->default_include_exclude==2){
            $rules['include_exclude'] = 'required' ;
            $messages['include_exclude.required'] = 'Please enter the includes/excludes' ;
        }

        $validator = Validator::make($req->all(), $rules, $messages);
        if($validator->fails()){
            return response()->json(["form_error"=>$validator->errors()], 400);
        }

        $country->booking_type = $req->booking_type;
        $country->vehicletype_id = $req->vehicletype_id;
        $country->vehicle_id = $req->vehicle_id;
        $country->packagetype_id = $req->packagetype_id;
        $country->default_notes = $req->default_notes;
        $country->notes = $req->notes;
        $country->notes_formatted = $req->notes_formatted;
        $country->default_description = $req->default_description;
        $country->description = $req->description;
        $country->description_formatted = $req->description_formatted;
        $country->default_terms_condition = $req->default_terms_condition;
        $country->terms_condition = $req->terms_condition;
        $country->terms_condition_formatted = $req->terms_condition_formatted;
        $country->default_include_exclude = $req->default_include_exclude;
        $country->include_exclude = $req->include_exclude;
        $country->include_exclude_formatted = $req->include_exclude_formatted;
        $country->base_price = $req->base_price;
        $country->additional_price_per_km = $req->additional_price_per_km;
        $country->additional_price_per_hr = $req->additional_price_per_hr;
        $country->additional_price_festival = $req->additional_price_festival;
        $country->additional_price_weekend = $req->additional_price_weekend;
        $country->advance_during_booking = $req->advance_during_booking;
        $country->advance_during_travel_start = $req->advance_during_travel_start;
        $country->advance_during_travel_complete = $req->advance_during_travel_complete;
        $country->gst = $req->gst;
        $country->discount = $req->discount;
        $country->included_km = $req->included_km;
        $country->included_day = $req->included_day;
        $country->included_hr = $req->included_hr;
        $country->driver_charges_per_day = $req->driver_charges_per_day;
        $country->driver_charges_per_night = $req->driver_charges_per_night;
        $country->state_id = $req->state_id;
        $country->from_date = $req->from_date;
        $country->to_date = $req->to_date;
        $country->status = $req->status == "on" ? 1 : 0;
        $result = $country->save();

        $deleteLocalRideCity = LocalRideCity::where('localride_id',$country->id)->delete();

        for($i=0; $i < count($req->city); $i++) { 
            $city = new LocalRideCity;
            $city->localride_id = $country->id;
            $city->city_id = $req->city[$i];
            $city->save();
        }

        $deleteSpecialFareLocalRide = SpecialFareLocalRide::where('localride_id',$country->id)->delete();

        for($i=0; $i < count($req->start_date); $i++) { 
            $city = new SpecialFareLocalRide;
            $city->localride_id = $country->id;
            $city->start_date = $req->start_date[$i];
            $city->end_date = $req->end_date[$i];
            $city->price = $req->price[$i];
            $city->save();
        }
        
        if($result){
            return response()->json(["url"=>empty($req->refreshUrl)?URL::to('/').'/admin/local-ride':$req->refreshUrl, "message" => "Data Updated successfully.", "data" => $country], 201);
        }else{
            return response()->json(["error"=>"something went wrong. Please try again"], 400);
        }
    }

    public function delete($id){
        $country = Coupon::findOrFail($id);
        $country->delete();
        return redirect()->intended(route('coupon_view'))->with('success_status', 'Data Deleted successfully.');
    }

    public function view(Request $request) {
        if ($request->has('search')) {
            $search = $request->input('search');
            $country = Coupon::with(['VehicleTypes'])->where('name', 'like', '%' . $search . '%')->orWhere('code', 'like', '%' . $search . '%')->orWhere('start_date', 'like', '%' . $search . '%')->orWhere('end_date', 'like', '%' . $search . '%')->orWhere('customer_type', CustomerType::getStatusId($search))->orWhereHas('VehicleTypes', function($q)  use ($search){
                $q->where('name', 'like', '%' . $search . '%');
            })->paginate(10);
        }else{
            $country = Coupon::orderBy('id', 'DESC')->paginate(10);
        }
        return view('pages.admin.coupon.list')->with('country', $country)->with('ridetypes', RideType::lists())->with('customertypes', CustomerType::lists())->with('usetypes', UseType::lists())->with('discounttypes', DiscountType::lists());
    }

    public function display($id) {
        $country = LocalRide::findOrFail($id);
        $term = Common::findOrFail(1);
        $include_exclude = Common::findOrFail(2);
        $description = Common::findOrFail(3);
        $notes = Common::findOrFail(4);
        return view('pages.admin.localride.display')->with('country',$country)->with('bookingtype', BookingType::lists())->with('term',$term)->with('include_exclude',$include_exclude)->with('description',$description)->with('notes',$notes);
    }

    public function excel(){
        return Excel::download(new TransporterExport, 'transporter.xlsx');
    }



}
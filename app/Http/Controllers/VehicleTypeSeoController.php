<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\VehicleTypesSeo;
use App\Models\State;
use App\Models\City;
use App\Models\Vehicle;
use App\Models\VehicleType;
use App\Models\PackageType;
use App\Models\VehicleTypeSeoImage;
use App\Models\VehicleTypeSeoVehicle;
use App\Models\VehicleTypeSeoListLayout;
use App\Models\VehicleTypeSeoListLayoutList;
use App\Models\VehicleTypeSeoContentLayout;
use Illuminate\Support\Facades\Validator;
use URL;
use Image;

class VehicleTypeSeoController extends Controller
{

    public function create() {
  
        return view('pages.admin.vehicletypeseo.create')->with('states', State::all())->with('vehicletypes', VehicleType::all());
    }

    public function store(Request $req) {
        $rules = array(
            'vehicletype_id' => ['required','regex:/^[0-9]*$/'],
            'state_id' => ['required','regex:/^[0-9]*$/'],
            'city_id' => ['required','regex:/^[0-9]*$/'],
            'vehicle' => ['required','array','min:1'],
            'vehicle.*' => ['required','regex:/^[0-9]*$/'],
            'url' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i','unique:vehicletypesseos'],
        );
        $messages = array(
            'vehicle_id.required' => 'Please enter the vehicle !',
            'vehicle_id.regex' => 'Please enter the valid vehicle !',
            'state_id.required' => 'Please select a state !',
            'state_id.regex' => 'Please enter the valid state !',
            'city_id.required' => 'Please select a city !',
            'city_id.regex' => 'Please enter the valid city !',
            'url.required' => 'Please enter the url !',
            'url.regex' => 'Please enter the valid url !',
        );

        $validator = Validator::make($req->all(), $rules, $messages);
        if($validator->fails()){
            return response()->json(["form_error"=>$validator->errors()], 400);
        }

        $country = new VehicleTypesSeo;
        $country->vehicletype_id = $req->vehicletype_id;
        $country->state_id = $req->state_id;
        $country->city_id = $req->city_id;
        $country->browser_title = $req->browser_title;
        $country->meta_keywords = $req->meta_keywords;
        $country->meta_description = $req->meta_description;
        $country->seo_meta_header = $req->seo_meta_header;
        $country->seo_meta_footer = $req->seo_meta_footer;
        $country->url = $req->url;
        $country->description = $req->description;
        $country->description_unformatted = $req->description_unformatted;
        $country->status = $req->status == "on" ? 1 : 0;
        $result = $country->save();

        for($i=0; $i < count($req->vehicle); $i++) { 
            $city = new VehicleTypeSeoVehicle;
            $city->vehicletypesseo_id = $country->id;
            $city->vehicle_id = $req->vehicle[$i];
            $city->save();
        }
        
        if($result){
            return response()->json(["url"=>empty($req->refreshUrl)?route('vehicletypeseo_view'):$req->refreshUrl, "message" => "Data Stored successfully.", "data" => $country], 201);
        }else{
            return response()->json(["error"=>"something went wrong. Please try again"], 400);
        }
    }

    public function edit($id) {
        $country = VehicleTypesSeo::findOrFail($id);
        return view('pages.admin.vehicletypeseo.edit')->with('country',$country)->with('states', State::all())->with('cities', City::where('state_id',$country->state_id)->get())->with('vehicletypes', VehicleType::all())->with('vehicles', Vehicle::where('vehicletype_id',$country->vehicletype_id)->get());
    }

    public function update(Request $req, $id) {
        $country = VehicleTypesSeo::findOrFail($id);

        $rules = array(
            'vehicletype_id' => ['required','regex:/^[0-9]*$/'],
            'state_id' => ['required','regex:/^[0-9]*$/'],
            'city_id' => ['required','regex:/^[0-9]*$/'],
            'vehicle' => ['required','array','min:1'],
            'vehicle.*' => ['required','regex:/^[0-9]*$/'],
            'url' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
        );
        $messages = array(
            'vehicle_id.required' => 'Please enter the vehicle !',
            'vehicle_id.regex' => 'Please enter the valid vehicle !',
            'state_id.required' => 'Please select a state !',
            'state_id.regex' => 'Please enter the valid state !',
            'city_id.required' => 'Please select a city !',
            'city_id.regex' => 'Please enter the valid city !',
            'url.required' => 'Please enter the url !',
            'url.regex' => 'Please enter the valid url !',
        );

        if($country->url!==$req->url){
            $rules['url'] = ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i','unique:vehicletypesseos'];
        }

        $validator = Validator::make($req->all(), $rules, $messages);
        if($validator->fails()){
            return response()->json(["form_error"=>$validator->errors()], 400);
        }

        $country->vehicletype_id = $req->vehicletype_id;
        $country->state_id = $req->state_id;
        $country->city_id = $req->city_id;
        $country->browser_title = $req->browser_title;
        $country->meta_keywords = $req->meta_keywords;
        $country->meta_description = $req->meta_description;
        $country->seo_meta_header = $req->seo_meta_header;
        $country->seo_meta_footer = $req->seo_meta_footer;
        $country->url = $req->url;
        $country->description = $req->description;
        $country->description_unformatted = $req->description_unformatted;
        $country->status = $req->status == "on" ? 1 : 0;
        $result = $country->save();

        $deleteVehicleTypeSeoVehicle = VehicleTypeSeoVehicle::where('vehicletypesseo_id',$country->id)->delete();

        for($i=0; $i < count($req->vehicle); $i++) { 
            $city = new VehicleTypeSeoVehicle;
            $city->vehicletypesseo_id = $country->id;
            $city->vehicle_id = $req->vehicle[$i];
            $city->save();
        }
        
        if($result){
            return response()->json(["url"=>empty($req->refreshUrl)?route('vehicletypeseo_view'):$req->refreshUrl, "message" => "Data Updated successfully.", "data" => $country], 201);
        }else{
            return response()->json(["error"=>"something went wrong. Please try again"], 400);
        }
    }

    public function delete($id){
        $country = VehicleTypesSeo::findOrFail($id);
        $country->delete();
        return redirect()->intended(route('vehicletypeseo_view'))->with('success_status', 'Data Deleted successfully.');
    }

    public function view(Request $request) {
        if ($request->has('search')) {
            $search = $request->input('search');
            $country = VehicleTypesSeo::with(['State','City','Vehicles','VehicleType'])->where('url', 'like', '%' . $search . '%')->orWhereHas('State', function($q)  use ($search){
                $q->where('name', 'like', '%' . $search . '%')
                      ->orWhere('description', 'like', '%' . $search . '%');
            })->orWhereHas('Vehicles', function($q)  use ($search){
                $q->where('name', 'like', '%' . $search . '%')
                      ->orWhere('description', 'like', '%' . $search . '%');
            })->orWhereHas('City', function($q)  use ($search){
                $q->where('name', 'like', '%' . $search . '%')
                      ->orWhere('description', 'like', '%' . $search . '%');
            })->orWhereHas('VehicleType', function($q)  use ($search){
                $q->where('name', 'like', '%' . $search . '%');
            })->paginate(10);
        }else{
            $country = VehicleTypesSeo::orderBy('id', 'DESC')->paginate(10);
        }
        return view('pages.admin.vehicletypeseo.list')->with('country', $country);
    }

    public function display($id) {
        $country = VehicleTypesSeo::findOrFail($id);
        return view('pages.admin.vehicletypeseo.display')->with('country',$country);
    }

    // banner-image section

    public function create_image($vehicleseotype_id) {
        $country = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        return view('pages.admin.vehicletypeseo_image.create')->with('country',$country);
    }

    public function store_image(Request $req, $vehicleseotype_id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $validator = $req->validate([
            'image' => ['required','image','mimes:jpeg,png,jpg,webp'],
            'alt' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
        ],
        [
            'image.image' => 'Please enter a valid image !',
            'image.mimes' => 'Please enter a valid image !',
            'alt.regex' => 'Please enter the valid alt !',
        ]);

        $country = new VehicleTypeSeoImage;
        $country->alt = $req->alt;
        $country->vehicletypesseo_id = $vehicleseotype_id;
        if($req->hasFile('image')){
            $newImage = time().'-'.$req->image->getClientOriginalName();
            $img = Image::make($req->file('image')->getRealPath());
            $img->resize(300, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('vehicletypeseo').'/'.'compressed-'.$newImage);
            $req->image->move(public_path('vehicletypeseo'), $newImage);
            $country->image = $newImage;
        }
        $result = $country->save();
        if($result){
            return redirect()->intended(route('vehicletypeseo_image_view', $vehicleseotype_id))->with('success_status', 'Data Stored successfully.');
        }else{
            return redirect()->intended(route('vehicletypeseo_image_create', $vehicleseotype_id))->with('error_status', 'Something went wrong. Please try again');
        }
    }

    public function edit_image($vehicleseotype_id, $id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $country = VehicleTypeSeoImage::where('id', $id)->where('vehicletypesseo_id', $vehicleseotype_id)->firstOrFail();
        return view('pages.admin.vehicletypeseo_image.edit')->with('country',$country);
    }

    public function update_image(Request $req, $vehicleseotype_id, $id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $country = VehicleTypeSeoImage::where('id', $id)->where('vehicletypesseo_id', $vehicleseotype_id)->firstOrFail();
        $validator = $req->validate([
            'image' => ['nullable','image','mimes:jpeg,png,jpg,webp'],
            'alt' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
        ],
        [
            'image.image' => 'Please enter a valid image !',
            'image.mimes' => 'Please enter a valid image !',
            'alt.regex' => 'Please enter the valid alt !',
        ]);

        $country->alt = $req->alt;
        if($req->hasFile('image')){
            if($country->image!=null){
                unlink(public_path('vehicletypeseo/'.$country->image)); 
                unlink(public_path('vehicletypeseo/compressed-'.$country->image)); 
            }
            $newImage = time().'-'.$req->image->getClientOriginalName();
            $img = Image::make($req->file('image')->getRealPath());
            $img->resize(300, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('vehicletypeseo').'/'.'compressed-'.$newImage);
            $req->image->move(public_path('vehicletypeseo'), $newImage);
            $country->image = $newImage;
        }
        $result = $country->save();
        if($result){
            return redirect()->intended(route('vehicletypeseo_image_edit', [$vehicleseotype_id, $country->id]))->with('success_status', 'Data Updated successfully.');
        }else{
            return redirect()->intended(route('vehicletypeseo_image_edit', [$vehicleseotype_id, $country->id]))->with('error_status', 'Something went wrong. Please try again');
        }
    }

    public function delete_image($vehicleseotype_id, $id){
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $country = VehicleTypeSeoImage::where('id', $id)->where('vehicletypesseo_id', $vehicleseotype_id)->firstOrFail();
        if($country->image!=null){
            unlink(public_path('vehicletypeseo/'.$country->image)); 
            unlink(public_path('vehicletypeseo/compressed-'.$country->image)); 
        }
        $country->delete();
        return redirect()->intended(route('vehicletypeseo_image_view', $vehicleseotype_id))->with('success_status', 'Data Deleted successfully.');
    }

    public function view_image(Request $request, $vehicleseotype_id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        if ($request->has('search')) {
            $search = $request->input('search');
            $country = VehicleTypeSeoImage::where(function ($query) use ($search) {
                $query->where('alt', 'like', '%' . $search . '%');
            })->paginate(10);
        }else{
            $country = VehicleTypeSeoImage::orderBy('id', 'DESC')->paginate(10);
        }
        return view('pages.admin.vehicletypeseo_image.list')->with('country', $country)->with('vehicleseotype_id', $vehicleseotype_id);
    }

    public function display_image($vehicleseotype_id, $id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $country = VehicleTypeSeoImage::where('id', $id)->where('vehicletypesseo_id', $vehicleseotype_id)->firstOrFail();
        return view('pages.admin.vehicletypeseo_image.display')->with('country',$country)->with('vehicleseotype_id', $vehicleseotype_id);
    }

    // list-layout section

    public function create_list_layout($vehicleseotype_id) {
        $country = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        return view('pages.admin.vehicletypeseo_list_layout.create')->with('country',$country);
    }

    public function store_list_layout(Request $req, $vehicleseotype_id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $rules = [
            'heading' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
            'list' => ['required','array','min:1'],
            'list.*' => ['required'],
            'link' => ['nullable','array','min:1'],
            'link.*' => ['nullable'],
        ];
        $messages = [
            'heading.regex' => 'Please enter the valid heading !',
        ];

        $validator = Validator::make($req->all(), $rules, $messages);
        if($validator->fails()){
            return response()->json(["form_error"=>$validator->errors()], 400);
        }

        $country = new VehicleTypeSeoListLayout;
        $country->heading = $req->heading;
        $country->vehicletypesseo_id = $vehicleseotype_id;
        $result = $country->save();

        for($i=0; $i < count($req->list); $i++) { 
            $city = new VehicleTypeSeoListLayoutList;
            $city->vehicletypesseolistlayout_id = $country->id;
            $city->list = $req->list[$i];
            $city->link = $req->link[$i];
            $city->save();
        }
        
        if($result){
            return response()->json(["url"=>empty($req->refreshUrl)?route('vehicletypeseo_list_layout_view', $vehicleseotype_id):$req->refreshUrl, "message" => "Data Stored successfully.", "data" => $country], 201);
        }else{
            return response()->json(["error"=>"something went wrong. Please try again"], 400);
        }

    }

    public function edit_list_layout($vehicleseotype_id, $id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $country = VehicleTypeSeoListLayout::where('id', $id)->where('vehicletypesseo_id', $vehicleseotype_id)->firstOrFail();
        return view('pages.admin.vehicletypeseo_list_layout.edit')->with('country',$country);
    }

    public function update_list_layout(Request $req, $vehicleseotype_id, $id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $country = VehicleTypeSeoListLayout::where('id', $id)->where('vehicletypesseo_id', $vehicleseotype_id)->firstOrFail();
        $rules = [
            'heading' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
            'list' => ['required','array','min:1'],
            'list.*' => ['required'],
            'link' => ['nullable','array','min:1'],
            'link.*' => ['nullable'],
        ];
        $messages = [
            'heading.regex' => 'Please enter the valid heading !',
        ];

        $validator = Validator::make($req->all(), $rules, $messages);
        if($validator->fails()){
            return response()->json(["form_error"=>$validator->errors()], 400);
        }

        $country->heading = $req->heading;
        $country->vehicletypesseo_id = $vehicleseotype_id;
        $result = $country->save();

        $deleteVehicleTypeSeoListLayoutList = VehicleTypeSeoListLayoutList::where('vehicletypesseolistlayout_id',$country->id)->delete();

        for($i=0; $i < count($req->list); $i++) { 
            $city = new VehicleTypeSeoListLayoutList;
            $city->vehicletypesseolistlayout_id = $country->id;
            $city->list = $req->list[$i];
            $city->link = $req->link[$i];
            $city->save();
        }

        if($result){
            return response()->json(["url"=>empty($req->refreshUrl)?route('vehicletypeseo_list_layout_view', $vehicleseotype_id):$req->refreshUrl, "message" => "Data Stored successfully.", "data" => $country], 201);
        }else{
            return response()->json(["error"=>"something went wrong. Please try again"], 400);
        }
    }

    public function delete_list_layout($vehicleseotype_id, $id){
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $country = VehicleTypeSeoListLayout::where('id', $id)->where('vehicletypesseo_id', $vehicleseotype_id)->firstOrFail();
        $country->delete();
        return redirect()->intended(route('vehicletypeseo_list_layout_view', $vehicleseotype_id))->with('success_status', 'Data Deleted successfully.');
    }

    public function view_list_layout(Request $request, $vehicleseotype_id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        if ($request->has('search')) {
            $search = $request->input('search');
            $country = VehicleTypeSeoListLayout::where(function ($query) use ($search) {
                $query->where('heading', 'like', '%' . $search . '%');
            })->paginate(10);
        }else{
            $country = VehicleTypeSeoListLayout::orderBy('id', 'DESC')->paginate(10);
        }
        return view('pages.admin.vehicletypeseo_list_layout.list')->with('country', $country)->with('vehicleseotype_id', $vehicleseotype_id);
    }

    public function display_list_layout($vehicleseotype_id, $id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $country = VehicleTypeSeoListLayout::where('id', $id)->where('vehicletypesseo_id', $vehicleseotype_id)->firstOrFail();
        return view('pages.admin.vehicletypeseo_list_layout.display')->with('country',$country)->with('vehicleseotype_id', $vehicleseotype_id);
    }

    // content-layout section

    public function create_content_layout($vehicleseotype_id) {
        $country = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        return view('pages.admin.vehicletypeseo_content_layout.create')->with('country',$country);
    }

    public function store_content_layout(Request $req, $vehicleseotype_id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $validator = $req->validate([
            'description_unformatted' => ['required'],
            'heading' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
        ],
        [
            'description_unformatted.required' => 'Please enter a description !',
            'heading.regex' => 'Please enter the valid heading !',
        ]);

        $country = new VehicleTypeSeoContentLayout;
        $country->heading = $req->heading;
        $country->description = $req->description;
        $country->description_unformatted = $req->description_unformatted;
        $country->vehicletypesseo_id = $vehicleseotype_id;
        $result = $country->save();
        if($result){
            return redirect()->intended(route('vehicletypeseo_content_layout_view', $vehicleseotype_id))->with('success_status', 'Data Stored successfully.');
        }else{
            return redirect()->intended(route('vehicletypeseo_content_layout_create', $vehicleseotype_id))->with('error_status', 'Something went wrong. Please try again');
        }
    }

    public function edit_content_layout($vehicleseotype_id, $id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $country = VehicleTypeSeoContentLayout::where('id', $id)->where('vehicletypesseo_id', $vehicleseotype_id)->firstOrFail();
        return view('pages.admin.vehicletypeseo_content_layout.edit')->with('country',$country);
    }

    public function update_content_layout(Request $req, $vehicleseotype_id, $id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $country = VehicleTypeSeoContentLayout::where('id', $id)->where('vehicletypesseo_id', $vehicleseotype_id)->firstOrFail();
        $validator = $req->validate([
            'description_unformatted' => ['required'],
            'heading' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
        ],
        [
            'description_unformatted.required' => 'Please enter a description !',
            'heading.regex' => 'Please enter the valid heading !',
        ]);

        $country->heading = $req->heading;
        $country->description = $req->description;
        $country->description_unformatted = $req->description_unformatted;
        $result = $country->save();
        if($result){
            return redirect()->intended(route('vehicletypeseo_content_layout_edit', [$vehicleseotype_id, $country->id]))->with('success_status', 'Data Updated successfully.');
        }else{
            return redirect()->intended(route('vehicletypeseo_content_layout_edit', [$vehicleseotype_id, $country->id]))->with('error_status', 'Something went wrong. Please try again');
        }
    }

    public function delete_content_layout($vehicleseotype_id, $id){
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $country = VehicleTypeSeoContentLayout::where('id', $id)->where('vehicletypesseo_id', $vehicleseotype_id)->firstOrFail();
        
        $country->delete();
        return redirect()->intended(route('vehicletypeseo_content_layout_view', $vehicleseotype_id))->with('success_status', 'Data Deleted successfully.');
    }

    public function view_content_layout(Request $request, $vehicleseotype_id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        if ($request->has('search')) {
            $search = $request->input('search');
            $country = VehicleTypeSeoContentLayout::where(function ($query) use ($search) {
                $query->where('heading', 'like', '%' . $search . '%');
            })->paginate(10);
        }else{
            $country = VehicleTypeSeoContentLayout::orderBy('id', 'DESC')->paginate(10);
        }
        return view('pages.admin.vehicletypeseo_content_layout.list')->with('country', $country)->with('vehicleseotype_id', $vehicleseotype_id);
    }

    public function display_content_layout($vehicleseotype_id, $id) {
        $data = VehicleTypesSeo::findOrFail($vehicleseotype_id);
        $country = VehicleTypeSeoContentLayout::where('id', $id)->where('vehicletypesseo_id', $vehicleseotype_id)->firstOrFail();
        return view('pages.admin.vehicletypeseo_content_layout.display')->with('country',$country)->with('vehicleseotype_id', $vehicleseotype_id);
    }



}
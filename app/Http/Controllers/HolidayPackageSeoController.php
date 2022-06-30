<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\HolidayPackageSeo;
use App\Models\State;
use App\Models\City;
use App\Models\HolidayPackage;
use App\Models\HolidayPackageSeoImage;
use Illuminate\Support\Facades\Validator;
use URL;
use Image;
use App\Models\ListLayout;
use App\Models\ContentLayout;
use App\Models\HolidayPackageSeoListLayout;
use App\Models\HolidayPackageSeoContentLayout;

class HolidayPackageSeoController extends Controller
{

    public function create() {
  
        return view('pages.admin.holidaypackageseo.create')->with('states', State::all())->with('holidaypackages', HolidayPackage::all())->with('listlayouts',ListLayout::all())->with('contentlayouts',ContentLayout::all());
    }

    public function store(Request $req) {
        $rules = array(
            'holidaypackage_id' => ['required','regex:/^[0-9]*$/'],
            'state_id' => ['required','regex:/^[0-9]*$/'],
            'city_id' => ['required','regex:/^[0-9]*$/'],
            'url' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i','unique:vehicletypesseos'],
            'list' => ['required','array','min:1'],
            'list.*' => ['required','regex:/^[0-9]*$/'],
            'content' => ['required','array','min:1'],
            'content.*' => ['required','regex:/^[0-9]*$/'],
        );
        $messages = array(
            'holidaypackage_id.required' => 'Please enter the holiday package !',
            'holidaypackage_id.regex' => 'Please enter the valid holiday package !',
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

        $country = new HolidayPackageSeo;
        $country->holidaypackage_id = $req->holidaypackage_id;
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

        for($i=0; $i < count($req->list); $i++) { 
            $city = new HolidayPackageSeoListLayout;
            $city->holidaypackageseo_id = $country->id;
            $city->listlayout_id = $req->list[$i];
            $city->save();
        }
        
        for($i=0; $i < count($req->content); $i++) { 
            $city = new HolidayPackageSeoContentLayout;
            $city->holidaypackageseo_id = $country->id;
            $city->contentlayout_id = $req->content[$i];
            $city->save();
        }
        
        if($result){
            return response()->json(["url"=>empty($req->refreshUrl)?route('holidaypackageseo_view'):$req->refreshUrl, "message" => "Data Stored successfully.", "data" => $country], 201);
        }else{
            return response()->json(["error"=>"something went wrong. Please try again"], 400);
        }
    }

    public function edit($id) {
        $country = HolidayPackageSeo::findOrFail($id);
        return view('pages.admin.holidaypackageseo.edit')->with('country',$country)->with('states', State::all())->with('cities', City::where('state_id',$country->state_id)->get())->with('holidaypackages', HolidayPackage::all())->with('listlayouts',ListLayout::all())->with('contentlayouts',ContentLayout::all());
    }

    public function update(Request $req, $id) {
        $country = HolidayPackageSeo::findOrFail($id);

        $rules = array(
            'holidaypackage_id' => ['required','regex:/^[0-9]*$/'],
            'state_id' => ['required','regex:/^[0-9]*$/'],
            'city_id' => ['required','regex:/^[0-9]*$/'],
            'url' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
            'list' => ['required','array','min:1'],
            'list.*' => ['required','regex:/^[0-9]*$/'],
            'content' => ['required','array','min:1'],
            'content.*' => ['required','regex:/^[0-9]*$/'],
        );
        $messages = array(
            'holidaypackage_id.required' => 'Please enter the holiday package !',
            'holidaypackage_id.regex' => 'Please enter the valid holiday package !',
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

        $country->holidaypackage_id = $req->holidaypackage_id;
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

        $deleteHolidayPackageSeoListLayout = HolidayPackageSeoListLayout::where('holidaypackageseo_id',$country->id)->delete();

        for($i=0; $i < count($req->list); $i++) { 
            $city = new HolidayPackageSeoListLayout;
            $city->holidaypackageseo_id = $country->id;
            $city->listlayout_id = $req->list[$i];
            $city->save();
        }

        $deleteHolidayPackageSeoContentLayout = HolidayPackageSeoContentLayout::where('holidaypackageseo_id',$country->id)->delete();
        
        for($i=0; $i < count($req->content); $i++) { 
            $city = new HolidayPackageSeoContentLayout;
            $city->holidaypackageseo_id = $country->id;
            $city->contentlayout_id = $req->content[$i];
            $city->save();
        }
        
        if($result){
            return response()->json(["url"=>empty($req->refreshUrl)?route('holidaypackageseo_view'):$req->refreshUrl, "message" => "Data Updated successfully.", "data" => $country], 201);
        }else{
            return response()->json(["error"=>"something went wrong. Please try again"], 400);
        }
    }

    public function delete($id){
        $country = HolidayPackageSeo::findOrFail($id);
        $country->delete();
        return redirect()->intended(route('holidaypackageseo_view'))->with('success_status', 'Data Deleted successfully.');
    }

    public function view(Request $request) {
        if ($request->has('search')) {
            $search = $request->input('search');
            $country = HolidayPackageSeo::with(['State','City','HolidayPackage'])->where('url', 'like', '%' . $search . '%')->orWhereHas('State', function($q)  use ($search){
                $q->where('name', 'like', '%' . $search . '%')
                      ->orWhere('description', 'like', '%' . $search . '%');
            })->orWhereHas('City', function($q)  use ($search){
                $q->where('name', 'like', '%' . $search . '%')
                      ->orWhere('description', 'like', '%' . $search . '%');
            })->orWhereHas('HolidayPackage', function($q)  use ($search){
                $q->where('name', 'like', '%' . $search . '%');
            })->paginate(10);
        }else{
            $country = HolidayPackageSeo::orderBy('id', 'DESC')->paginate(10);
        }
        return view('pages.admin.holidaypackageseo.list')->with('country', $country);
    }

    public function display($id) {
        $country = HolidayPackageSeo::findOrFail($id);
        return view('pages.admin.holidaypackageseo.display')->with('country',$country);
    }

    // banner-image section

    public function create_image($holidaypackageseo_id) {
        $country = HolidayPackageSeo::findOrFail($holidaypackageseo_id);
        return view('pages.admin.holidaypackageseo_image.create')->with('country',$country);
    }

    public function store_image(Request $req, $holidaypackageseo_id) {
        $data = HolidayPackageSeo::findOrFail($holidaypackageseo_id);
        $validator = $req->validate([
            'image' => ['required','image','mimes:jpeg,png,jpg,webp'],
            'alt' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
        ],
        [
            'image.image' => 'Please enter a valid image !',
            'image.mimes' => 'Please enter a valid image !',
            'alt.regex' => 'Please enter the valid alt !',
        ]);

        $country = new HolidayPackageSeoImage;
        $country->alt = $req->alt;
        $country->holidaypackageseo_id = $holidaypackageseo_id;
        if($req->hasFile('image')){
            $newImage = time().'-'.$req->image->getClientOriginalName();
            $img = Image::make($req->file('image')->getRealPath());
            $img->resize(300, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('holidaypackageseo').'/'.'compressed-'.$newImage);
            $req->image->move(public_path('holidaypackageseo'), $newImage);
            $country->image = $newImage;
        }
        $result = $country->save();
        if($result){
            return redirect()->intended(route('holidaypackageseo_image_view', $holidaypackageseo_id))->with('success_status', 'Data Stored successfully.');
        }else{
            return redirect()->intended(route('holidaypackageseo_image_create', $holidaypackageseo_id))->with('error_status', 'Something went wrong. Please try again');
        }
    }

    public function edit_image($holidaypackageseo_id, $id) {
        $data = HolidayPackageSeo::findOrFail($holidaypackageseo_id);
        $country = HolidayPackageSeoImage::where('id', $id)->where('holidaypackageseo_id', $holidaypackageseo_id)->firstOrFail();
        return view('pages.admin.holidaypackageseo_image.edit')->with('country',$country);
    }

    public function update_image(Request $req, $holidaypackageseo_id, $id) {
        $data = HolidayPackageSeo::findOrFail($holidaypackageseo_id);
        $country = HolidayPackageSeoImage::where('id', $id)->where('holidaypackageseo_id', $holidaypackageseo_id)->firstOrFail();
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
                unlink(public_path('holidaypackageseo/'.$country->image)); 
                unlink(public_path('holidaypackageseo/compressed-'.$country->image)); 
            }
            $newImage = time().'-'.$req->image->getClientOriginalName();
            $img = Image::make($req->file('image')->getRealPath());
            $img->resize(300, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('holidaypackageseo').'/'.'compressed-'.$newImage);
            $req->image->move(public_path('holidaypackageseo'), $newImage);
            $country->image = $newImage;
        }
        $result = $country->save();
        if($result){
            return redirect()->intended(route('holidaypackageseo_image_edit', [$holidaypackageseo_id, $country->id]))->with('success_status', 'Data Updated successfully.');
        }else{
            return redirect()->intended(route('holidaypackageseo_image_edit', [$holidaypackageseo_id, $country->id]))->with('error_status', 'Something went wrong. Please try again');
        }
    }

    public function delete_image($holidaypackageseo_id, $id){
        $data = HolidayPackageSeo::findOrFail($holidaypackageseo_id);
        $country = HolidayPackageSeoImage::where('id', $id)->where('holidaypackageseo_id', $holidaypackageseo_id)->firstOrFail();
        if($country->image!=null){
            unlink(public_path('holidaypackageseo/'.$country->image)); 
            unlink(public_path('holidaypackageseo/compressed-'.$country->image)); 
        }
        $country->delete();
        return redirect()->intended(route('holidaypackageseo_image_view', $holidaypackageseo_id))->with('success_status', 'Data Deleted successfully.');
    }

    public function view_image(Request $request, $holidaypackageseo_id) {
        $data = HolidayPackageSeo::findOrFail($holidaypackageseo_id);
        if ($request->has('search')) {
            $search = $request->input('search');
            $country = HolidayPackageSeoImage::where(function ($query) use ($search) {
                $query->where('alt', 'like', '%' . $search . '%');
            })->paginate(10);
        }else{
            $country = HolidayPackageSeoImage::orderBy('id', 'DESC')->paginate(10);
        }
        return view('pages.admin.holidaypackageseo_image.list')->with('country', $country)->with('holidaypackageseo_id', $holidaypackageseo_id);
    }

    public function display_image($holidaypackageseo_id, $id) {
        $data = HolidayPackageSeo::findOrFail($holidaypackageseo_id);
        $country = HolidayPackageSeoImage::where('id', $id)->where('holidaypackageseo_id', $holidaypackageseo_id)->firstOrFail();
        return view('pages.admin.holidaypackageseo_image.display')->with('country',$country)->with('holidaypackageseo_id', $holidaypackageseo_id);
    }

}
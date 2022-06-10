<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\Common;
use Illuminate\Support\Facades\Validator;

class CommonController extends Controller
{

    public function terms_condition_edit() {
        $country = Common::findOrFail(1);
        return view('pages.admin.common.edit')->with('country',$country)->with('page','Terms & Condition');
    }

    public function terms_condition_update(Request $req) {
        $country = Common::findOrFail(1);
        $validator = $req->validate([
            'description_unformatted' => ['required'],
        ],
        [
            'description_unformatted.required' => 'Please enter the terms & condition !'
        ]);

        $country->description_formatted = $req->description_formatted;
        $country->description_unformatted = $req->description_unformatted;
        $result = $country->save();
        if($result){
            return redirect()->intended(route('local_ride_terms_condition_edit'))->with('success_status', 'Data Updated successfully.');
        }else{
            return redirect()->intended(route('local_ride_terms_condition_edit'))->with('error_status', 'Something went wrong. Please try again');
        }
    }

    public function include_exclude_edit() {
        $country = Common::findOrFail(2);
        return view('pages.admin.common.edit')->with('country',$country)->with('page','Include/Exclude');
    }

    public function include_exclude_update(Request $req) {
        $country = Common::findOrFail(2);
        $validator = $req->validate([
            'description_unformatted' => ['required'],
        ],
        [
            'description_unformatted.required' => 'Please enter the include/exclude !'
        ]);

        $country->description_formatted = $req->description_formatted;
        $country->description_unformatted = $req->description_unformatted;
        $result = $country->save();
        if($result){
            return redirect()->intended(route('local_ride_include_exclude_edit'))->with('success_status', 'Data Updated successfully.');
        }else{
            return redirect()->intended(route('local_ride_include_exclude_edit'))->with('error_status', 'Something went wrong. Please try again');
        }
    }

    public function description_edit() {
        $country = Common::findOrFail(3);
        return view('pages.admin.common.edit')->with('country',$country)->with('page','Description');
    }

    public function description_update(Request $req) {
        $country = Common::findOrFail(3);
        $validator = $req->validate([
            'description_unformatted' => ['required'],
        ],
        [
            'description_unformatted.required' => 'Please enter the description !'
        ]);

        $country->description_formatted = $req->description_formatted;
        $country->description_unformatted = $req->description_unformatted;
        $result = $country->save();
        if($result){
            return redirect()->intended(route('local_ride_description_edit'))->with('success_status', 'Data Updated successfully.');
        }else{
            return redirect()->intended(route('local_ride_description_edit'))->with('error_status', 'Something went wrong. Please try again');
        }
    }

    public function note_edit() {
        $country = Common::findOrFail(4);
        return view('pages.admin.common.edit')->with('country',$country)->with('page','Notes');
    }

    public function note_update(Request $req) {
        $country = Common::findOrFail(4);
        $validator = $req->validate([
            'description_unformatted' => ['required'],
        ],
        [
            'description_unformatted.required' => 'Please enter the description !'
        ]);

        $country->description_formatted = $req->description_formatted;
        $country->description_unformatted = $req->description_unformatted;
        $result = $country->save();
        if($result){
            return redirect()->intended(route('local_ride_note_edit'))->with('success_status', 'Data Updated successfully.');
        }else{
            return redirect()->intended(route('local_ride_note_edit'))->with('error_status', 'Something went wrong. Please try again');
        }
    }



}
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\HolidayPackage;
use App\Models\Common;

class HolidayPackageMainController extends Controller
{

    public function index() {
  
        return view('pages.main.holiday_package_list')->with('title','Holiday Packages');
    }

    public function detail($url) {
        $country = HolidayPackage::where('url', $url)->firstOrFail();
        $include_exclude = Common::findOrFail(5);
        $policy = Common::findOrFail(6);
        return view('pages.main.holiday_package_detail')->with('title',$country->name)->with('country',$country)->with('policy',$policy)->with('include_exclude',$include_exclude);
    }



}
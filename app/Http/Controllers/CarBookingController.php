<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

class CarBookingController extends Controller
{

    public function index() {
  
        return view('pages.main.car_booking')->with('title','Best Offers Car');
    }

    public function detail() {
  
        return view('pages.main.car_detail')->with('title','Dakota Avant');
    }

    public function checkout() {
  
        return view('pages.main.car_checkout')->with('title','Checkout');
    }

    public function complete() {
  
        return view('pages.main.car_complete')->with('title','Order Done');
    }



}
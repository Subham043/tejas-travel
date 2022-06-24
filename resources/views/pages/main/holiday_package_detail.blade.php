@extends('layouts.main.index')

@section('css')
<style>
    .owl-nav{
        display: none !important;
    }
    .content_box ul, .tabs_content_desc ul{
        list-style: auto !important;
        padding-left: 40px;
        margin-top: 0px;
    }
    .content_box ul li, .tabs_content_desc ul li{
        padding-left: 10px !important;
    }
    .x_car_detail_slider_bottom_cont_left {
        width: 70%;
    }
    .x_car_detail_slider_bottom_cont_right {
        width: 30%;
    }
    #accordion .card{
        margin-bottom: 10px !important;
    }
    #accordion .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(48,151,254,.2);
        border-bottom: 1px solid rgba(48,151,254,.125);
    }
    #accordion .btn-link.focus, #accordion .btn-link:focus {
        text-decoration: none;
        border-color: transparent;
        box-shadow: none;
    }
</style>
@stop

@section('content')

@include('includes.main.breadcrumb')


<!-- x car book sidebar section Wrapper Start -->
<div class="x_car_book_sider_main_Wrapper float_left mt5">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="x_car_book_left_siderbar_wrapper float_left">
                    <div class="row">
                        <form action="">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="x_slider_form_main_wrapper float_left x_slider_form_main_wrapper_ccb">
                                    <div class="x_slider_form_heading_wrapper x_slider_form_heading_wrapper_carbooking float_left">
                                        <h3>Let’s find your perfect car</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mt5">
                                            <input type="radio" id="local" name="type" value="Local">
                                            <label for="local" class="mr5">Local</label><br>
                                            <input type="radio" id="outstation" name="type" value="Outstation">
                                            <label for="outstation" class="mr5">Outstation</label><br>
                                            <input type="radio" id="airport" name="type" value="Airport">
                                            <label for="airport">Airport</label>
                                            
                                        </div>
                                        <div class="col-md-12">
                                            <div class="x_slider_form_input_wrapper float_left">
                                                <h3>Pick-up Location</h3>
                                                <input type="text" placeholder="City, Airport, Station, etc.">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="x_slider_form_input_wrapper float_left">
                                                <h3>Drop-off Location</h3>
                                                <input type="text" placeholder="City, Airport, Station, etc.">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-sec-header">
                                                <h3>Pick-up Date</h3>
                                                <label class="cal-icon">Pick-up Date
                                                    <input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="x_slider_select">
                                                <select class="myselect">
                                                    <option>09</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                </select>	<i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="x_slider_select x_slider_select2">
                                                <select class="myselect">
                                                    <option>50</option>
                                                    <option>40</option>
                                                    <option>03</option>
                                                    <option>02</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-sec-header">
                                                <h3>Drop-Off Date</h3>
                                                <label class="cal-icon">Pick-up Date
                                                    <input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="x_slider_select">
                                                <select class="myselect">
                                                    <option>09</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                </select>	<i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="x_slider_select x_slider_select2">
                                                <select class="myselect">
                                                    <option>50</option>
                                                    <option>40</option>
                                                    <option>03</option>
                                                    <option>02</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="x_slider_checkbox float_left">
                                                <input type="checkbox" id="c2" name="cb">
                                                <label for="c2">Driver age is between 30-65 &nbsp;<i class="fa fa-question-circle"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="x_slider_checout_right x_slider_checout_right_carbooking">
                                                <ul>
                                                    <li><a href="#">search <i class="fa fa-arrow-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_car_detail_main_wrapper float_left">
                            <div class="lr_bc_slider_first_wrapper">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="lr_bc_slider_img_wrapper">
                                            {{-- <img src="{{ asset('assets/images/bc2.jpg')}}" alt="fresh_food_img"> --}}
                                            <img src="{{url('holidaypackage/'.$country->image)}}" alt="fresh_food_img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="x_car_detail_slider_bottom_cont float_left">
                                <div class="x_car_detail_slider_bottom_cont_left">
                                    <h3>{{$country->name}}</h3>
                                    {{-- <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i> --}}
                                    <span>{{$country->night}} {{$country->night>1 ? 'Nights' : 'Night'}} &nbsp;&nbsp;{{$country->day}} {{$country->day>1 ? 'Days' : 'Day'}}</span>
                                </div>
                                <div class="x_car_detail_slider_bottom_cont_right">
                                    <h3>&#8377;{{$country->price}}</h3>
                                    {{-- <p><span>from</span> 
                                        <br>/ day</p> --}}
                                </div>
                                <div class="x_car_detail_slider_bottom_cont_center float_left content_box" style="font-family: system-ui;">
                                    {!!$country->about!!}
                                </div>
                                <div class="x_car_offer_heading x_car_offer_heading_listing float_left x_car_offer_heading_inner_car_names x_car_offer_heading_inner_car_names2">
                                                            <ul class="">
                                                                <li>	<a href="#"><i class="fa fa-users"></i> &nbsp;4 Seats</a>
                                                                </li>
                                                                <li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;4 Doors</a>
                                                                </li>
                                                                <li>	<a href="#"><i class="fa fa-shield"></i> &nbsp;9 Manual</a>
                                                                </li>
                                                            
                                                                <li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;4 Bag Space</a>
                                                                </li>
                                                                <li>	<a href="#"><i class="fa fa-snowflake-o"></i>&nbsp;2 Air: Yes</a>
                                                                </li>
                                                                <li>
                                                                    <div class="nice-select" tabindex="0">	<span class="current"><i class="fa fa-bars"></i> Others (2)</span>
                                                                        <ul class="list">
                                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                                                            </li>
                                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Transmission</a>
                                                                            </li>
                                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                <div class="x_avanticar_btn float_left">
                                    <ul>
                                        <li><a href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="x_css_tabs_wrapper float_left">
                                <div class="x_css_tabs_main_wrapper float_left" style="padding-top: 0 !important">
                                    <ul class="nav nav-tabs">
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#home"> User ReView
                                        </a>
                                    </li> --}}
                                    <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#menu1">Description</a>
                                    <li class="nav-item " style="margin-left: 10px;"> <a class="nav-link" data-toggle="tab" href="#menu2">Includes/Excludes</a>
                                    <li class="nav-item "> <a class="nav-link" data-toggle="tab" href="#menu3">Policy</a>
                                    </li>
                                </ul>
                                </div>
                                <div class="tab-content">
                                    
                                    <div id="menu1" class="tab-pane active">
                                        <div class="x_car_detail_descrip">
                                            @if($country->holidaypackagetourplan->count()>0)
                                            <div id="accordion">
                                                @foreach ($country->holidaypackagetourplan as $index => $holidaypackagetourplan)
                                                <div class="card">
                                                    <div class="card-header" id="heading{{$index}}">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$index}}" aria-expanded="true" aria-controls="collapse{{$index}}">
                                                            {{$holidaypackagetourplan->day_name}} - {{$holidaypackagetourplan->title}}
                                                        </button>
                                                    </h5>
                                                    </div>
                                                
                                                    <div id="collapse{{$index}}" class="collapse {{$index==0 ? 'show':''}} " aria-labelledby="heading{{$index}}" data-parent="#accordion">
                                                    <div class="card-body">
                                                        {!!$holidaypackagetourplan->description!!}
                                                    </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            @endif 
                                        </div>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <div class="x_car_detail_descrip tabs_content_desc">
                                            @if($country->default_include_exclude==2)
                                            {!!$country->include_exclude!!}
                                            @elseif($country->default_include_exclude==1)
                                            {!!$include_exclude->description_formatted!!}
                                            @endif
                                        </div>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                        <div class="x_car_detail_descrip tabs_content_desc">
                                            @if($country->default_policy==2)
                                            {!!$country->policy!!}
                                            @elseif($country->default_policy==1)
                                            {!!$policy->description_formatted!!}
                                            @endif
                                        </div>
                                    </div>
                                </div>	
                            </div>
                            
                        </div>
                    </div>
                    {{-- <div class="col-md-12 mt5">
                        <div class="x_ln_car_heading_wrapper x_ln_car_heading_wrappercsss float_left">
                            <h3>Latest cars</h3>
                        </div>
                        <div class="btc_ln_slider_wrapper btc_ln_slider_wrapper_cs">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="x_car_offer_main_boxes_wrapper float_left margintop_zero">
                                        <div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="x_car_offer_img float_left">
                                            <img src="{{ asset('assets/images/c1.png')}}" alt="img">
                                        </div>
                                        <div class="x_car_offer_price float_left">
                                            <div class="x_car_offer_price_inner">
                                                <h3>$25</h3>
                                                <p><span>from</span> 
                                                    <br>/ day</p>
                                            </div>
                                        </div>
                                        <div class="x_car_offer_heading float_left">
                                            <h2><a href="#">Dakota zaris</a></h2>
                                            <p>Extra Small</p>
                                        </div>
                                        <div class="x_car_offer_heading x_car_offer_heading_avanti float_left">
                                            <ul>
                                                <li>	<a href="#"><i class="fa fa-users"></i> &nbsp;4</a>
                                                </li>
                                                <li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;2</a>
                                                </li>
                                                <li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;9</a>
                                                </li>
                                                <li>
                                                    <div class="nice-select" tabindex="0">	<span class="current"><i class="fa fa-bars"></i></span>
                                                        <ul class="list">
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Transmission</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="x_car_offer_bottom_btn float_left">
                                            <ul>
                                                <li><a href="#">Book now</a>
                                                </li>
                                                <li><a href="car-details.php">Details</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="x_car_offer_main_boxes_wrapper float_left margintop_zero">
                                        <div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="x_car_offer_img float_left">
                                            <img src="{{ asset('assets/images/c1.png')}}" alt="img">
                                        </div>
                                        <div class="x_car_offer_price float_left">
                                            <div class="x_car_offer_price_inner">
                                                <h3>$25</h3>
                                                <p><span>from</span> 
                                                    <br>/ day</p>
                                            </div>
                                        </div>
                                        <div class="x_car_offer_heading float_left">
                                            <h2><a href="#">Dakota zaris</a></h2>
                                            <p>Extra Small</p>
                                        </div>
                                        <div class="x_car_offer_heading x_car_offer_heading_avanti float_left">
                                            <ul>
                                                <li>	<a href="#"><i class="fa fa-users"></i> &nbsp;4</a>
                                                </li>
                                                <li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;2</a>
                                                </li>
                                                <li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;9</a>
                                                </li>
                                                <li>
                                                    <div class="nice-select" tabindex="0">	<span class="current"><i class="fa fa-bars"></i></span>
                                                        <ul class="list">
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Transmission</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="x_car_offer_bottom_btn float_left">
                                            <ul>
                                                <li><a href="#">Book now</a>
                                                </li>
                                                <li><a href="car-details.php">Details</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="x_car_offer_main_boxes_wrapper float_left margintop_zero">
                                        <div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="x_car_offer_img float_left">
                                            <img src="{{ asset('assets/images/c1.png')}}" alt="img">
                                        </div>
                                        <div class="x_car_offer_price float_left">
                                            <div class="x_car_offer_price_inner">
                                                <h3>$25</h3>
                                                <p><span>from</span> 
                                                    <br>/ day</p>
                                            </div>
                                        </div>
                                        <div class="x_car_offer_heading float_left">
                                            <h2><a href="#">Dakota zaris</a></h2>
                                            <p>Extra Small</p>
                                        </div>
                                        <div class="x_car_offer_heading x_car_offer_heading_avanti float_left">
                                            <ul>
                                                <li>	<a href="#"><i class="fa fa-users"></i> &nbsp;4</a>
                                                </li>
                                                <li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;2</a>
                                                </li>
                                                <li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;9</a>
                                                </li>
                                                <li>
                                                    <div class="nice-select" tabindex="0">	<span class="current"><i class="fa fa-bars"></i></span>
                                                        <ul class="list">
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Transmission</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="x_car_offer_bottom_btn float_left">
                                            <ul>
                                                <li><a href="#">Book now</a>
                                                </li>
                                                <li><a href="car-details.php">Details</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- x car book sidebar section Wrapper End -->

@include('includes.main.newsletter')

@stop
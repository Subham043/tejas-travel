@extends('layouts.main.index')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flatpickr.css') }}" />
<style>
	.x_slider_form_main_wrapper {
		max-width: 400px;
		padding-left: 5px;
    	padding-right: 5px;
		width: 400px;
		background: url({{ asset('assets/images/Image-81.jpg') }}) #f2f2f2;
		background-size: contain;
		background-position: bottom;
		background-repeat: no-repeat;
	}

	.jurney-type{
		background: #fff;
		border: 2px solid #ccc;
	}

	.align-item-center {
		align-items: center;
	}

	.content_tabs{
		display: flex !important;
    	justify-content: flex-end;
	}

	.d-grid{
		display: grid;
	}
	.p-x-50{
		padding-left: 50px;
		padding-right: 50px;
	}

	.border-box{
		box-sizing: border-box;
	}

	.home-content-tex-div{
		box-sizing: border-box;
		height: 100%;
		flex-direction: column;
		justify-content: space-between;
	}

	.m0{
		margin: 0 !important;
	}

	.slider-area .carousel-inner .carousel-item .caption-1{
		background-size: 100% 100%;
	}

	.max-w-500{
		max-width: 500px;
	}

	.radio-selection-container, .car-selection-container, .car-button-container, .selected-car-container{
		width: 100%;
	}

	.selection-radio-box{
		padding: 10px 10px;
		text-align: center;
		border: 2px solid #ccc;
		background: #fff;
		border-radius: 5px;
		display: flex;
		align-items: center;
		justify-content: center;
		transition: all 0.3s ease-in-out;
	}

	.selection-radio-box:hover{
		background: #3097fe;
		border: 2px solid #3097fe;
		cursor: pointer;
	}

	.selection-radio-box:hover > *{
		color: white;
	}

	.selection-radio-box label{
		margin-bottom: 0;
		margin-left: 5px;
		font-size: 18px;
		letter-spacing: 1px;
		cursor: pointer;
		transition: all 0.3s ease-in-out;
	}

	.selection-radio-box input[type="radio"]{
		cursor:pointer;
	}

	.selection-radio-box input[type="radio"]:checked {
		accent-color: #fff;
	}

	.selection-radio-box input[type="radio"]:checked + .selection-radio-box::before {
		background: #3097fe !important;
	}

	.car-selection-box{
		width: 92%;
		text-align: center;
		border: 2px solid #ccc;
		background: #fff;
		border-radius: 5px;
		margin-bottom: 20px;
		margin-left: auto;
		margin-right: auto;
		cursor: pointer;
		transition: all 0.3s ease-in-out;
	}

	.car-selection-box:hover > .car-text-box{
		background: #3097fe;
		color: #fff;
		border-top: 0.5px solid #3097fe;
	}

	.car-selection-box:hover > .car-text-box::before{
		background: #fff;
	}
	.car-selection-box:hover > .car-text-box h4{
		color: #fff;
	}

	.car-selection-box .car-image-box,.car-selection-box .car-text-box{
		width: 100%;
		padding: 10px 5px;
	}

	.car-selection-box .car-text-box{
		border-top: 0.5px solid #ccc;
		position: relative;
		transition: all 0.3s ease-in-out;
	}

	.car-selection-box .car-text-box::before{
		width: 20%;
		height: 7px;
		background: #3097fe;
		content: "";
		position: absolute;
		top: 0;
		display: inline;
		left: 40%;
		transition: all 0.3s ease-in-out;
	}

	.car-selection-box .car-image-box img{
		object-fit: contain;
		max-width: 100%;
	}

	.car-selection-box .car-text-box h4{
		font-size: 0.9rem;
		font-weight: 600;
		margin-bottom: 7px;
		margin-top: 7px;
		transition: all 0.3s ease-in-out;
		text-transform: capitalize;
	}

	.car-selection-box .car-text-box p{
		font-size: 0.7rem;
    	line-height: 1.4;
	}

	.car-button-container{text-align: center}

	.car-button-container button{
		background: #3097fe;
		padding: 10px 20px;
		text-transform: capitalize;
		color: #fff;
		letter-spacing: 1px;
		cursor: pointer;
		outline: none;
		border: 1px solid #3097fe;
		border-radius: 5px
	}

	.selected-car-container{
		width: 100%;
		background: #fff;
		border: 1px solid #3097fe;
		border-radius: 5px;
	}

	.selected-car-row{
		align-items: center;
		width: 100%;
		margin: 0;
	}

	.selected-car-col{
		padding: 5px 10px;
	}

	.selected-car-col h4{
		font-size: 0.9rem;
		font-weight: 600;
		margin-bottom: 7px;
		margin-top: 7px;
		transition: all 0.3s ease-in-out;
		text-transform: capitalize;
	}

	.selected-car-col p{
		font-size: 0.7rem;
    	line-height: 1.4;
		height: 2em;
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
		width: 100%;
	}

	.selected-car-col img{
		object-fit: contain;
		max-width: 100%;
	}

	.selected-car-col button{
		background: #3097fe;
		padding: 5px 10px;
		text-transform: uppercase;
		color: #fff;
		letter-spacing: 1px;
		cursor: pointer;
		outline: none;
		border: 1px solid #3097fe;
		border-radius: 5px;
		width: 100%;
	}
	
	.pickup-input-container{
		width: 100%;
	}

	.pickup-input-container h4{
		font-size: 1.3rem;
		text-transform: uppercase;
		font-weight: 700;
	}

	.pickup-input-container .pickup-input-row{
		width: 100%;
		margin: 0;
	}

	.icon-col{
		background: #3097fe;
		padding: 5px 10px;
		color: #fff;
		border-top-left-radius: 5px;
    	border-bottom-left-radius: 5px;
		display: grid;
		place-content: center;
		font-size: 2rem;
	}

	.input-col{
		background: #fff;
		padding: 5px 10px;
		border-top-right-radius: 5px;
    	border-bottom-right-radius: 5px;
	}

	.input-container{
		width: 100%;
		margin-top: 15px;
	}

	.input-col label{
		display: block;
		font-weight: 700;
		margin: 0;
	}

	.input-col .input-text{
		border: none;
		outline: none;
		width: 100%;
	}

	.input-col .input-text::placeholder{
		color: black;
		font-weight: 800;
		letter-spacing: 1px;
	}

	.package-container h4{
		font-size: 1.3rem;
		text-transform: uppercase;
		font-weight: 700;
	}

	.package-container .package-col{
		margin-bottom: 15px;
	}

	.package-container .selection-radio-box{
		align-items: center;
	}

	.package-container .selection-radio-box label{
		text-align: left;
		font-size: 16px;
		margin-left: 15px;
		line-height: 1;
	}

	.button-col{
		background: #fff;
		padding: 5px 10px;
		border-top-right-radius: 5px;
    	border-bottom-right-radius: 5px;
		color: #3097fe;
		display: grid;
		place-content: center;
	}

	.button-col button{
		color: #3097fe;
		border: none;
		outline: none;
		background: white;
		transition: 0.3s all ease-in-out;
	}

	.button-col button:hover{
		transform: scale(1.2);
		cursor: pointer;
	}

	#duplicateDestinationContainer{
		max-height: 150px;
		overflow: hidden;
		overflow-y: auto;
	}

</style>
@stop

@section('content')

	<!-- hs Slider Start -->
	<div class="slider-area float_left">
		<div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-captions caption-1 d-grid" style="min-height:auto;">
						<div class="container-fluid p-x-50">
							<div class="row border-box">
								<div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12 border-box">
									<div class="home-content pt5 d-flex pb2 border-box home-content-tex-div">
										<div>
											<h5 class=" mb2 text-yellow">Get 10% OFF on First Booking</h5>
											<h2 data-animation="animated fadeInLeft" class="max-w-500">FAST AND EASY WAY TO RENT A VEHICLE</h2>
										</div>
										<div>
											<p data-animation="animated bounceInUp" class="text-justify m0" >We have an online booking facility for Car Rental, Bus Rental, Minibus (Mini Coach) Rental, Tempo Travelers(TT) Rental, SUVs and MUVs for hire. Excellent tour packages from Bangalore/Mysore to all over India. It is a long established fact that a reader will be distracted by the readable content.</p>
											{{-- <h4 class="banner-button" data-animation="animated bounceInUp">Choose Your Journey <i class="fa-solid fa-hand-point-right fa-2xl text-theme ml8"></i></h4> --}}
										</div>
										<!-- <div class="hs_effect_btn">
											<ul>
												<li data-animation="animated flipInX"><a href="#">about us<i class="fa fa-arrow-right"></i></a>
												</li>
												<li data-animation="animated flipInX"><a href="#">Select Your Journey<i class="fa fa-arrow-right"></i></a>
												</li>
											</ul>
										</div> -->
										{{-- <div class="clear"></div> --}}
									</div>
								</div>
								<div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12 d-none d-sm-none d-md-none  d-lg-block d-xl-block border-box">
									<div class="content_tabs pt5 pb5">
										<div class="row">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn">
													<div class="x_slider_form_heading_wrapper float_left">
														<h3 id="screenTitle">Select Your Journey Type</h3>
													</div>
													<div class="col-md-12 mt5" id="journeyType">
														
														<div class="row">
															<div class="col-md-12">
																<div class="jurney-type" onclick="changeToVehicleTypeScreen(1)">
																	<a href="javascript:void(0)">
																		<div class="row p2">
																			<div class="col-md-6 d-flex align-item-center">
																				<img src="{{ asset('assets/images/home/img1.png') }}" alt="" width="100%">
																			</div>
																			<div class="col-md-6 jurney-content">
																				<h4>Outstation</h4>
																				<p>It is a long established fact that a reader will be distracted by the readable content.</p>
																			</div>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-md-12 mt2">
																<div class="jurney-type" onclick="changeToVehicleTypeScreen(2)">
																		<a href="javascript:void(0)">
																			<div class="row p2">
																				<div class="col-md-6 d-flex align-item-center">
																					<img src="{{ asset('assets/images/home/img2.png') }}" alt="" width="100%">
																				</div>
																				<div class="col-md-6 jurney-content">
																					<h4>Local Ride</h4>
																					<p>It is a long established fact that a reader will be distracted by the readable content.</p>
																				</div>
																			</div>
																		</a>
																	</div>
															</div>
														</div>
														<div class="row mt2">
															<div class="col-md-12">
																<div class="jurney-type" onclick="changeToVehicleTypeScreen(3)">
																	<a href="javascript:void(0)">
																		<div class="row p2">
																			<div class="col-md-6 d-flex align-item-center">
																				<img src="{{ asset('assets/images/home/img3.png') }}" alt="" width="100%">
																			</div>
																			<div class="col-md-6 jurney-content">
																				<h4>Multi-Location</h4>
																				<p>It is a long established fact that a reader will be distracted by the readable content.</p>
																			</div>
																		</div>
																	</a>
																</div>
															</div>
															<div class="col-md-12 mt2">
																<div class="jurney-type" onclick="changeToVehicleTypeScreen(4)">
																		<a href="javascript:void(0)">
																			<div class="row p2">
																				<div class="col-md-6 d-flex align-item-center">
																					<img src="{{ asset('assets/images/home/img4.png') }}" alt="" width="100%">
																				</div>
																				<div class="col-md-6 jurney-content">
																					<h4>Airport</h4>
																					<p>It is a long established fact that a reader will be distracted by the readable content.</p>
																				</div>
																			</div>
																		</a>
																	</div>
															</div>
														</div>
														
														
														

													
													<!-- <div class="row">
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
														<div class="col-md-6">
															<div class="form-sec-header">
																<h3>Pick-up Date</h3>
																<label class="cal-icon">Pick-up Date
																	<input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker">
																</label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-sec-header">
																<h3>Drop-Off Date</h3>
																<label class="cal-icon">Pick-up Date
																	<input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker">
																</label>
															</div>
														</div>
														<div class="col-md-6">
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
														<div class="col-md-6">
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
																<input type="checkbox" id="c1" name="cb">
																<label for="c1">Driver age is between 30-65 &nbsp;<i class="fa fa-question-circle"></i>
																</label>
															</div>
														</div>
														<div class="col-md-12">
															<div class="x_slider_checkbox_bottom float_left">
																<div class="x_slider_checout_left">
																	<ul>
																		<li><i class="fa fa-check-circle"></i>&nbsp;&nbsp;24/7 Phone Support</li>
																		<li><i class="fa fa-check-circle"></i>&nbsp;&nbsp;No Credit Card Fees</li>
																		<li><i class="fa fa-check-circle"></i>&nbsp;&nbsp;No Amendment Fees</li>
																	</ul>
																</div>
																<div class="x_slider_checout_right">
																	<ul>
																		<li><a href="#">search <i class="fa fa-arrow-right"></i></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div> -->
													</div>
													<div class="col-md-12 mt5" id="vehicleTypeScreen" style="display: none">
														
														<div class="car-selection-container mt5"  id="vehicle_type">
															<div class="row">
																<div class="col-md-6">
																	<div class="car-selection-box">
																		<div class="car-image-box">
																			<img src="{{ asset('assets/images/Toyota-Corolla.png') }}" alt="">
																		</div>
																		<div class="car-text-box">
																			<h4>CAB</h4>
																			<p>Sedan SUV or Hatchback For uptown 7 people</p>
																		</div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="car-selection-box">
																		<div class="car-image-box">
																			<img src="{{ asset('assets/images/Image-86.jpg') }}" alt="">
																		</div>
																		<div class="car-text-box">
																			<h4>TEMPO TRAVELLER</h4>
																			<p>Sedan SUV or Hatchback For uptown 7 people</p>
																		</div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="car-selection-box">
																		<div class="car-image-box">
																			<img src="{{ asset('assets/images/Image-87.jpg') }}" alt="">
																		</div>
																		<div class="car-text-box">
																			<h4>MINI BUS</h4>
																			<p>Sedan SUV or Hatchback For uptown 7 people</p>
																		</div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="car-selection-box">
																		<div class="car-image-box">
																			<img src="{{ asset('assets/images/Image-89.jpg') }}" alt="">
																		</div>
																		<div class="car-text-box">
																			<h4>BUS</h4>
																			<p>Sedan SUV or Hatchback For uptown 7 people</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="car-button-container  mt5">
															<button onclick="goToFirstScreen()">PREVIOUS</button>
															<button onclick="changeToDetailEntryScreen()">NEXT</button>
														</div>
													</div>
													<div class="col-md-12 mt5" id="oustation"  style="display: none">
														
														<div class="selected-car-container">
															<div class="row selected-car-row">
																<div class="col-md-4 selected-car-col">
																	<img src="{{ asset('assets/images/Toyota-Corolla.png') }}" alt="" srcset="">
																</div>
																<div class="col-md-4 selected-car-col">
																	<h4>CAB</h4>
																	<p>Sedan SUV or Hatchback For uptown 7 people</p>
																</div>
																<div class="col-md-4 selected-car-col">
																	<button onclick="goBackScreen(1)">Change</button>
																</div>
															</div>
														</div>

														<div class="radio-selection-container mt5">
															<div class="row">
																<div class="col-md-6">
																	<div class="selection-radio-box">
																		<input type="radio" name="vahicletype" id="onewaytrip"> 
																		<label for="onewaytrip">
																			<span>One Way Trip</span>
																		</label>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="selection-radio-box">
																		<input type="radio" name="vahicletype" id="roundtrip"> 
																		<label for="roundtrip">
																			<span>Round Trip</span>
																		</label>
																	</div>
																</div>
															</div>
														</div>

														<div class="pickup-input-container mt5">
															<h4>Pick Up & Destination</h4>
															<div class="input-container">
																<div class="row pickup-input-row">
																	<div class="col-md-2 icon-col">
																		<i class="fa-solid fa-location-arrow"></i>
																	</div>
																	<div class="col-md-10 input-col">
																		<label for="">To</label>
																		<input type="text" name="" id="" class="input-text" placeholder="Enter pickup address">
																	</div>
																</div>
															</div>
															<div class="input-container mt5">
																<div class="row pickup-input-row">
																	<div class="col-md-2 icon-col">
																		<i class="fa-solid fa-location-dot"></i>
																	</div>
																	<div class="col-md-10 input-col">
																		<label for="">Drop</label>
																		<input type="text" name="" id="" class="input-text" placeholder="Enter destination address">
																	</div>
																</div>
															</div>
														</div>
														
														<div class="pickup-input-container mt5">
															<h4>Date & Time</h4>
															<div class="input-container">
																<div class="row pickup-input-row">
																	<div class="col-md-2 icon-col">
																		<i class="fa-solid fa-calendar-days"></i>
																	</div>
																	<div class="col-md-10 input-col">
																		<label for="">To</label>
																		<input type="text" name="" id="" class="input-text" placeholder="1 May, 6:30 PM">
																	</div>
																</div>
															</div>
														</div>
														
														<div class="car-button-container  mt5">
															<button>SEARCH</button>
														</div>
													</div>

													<div class="col-md-12 mt5" id="local_ride" style="display: none">
														<div class="selected-car-container">
															<div class="row selected-car-row">
																<div class="col-md-4 selected-car-col">
																	<img src="{{ asset('assets/images/Toyota-Corolla.png') }}" alt="" srcset="">
																</div>
																<div class="col-md-4 selected-car-col">
																	<h4>CAB</h4>
																	<p>Sedan SUV or Hatchback For uptown 7 people</p>
																</div>
																<div class="col-md-4 selected-car-col">
																	<button onclick="goBackScreen(2)">Change</button>
																</div>
															</div>
														</div>

														<div class="pickup-input-container mt5">
															<h4>Pick Up & Destination</h4>
															<div class="input-container">
																<div class="row pickup-input-row">
																	<div class="col-md-2 icon-col">
																		<i class="fa-solid fa-location-arrow"></i>
																	</div>
																	<div class="col-md-10 input-col">
																		<label for="">To</label>
																		<input type="text" name="" id="" class="input-text" placeholder="Enter pickup address">
																	</div>
																</div>
															</div>
														</div>
														
														<div class="pickup-input-container mt5">
															<h4>Date & Time</h4>
															<div class="input-container">
																<div class="row pickup-input-row">
																	<div class="col-md-2 icon-col">
																		<i class="fa-solid fa-calendar-days"></i>
																	</div>
																	<div class="col-md-10 input-col">
																		<label for="">To</label>
																		<input type="text" name="" id="" class="input-text" placeholder="1 May, 6:30 PM">
																	</div>
																</div>
															</div>
														</div>

														<div class="radio-selection-container package-container mt5">
															<h4>Package</h4>
															<div class="row mt3">
																<div class="col-md-6 package-col">
																	<div class="selection-radio-box">
																		<input type="radio" name="packagetype" id="hr1"> 
																		<label for="hr1">
																			<span>8 hours & 80 kms</span>
																		</label>
																	</div>
																</div>
																<div class="col-md-6 package-col">
																	<div class="selection-radio-box">
																		<input type="radio" name="packagetype" id="hr2"> 
																		<label for="hr2">
																			<span>8 hours & 80 kms</span>
																		</label>
																	</div>
																</div>
																<div class="col-md-6 package-col">
																	<div class="selection-radio-box">
																		<input type="radio" name="packagetype" id="hr3"> 
																		<label for="hr3">
																			<span>8 hours & 80 kms</span>
																		</label>
																	</div>
																</div>
																<div class="col-md-6 package-col">
																	<div class="selection-radio-box">
																		<input type="radio" name="packagetype" id="hr4"> 
																		<label for="hr4">
																			<span>8 hours & 80 kms</span>
																		</label>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="car-button-container  mt5">
															<button>SEARCH</button>
														</div>
													</div>

													<div class="col-md-12 mt5" id="airport_ride" style="display: none">
														<div class="selected-car-container">
															<div class="row selected-car-row">
																<div class="col-md-4 selected-car-col">
																	<img src="{{ asset('assets/images/Toyota-Corolla.png') }}" alt="" srcset="">
																</div>
																<div class="col-md-4 selected-car-col">
																	<h4>CAB</h4>
																	<p>Sedan SUV or Hatchback For uptown 7 people</p>
																</div>
																<div class="col-md-4 selected-car-col">
																	<button onclick="goBackScreen(4)">Change</button>
																</div>
															</div>
														</div>

														<div class="radio-selection-container mt5">
															<div class="row">
																<div class="col-md-6">
																	<div class="selection-radio-box">
																		<input type="radio" name="ridetype" id="pickup"> 
																		<label for="pickup">
																			<span>Pickup</span>
																		</label>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="selection-radio-box">
																		<input type="radio" name="ridetype" id="drop"> 
																		<label for="drop">
																			<span>Drop</span>
																		</label>
																	</div>
																</div>
															</div>
														</div>

														<div class="pickup-input-container mt5">
															<h4>Pick Up & Destination</h4>
															<div class="input-container">
																<div class="row pickup-input-row">
																	<div class="col-md-2 icon-col">
																		<i class="fa-solid fa-location-arrow"></i>
																	</div>
																	<div class="col-md-10 input-col">
																		<label for="">To</label>
																		<input type="text" name="" id="" class="input-text" placeholder="Enter pickup address">
																	</div>
																</div>
															</div>
															<div class="input-container mt5">
																<div class="row pickup-input-row">
																	<div class="col-md-2 icon-col">
																		<i class="fa-solid fa-location-dot"></i>
																	</div>
																	<div class="col-md-10 input-col">
																		<label for="">Drop</label>
																		<input type="text" name="" id="" class="input-text" placeholder="Enter destination address">
																	</div>
																</div>
															</div>
														</div>
														
														<div class="pickup-input-container mt5">
															<h4>Date & Time</h4>
															<div class="input-container">
																<div class="row pickup-input-row">
																	<div class="col-md-2 icon-col">
																		<i class="fa-solid fa-calendar-days"></i>
																	</div>
																	<div class="col-md-10 input-col">
																		<label for="">To</label>
																		<input type="text" name="" id="" class="input-text" placeholder="1 May, 6:30 PM">
																	</div>
																</div>
															</div>
														</div>
														
														<div class="car-button-container  mt5">
															<button>SEARCH</button>
														</div>
													</div>

													<div class="col-md-12 mt5" id="multiple_location" style="display: none">
														<div class="selected-car-container">
															<div class="row selected-car-row">
																<div class="col-md-4 selected-car-col">
																	<img src="{{ asset('assets/images/Toyota-Corolla.png') }}" alt="" srcset="">
																</div>
																<div class="col-md-4 selected-car-col">
																	<h4>CAB</h4>
																	<p>Sedan SUV or Hatchback For uptown 7 people</p>
																</div>
																<div class="col-md-4 selected-car-col">
																	<button onclick="goBackScreen(3)">Change</button>
																</div>
															</div>
														</div>

														<div class="pickup-input-container mt5">
															<h4>Pick Up & Destination</h4>
															<div class="input-container">
																<div class="row pickup-input-row">
																	<div class="col-md-2 icon-col">
																		<i class="fa-solid fa-location-arrow"></i>
																	</div>
																	<div class="col-md-10 input-col">
																		<label for="">To</label>
																		<input type="text" name="" id="" class="input-text" placeholder="Enter pickup address">
																	</div>
																</div>
															</div>
															<div class="input-container mt5">
																<div class="row pickup-input-row">
																	<div class="col-md-2 icon-col">
																		<i class="fa-solid fa-location-dot"></i>
																	</div>
																	<div class="col-md-8 input-col">
																		<label for="">Drop</label>
																		<input type="text" name="" id="" class="input-text" placeholder="Enter destination address">
																	</div>
																	<div class="col-md-2 button-col">
																		<button onclick="duplicate()" title="add multiple location" id="addDestinationBtn">
																			<i class="fa-solid fa-circle-plus"></i>
																		</button>
																	</div>
																</div>
															</div>
															
															<div id="duplicateDestinationContainer">
																<div class="input-container mt5" id="duplicate_destination_0" style="display: none">
																	<div class="row pickup-input-row">
																		<div class="col-md-2 icon-col">
																			<i class="fa-solid fa-location-dot"></i>
																		</div>
																		<div class="col-md-8 input-col">
																			<label for="">Drop</label>
																			<input type="text" name="destination[]" id="" class="input-text" placeholder="Enter destination address">
																		</div>
																		<div class="col-md-2 button-col">
																			<button onclick="remove()" title="remove multiple location">
																				<i class="fa-solid fa-xmark"></i>
																			</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="pickup-input-container mt5">
															<h4>Date & Time</h4>
															<div class="input-container">
																<div class="row pickup-input-row">
																	<div class="col-md-2 icon-col">
																		<i class="fa-solid fa-calendar-days"></i>
																	</div>
																	<div class="col-md-10 input-col">
																		<label for="">To</label>
																		<input type="text" name="" id="datetimepicker_input" class="input-text" placeholder="1 May, 6:30 PM">
																	</div>
																</div>
															</div>
														</div>
														
														<div class="car-button-container  mt5">
															<button>SEARCH</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span class="number"></span>
					</li>
					<li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number"></span>
					</li>
					<li data-target="#carousel-example-generic" data-slide-to="2" class=""><span class="number"></span>
					</li>
				</ol>
				<div class="carousel-nevigation">
					<a class="prev" href="#carousel-example-generic" role="button" data-slide="prev">	<i class="fa fa-angle-left"></i>
					</a>
					<a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right"></i>
					</a>
				</div> -->
			</div>
		</div>
	</div>
	<!-- hs Slider End -->
	<div class="x_responsive_form_wrapper x_responsive_form_wrapper2 float_left d-block d-sm-block d-md-block  d-lg-none d-xl-none">
		<div class="container">
			<div class="x_slider_form_main_wrapper float_left">
				<div class="x_slider_form_heading_wrapper float_left">
					<h3>Let’s find your perfect car</h3>
				</div>
				<div class="row">
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
					<div class="col-md-6">
						<div class="form-sec-header">
							<h3>Pick-up Date</h3>
							<label class="cal-icon">Pick-up Date
								<input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker">
							</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-sec-header">
							<h3>Drop-Off Date</h3>
							<label class="cal-icon">Pick-up Date
								<input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker">
							</label>
						</div>
					</div>
					<div class="col-md-6">
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
					<div class="col-md-6">
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
							<input type="checkbox" id="c5" name="cb">
							<label for="c5">Driver age is between 30-65 &nbsp;<i class="fa fa-question-circle"></i>
							</label>
						</div>
					</div>
					<div class="col-md-12">
						<div class="x_slider_checkbox_bottom float_left">
							<div class="x_slider_checout_left">
								<ul>
									<li><i class="fa fa-check-circle"></i>&nbsp;&nbsp;24/7 Phone Support</li>
									<li><i class="fa fa-check-circle"></i>&nbsp;&nbsp;No Credit Card Fees</li>
									<li><i class="fa fa-check-circle"></i>&nbsp;&nbsp;No Amendment Fees</li>
								</ul>
							</div>
							<div class="x_slider_checout_right">
								<ul>
									<li><a href="#">search <i class="fa fa-arrow-right"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
	
    <!-- xs Slider bottom title Start -->
	<!-- <div class="x_slider_bottom_title_main_wrapper">
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-magnifying-glass"></i>
			<h3><a href="#">24 / 7 CAR SUPPORT</a></h3>
			<p>Proin gravida nibh vel velit auctor
				<br>aliquet. Aenean sollicitudin, lorem
				<br>quis bibendum auctor.</p>
		</div>
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-world"></i>
			<h3><a href="#">LOTS OF LOCATION</a></h3>
			<p>Proin gravida nibh vel velit auctor
				<br>aliquet. Aenean sollicitudin, lorem
				<br>quis bibendum auctor.</p>
		</div>
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-checklist"></i>
			<h3><a href="#">RESERVATION ANYTIME</a></h3>
			<p>Proin gravida nibh vel velit auctor
				<br>aliquet. Aenean sollicitudin, lorem
				<br>quis bibendum auctor.</p>
		</div>
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-car-trip"></i>
			<h3><a href="#">Rentals Cars</a></h3>
			<p>Proin gravida nibh vel velit auctor
				<br>aliquet. Aenean sollicitudin, lorem
				<br>quis bibendum auctor.</p>
		</div>
	</div> -->
	<!-- xs Slider bottom title End -->




    <!-- <div class="x_offer_car_main_wrapper float_left pt3 pb3" style="background-image: linear-gradient(#afd6ff, #f3f8fe);">
        <div class="container">
            <form action="">
                <div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn">
							
                            <div class="x_slider_form_heading_wrapper float_left">
								<h3>Let’s find your perfect vehicle</h3>
							</div>

                            <div class="row pt1">
                                <div class="col-md-12">
                                    <div class="col-md-4 radio_buttons">
                                        <input type="radio" id="local" name="type" value="Local">
                                        <label for="local" class="mr5 fw-800">Local</label>
                                        <input type="radio" id="outstation" name="type" value="Outstation">
                                        <label for="outstation" class="mr5 fw-800">Outstation</label>
                                        <input type="radio" id="airport" name="type" value="Airport">
                                        <label for="airport" class="fw-800">Airport</label>
                                    </div>          
                                </div>    
                            </div>
                            <hr>
                            <div class="row main_form">
                                <div class="col-md-3">
                                    <div class="x_slider_form_input_wrapper">
                                        <h3>Pick-up Location</h3>
                                        <input type="text" placeholder="City, Airport, Station, etc.">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="x_slider_form_input_wrapper">
                                        <h3>Pick-up Location</h3>
                                        <input type="text" placeholder="City, Airport, Station, etc.">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-sec-header">
                                        <h3>Pick-up Date</h3>
                                        <label class="cal-icon">Pick-up Date
                                            <input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-sec-header">
                                        <h3>Drop-Off Date</h3>
                                        <label class="cal-icon">Pick-up Date
                                            <input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="x_slider_checout_right">
                                        <br>
                                        <ul>
                                            <li><a href="#">search <i class="fa fa-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>

            <div class="row mt2">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="home-banner">
                                <h5 class="offer">Get 10% OFF on First Booking</h5>
                                <h3 class="mt2">FAST AND EASY WAY<br>TO RENT A CAR</h3>
                                <p>Explore a different way to travel. This isot as hop's version of Lorem Ipsum. oin gra nibh vel velit auctor aliquet. nean sollicin, lorem quis.</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <img src="{{ asset('assets/images/home/slider.png') }}" alt="" class="w100">
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    
    
    


	<!-- xs offer car tabs Start -->
	<div class="x_offer_car_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper float_left">
						<h4>What We Offer</h4>
						<h3>Choose your Car</h3>
						<p>Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero
							<br>Vestibulum imperdiet nibh vel magna lacinia commodo ultricies,</p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="x_offer_tabs_wrapper">
						<ul class="nav nav-tabs">
							<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#car"> CAR</a>
							</li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tempo-traveller"> TEMPO TRAVELLER</a>
							</li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#mini-bus"> MINI BUS</a>
							</li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bus"> BUS</a>
							</li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#luxury"> LUXURY</a>
							</li>
						</ul>
					</div>
					<div class="tab-content">
						<div id="car" class="tab-pane active">
							<div class="row">
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt3">
											<img src="{{ asset('assets/images/home/c1.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-tag"></i> &nbsp;15% off Deal</h6>
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Berliet</a></h2>
											<p class="text-justify">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/home/c2.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">BMW</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/home/c3.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Brilliance</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/home/c4.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Audi</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/home/c5.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Alpine</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/home/c6.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Diatto</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/home/c7.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Ferrari</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/home/c8.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Freightliner</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="x_tabs_botton_wrapper float_left">
										<ul>
											<li><a href="#">See All Cars <i class="fa fa-arrow-right"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div id="tempo-traveller" class="tab-pane fade">
							<div class="row">
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c1.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-tag"></i> &nbsp;15% off Deal</h6>
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Berliet</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c2.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">BMW</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c3.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Brilliance</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c4.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Audi</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c5.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Alpine</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c6.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Diatto</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c7.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Ferrari</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c8.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Freightliner</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="x_tabs_botton_wrapper float_left">
										<ul>
											<li><a href="#">See All Tempo Travels <i class="fa fa-arrow-right"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div id="mini-bus" class="tab-pane fade">
							<div class="row">
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c1.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-tag"></i> &nbsp;15% off Deal</h6>
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Berliet</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c2.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">BMW</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c3.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Brilliance</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c4.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Audi</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c5.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Alpine</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c6.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Diatto</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c7.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Ferrari</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c8.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Freightliner</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="x_tabs_botton_wrapper float_left">
										<ul>
											<li><a href="#">See All Mini Buses <i class="fa fa-arrow-right"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
                        <div id="bus" class="tab-pane fade">
							<div class="row">
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c1.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-tag"></i> &nbsp;15% off Deal</h6>
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Berliet</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c2.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">BMW</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c3.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Brilliance</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c4.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Audi</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c5.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Alpine</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c6.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Diatto</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c7.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Ferrari</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c8.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Freightliner</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="x_tabs_botton_wrapper float_left">
										<ul>
											<li><a href="#">See All Buses <i class="fa fa-arrow-right"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
                        <div id="luxury" class="tab-pane fade">
							<div class="row">
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c1.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class="fa fa-tag"></i> &nbsp;15% off Deal</h6>
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Berliet</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c2.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">BMW</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c3.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Brilliance</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c4.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Audi</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c5.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Alpine</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c6.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Diatto</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c7.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Ferrari</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<!--<div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>-->
										<div class="x_car_offer_img float_left mt5">
											<img src="{{ asset('assets/images/c8.png') }}" alt="img">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
												<h3>&#8377;25</h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#">Freightliner</a></h2>
											<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										</div>
										<div class="x_car_offer_heading float_left">
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
												<li><a href="#">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="x_tabs_botton_wrapper float_left">
										<ul>
											<li><a href="#">See All Luxury Vehicles <i class="fa fa-arrow-right"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- xs offer car tabs End -->
	<!-- btc team Wrapper Start -->
	<div class="btc_team_main_wrapper">
		<div class="btc_team_img_overlay"></div>
		<div class="container">
			<div class="btc_team_left_wrapper">
				<h3>Featured <br>
Destinations</h3>
				<p>Explore a different way to travel. This isot as hop's version of Lorem Ipsum. oin gra nibh vel velit auctor aliquet. nean sollicin, lorem quis.</p>
			</div>
			<div class="btc_team_right_wrapper">
				<div class="btc_team_slider_wrapper">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="btc_team_slider_cont_main_wrapper">
								<div class="btc_team_img_wrapper">
									<img src="{{ asset('assets/images/home/feature1.jpg') }}" alt="team_img1">
									<div class="x_team_label_wrapper">
										<p>40% OFF</p>
									</div>
								</div>
								<div class="btc_team_img_cont_wrapper">
									<h4><a href="#">Paris, France</a></h4>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="btc_team_slider_cont_main_wrapper">
								<div class="btc_team_img_wrapper">
									<img src="{{ asset('assets/images/home/feature2.jpg') }}" alt="team_img1">
									<div class="x_team_label_wrapper">
										<p>40% OFF</p>
									</div>
								</div>
								<div class="btc_team_img_cont_wrapper">
									<h4><a href="#">los Angeles, usa</a></h4>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="btc_team_slider_cont_main_wrapper">
								<div class="btc_team_img_wrapper">
									<img src="{{ asset('assets/images/home/feature3.jpg') }}" alt="team_img1">
									<div class="x_team_label_wrapper">
										<p>40% OFF</p>
									</div>
								</div>
								<div class="btc_team_img_cont_wrapper">
									<h4><a href="#">Agra, india</a></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- btc team Wrapper End -->
	
    @include('includes.main.how_it_works')
	
    @include('includes.main.call_to_action_cars')

    @include('includes.main.testimonial')

	
	<div class="x_why_main_wrapper">
		<div class="x_why_img_overlay"></div>
		<div class="container">
			<div class="x_why_left_main_wrapper">
				<img src="{{ asset('assets/images/home/w1.png') }}" alt="car_img">
			</div>
			<div class="x_why_right_main_wrapper">
				<h3>Why Choose Us ?</h3>
				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, rem a quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Dssed odio sit amet nibh vulputate cursus a sit amt mauris. Morbi accumsan ipsum velit.
					<br>
					<br>This is Photoshop's version of Lorem Ipsum. Proin gravida n vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum tor. This is Photoshop's version of Lorem Ipsum.</p>
				<ul>
					<li><a href="#">read more <i class="fa fa-arrow-right"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- btc team Wrapper End -->
	<!-- xs offer car tabs Start -->
	<div class="x_ln_car_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_ln_car_heading_wrapper float_left">
						<h3>Latest cars</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="btc_ln_slider_wrapper">
						<div class="owl-carousel owl-theme">
							<div class="item">
								<div class="btc_team_slider_cont_main_wrapper">
									<div class="btc_ln_img_wrapper float_left">
										<img src="{{ asset('assets/images/home/blog1.jpg') }}" alt="team_img1">
									</div>
									<div class="btc_ln_img_cont_wrapper float_left">
										<h4><a href="#">Autoweek in review: Everything you missed Sept. 11-15</a></h4>
										<ul>
											<li><a href="#"><i class="fa fa-calendar"></i> &nbsp; September 19, 2017</a>
											</li>
											<li><a href="#"><i class="fa fa-user"></i> &nbsp;by Admin</a>
											</li>
										</ul>
										<p>What's your favorite game? Nam a diam tincidunt, condimentum nisi et, fringilla lectus. Nullam nec lectus..</p>	<span><a href="#">Read More &nbsp;<i class="fa fa-angle-double-right"></i></a></span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="btc_team_slider_cont_main_wrapper">
									<div class="btc_ln_img_wrapper float_left">
										<img src="{{ asset('assets/images/home/blog2.jpg') }}" alt="team_img1">
									</div>
									<div class="btc_ln_img_cont_wrapper float_left">
										<h4><a href="#">Rakish Tokyo concept signals hope for Mitsubishi's lineup</a></h4>
										<ul>
											<li><a href="#"><i class="fa fa-calendar"></i> &nbsp; September 21, 2017</a>
											</li>
											<li><a href="#"><i class="fa fa-user"></i> &nbsp;by Admin</a>
											</li>
										</ul>
										<p>What's your favorite game? Nam a diam tincidunt, condimentum nisi et, fringilla lectus. Nullam nec lectus..</p>	<span><a href="#">Read More &nbsp;<i class="fa fa-angle-double-right"></i></a></span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="btc_team_slider_cont_main_wrapper">
									<div class="btc_ln_img_wrapper float_left">
										<img src="{{ asset('assets/images/home/blog3.jpg') }}" alt="team_img1">
									</div>
									<div class="btc_ln_img_cont_wrapper float_left">
										<h4><a href="#">Dinan BMW S2 M4 first drive: Not for everyone's lineup</a></h4>
										<ul>
											<li><a href="#"><i class="fa fa-calendar"></i> &nbsp; September 23, 2017</a>
											</li>
											<li><a href="#"><i class="fa fa-user"></i> &nbsp;by Admin</a>
											</li>
										</ul>
										<p>What's your favorite game? Nam a diam tincidunt, condimentum nisi et, fringilla lectus. Nullam nec lectus..</p>	<span><a href="#">Read More &nbsp;<i class="fa fa-angle-double-right"></i></a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--js Start-->
	
    @include('includes.main.brands')

    @include('includes.main.newsletter')

	<div class="x_ln_car_main_wrapper float_left padding_tb_100 pb0">
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4">
						<img src="{{ asset('assets/images/home/img5.png') }}" alt="" width="100%">
					</div>
					<div class="col-md-4">
						<div class="x_ln_car_heading_wrapper float_left p5">
							<h4 class="fs-24 lh35 text-theme mb8">Download our app now and Enjoy more discount and rewards</h4>
							<h5 class="lh30 mb8">Use <span class="fw-700">Tejas10</span> get 10% Off on your first Booking</h5>
							<div class="row">
								<div class="col-md-6">
									<div class="btn-black-1">
										<a href=""><img src="images/home/img6.png') }}" alt="" width="100%"></a>
										<div class="overlay btn-black-overlay"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="btn-black-1">
										<a href=""><img src="images/home/img7.png') }}" alt="" width="100%"></a>
										<div class="overlay btn-black-overlay"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 pb5">
						<form action="">
							<div class="x_contact_title_main_wrapper float_left">
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<div class="contect_form1 pl8 pr8">
												<input type="text" placeholder="First Name *">
											</div>
											<div class="contect_form2 pl8 pr8">
												<input type="email" placeholder="Email *">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="contect_form2 pl8 pr8">
												<input type="text" placeholder="Last Name *">
											</div>
											<div class="contect_form2 pl8 pr8">
												<input type="text" placeholder="Phone *">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="contect_form4">
											<textarea rows="4" placeholder="Write Comment"></textarea>
										</div>
										<div class="contect_btn contect_btn_contact">
											<ul>
												<li><a href="#">Send Message <i class="fa fa-arrow-right"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

 @stop  
 
 @section('javascript')
 <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
 <script>
	//  const flatpickr = require("flatpickr");
	 flatpickr("#datetimepicker_input", {});
 </script>

<script type="text/javascript">
    var i = 1;
    var count = 1;
    
    function duplicate() {
		if(count!=6){
			var div = document.getElementById('duplicate_destination_0'),
			clone = div.cloneNode(true); // true means clone all childNodes and all event handlers
			clone.id = "duplicate_destination_"+(++i);
			clone.style = "display:block;";
			++count;
			document.getElementById('duplicateDestinationContainer').appendChild(clone);
			document.getElementsByName('destination[]')[count-1].value = "";
			toggleAddDestinationButton()
		}

		
    }
    function remove() {
        // console.log(this.event.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode);
        if(count!=0){
            this.event.target.parentNode.parentNode.parentNode.parentNode.remove();
            --count;
        }
		toggleAddDestinationButton()
    }

	function toggleAddDestinationButton(){
		if(count==5){
			document.getElementById('addDestinationBtn').style.display = 'none'
		}else{
			document.getElementById('addDestinationBtn').style.display = 'block'
		}
	}
</script>

<script>
	var nextScreen = 1;
	function changeToVehicleTypeScreen(to){
		nextScreen = to;
		document.getElementById('screenTitle').innerText = 'SELECT YOUR VEHICLE TYPE'
		document.getElementById('journeyType').style.display = 'none'
		document.getElementById('vehicleTypeScreen').style.display = 'block'
	}
	function changeToDetailEntryScreen(){
		document.getElementById('vehicleTypeScreen').style.display = 'none'
		switch(nextScreen){
			case 1: document.getElementById('oustation').style.display = 'block'
			document.getElementById('screenTitle').innerText = 'OUTSTATION'
			break;
			case 2: document.getElementById('local_ride').style.display = 'block'
			document.getElementById('screenTitle').innerText = 'LOCAL RIDE'
			break;
			case 3: document.getElementById('multiple_location').style.display = 'block'
			document.getElementById('screenTitle').innerText = 'MULTI-LOCATION'
			break;
			case 4: document.getElementById('airport_ride').style.display = 'block'
			document.getElementById('screenTitle').innerText = 'AIRPORT'
			break;
			
		}
	}

	function goBackScreen(from){
		document.getElementById('vehicleTypeScreen').style.display = 'block'
		document.getElementById('screenTitle').innerText = 'SELECT YOUR VEHICLE TYPE'
		nextScreen = from;
		switch(nextScreen){
			case 1: document.getElementById('oustation').style.display = 'none'
			break;
			case 2: document.getElementById('local_ride').style.display = 'none'
			break;
			case 3: document.getElementById('multiple_location').style.display = 'none'
			break;
			case 4: document.getElementById('airport_ride').style.display = 'none'
			break;
			
		}
	}

	function goToFirstScreen(){
		document.getElementById('screenTitle').innerText = 'SELECT YOUR JOURNEY TYPE'
		document.getElementById('journeyType').style.display = 'block'
		document.getElementById('vehicleTypeScreen').style.display = 'none'
	}
</script>
 @stop
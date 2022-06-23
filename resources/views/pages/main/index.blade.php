@extends('layouts.main.index')

@section('css')
<style>
	.x_slider_form_main_wrapper {
		max-width: 400px;
		padding-left: 5px;
    	padding-right: 5px;
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
														<h3>Select Your Journey Type</h3>
													</div>
													<div class="col-md-12 mt5">
														
														<div class="row">
															<div class="col-md-12">
																<div class="jurney-type">
																	<a href="">
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
																<div class="jurney-type">
																		<a href="">
																			<div class="row p2">
																				<div class="col-md-6 d-flex align-item-center">
																					<img src="{{ asset('assets/images/home/img2.png') }}" alt="" width="100%">
																				</div>
																				<div class="col-md-6 jurney-content">
																					<h4>Within City</h4>
																					<p>It is a long established fact that a reader will be distracted by the readable content.</p>
																				</div>
																			</div>
																		</a>
																	</div>
															</div>
														</div>
														<div class="row mt2">
															<div class="col-md-12">
																<div class="jurney-type">
																	<a href="">
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
																<div class="jurney-type">
																		<a href="">
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
@extends('layouts.main.index')



@section('content')

@include('includes.main.breadcrumb')

<div class="x_offer_car_main_wrapper float_left pt5 pb2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h3>TEJAS CARES CONSUMERS</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="x_services_title_main_wrapper float_left pt2 mb5">
    <div class="container">
        <div class="col-md-12">
            <div class="jp_rightside_job_categories_wrapper jp_rightside_job_categories_wrapper2">
                <div class="jp_rightside_job_categories_heading border-none">
                    <div class="x_about_seg_img_cont_wrapper float_left mt2">
                        <!-- <h3 class="text-capitalize">An Adventurous Getaway In The Jungles Of Dandeli Highlights</h3> -->
                        <p class="text-justify p2 pr3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p class="text-justify p2 pr3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="x_contact_title_main_wrapper float_left padding_tb_100 bg-light-grey2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">
                    <h4>get in touch</h4>
                    <h3>Raise A Complaint</h3>
                    <p>Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero
                        <br>Vestibulum imperdiet nibh vel magna lacinia commodo ultricies,</p>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="contect_form1">
                    <input type="text" placeholder="Full Name *" require>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="contect_form2">
                    <input type="number" placeholder="Phone No *" require>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="contect_form2">
                    <input type="email" placeholder="Email *" require>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="contect_form2">
                    <input type="text" placeholder="Complaint Title *" require>
                </div>
            </div>
            <div class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="contect_form4">
                    <textarea rows="4" placeholder="Write Complaint Details *" require></textarea>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="contect_btn contect_btn_contact">
                    <ul>
                        <li><a href="#">Send Message <i class="fa fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@include('includes.main.contact_info')

@include('includes.main.newsletter')

@stop
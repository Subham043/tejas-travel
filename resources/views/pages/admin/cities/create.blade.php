@extends('layouts.admin.dashboard')

@section('css')
<link href="{{ asset('admin/css/choices.min.css') }}" rel="stylesheet" type="text/css" />
<style>
    .choices[data-type*=select-one] .choices__inner {
        padding-bottom: 0;
    }

    .choices__inner {
        display: inline-block;
        vertical-align: top;
        width: 100%;
        background-color: #fff;
        padding: 0.5rem 0.9rem;
        border: 1px solid #ddd;
        border-radius: 2.5px;
        font-size: 14px;
        min-height: auto;
        overflow: hidden;
    }

    .choices__list--single {
        display: inline-block;
        padding: 0px 16px 8px 4px;
        width: 100%;
    }

    .choices[data-type*=select-one]::after {
        content: "";
        height: 0;
        width: 0;
        border-style: solid;
        border-color: #333 transparent transparent;
        border-width: 5px;
        position: absolute;
        right: 11.5px;
        top: 65%;
        margin-top: -2.5px;
        pointer-events: none;
    }

    .choices__list--dropdown, .choices__list[aria-expanded] {
        visibility: hidden;
        z-index: 1;
        position: absolute;
        width: 100%;
        background-color: #fff;
        border: 1px solid #ddd;
        top: 100%;
        margin-top: 0px;
        border-bottom-left-radius: 2.5px;
        border-bottom-right-radius: 2.5px;
        overflow: hidden;
        word-break: break-all;
        will-change: visibility;
    }

    .choices__list--dropdown{
        padding: 0;
    }

    .choices[data-type*=select-one] .choices__input {
        display: block;
        width: 100%;
        padding: 10px;
        border-bottom: 1px solid #ddd;
        background-color: #fff;
        margin: 0;
        border-radius: 0;
    }

    .choices__list--dropdown .choices__list {
        margin: 0;
    }
</style>
@stop


@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Cities</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Cities</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Cities</h4>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md">
                                <button type="button" class="btn rounded-pill btn-secondary waves-effect" data-bs-toggle="modal" data-bs-target="#myModal">Add New Country</button>
                                <button type="button" class="btn rounded-pill btn-warning waves-effect" data-bs-toggle="modal" data-bs-target="#myModalState">Add New State</button>
                            </div>
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <form id="countryForm" method="post" action="{{route('city_store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                                        @error('name') 
                                            <div class="invalid-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="country" class="form-label">Country</label>
                                        <select id="country" name="country"></select>
                                        @error('country') 
                                            <div class="invalid-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="state" class="form-label">State</label>
                                        <select id="state" name="state"></select>
                                        @error('state') 
                                            <div class="invalid-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="latitude" class="form-label">Latitude</label>
                                        <input type="text" class="form-control" name="latitude" id="latitude" value="{{old('latitude')}}">
                                        @error('latitude') 
                                            <div class="invalid-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="longitude" class="form-label">Longitude</label>
                                        <input type="text" class="form-control" name="longitude" id="longitude" value="{{old('longitude')}}">
                                        @error('longitude') 
                                            <div class="invalid-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" name="description" id="description"
                                            rows="3">{{old('description')}}</textarea>
                                            @error('description') 
                                                <div class="invalid-message">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12 col-md-12">
                                    <div class="mt-4 mt-md-0">
                                        <div>
                                            <div class="form-check form-switch form-check-right mb-2">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckRightDisabled" name="status" checked>
                                                <label class="form-check-label" for="flexSwitchCheckRightDisabled">Status</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div><!--end col-->

                                <div class="col-xxl-12 col-md-12">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>
                                </div>
                                
                            </div>
                            </form>
                            <!--end row-->
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        

    </div> <!-- container-fluid -->
</div><!-- End Page-content -->

@include('pages.admin.countries.modal_create')

@include('pages.admin.states.modal_create')

@stop          
           

@section('javascript')
<script src="{{ asset('admin/js/pages/axios.min.js') }}"></script>
@include('pages.admin.countries._js_country_select')
@include('pages.admin.states._js_state_select')
<script type="text/javascript">

  

// initialize the validation library
const validation = new JustValidate('#countryForm', {
      errorFieldCssClass: 'is-invalid',
});
// apply rules to form fields
validation
  .addField('#name', [
    {
      rule: 'required',
      errorMessage: 'Name is required',
    },
    {
        rule: 'customRegexp',
        value: /^[a-zA-Z\s]*$/,
        errorMessage: 'Name is invalid',
    },
  ])
  .addField('#country', [
    {
      rule: 'required',
      errorMessage: 'Please select a country',
    },
    {
        validator: (value, fields) => {
        if (value === 'Select a country') {
            return false;
        }

        return true;
        },
        errorMessage: 'Please select a country',
    },
  ])
  .addField('#state', [
    {
      rule: 'required',
      errorMessage: 'Please select a state',
    },
    {
        validator: (value, fields) => {
        if (value === 'Select a state') {
            return false;
        }

        return true;
        },
        errorMessage: 'Please select a state',
    },
  ])
  .onSuccess((event) => {
    event.target.submit();
  });
</script>

@stop
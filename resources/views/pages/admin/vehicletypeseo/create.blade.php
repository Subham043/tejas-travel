@extends('layouts.admin.dashboard')

@section('css')
<link href="{{ asset('admin/libs/quill/quill.core.css' ) }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/quill/quill.bubble.css' ) }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/quill/quill.snow.css' ) }}" rel="stylesheet" type="text/css" />

<style>
    #editorterm, #editorinclude, #editordescription, #editornotes{
        min-height: 200px;
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
                    <h4 class="mb-sm-0">Vehicle Type Seo</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Vehicle Type Seo</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <form id="countryForm" method="post" action="{{route('vehicletypeseo_store')}}" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Vehicle Type Seo</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            
                            
                            <div class="row gy-4">
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="vehicletype" class="form-label">Vehicle Type</label>
                                        <select id="vehicletype" name="vehicletype"></select>
                                        @error('vehicletype') 
                                            <div class="invalid-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="vehicle" class="form-label">Vehicle</label>
                                        <select id="vehicle" name="vehicle" multiple></select>
                                        @error('vehicle') 
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
                                        <label for="city" class="form-label">City</label>
                                        <select id="city" name="city"></select>
                                        @error('city') 
                                            <div class="invalid-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="editordescription" class="form-label">Description</label>
                                        <div id="editordescription"></div>
                                        @error('editordescription') 
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

                                
                            </div>
                            
                            <!--end row-->
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">SEO</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-xxl-6 col-md-12">
                                    <div>
                                        <label for="browser_title" class="form-label">Browser Title</label>
                                        <input type="text" class="form-control" name="browser_title" id="browser_title" value="{{old('browser_title')}}">
                                        @error('browser_title') 
                                            <div class="invalid-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-12">
                                    <div>
                                        <label for="url" class="form-label">URL</label>
                                        <input type="text" class="form-control" name="url" id="url" value="{{old('url')}}">
                                        @error('url') 
                                            <div class="invalid-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-12">
                                    <div>
                                        <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                        <textarea class="form-control" name="meta_keywords" id="meta_keywords" cols="30" rows="10">{{old('meta_keywords')}}</textarea>
                                        @error('meta_keywords') 
                                            <div class="invalid-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-12">
                                    <div>
                                        <label for="meta_description" class="form-label">Meta Description</label>
                                        <textarea class="form-control" name="meta_description" id="meta_description" cols="30" rows="10">{{old('meta_description')}}</textarea>
                                        @error('meta_description') 
                                            <div class="invalid-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-12">
                                    <div>
                                        <label for="seo_meta_header" class="form-label">SEO Meta Header</label>
                                        <textarea class="form-control" name="seo_meta_header" id="seo_meta_header" cols="30" rows="10">{{old('seo_meta_header')}}</textarea>
                                        @error('seo_meta_header') 
                                            <div class="invalid-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-12">
                                    <div>
                                        <label for="seo_meta_footer" class="form-label">SEO Meta Footer</label>
                                        <textarea class="form-control" name="seo_meta_footer" id="seo_meta_footer" cols="30" rows="10">{{old('seo_meta_footer')}}</textarea>
                                        @error('seo_meta_footer') 
                                            <div class="invalid-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-md-12">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light" id="submitBtn">Create</button>
                                </div>
                                
                                
                            </div>
                            <!--end row-->
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        
    </form>

        

    </div> <!-- container-fluid -->
</div><!-- End Page-content -->



@stop          
           

@section('javascript')
<script src="{{ asset('admin/js/pages/axios.min.js') }}"></script>
<script src="{{ asset('admin/js/pages/just-validate-plugin-date.production.min.js') }}"></script>
@include('pages.admin.vehicletypeseo._js_state_select')
@include('pages.admin.vehicletypeseo._js_city_select')
@include('pages.admin.vehicletypeseo._js_vehicletype_select')
@include('pages.admin.vehicletypeseo._js_vehicle_select')

<script src="{{ asset('admin/libs/quill/quill.min.js' ) }}"></script>

<script type="text/javascript">
var quillDescription = new Quill('#editordescription', {
    theme: 'snow'
});
</script>


<script type="text/javascript">

const errorToast = (message) =>{
    iziToast.error({
        title: 'Error',
        message: message,
        position: 'bottomCenter',
        timeout:7000
    });
}
const successToast = (message) =>{
    iziToast.success({
        title: 'Success',
        message: message,
        position: 'bottomCenter',
        timeout:6000
    });
}

</script>

<script type="text/javascript">

// initialize the validation library
const validation = new JustValidate('#countryForm', {
      errorFieldCssClass: 'is-invalid',
});
// apply rules to form fields
validation
  .addField('#vehicletype', [
    {
      rule: 'required',
      errorMessage: 'Please select a vehicle type',
    },
    {
        validator: (value, fields) => {
        if (value === 'Select a vehicle type') {
            return false;
        }

        return true;
        },
        errorMessage: 'Please select a vehicle type',
    },
  ])
  .addField('#city', [
    {
      rule: 'required',
      errorMessage: 'Please select a city',
    },
    {
        validator: (value, fields) => {
            console.log(value);
        if (value === 'Select a city') {
            return false;
        }

        return true;
        },
        errorMessage: 'Please select a city',
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
  .addField('#vehicle', [
    {
      rule: 'required',
      errorMessage: 'Please select a vehicle',
    },
    {
        validator: (value, fields) => {
        if (value?.length==0) {
            return false;
        }

        return true;
        },
        errorMessage: 'Please select a vehicle',
    },
  ])
  .addField('#editordescription', [
    {
        validator: (value, fields) => {
            if (quillDescription.getText().length == 1 || quillDescription.getText().length == 2) {
                return false;
            }
    
            return true;
        },
        errorMessage: 'Please enter the description !',
    },
  ])
  .addField('#url', [
    {
      rule: 'required',
      errorMessage: 'Url is required',
    },
    {
        rule: 'customRegexp',
        value: /^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i,
        errorMessage: 'Please enter the valid url !',
    },
  ])
  .onSuccess(async (event) => {
    // event.target.submit();
    
    

        var submitBtn = document.getElementById('submitBtn')
        submitBtn.innerHTML = `
            <span class="d-flex align-items-center">
                <span class="spinner-border flex-shrink-0" role="status">
                    <span class="visually-hidden">Loading...</span>
                </span>
                <span class="flex-grow-1 ms-2">
                    Loading...
                </span>
            </span>
            `
        submitBtn.disabled = true;
    
      try {
        var formData = new FormData();
        formData.append('vehicletype_id',document.getElementById('vehicletype').value)
        formData.append('description_unformatted',quillDescription.getText())
        formData.append('description',quillDescription.root.innerHTML)
        formData.append('state_id',document.getElementById('state').value)
        formData.append('city_id',document.getElementById('vehicle').value)
        formData.append('url',document.getElementById('url').value)
        formData.append('browser_title',document.getElementById('browser_title').value)
        formData.append('meta_keywords',document.getElementById('meta_keywords').value)
        formData.append('meta_description',document.getElementById('meta_description').value)
        formData.append('seo_meta_header',document.getElementById('seo_meta_header').value)
        formData.append('seo_meta_footer',document.getElementById('seo_meta_footer').value)
        formData.append('status',document.getElementById('flexSwitchCheckRightDisabled').value)
        // formData.append('refreshUrl','{{URL::current()}}')
        if(document.getElementById('vehicle')?.length>0){
            for (let index = 0; index < document.getElementById('vehicle').length; index++) {
                formData.append('vehicle[]',document.getElementById('vehicle')[index].value)
            }
        }
        
        const response = await axios.post('{{route('vehicletypeseo_store')}}', formData)
        successToast(response.data.message)
        setTimeout(function(){
            window.location.replace(response.data.url);
        }, 1000);
      } catch (error) {
        //   console.log(error.response);
        if(error?.response?.data?.form_error?.vehicletype_id){
            errorToast(error?.response?.data?.form_error?.vehicletype_id[0])
        }
        if(error?.response?.data?.form_error?.state_id){
            errorToast(error?.response?.data?.form_error?.state_id[0])
        }
        if(error?.response?.data?.form_error?.city_id){
            errorToast(error?.response?.data?.form_error?.city_id[0])
        }
        if(error?.response?.data?.form_error?.url){
            errorToast(error?.response?.data?.form_error?.url[0])
        }
        if(error?.response?.data?.form_error?.vehicle){
            errorToast(error?.response?.data?.form_error?.vehicle[0])
        }
      } finally{
            submitBtn.innerHTML =  `
                Submit
                `
            submitBtn.disabled = false;
        }
  });
</script>

@stop
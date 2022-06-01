<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Validator;

class EnquiryController extends Controller
{

    public function insert_enquiry(Request $req) {
  
        $rules = array(
            'fname' => ['required','string','regex:/^[a-zA-Z\s]*$/'],
            'lname' => ['required','string','regex:/^[a-zA-Z\s]*$/'],
            'email' => ['required','email'],
            'phone' => ['required','regex:/^[0-9]*$/'],
            'message' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
        );
        $messages = array(
            'fname.required' => 'Please enter the first name !',
            'fname.string' => 'Please enter the valid first name !',
            'fname.regex' => 'Please enter the valid first name !',
            'lname.required' => 'Please enter the last name !',
            'lname.string' => 'Please enter the valid last name !',
            'lname.regex' => 'Please enter the valid last name !',
            'email.required' => 'Please enter the email !',
            'email.email' => 'Please enter the valid email !',
            'phone.required' => 'Please enter the phone !',
            'phone.regex' => 'Please enter the valid phone !',
            'message.required' => 'Please enter the message !',
            'message.regex' => 'Please enter the valid message !',
        );

        $validator = Validator::make($req->all(), $rules, $messages);

        if($validator->fails()){
            return response()->json(["form_error"=>$validator->errors()], 400);
        }

        $country = new Enquiry;
        $country->fname = $req->fname;
        $country->lname = $req->lname;
        $country->email = $req->email;
        $country->phone = $req->phone;
        $country->message = $req->message;
        $result = $country->save();
        if($result){
            return response()->json(["url"=>$req->refreshUrl, "message" => "Data Stored successfully."], 201);
        }else{
            return response()->json(["error"=>"something went wrong. Please try again"], 400);
        }

    }


}
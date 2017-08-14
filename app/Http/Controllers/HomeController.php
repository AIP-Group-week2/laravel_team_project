<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller
{

    
    public function formValidation()
    {
    	return view('form-validation');
    }

    public function formValidationPost(Request $request)
    {
    	$this->validate($request,[
    			'title' => 'required|max:50',
    			'type' => 'required',
    			'comment' => 'required',
    			'date' => 'required',
    			
    		],[
    			'title.required' => ' The movie title field is required.',
    			'title.max' => ' The first name may not be greater than 50 characters.',
    			'type.required' => ' The movie type field is required.',
    			'comment.required' => ' The comment field is required.',
    			'date.required' => ' The release date field is required.',

    		]);

    	dd('You are successfully added all fields.');
    }
}
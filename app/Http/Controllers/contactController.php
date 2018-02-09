<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class contactController extends Controller
{
    function create()
    {
    	return view('contact');
    }
    function store(contactRequest $request)
    {
    	Mail::to('mbodjamina227@gmail.com')
            ->send(new Contact($request->except('_token')));
    	return view('confirm');
    }
}

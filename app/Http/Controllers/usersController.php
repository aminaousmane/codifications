<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    function create()
    {
    	return view('infos');
    }
    function store(Request $request)
    {
    	return 'Le nom est '.$request->input('nom');
    }
}

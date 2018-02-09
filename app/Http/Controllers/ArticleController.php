<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function show($n)
    {
    	//return view('article')->with('number',$n);
    	return view('article')->withNumber($n);
    }
}

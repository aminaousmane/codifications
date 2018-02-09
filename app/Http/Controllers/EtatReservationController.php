<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtatReservationController extends Controller
{
    public function index(){
    	return view('etatReservation');
    }
}

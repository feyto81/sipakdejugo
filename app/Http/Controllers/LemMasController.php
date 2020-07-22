<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LPM;

class LemMasController extends Controller
{
    public function lpm()
    {
    	$lpm = LPM::all();
        return view('frontend.lemNas.lpm.index',compact('lpm'));
    }
}

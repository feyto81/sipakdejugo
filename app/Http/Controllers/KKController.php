<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KK;

class KKController extends Controller
{
    public function index()
    {
        $kk = KK::all();
        return view('kependudukan.kk.index', compact('kk'));
    }
}

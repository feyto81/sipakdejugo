<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sejarah;
use App\PWD;
use App\ArtiLambang;

class FprofilController extends Controller
{
    public function profil()
    {
        $sejarah = Sejarah::all();
        return view('frontend.profil.profil.index',compact('sejarah'));
    }
    public function profil_wilayah()
    {
        $profil_wilayah = PWD::all();
        return view('frontend.profil.wilayah.index',compact('profil_wilayah'));
    }
    public function profil_lambang()
    {
        $artilambang = ArtiLambang::all();
        return view('frontend.profil.arti_lambang.index',compact('artilambang'));
    }
}

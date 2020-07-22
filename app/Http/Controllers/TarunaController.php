<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KarangTaruna;
use App\PKK;
use DB;

class TarunaController extends Controller
{
    public function getIndex()
    {
        
        $kt = KarangTaruna::all();
        return view('frontend.taruna.index',compact('kt'));
    }
    public function getIndexPkk()
    {
        $pkk = PKK::all();
        return view('frontend.pkk.index',compact('pkk'));
    }
    public function getIndexSurat()
    {
       $max = DB::table('surat')->where('surat_id', \DB::raw("(select max(`surat_id`) from surat)"))->pluck('surat_id');
        $check_max = DB::table('surat')->count();
        if ($check_max == null) {
            $max_code = "SR-000001";
        } else {
            $max_code = $max[0];
            $max_code++;
        }
        return view('frontend.surat.index',compact('max_code'));
    }
}

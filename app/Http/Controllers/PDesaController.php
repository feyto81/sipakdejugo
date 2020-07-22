<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VM;
use App\PM;
use App\BPD;

class PDesaController extends Controller
{
    public function p_desa_visi_misi()
    {
        $vm = VM::all();
        return view('frontend.p_desa.visi_dan_misi.index',compact('vm'));
    }
    public function p_desa_pemerintah()
    {
        $pm = PM::all();
        return view('frontend.p_desa.pemerintah.index',compact('pm'));
    }
    public function p_desa_bpd()
    {
        $bpd = BPD::all();
        return view('frontend.p_desa.bpd.index',compact('bpd'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BPD;

class BPDController extends Controller
{
    public function edit_bpd($id)
    {
    	$bpd = BPD::findOrFail($id);
        return view('bpd.index',compact('bpd'));
    }
    public function update_bpd(Request $request, $id)
    {
    	$messages = [
            'required' => 'kolom :attribute wajib di isi !',
            'unique' => ':attribute sudah ada !',
            'numeric' => 'kolom :attribute harus diisi dengan angka !',
            'min' => 'kolom :attribute harus di isi minimal :min huruf !',
            'max' => 'kolom :attribute harus di isi maksimal :max huruf !',
        ];
        $this->validate($request,[
            'judul_utama' => 'required',
            'judul_bawah' => 'required',
            'body' => 'required|min:10'

        ],$messages);
        $bpd = BPD::find($id);
        $bpd->fill($request->all());
        $bpd->update();
        toastr()->success('Data BPD Berhasil Di Update', 'Success');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LPM;

class LPMController extends Controller
{
    public function edit_lpm($id)
    {
    	$lpm = LPM::findOrFail($id);
        return view('lpm.index',compact('lpm'));
    }
    public function update_lpm(Request $request, $id)
    {
    	$messages = [
            'required' => ':attribute kolom wajib di isi !',
            'unique' => ':attribute sudah ada !',
            'numeric' => ':attribute kolom harus diisi dengan angka !',
            'min' => ':attribute kolom harus di isi minimal :min huruf !',
            'max' => ':attribute kolom harus di isi maksimal :max huruf !',
        ];
        $this->validate($request,[
            'judul' => 'required',
            'isi' => 'required|min:10'

        ],$messages);
        $lpm = LPM::find($id);
        $lpm->fill($request->all());
        $lpm->update();
        toastr()->success('LPM Berhasil Di Update', 'Success');
        return redirect()->back();
    }
}

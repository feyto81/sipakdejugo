<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KarangTaruna;

class KarangTarunaController extends Controller
{
    public function edit_kt($id)
    {
    	$kt = KarangTaruna::findOrFail($id);
        return view('karangtaruna.index',compact('kt'));
    }
    public function update_kt(Request $request, $id)
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
            'body' => 'required|min:10'

        ],$messages);
        $kt = KarangTaruna::find($id);
        $kt->fill($request->all());
        $kt->update();
        toastr()->success('Data Karang Taruna Berhasil Di Update', 'Success');
        return redirect()->back();
    }
}

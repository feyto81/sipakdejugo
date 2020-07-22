<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PKK;

class PKKController extends Controller
{
    public function edit_pkk($id)
    {
    	$pkk = PKK::findOrFail($id);
        return view('pkk.index',compact('pkk'));
    }
    public function update_pkk(Request $request, $id)
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
        $pkk = PKK::find($id);
        $pkk->fill($request->all());
        $pkk->update();
        toastr()->success('Data PKK Berhasil Di Update', 'Success');
        return redirect()->back();
    }
}

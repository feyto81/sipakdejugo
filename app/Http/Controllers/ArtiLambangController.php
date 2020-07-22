<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArtiLambang;
use Storage;

class ArtiLambangController extends Controller
{
    public function edit_at($id)
    {
        $artilambang = ArtiLambang::find($id);
        return view('artilambang.edit', compact('artilambang'));
    }
    public function update_at(Request $request, $id)
    {
    	$messages = [
            'required' => 'kolom :attribute wajib di isi !',
            'unique' => ':attribute sudah ada !',
            'numeric' => 'kolom :attribute  harus diisi dengan angka !',
            'min' => 'kolom :attribute  harus di isi minimal :min huruf !',
            'max' => 'kolom :attribute harus di isi maksimal :max huruf !',
        ];
        $this->validate($request,[
            'judul' => 'required',
            'body' => 'required|min:10',

        ],$messages);
        if(empty($request->file('gambar'))) {
            $artilambang = ArtiLambang::find($id);
            $artilambang->update([
             'judul' => $request->judul,
             'body' => $request->body,
             'user_id' => $request->user_id
        ]);    
        } else {
            $artilambang = ArtiLambang::find($id);
            Storage::delete($artilambang->gambar);
            $artilambang->update([
            'judul' => $request->judul,
            'body' => $request->body,
            'gambar' => $request->file('gambar')->store('artilambang'),
            'user_id' => $request->user_id
        ]);
        }
        toastr()->success('Arti Lambang Desa  Berhasil Di Ubah', 'Success');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PWD;
use Str;
use Storage;

class PWDController extends Controller
{
    public function edit_pwd($id)
    {
    	$pwd = PWD::findOrFail($id);
        return view('wilayahdesa.index',compact('pwd'));
    }
    public function update_pwd(Request $request, $id)
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
            'body' => 'required|min:10',

        ],$messages);
        if(empty($request->file('gambar'))) {
            $pwd = PWD::find($id);
            $pwd->update([
             'judul' => $request->judul,
             'body' => $request->body,
             'user_id' => $request->user_id
        ]);    
        } else {
            $pwd = PWD::find($id);
            Storage::delete($pwd->gambar);
            $pwd->update([
            'judul' => $request->judul,
            'body' => $request->body,
            'gambar' => $request->file('gambar')->store('wilayahdesa'),
            'user_id' => $request->user_id
        ]);
        }
        toastr()->success('Data Wilayah Desa Berhasil Di Ubah', 'Success');
        return redirect()->back();
    }
}

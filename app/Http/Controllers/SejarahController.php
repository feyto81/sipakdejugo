<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sejarah;
use Str;
use Storage;

class SejarahController extends Controller
{
    public function edit_sejarah($id)
    {
        $sejarah = Sejarah::findOrFail($id);
        return view('sejarah.index',compact('sejarah'));
    }
    public function update_sejarah(Request $request, $id)
    {
    	$messages = [
            'required' => ':attribute kolom wajib di isi !',
            'unique' => ':attribute sudah ada !',
            'numeric' => ':attribute kolom harus diisi dengan angka !',
            'min' => ':attribute kolom harus di isi minimal :min huruf !',
            'max' => ':attribute kolom harus di isi maksimal :max huruf !',
        ];
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required|min:10',

        ],$messages);
        if(empty($request->file('images'))) {
            $sejarah = Sejarah::find($id);
            $sejarah->update([
             'title' => $request->title,
             'body' => $request->body,
             'user_id' => $request->user_id
        ]);    
        } else {
            $sejarah = Sejarah::find($id);
            Storage::delete($sejarah->images);
            $sejarah->update([
            'title' => $request->title,
            'body' => $request->body,
            'images' => $request->file('images')->store('sejarah'),
            'user_id' => $request->user_id
        ]);
        }
        toastr()->success('Sejarah Desa Berhasil Di Ubah', 'Success');
        return redirect()->back();
    }
}

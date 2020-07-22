<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PM;
use Str;
use Storage;

class PMController extends Controller
{
    public function edit_pm($id)
    {
    	$pm = PM::findOrFail($id);
        return view('pm.index',compact('pm'));
    }
    public function update_pm(Request $request, $id)
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
            'title1' => 'required',
            'body' => 'required|min:10'

        ],$messages);
        if(empty($request->file('images'))) {
            $pm = PM::find($id);
            $pm->update([
             'title' => $request->title,
             'title1' => $request->title1,
             'body' => $request->body,
             'user_id' => $request->user_id
        ]);    
        } else {
            $pm = PM::find($id);
            Storage::delete($pm->images);
            $pm->update([
            'title' => $request->title,
            'title1' => $request->title1,
            'body' => $request->body,
            'images' => $request->file('images')->store('pemerintahdesa'),
            'user_id' => $request->user_id
        ]);
        }
        toastr()->success('Tata Kerja Pemerintahan Desa Berhasil Di Ubah', 'Success');
        return redirect()->back();
    }
}

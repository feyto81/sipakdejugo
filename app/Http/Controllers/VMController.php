<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VM;
use Str;
use Storage;

class VMController extends Controller
{
    public function edit_vm($id)
    {
    	$vm = VM::findOrFail($id);
        return view('vm.index',compact('vm'));
    }
    public function update_vm(Request $request, $id)
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
            'visi' => 'required|min:10',
            'misi' => 'required|min:10'


        ],$messages);
        if(empty($request->file('images'))) {
            $vm = VM::find($id);
            $vm->update([
             'title' => $request->title,
             'visi' => $request->visi,
             'misi' => $request->misi,
             'user_id' => $request->user_id
        ]);    
        } else {
            $vm = VM::find($id);
            Storage::delete($vm->images);
            $vm->update([
            'title' => $request->title,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'images' => $request->file('images')->store('visimisi'),
            'user_id' => $request->user_id
        ]);
        }
        toastr()->success('Visi Dan Misi Desa Berhasil Di Ubah', 'Success');
        return redirect()->back();
    }
}

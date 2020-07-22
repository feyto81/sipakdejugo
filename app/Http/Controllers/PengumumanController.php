<?php

namespace App\Http\Controllers;
use App\Pengumuman;
use Str;
use Storage;


use Illuminate\Http\Request;

class PengumumanController extends Controller
{

    public function getIndex()
    {
        $pengumuman = Pengumuman::all();
        return view('pengumuman.index',compact('pengumuman'));
    }
    public function frontend()
    {
        $pengumuman = Pengumuman::latest()->paginate(8);
        return view('frontend.pengumuman.index',compact('pengumuman'));
    }
    public function getAdd()
    {
        return view('pengumuman.create');
    }
   public function getSave(Request $request)
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
            'gambar' => 'required',

        ], $messages);
        if(empty($request->file('gambar'))){
        Pengumuman::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'body' => $request->body,
            'user_id' => $request->user_id
        ]);
         } else {
        Pengumuman::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'body' => $request->body,
            'gambar' => $request->file('gambar')->store('pengumuman'),
            'user_id' => $request->user_id
        ]);
        }
        toastr()->success('Pengumuman Berhasil Di Tambah', 'Success');
        return redirect('pengumuman/index');
    }
    public function getDelete(Request $request,$id)
    {
        
        $pengumuman = Pengumuman::find($id);
        $pengumuman->delete();
        toastr()->success('Pengumuman Berhasil Di Hapus', 'Success');
        return back();
    }
    public function getEdit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('pengumuman.edit', compact('pengumuman'));
    }
    public function getUpdate(Request $request, $id)
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
            $pengumuman = Pengumuman::find($id);
            $pengumuman->update([
             'judul' => $request->judul,
             'slug' => Str::slug($request->judul),
             'body' => $request->body
        ]);    
        } else {
            $pengumuman = Pengumuman::find($id);
            Storage::delete($pengumuman->gambar);
            $pengumuman->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'body' => $request->body,
            'gambar' => $request->file('gambar')->store('pengumuman')
        ]);
        }
        toastr()->success('Pengumuman Berhasil Di Ubah', 'Success');
        return redirect('pengumuman/index');
    }
    public function show(Pengumuman $pengumuman)
    {
        $pengumuman_detail = $pengumuman;
        return view('frontend.pengumuman.detail',compact('pengumuman_detail'));
    }
    
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Category;
use Str;
use Storage;
use App\Slider;

class BeritaController extends Controller
{
    public function getIndexberita()
    {
        return view('frontend.berita.detail');
    }
    public function getAdd()
    {
        $berita = Berita::all();

        return view('berita.index',compact('berita'));
    }
    public function getambah()
    {
    	$category = Category::all();
    	return view('berita.add',compact('category'));
    }
    public function saveBerita(Request $request)
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
            'categoris_id' => 'required',

        ], $messages);
        if(empty($request->file('gambar'))){
        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'body' => $request->body,
           // 'gambar' => $image,
            'categoris_id' => $request->categoris_id,
            'user_id' => $request->user_id
        ]);
         } else {
        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'body' => $request->body,
            'gambar' => $request->file('gambar')->store('berita'),
            'categoris_id' => $request->categoris_id,
            'user_id' => $request->user_id
        ]);
        }
        toastr()->success('Berita Berhasil Di Tambah', 'Success');
        return redirect('berita/all');
    }
    public function getDelete($id)
    {
        $berita = Berita::find($id);
        if(!$berita){
            return redirect()->back();
        } else {
            Storage::delete($berita->gambar);
            $berita->delete();
            toastr()->success('Berita Berhasil Di Hapus', 'Success');
            return redirect('/berita/all');

        }
    }
    public function edit_berita($id)
    {
    	$category = Category::select('id','nama_kategori')->get();
        $berita = Berita::find($id);
        return view('berita.edit', compact('berita','category'));
    }
    public function update_berita(Request $request, $id)
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
            $berita = Berita::find($id);
            $berita->update([
             'judul' => $request->judul,
             'slug' => Str::slug($request->judul),
             'body' => $request->body,
             'categoris_id' => $request->categoris_id
        ]);    
        } else {
            $berita = Berita::find($id);
            Storage::delete($berita->gambar);
            $berita->update([
             'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'body' => $request->body,
            'gambar' => $request->file('gambar')->store('berita'),
            'categoris_id' => $request->categoris_id
        ]);
        }
        toastr()->success('Berita Berhasil Di Ubah', 'Success');
        return redirect('berita/all');
    }
    public function frontend()
    {
        $category = Category::all();
        $berita = Berita::latest()->paginate(2);
        $beritaall = Berita::latest()->paginate(8);
        $beritaterkait = Berita::latest()->limit(4)->get();
        $slider = Slider::all();
        return view('welcome',compact('category','berita','beritaall','beritaterkait','slider'));
    }
    public function show(Berita $berita)
    {
        $berita_detail = $berita;
        // $beritaterkait = Berita::latest()->get()->paginate(10);
        $category = Category::withCount('Berita')->get();
        return view('frontend.berita.detail',compact('berita_detail','beritaterkait','category'));
    }
}

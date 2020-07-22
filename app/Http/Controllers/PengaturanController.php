<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pengaturanaplikasi;
use App\Bagan;
use Storage;
use App\Modul;

class PengaturanController extends Controller
{
    public function getIndexAplikasi()
    {
    	$pengaturan = DB::table('pengaturanaplikasi')->get();
    	return view('pengaturan.index',compact('pengaturan'));
    }
    public function getEdit($id)
    {
        $pengaturan = Pengaturanaplikasi::findOrFail($id);
        return view('pengaturan.edit', compact('pengaturan'));
    }
    public function getEditbagan($id)
    {
        $bagan = Bagan::findOrFail($id);
        return view('pengaturan.bagan',compact('bagan'));
    }
    public function getUpdatebagan(Request $request, $id)
    {
        
        if(empty($request->file('gambar'))) {
            $bagan = Bagan::find($id);
            $bagan->update([
             
        ]);    
        } else {
            $bagan = Bagan::find($id);
            Storage::delete($bagan->gambar);
            $bagan->update([
            'gambar' => $request->file('gambar')->store('bagan')
        ]);
        }
        toastr()->success('Bagan Struktur Desa Berhasil Di Ubah', 'Success');
        return redirect()->back();
    }
    public function struktur()
    {
        $bagan = Bagan::all();
        return view('frontend.datadesa.coba.index',compact('bagan'));
    }
    public function getUpdateAplikasi(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute kolom wajib di isi !',
            'unique' => ':attribute sudah ada !',
            'numeric' => ':attribute kolom harus diisi dengan angka !',
            'min' => ':attribute kolom harus di isi minimal :min huruf !',
            'max' => ':attribute kolom harus di isi maksimal :max huruf !',
        ];
        $this->validate($request,[
            'nama_aplikasi' => 'required',
            'current_version' => 'required',

        ],$messages);
        if(empty($request->file('logo'))) {
            $pengaturanaplikasi = Pengaturanaplikasi::find($id);
            $pengaturanaplikasi->update([
             'nama_aplikasi' => $request->nama_aplikasi,
             'current_version' => $request->current_version
        ]);    
        } else {
            $pengaturanaplikasi = Pengaturanaplikasi::find($id);
            Storage::delete($pengaturanaplikasi->gambar);
            $pengaturanaplikasi->update([
            'nama_aplikasi' => $request->nama_aplikasi,
            'current_version' => $request->current_version,
            'logo' => $request->file('logo')->store('pengaturan')
        ]);
        }
        toastr()->success('Pengaturan Berhasil Di Ubah', 'Success');
        return redirect('pengaturan/aplikasi');
    }
    public function getIndexModul()
    {
        $modul = Modul::all();
        return view('pengaturan.modul',compact('modul'));
    }
    public function getEditModul($id)
    {
        $modul = Modul::findOrFail($id);
        return view('pengaturan.moduledit',compact('modul'));
    }
    public function getUpdateModul(Request $request, $id)
    {
        
        $messages = [
            'required' => ':attribute kolom wajib di isi !',
            'unique' => ':attribute sudah ada !',
            'numeric' => ':attribute kolom harus diisi dengan angka !',
            'min' => ':attribute kolom harus di isi minimal :min huruf !',
            'max' => ':attribute kolom harus di isi maksimal :max huruf !',
        ];
        $this->validate($request,[
            'pengaduan_wa' => 'required',
            'link_informasi_covid' => 'required',

        ],$messages);
        if(empty($request->file('foto_kepala_desa'))) {
            $modul = Modul::find($id);
            $modul->update([
                'pengaduan_wa' => $request->pengaduan_wa,
                'link_informasi_covid' => $request->link_informasi_covid
        ]);    
        } else {
            $modul = Modul::find($id);
            Storage::delete($modul->foto_kepala_desa);
            $modul->update([
            'pengaduan_wa' => $request->pengaduan_wa,
            'link_informasi_covid' => $request->link_informasi_covid,
            'foto_kepala_desa' => $request->file('foto_kepala_desa')->store('modul')
        ]);
        }
        toastr()->success('Modul Berhasil Di Ubah', 'Success');
        return redirect('pengaturan/modul');
    }
}

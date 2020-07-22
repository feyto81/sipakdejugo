<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dusun;

class DusunController extends Controller
{
    public function index()
    {
        $dusun = Dusun::all();
        return view('infodesa.wilayah.index', compact('dusun'));
    }
    public function saveAdd(Request $r)
    {
        $messages = [
            'required' => ':attribute kolom wajib di isi !',
            'unique' => ':attribute sudah ada !',
            'numeric' => ':attribute kolom harus diisi dengan angka !',
            'min' => ':attribute kolom harus di isi minimal :min huruf !',
            'max' => ':attribute kolom harus di isi maksimal :max huruf !',
        ];
        $this->validate($r, [
            'dusun' => 'required|min:2|unique:dusun',
            'kepala_dusun' => 'required|min:2',
            'rw' => 'required',
            'rt' => 'required',
            'kk' => 'required',
            'laki' => 'required',
            'perempuan' => 'required'
        ], $messages);
        $jumlah = $r->laki + $r->perempuan;
        $dusun = new Dusun;
        $dusun->dusun = $r->dusun;
        $dusun->kepala_dusun = $r->kepala_dusun;
        $dusun->rw = $r->rw;
        $dusun->rt = $r->rt;
        $dusun->kk = $r->kk;
        $dusun->laki = $r->laki;
        $dusun->perempuan = $r->perempuan;
        $dusun->jumlah_seluruh = $jumlah;
        $result = $dusun->save();
        toastr()->success('Data Dusun Berhasil Di Tambah', 'Success');
        return back();
    }
    public function getDelete(Request $request,$id)
    {
        
        $dusun = Dusun::find($id);
        $dusun->delete();
        toastr()->success('Data Dusun Berhasil Di Hapus', 'Success');
        return back();
    }
    public function getEdit($id)
    {
        $dusun = Dusun::findOrFail($id);
        return view('infodesa.wilayah.edit', compact('dusun'));
    }
    public function getUpdate(Request $r, $id)
    {$messages = [
            'required' => ':attribute kolom wajib di isi !',
            'unique' => ':attribute sudah ada !',
            'numeric' => ':attribute kolom harus diisi dengan angka !',
            'min' => ':attribute kolom harus di isi minimal :min huruf !',
            'max' => ':attribute kolom harus di isi maksimal :max huruf !',
        ];
        $this->validate($r, [
            'dusun' => 'required|min:2',
            'kepala_dusun' => 'required|min:2',
            'rw' => 'required',
            'rt' => 'required',
            'kk' => 'required',
            'laki' => 'required',
            'perempuan' => 'required'
        ], $messages);

        $dusun = Dusun::find($id);
        $jumlah = $r->laki + $r->perempuan;
        $dusun->dusun = $r->dusun;
        $dusun->kepala_dusun = $r->kepala_dusun;
        $dusun->rw = $r->rw;
        $dusun->rt = $r->rt;
        $dusun->kk = $r->kk;
        $dusun->laki = $r->laki;
        $dusun->perempuan = $r->perempuan;
        $dusun->jumlah_seluruh = $jumlah;
        $dusun->update();
        toastr()->success('Data Dusun Berhasil Di Update', 'Success');
        return redirect('wilayah/konfigurasi');
    }
}

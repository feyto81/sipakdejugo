<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dusun;
use App\Penduduks;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PenduduksExport;
use App\Imports\PenduduktImport;

class PenduduksController extends Controller
{
    public function getIndex()
    {
    	$penduduks = Penduduks::all();
    	return view('penduduks.index',compact('penduduks'));
    }
    public function getAdd()
    {
    	$dukuh = Dusun::all();
    	return view('penduduks.tambah',compact('dukuh'));
    }
    public function getSave(Request $request, $id)
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
        $kt = KarangTaruna::find($id);
        $kt->fill($request->all());
        $kt->update();
        toastr()->success('Data Karang Taruna Berhasil Di Update', 'Success');
        return redirect()->back();
    }
    public function Save(Request $r)
    {
        
        $penduduks = new Penduduks;
        $penduduks->fill($r->all());

        $result = $penduduks->save();
        if ($result) {
            toastr()->success('Penduduk Berhasil Di Tambahkan', 'Success');
            return redirect('penduduks/konfigurasi');
        } else {
            toastr()->error('Penduduk Failed Added', 'Success');
            return back();
        }

    }
    public function getDelete(Request $request,$id)
    {
        $penduduks = Penduduks::find($id);
        $penduduks->delete();
        toastr()->success('Penduduk Berhasil Di Hapus', 'Success');
        return back();
    }
    public function detail($id)
    {
    	$penduduks = Penduduks::find($id);
        return view('penduduks.detail', compact('penduduks'));
    }
    public function getEdit($id)
    {
    	$dukuh = Dusun::all();
        $penduduks = Penduduks::findOrFail($id);
        return view('penduduks.edit', compact('penduduks','dukuh'));
    }
    public function getUpdate(Request $request, $id)
    {
        
        $penduduks = Penduduks::find($id);
        $penduduks->fill($request->all());
        $penduduks->update();
        toastr()->success('Data Penduduk Berhasil Di Update', 'Success');
        return redirect('penduduks/konfigurasi');
    }
    public function eksportexcel()
    {
        return Excel::download(new PenduduksExport,'Data Penduduk.xlsx');
    }
    public function import_excel(Request $request)
    {
        // Validation
        $this->validate($request, ['file' => 'required|mimes:csv.xls,xlsx']);
        // menangkap
        $file = $request->file('file');
        // hasfile
        $nama_file=rand().$file->getClientOriginalName();
        // uploads ke public
        $file->move('file_penduduk',$nama_file);
        // import-data
        Excel::import(new PenduduktImport, public_path('/file_penduduk/'.$nama_file));
        

        return redirect('penduduks/konfigurasi');
    }
}

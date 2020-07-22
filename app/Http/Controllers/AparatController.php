<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aparat;
use Storage;

class AparatController extends Controller
{
    public function index()
    {
    	$aparat = Aparat::all();
    	return view('infodesa.pemerintahdesa.index',compact('aparat'));
    }
    public function getAdd()
    {
    	return view('infodesa.pemerintahdesa.add');
    }
    public function saveAdd(Request $request)
    {
    	$messages = [
            'required' => 'kolom :attribute wajib di isi !',
            'unique' => 'kolom :attribute sudah ada !',
            'numeric' => 'kolom :attribute harus diisi dengan angka !',
            'min' => 'kolom :attribute harus di isi minimal :min huruf !',
            'max' => 'kolom :attribute harus di isi maksimal :max huruf !',
        ];
    	$this->validate($request,[
            'nama' => 'required',
            'nip' => 'required',
            'nik' => 'required',
            'niap' => 'required',
            'tempat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'pangkat' => 'required',
            'jabatan' => 'required',
            'pendidikan_terakhir' => 'required',
            'nomor_sk_pengangkatan' => 'required',
            'tanggal_sk_pengangkatan' => 'required',
            'masa_periode' => 'required',
        ], $messages);
        if(empty($request->file('foto'))){
        Aparat::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
           // 'gambar' => $image,
            'nik' => $request->nik,
            'niap' => $request->niap,
            'tempat' => $request->tempat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'pangkat' => $request->pangkat,
            'jabatan' => $request->jabatan,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'nomor_sk_pengangkatan' => $request->nomor_sk_pengangkatan,
            'tanggal_sk_pengangkatan' => $request->tanggal_sk_pengangkatan,
            'nomor_sk_pemberhentian' => $request->nomor_sk_pemberhentian,
            'tanggal_sk_pemberhentian' => $request->tanggal_sk_pemberhentian,
            'masa_periode' => $request->masa_periode
        ]);
         } else {
        Aparat::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'nik' => $request->nik,
            'niap' => $request->niap,
            'tempat' => $request->tempat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'pangkat' => $request->pangkat,
            'jabatan' => $request->jabatan,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'nomor_sk_pengangkatan' => $request->nomor_sk_pengangkatan,
            'tanggal_sk_pengangkatan' => $request->tanggal_sk_pengangkatan,
            'nomor_sk_pemberhentian' => $request->nomor_sk_pemberhentian,
            'tanggal_sk_pemberhentian' => $request->tanggal_sk_pemberhentian,
            'masa_periode' => $request->masa_periode,
            'foto' => $request->file('foto')->store('aparat')
        ]);
        }
        toastr()->success('Aparat Desa Berhasil Di Tambah', 'Success');
        return redirect('pemerintahdesa/aparatur');
    }

    public function delete($id)
    {
        $aparat = Aparat::find($id);
        if(!$aparat){
            return redirect()->back();
        } else {
            Storage::delete($aparat->foto);
            $aparat->delete();
            toastr()->success('Aparat Berhasil Di Hapus', 'Success');
            return redirect()->back();

        }
    }
    public function edit($id)
    {
        $aparat = Aparat::find($id);
        return view('infodesa.pemerintahdesa.edit', compact('aparat'));
    }
    public function update(Request $request, $id)
    {
    	$messages = [
            'required' => ':attribute kolom wajib di isi !',
            'unique' => ':attribute sudah ada !',
            'numeric' => ':attribute kolom harus diisi dengan angka !',
            'min' => ':attribute kolom harus di isi minimal :min huruf !',
            'max' => ':attribute kolom harus di isi maksimal :max huruf !',
        ];
        $this->validate($request,[
            'nama' => 'required',
            'nip' => 'required',
            'nik' => 'required',
            'niap' => 'required',
            'tempat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'pangkat' => 'required',
            'jabatan' => 'required',
            'pendidikan_terakhir' => 'required',
            'nomor_sk_pengangkatan' => 'required',
            'tanggal_sk_pengangkatan' => 'required',
            'masa_periode' => 'required',

        ],$messages);
        if(empty($request->file('foto'))) {
            $aparat = Aparat::find($id);
            $aparat->update([
             'nama' => $request->nama,
            'nip' => $request->nip,
           // 'gambar' => $image,
            'nik' => $request->nik,
            'niap' => $request->niap,
            'tempat' => $request->tempat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'pangkat' => $request->pangkat,
            'jabatan' => $request->jabatan,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'nomor_sk_pengangkatan' => $request->nomor_sk_pengangkatan,
            'tanggal_sk_pengangkatan' => $request->tanggal_sk_pengangkatan,
            'nomor_sk_pemberhentian' => $request->nomor_sk_pemberhentian,
            'tanggal_sk_pemberhentian' => $request->tanggal_sk_pemberhentian,
            'masa_periode' => $request->masa_periode
        ]);    
        } else {
            $aparat = Aparat::find($id);
            Storage::delete($aparat->foto);
            $aparat->update([
             'nama' => $request->nama,
            'nip' => $request->nip,
            'nik' => $request->nik,
            'niap' => $request->niap,
            'tempat' => $request->tempat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'pangkat' => $request->pangkat,
            'jabatan' => $request->jabatan,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'nomor_sk_pengangkatan' => $request->nomor_sk_pengangkatan,
            'tanggal_sk_pengangkatan' => $request->tanggal_sk_pengangkatan,
            'nomor_sk_pemberhentian' => $request->nomor_sk_pemberhentian,
            'tanggal_sk_pemberhentian' => $request->tanggal_sk_pemberhentian,
            'masa_periode' => $request->masa_periode,
            'foto' => $request->file('foto')->store('aparat')
        ]);
        }
        toastr()->success('Data Aparat Desa Berhasil Di Ubah', 'Success');
        return redirect('pemerintahdesa/aparatur');
    }
}

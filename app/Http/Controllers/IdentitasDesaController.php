<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IdentitasDesa;
use Storage;
use App\MapKantor;
use App\wilayahdesamap;
use App\MediaSocial;

class IdentitasDesaController extends Controller
{
    public function index()
    {
    	$identitas_desa = IdentitasDesa::all();
        return view('infodesa.identitasdesa.index',compact('identitas_desa'));
    }
    public function edit($id)
    {
    	$identitasdesa = IdentitasDesa::findOrFail($id);
        return view('infodesa.identitasdesa.edit',compact('identitasdesa'));
    }
    public function update(Request $request, $id)
    {
    	$messages = [
            'required' => 'kolom :attribute wajib di isi !',
            'unique' => ':attribute sudah ada !',
            'numeric' => 'kolom :attribute harus diisi dengan angka !',
            'min' => 'kolom :attribute harus di isi minimal :min huruf !',
            'max' => 'kolom :attribute harus di isi maksimal :max huruf !',
        ];
        $this->validate($request,[
            'nama_desa' => 'required',
            'kode_desa' => 'required',
            'kode_pos_desa' => 'required',
            'kepala_desa' => 'required',
            'nip_kepala_desa' => 'required',
            'alamat_kantor_desa' => 'required',
            'email_desa' => 'required',
            'telepon_desa' => 'required',
            'website_desa' => 'required',
            'nama_kecamatan' => 'required',
            'kode_kecamatan' => 'required',
            'nama_camat' => 'required',
            'nip_camat' => 'required',
            'nama_kabupaten' => 'required',
            'kode_kabupaten' => 'required',
            'provinsi' => 'required',
            'kode_provinsi' => 'required'

        ],$messages);
        if(empty($request->file('lambang_desa'))) {
            $identitasdesa = IdentitasDesa::find($id);
            $identitasdesa->update([
             'nama_desa' => $request->nama_desa,
             'kode_desa' => $request->kode_desa,
             'kode_pos_desa' => $request->kode_pos_desa,
             'kepala_desa' => $request->kepala_desa,
             'nip_kepala_desa' => $request->nip_kepala_desa,
             'alamat_kantor_desa' => $request->alamat_kantor_desa,
             'email_desa' => $request->email_desa,
             'telepon_desa' => $request->telepon_desa,
             'website_desa' => $request->website_desa,
             'nama_kecamatan' => $request->nama_kecamatan,
             'kode_kecamatan' => $request->kode_kecamatan,
             'nama_camat' => $request->nama_camat,
             'nip_camat' => $request->nip_camat,
             'nama_kabupaten' => $request->nama_kabupaten,
             'kode_kabupaten' => $request->kode_kabupaten,
             'provinsi' => $request->provinsi,
             'kode_provinsi' => $request->kode_provinsi
        ]);    
        } else {
            $identitasdesa = IdentitasDesa::find($id);
            Storage::delete($identitasdesa->lambang_desa);
            $identitasdesa->update([
            'nama_desa' => $request->nama_desa,
             'kode_desa' => $request->kode_desa,
             'kode_pos_desa' => $request->kode_pos_desa,
             'kepala_desa' => $request->kepala_desa,
             'nip_kepala_desa' => $request->nip_kepala_desa,
             'alamat_kantor_desa' => $request->alamat_kantor_desa,
             'email_desa' => $request->email_desa,
             'telepon_desa' => $request->telepon_desa,
             'website_desa' => $request->website_desa,
             'nama_kecamatan' => $request->nama_kecamatan,
             'kode_kecamatan' => $request->kode_kecamatan,
             'nama_camat' => $request->nama_camat,
             'nip_camat' => $request->nip_camat,
             'nama_kabupaten' => $request->nama_kabupaten,
             'kode_kabupaten' => $request->kode_kabupaten,
             'provinsi' => $request->provinsi,
             'kode_provinsi' => $request->kode_provinsi,
             'lambang_desa' => $request->file('lambang_desa')->store('lambang_desa')
            
        ]);
        }
        toastr()->success('Identitas Desa Berhasil Di Ubah', 'Success');
        return redirect('identitas-desa/konfigurasi');
    }
    public function map_kantor($id)
    {
        $map_kantor = MapKantor::findOrFail($id);
        return view('infodesa.identitasdesa.mapkantor',compact('map_kantor'));
    }
    public function update_lokasi(Request $request, $id)
    {
        $lokasi_kantor = MapKantor::find($id);
        $lokasi_kantor->fill($request->all());
        $lokasi_kantor->update();
        toastr()->success('Data Lokasi Kantor Desa Berhasil Di Update', 'Success');
        return redirect('identitas-desa/konfigurasi');
    }
    public function peta_wilayah($id)
    {
        $peta_wilayah = WilayahDesaMap::findOrFail($id);
        return view('infodesa.identitasdesa.peta_wilayah',compact('peta_wilayah'));
    }
    public function update_peta_wilayah(Request $request, $id)
    {
        $peta = WilayahDesaMap::find($id);
        $peta->fill($request->all());
        $peta->update();
        toastr()->success('Data Peta Wilayah Desa Berhasil Di Update', 'Success');
        return redirect()->back();
    }
    public function media_social($id)
    {
        $media_social = MediaSocial::findOrFail($id);
        return view('infodesa.identitasdesa.media_social',compact('media_social'));
    }
    public function update_medias(Request $request, $id)
    {
        $messages = [
            'required' => 'kolom :attribute wajib di isi !',
            'unique' => ':attribute sudah ada !',
            'numeric' => 'kolom :attribute harus diisi dengan angka !',
            'min' => 'kolom :attribute harus di isi minimal :min huruf !',
            'max' => 'kolom :attribute harus di isi maksimal :max huruf !',
        ];
        $this->validate($request,[
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'Whatsapp' => 'required'
        ],$messages);
        $social = MediaSocial::find($id);
        $social->fill($request->all());
        $social->update();
        toastr()->success('Data Media Social Desa Berhasil Di Update', 'Success');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;
use DB;

class SuratController extends Controller
{
    public function getIndex()
    {
    	return view('surat.all');
    }
    public function getPengantar()
    {
    	return view('surat.pengantar.index');
    }
    public function getPrint(Request $request)
    {
		    	
    	$kabupaten = 'KABUPATEN JEPARA';
    	$kecamatan = 'KECAMATAN DONOROJO';
    	$desa = $request->n_d;
    	$alamat_desa = 'Jl. Raya Senggigi Km 10 Kerandangan  Kode Pos: 83355';
    	$judul_surat = 'SURAT KETERANGAN PENGANTAR';
    	$nomor_surat = $request->nomor_surat;
    	$jabatan = $request->jabatan;
    	$provinsi = 'JAWA TENGAH';
		$nama = $request->nama;
		$t = $request->tempat;
		$tl = $request->tanggal_lahir;
		$umur = $request->umur;
		$wn = $request->wn;
		$agama = $request->agama;
		$jenis_kelamin = $request->jenis_kelamin;
		$pekerjaan = $request->pekerjaan;
		$alamat = $request->alamat;
		$no_ktp = $request->np_ktp;
		$no_kk = $request->no_kk;
		$keperluan = $request->keperluan;
		$tanggal_awal = $request->tanggal_awal;
		$tanggal_akhir = $request->tanggal_akhir;
		$golongan_darah = $request->golongan_darah;
		$tanggal_surat = $request->tanggal_awal;
		$tta = $request->tta;
		$pamong = $request->staff;


		// memanggil dan membaca template dokumen yang telah kita buat
		$document = file_get_contents("surat/surat_ket_pengantar.rtf");
		// isi dokumen dinyatakan dalam bentuk string
		$document = str_replace("SEBUTAN_KABUPATEN", $kabupaten, $document);
		$document = str_replace("KECAMATAN", $kecamatan, $document);
		$document = str_replace("provinsi", $provinsi, $document);
		$document = str_replace("alamat_des", $alamat_desa, $document);
		$document = str_replace("judul_surat", $judul_surat, $document);
		$document = str_replace("fns", $nomor_surat, $document);
		$document = str_replace("judul_surat", $judul_surat, $document);
		$document = str_replace("nama", $nama, $document);
		$document = str_replace("jabatan", $jabatan, $document);
		$document = str_replace("des", $desa, $document);
		$document = str_replace("nama", $nama, $document);
		$document = str_replace("tempat", $t, $document);
		$document = str_replace("tel", $tl, $document);
		$document = str_replace("usia", $umur, $document);
		$document = str_replace("warga_negara", $wn, $document);
		$document = str_replace("sex", $jenis_kelamin, $document);
		$document = str_replace("pekerjaan", $pekerjaan, $document);
		$document = str_replace("alamat", $alamat, $document);
		$document = str_replace("ktp", $no_ktp, $document);
		$document = str_replace("no_kk", $no_kk, $document);
		$document = str_replace("keperluan", $keperluan, $document);
		$document = str_replace("mulai_berlaku", $tanggal_awal, $document);
		$document = str_replace("tgl_akhir", $tanggal_akhir, $document);
		$document = str_replace("tgl_surat", $tanggal_awal, $document);
		$document = str_replace("penandatangan", $tta, $document);
		$document = str_replace("pamong", $pamong, $document);
		$document = str_replace("gol_darah", $golongan_darah, $document);






		// $document = str_replace("#ALAMAT", $alamat, $document);
		// $document = str_replace("#TANGGAL", $tanggal, $document);
		// $document = str_replace("#WALI", $wali, $document);
		// header untuk membuka file output RTF dengan MS. Word
		header("Content-type: application/msword");
		header("Content-disposition: inline; filename=Surat Pengantar.doc");
		header("Content-length: ".strlen($document));
		echo $document;
    }
    public function NoSurat()
    {
        $max = DB::table('surat')->where('surat_id', \DB::raw("(select max(`surat_id`) from surat)"))->pluck('surat_id');
        $check_max = DB::table('surat')->count();
        if ($check_max == null) {
            $max_code = "SR-000001";
        } else {
            $max_code = $max[0];
            $max_code++;
        }
        return $max_code;
    }
    public function getSuccess(Request $request)
    {
    	$surat_no = $request->surat_id;
    	return view('frontend.surat.success',compact('surat_no'));
    }
    public function getPost(Request $request)
    {

        $surat = new Surat;
        $surat->surat_id = $request->surat_id;
        $surat_id = $request->surat_id;
        $surat->nama = $request->nama;
        $surat->nik = $request->nik;
        $surat->no_wa = $request->no_wa;
        $surat->jenis_surat = $request->jenis_surat;
        $surat->keperluan = $request->keperluan;
        $surat->tanggal = $request->tanggal;
        $result = $surat->save();
        return redirect('surat/success/'.$surat_id);
    }
    public function barcodeqrcode(Request $request,$surat_id)
    {
        $baris = Surat::find($surat_id);
        $surat_id = $request->surat_id;
        return view('frontend.surat.print', compact('baris','surat_id'));
    }
}

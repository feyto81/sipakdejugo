<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Penduduks;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PenduduksExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize
{
	public function collection()
	{
		return Penduduks::all();
	}
	public function map($penduduks): array
	{

		return [


			$penduduks->nik,
			$penduduks->no_kk,
			$penduduks->nama,
			$penduduks->jenis_kelamin,
			$penduduks->tempat_lahir,
			$penduduks->tanggal_lahir,
			$penduduks->umur,
			$penduduks->hubungan_keluarga,
			$penduduks->dukuh,
			$penduduks->rt,
			$penduduks->rw,
			$penduduks->alamat,
			$penduduks->desa,
			$penduduks->kec,
			$penduduks->kab,
			$penduduks->agama,
			$penduduks->pendidikan,
			$penduduks->pekerjaan,
			$penduduks->status_perkawinan,
			$penduduks->gol_darah,
			$penduduks->nama_ayah,
			$penduduks->nik_ayah,
			$penduduks->nama_ibu,
			$penduduks->nik_ibu,
			$penduduks->kewarganegaraan,
			$penduduks->kelainan_fisik,
			$penduduks->penyandang_cacat,
			$penduduks->akte_kelahiran,
			$penduduks->no_akte_kelahiran,
			$penduduks->buku_nikah,
			$penduduks->no_akta_buku_nikah,
			$penduduks->tanggal_kawin,
			$penduduks->akta_cerai,
			$penduduks->no_akta_cerai,
			$penduduks->tanggal_penceraian
		];
	}
	public function headings(): array
	{
		return [
			'NIK',
			'NO.KK',
			'NAMA',
			'L/P',
			'TMP LAHIR',
			'TGL.LAHIR',
			'UMUR',
			'HUB.KELUARGA',
			'DUKUH',
			'RT.',
			'RW.',
			'ALAMAT LENGKAP',
			'DESA',
			'KEC',
			'KAB',
			'AGAMA',
			'PENDIDIKAN',
			'PEKERJAAN',
			'STATUS PERKAWINAN',
			'GOLONGAN DARAH',
			'NAMA AYAH',
			'NIK AYAH',
			'NAMA IBU',
			'NIK IBU',
			'KEWARGANEGARAAN',
			'KELAINAN FISIK',
			'PENYANDANG CACAT',
			'AKTE KELAHIRAN',
			'NO. AKTE KELAHIRAN',
			'AKTA/BUKU NIKAH',
			'NO. AKTA/BUKU NIKAH',
			'TANGGAL KAWIN',
			'AKTA CERAI',
			'NO.AKTA CERAI',
			'TANGGAL PENCERAIAN'

		];
	}
}

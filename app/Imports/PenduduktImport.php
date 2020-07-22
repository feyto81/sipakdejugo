<?php

namespace App\Imports;

use App\Penduduks;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Events\BeforeImport;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;


class PenduduktImport implements ToModel, WithStartRow, WithCalculatedFormulas, WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            0 => $this
        ];
    }


    public function model(array $row)
    {

        return new Penduduks([
            
            'nik'=>$row[1],
            'no_kk'=>$row[2],
            'nama'=>$row[3],
            'jenis_kelamin'=>$row[4],
            'tempat_lahir'=>$row[5],
            'tanggal_lahir'=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[6]),
            'umur'=>$row[7],
            'hubungan_keluarga'=>$row[8],
            'dukuh'=>$row[9],
            'rt'=>$row[10],
            'rw'=>$row[11],
            'alamat'=>$row[12],
            'desa'=>$row[13],
            'kec'=>$row[14],
            'kab'=>$row[15],
            'agama'=>$row[16],
            'pendidikan'=>$row[17],
            'pekerjaan'=>$row[18],
            'status_perkawinan'=>$row[19],
            'gol_darah'=>$row[20],
            'nama_ayah'=>$row[21],
            'nik_ayah'=>$row[22],
            'nama_ibu'=>$row[23],
            'nik_ibu'=>$row[24],
            'kewarganegaraan'=>$row[25],
            'kelainan_fisik'=>$row[26],
            'penyandang_cacat'=>$row[27],
            'akte_kelahiran'=>$row[28],
            'no_akte_kelahiran'=>$row[29],
            'buku_nikah'=>$row[30],
            'no_akta_buku_nikah'=>$row[31],
            'tanggal_kawin'=>$row[32],
            'akta_cerai'=>$row[33],
            'no_akta_cerai'=>$row[34],
            'tanggal_penceraian'=>$row[35],
            
        ]);
    }
    public function startRow(): int 
    {
        return 3;
    }
    public function batchSize(): int
    {
        return 2000;
    }
}

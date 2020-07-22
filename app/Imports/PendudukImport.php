<?php

namespace App\Imports;

use App\Penduduk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PendudukImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Penduduk([
            // 'pendudukid'=>$row[0],
            'urutkk'=>$row[0],
            'nokk'=>$row[1],
            'nik'=>$row[2],
            'name'=>$row[3],
            'gender'=>$row[4],
            'tmp_lahir'=>$row[5],
            'tanggal_lahir'=>$row[6],
            'hub_keluarga'=>$row[7],
            'dukuh'=>$row[8],
            'rt'=>$row[9],
            'rw'=>$row[10],
            'desa'=>$row[11],
            'kecamatan'=>$row[12],
            'kabupaten'=>$row[13],
            'agama'=>$row[14],
            'pendidikan'=>$row[15],
            'pekerjaan'=>$row[16],
            'status_perkawinan'=>$row[17],
            'ayah' => $row [18],
            'ibu' => $row [19],
            // 'created_at' => $row(18),
        ]);
    }
    public function startRow(): int 
    {
        return 3;
    }
}

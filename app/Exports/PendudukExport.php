<?php

namespace App\Exports;

use App\Penduduk;
use Maatwebsite\Excel\Concerns\FromCollection;

class PendudukExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penduduk::all();
    }
}

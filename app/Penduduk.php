<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduks';
    protected $primaryKey= 'pendudukid';
    protected $fillable=['nokk','nik','name','gender','tanggal_lahir','hub_keluarga','alamat','rt_rw','desa','kecamatan','tmp_lahir','agama','pendidikan','pekerjaan','status_perkawinan','ayah','ibu'];
    public $timestamps = false;
}

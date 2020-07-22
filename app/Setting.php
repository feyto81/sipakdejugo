<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'datadesa';
    protected $primaryKey= 'data_id';
    public $timestamps = false;

}

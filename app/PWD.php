<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PWD;

class PWD extends Model
{
    protected $table = 'wilayahdesa';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

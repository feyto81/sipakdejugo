<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Bagan extends Model
{
    protected $table = 'bagan';
    protected $primaryKey = 'id';
    protected $guarded = [];

    // public function User()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}

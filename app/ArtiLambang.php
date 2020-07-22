<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class ArtiLambang extends Model
{
    protected $table = 'artilambang';
    protected $primaryKey = 'id';
    protected $guarded = [];

    
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

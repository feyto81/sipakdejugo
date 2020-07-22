<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LPM extends Model
{
    protected $table = 'lpm';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

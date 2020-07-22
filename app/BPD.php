<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BPD extends Model
{
    protected $table = 'bpd';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

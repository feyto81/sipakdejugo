<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class VM extends Model
{
    protected $table = 'visimisi';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

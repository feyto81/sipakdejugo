<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Sejarah extends Model
{
    protected $table = 'profildesa';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

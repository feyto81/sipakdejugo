<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class PM extends Model
{
    protected $table = 'pemerintahdesa';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

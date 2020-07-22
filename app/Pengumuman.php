<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}

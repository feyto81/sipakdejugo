<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;

class Berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'categoris_id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}

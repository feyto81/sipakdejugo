<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Berita;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $guarded = [];


    public function setSlugAttributes($value)
    {
    	$this->attributes['slug'] = Str::slug($value,'-');
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function Berita()
    {
        return $this->hasMany(Berita::class, 'categoris_id','id');
    }
}

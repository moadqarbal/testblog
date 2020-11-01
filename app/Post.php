<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Post extends Model
{
    //
    public $guarded = [''];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // fetch post by slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}

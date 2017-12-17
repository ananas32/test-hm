<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getUrlAttribute()
    {
        return url($this->category->slug . '/' . $this->slug);
    }

}
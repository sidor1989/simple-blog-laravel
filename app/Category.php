<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Article;

class Category extends Model
{

   

    public function articles(){
        return $this->hasMany(Article::class);
    }

/*
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
    */
    // Get children category
    public function children() {
        return $this->hasMany(self::class, 'parent_id');
    }

}

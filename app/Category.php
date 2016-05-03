<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function category() {
        return $this->belongsTo('\p4\Category')->category();
    }

    public static function getAllCategories() {
        return \p4\Category::orderBy('id','asc')->get();
    }
}

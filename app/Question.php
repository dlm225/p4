<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public static function getAllCategories() {
        return \p4\Question::orderBy('id','asc')->get();
    }
}

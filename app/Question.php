<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    public function question() {
        return $this->belongsTo('\p4\Question')->question();
    }

    public static function getAllQuestions() {
        return \p4\Question::orderBy('id','asc')->get();
    }

    public static function getCategoryQuestions($id) {
        $questions = \DB::table('questions')->where('category_id','=',$id)->get();
        return $questions;
    }

    public static function getQuestion($id) {
        $question = \DB::table('questions')->where('id','=',$id)->get();
        return $question;
    }
}

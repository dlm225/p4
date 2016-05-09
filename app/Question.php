<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['category_id','question','flag','difficulty','hint1','hint2','createdby','approved'];

    public function user() {
        return $this->belongsTo('\p4\User');
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

    public static function needValidated() {
        $needvalidated = \DB::table('questions')->where('approved','=','0')->get();
        return $needvalidated;
    }
}

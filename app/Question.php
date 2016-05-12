<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['category_id','question','flag','difficulty','hint1','hint2','createdby','approved'];

    /** Get the user that created the question **/
    public function user() {
        return $this->belongsTo('\p4\User', 'createdby');
    }

    /** Get the category that owns the question **/
    public function category() {
        return $this->belongsTo('\p4\Category');
    }

    /** Get the submissions for the question **/
    public function submissions() {
        return $this->hasMany('\p4\Submission');
    }

    public static function getAllQuestionsA() {
        return \p4\Question::orderBy('id','asc')->get();
    }

    /* Retrieve all questions for a specific category */
    public static function getCategoryQuestions($id) {
        $userid = \Auth::id();
        $questions = \p4\Question::with(['submissions' => function($query) {
                $query->where('user_id','=',\Auth::id())->get();
            }])
            ->where('category_id','=',$id)
            ->where('approved','=','1')
            ->where('createdby','<>',$userid)
            ->get();
        return $questions;
    }

    public static function getQuestion($id) {
        $question = \DB::table('questions')->where('id','=',$id)->get();
        return $question;
    }

    public static function getAllQuestions() {
        $allquestions = \p4\Question::with('category', 'user')->get();
        return $allquestions;
    }

    /* Get all categories - with count of number of questions per category */
    public static function questionsByCategoryCount() {
        $questionsByCatCount = \DB::table('questions')->select('category_id', \DB::raw('count(*) as total'))
            ->where('approved','=','1')
            ->where('createdby','<>',\Auth::id())
            ->groupBy('category_id')
            ->get();
        return $questionsByCatCount;
    }

    public static function getCategoryId($id) {
        $categoryid = \DB::table('questions')->select('category_id')->where('id','=',$id)->first();
        return $categoryid;
    }
}

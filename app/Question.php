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

    public static function getCategoryQuestions($id) {
        $questions = \DB::table('questions')
            ->where('category_id','=',$id)
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

    public static function questionsByCategoryCount() {
        $questionsByCatCount = \DB::table('questions')->select('category_id', \DB::raw('count(*) as total'))
            ->groupBy('category_id')
            ->get();
        return $questionsByCatCount;
    }

    public static function getCategoryId($id) {
        $categoryid = \DB::table('questions')->select('category_id')->where('id','=',$id)->first();
        return $categoryid;
    }

    public static function numOfQuestionsNotAnsweredPerCategory() {
        $stuff = \p4\Question::with('category','submissions')
                ->where('')
                ->get();
        dump($stuff[0]->submissions[0]->points_awarded);

//        $user = \Auth::user();
//        $categories = \p4\Category::get();
//        $questions = \p4\Questions::get();
//        $submissions = \p4\Submission::where('user_id','=',$user->id)->get();
//
//        foreach($categories as $category) {
//            foreach($questions as $question) {
//
//            }
//        }
//        $numNotAnswered = array('category_id','numNotAnswered');
//        $numNotAnswered = array_add($numNotAnswered, '','');
//        return $numNotAnswered;
    }
}

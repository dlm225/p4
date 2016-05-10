<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{

    protected $fillable = ['question_id','user_id','tries','hint1used','hint2used'];

    public function user() {
        return $this->hasOne('\p4\User');
    }

    public function question() {
        return $this->hasOne('\p4\Question');
    }

    public static function getSubmission($id) {
        $user = \Auth::id();
        $submission = \p4\Submission::where('question_id','=',$id)->where('user_id','=',$user)->first();
        return $submission;
    }

    public static function setHint1Used($id) {
        $user = \Auth::user();
        $submission = new Submission;

        $submission->user_id = $user['id'];
        $submission->question_id = $id;
        $submission->hint1used = true;
        $submission->save();
    }
}

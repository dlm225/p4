<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    public static function getSubmission($id) {
        $user = \Auth::user();
        $submission = \DB::table('submissions')
            ->where('user_id','=',$user['id'])
            ->where('question_id','=',$id)
            ->get();
        return $submission;
    }

    public static function setHint1Used($id) {
        $user = \Auth::user();
        $submission = new Submission;
        dump($user);
        $submission->user_id = $user['id'];
        $submission->question_id = $id;
        $submission->hint1used = true;
        $submission->save();
    }
}

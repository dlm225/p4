<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use p4\Submission;

class GameController extends Controller {

    public function getGameboardByCategory($id) {
        $category = \p4\Category::find($id);
        $questions = \p4\Question::getCategoryQuestions($id);
        return view('game.gameboard')
            ->with('questions',$questions)
            ->with('category',$category);
    }

    public function getQuestion($id) {
        $user = \Auth::user();
        $category = \p4\Category::find($id);
        $question = \p4\Question::find($id);
        $submission = \p4\Submission::getSubmission($id);
        dump($submission);
        return view('game.question')
            ->with('category',$category)
            ->with('question',$question)
            ->with('submission',$submission);
    }

    public function postFlag(Request $request) {

        $this->validate($request,[
            'flag' => 'exists:questions,flag,id,'.$request->question
        ]);
        echo $request->question;
        echo $request->flag;
        //return redirect('/play');
    }

    public function setHint1Used($id) {
        $submission = \p4\Submission::setHint1Used($id);
        return $this->getQuestion($id);
    }

    public function getCreate() {
        return view('game.create');
    }
}

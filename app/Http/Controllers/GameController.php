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

        return view('game.question')
            ->with('category',$category)
            ->with('question',$question)
            ->with('submission',$submission);
    }

    public function postFlag(Request $request) {
        $question = \p4\Question::find($request->question);
        $submission = \p4\Submission::getSubmission($request->question);
        $category = \p4\Category::find($request->category);

        $this->validate($request,[
            'flag' => 'required'
        ]);

        if(!$submission) {
            $submission = new Submission;
            $submission->question_id = $request->question;
            $submission->user_id = \Auth::user()->id;
            $submission->tries = 1;
            $submission->save();
        }
        else {
            $submission->question_id = $request->question;
            $submission->user_id = \Auth::user()->id;
            $submission->tries = $submission->tries + 1;
            $submission->save();
        }

        if($request->flag != $question->flag) {
            \Session::flash('flag_msg', 'Your submitted flag was incorrect.');
            return redirect('/question/'.$question->id);
        }
        if($request->flag == $question->flag) {
            $user = \Auth::user();
            $award = $question->difficulty * 100;
            $user->points = $user->points + $award;
            $user->save();
            $submission->points_awarded = $award;
            $submission->save();
            \Session::flash('points_msg', 'Correct! You scored '.$award.' points.');
            return redirect('/gameboard/'.$question->category_id);
        }
    }

    public function setHint1Used($id) {
        $submission = \p4\Submission::setHint1Used($id);
        return $this->getQuestion($id);
    }

    public function getCreateQuestion() {
        $categories_for_dropdown = \p4\Category::categoriesForDropdown();
        return view('game.create')
            ->with('categories_for_dropdown', $categories_for_dropdown);
    }

    public function postCreateQuestion(Request $request) {
        $messages = [
            'not_in' => 'You have to choose a category.',
        ];

        $this->validate($request,[
            'category_id' => 'not_in:0',
            'question' => 'required|min:3',
            'hint1' => 'required|min:3',
            'hint2' => 'required|min:3',
            'flag' => 'required|min:3|max:64',
        ],$messages);

        $data = $request->only('category_id','question','flag','difficulty','hint1','hint2');
        $data['createdby'] = \Auth::id();
        $data['approved'] = '0';

        $question = \p4\Question::create($data);

        $question->save();

        return redirect('/questionsubmitted');
    }

    public function questionSubmitted() {
        return view('game.submitted');
    }
}

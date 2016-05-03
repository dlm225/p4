<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use Carbon\Carbon;

class GameController extends Controller {

    public function getGameboardByCategory($id) {
        $category = \p4\Category::find($id);
        $questions = \p4\Question::getCategoryQuestions($id);
        return view('game.gameboard')
            ->with('questions',$questions)
            ->with('category',$category);
    }

    public function getQuestion($id) {
        $category = \p4\Category::find($id);
        $question = \p4\Question::find($id);
        return view('game.question')
            ->with('category',$category)
            ->with('question',$question);
    }
}

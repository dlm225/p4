<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller {

    public function getUserlist() {
        $userlist = \Auth::user()->get();
        return view('admin.users')
            ->with('userlist', $userlist);
    }

    public function getDeleteUser($id) {
        $user = \p4\User::find($id);
        return view('admin.confirmdelete')
            ->with('user', $user);
    }

    public function getDeleteConfirmed($id) {
        $user = \p4\User::find($id);
        $username = $user->username;
        $user->delete();
        return view('admin.deleteconfirmed')
            ->with('username', $username);
    }

    public function getAllQuestions() {
        $allquestions = \p4\Question::getAllQuestions();
        return view('admin.questions')
            ->with('allquestions',$allquestions);
    }

    public function getDeleteQuestion($id) {
        $question = \p4\Question::find($id);
        $category = \p4\Category::find($id);
        return view('admin.confirmquestiondelete')
            ->with('category', $category)
            ->with('question', $question);
    }

    public function getDeletedQuestionConfirmed($id) {
        $question = \p4\Question::find($id);
        $question->delete();
        \Session::flash('message', 'Question #'.$id.' has been deleted.');
        $allquestions = \p4\Question::get();
        return view('admin.questions')
            ->with('allquestions', $allquestions);
    }
}

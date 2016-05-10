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

    public function getEditQuestion($id) {
        $question = \p4\Question::find($id);
        $categories_for_dropdown = \p4\Category::categoriesForDropdown();
        return view('admin.editquestion')
            ->with('categories_for_dropdown', $categories_for_dropdown)
            ->with('question', $question);
    }

    public function postEditQuestion(Request $request) {
        $allquestions = \p4\Question::get();
        $question = \p4\Question::find($request->id);
        $messages = [
            'not_in' => 'You have to choose a category.',
        ];

        $this->validate($request,[
            'category_id' => 'not_in:0',
            'question' => 'required|min:3',
            'flag' => 'required|min:3',
            'hint1' => 'required|min:3',
            'hint2' => 'required|min:3',
            'difficulty' => 'required|min:1|max:5'
        ],$messages);

        $question->category_id = $request->category_id;
        $question->question = $request->question;
        $question->flag = $request->flag;
        $question->hint1 = $request->hint1;
        $question->hint2 = $request->hint2;
        $question->difficulty = $request->difficulty;
        $question->approved = '1';
        $question->save();

        return view('admin.questions')
            ->with('allquestions',$allquestions);
    }
}

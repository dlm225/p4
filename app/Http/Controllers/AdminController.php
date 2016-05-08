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
}

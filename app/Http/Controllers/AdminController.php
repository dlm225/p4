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
}

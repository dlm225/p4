<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

class MoreController extends Controller {

    /**
    * Responds to requests to GET /leaderboard
    */
    public function getLeaderboard() {
        $leaders = \p4\User::orderBy('points','desc')->get();
        return view('more.leaderboard')->with('leaders',$leaders);
    }

}

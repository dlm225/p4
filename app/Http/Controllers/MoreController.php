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

    /**
    * Responds to requests to GET /howto
    */
    public function howToPlay() {
        return view('more.howto');
    }

    /**
    * Responds to requests to GET /study
    */
    public function study() {
        return view('more.study');
    }

}

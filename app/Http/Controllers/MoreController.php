<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

class MoreController extends Controller {

    /**
    * Responds to requests to GET /leaderboard
    */
    public function getLeaderboard() {
        return view('more.leaderboard');
    }

}

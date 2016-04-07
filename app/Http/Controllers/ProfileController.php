<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

class ProfileController extends Controller {

    /**
    * Responds to requests to GET /
    */
    public function join() {
        return view('profile.join');
    }
}

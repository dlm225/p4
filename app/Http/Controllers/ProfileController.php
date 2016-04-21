<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

class ProfileController extends Controller {

    /**
    * Responds to requests to GET /join
    */
    public function join() {
        return view('profile.join');
    }

    /**
    * Responds to requests to GET /profile
    * Used when player requests to view their own or another profile page
    */
    public function getProfile() {
        return view('profile.profile');
    }
}

<?php

namespace p4\Http\Controllers;

use Auth;
use p4\Http\Controllers\Controller;

class ProfileController extends Controller {

    /**
    * Responds to requests to GET /profile
    * Used when player requests to view their own or another profile page
    */
    public function getProfile() {
        $user = Auth::user();
        return view('profile.profile')->with('user',$user);
    }

    public function getProfileUpdate() {
        $user = Auth::user();
        return view('profile.profileupdate')->with('user',$user);
    }

    public function postProfileUpdate() {
        $user = Auth::user();
        return view('profile.profileupdate')->with('user',$user);
    }
}

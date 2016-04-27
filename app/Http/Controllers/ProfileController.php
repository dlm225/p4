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
        //$user = \p4\User::where('id', \p4\Auth::user())->first();
        $user = Auth::user();
        return view('profile.profile')->with('user',$user);
    }

    public function getProfileUpdate() {
        //$user = \p4\User::where('id', \p4\Auth::user())->first();
        $user = Auth::user();
        return view('profile.profileupdate')->with('user',$user);
    }
}

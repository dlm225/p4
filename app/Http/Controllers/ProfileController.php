<?php

namespace p4\Http\Controllers;

use Auth;
use p4\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function postProfileUpdate(Request $request) {
        $user = Auth::user();

        $this->validate($request,[
            'username' => 'required|min:3',
            'email' => 'required|email',
        ]);

        $user->username = $request->username;
        $user->email= $request->email;
        $user->location = $request->location;
        if($request->resetimage == 'resetimage') {
            $user->profile_image = '/images/defaultprofile.png';
        }
        else if($request->file('newimage')) {
            $imagename = $user->username.'.'.
                $request->file('newimage')->getClientOriginalExtension();
            $request->file('newimage')->move(
                base_path().'/public/images/users/', $imagename
            );
            $user->profile_image = '/images/users/'.$imagename;
        }
        $user->save();

        return redirect('/profile');
    }
}

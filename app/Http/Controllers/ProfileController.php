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

    public function postProfileUpdate(Request $request) {
        $book = \App\Book::find($request->id);

        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->published = $request->published;
        $book->cover = $request->cover;
        $book->purchase_link = $request->purchase_link;
        if($request->tags) {
            $tags = $request->tags;
        }
        else {
            $tags = [];
        }
        $book->tags()->sync($tags);
        $book->save();

        \Session::flash('message','Your changes were made.');
        return redirect('/book/edit/'.$request->id);
    }

        $user = Auth::user();
        return view('profile.profileupdate')->with('user',$user);
}

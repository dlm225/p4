<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

class HomeController extends Controller {

    /**
    * Responds to requests to GET /
    */
    public function getIndex() {
        return view('homepage');
    }

    /**
    * Responds to requests to GET /about
    */
    public function getAbout() {
        return view('about');
    }
}

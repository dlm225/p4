<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

class HomeController extends Controller {

    /**
    * Responds to requests to GET /
    */
    public function index() {
        return view('homepage');
    }
}

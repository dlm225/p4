<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use Carbon\Carbon;

class HomeController extends Controller {

    /**
    * Responds to requests to GET /
    */
    public function getIndex() {
        return view('index');
    }

    /**
    * Responds to requests to GET /about
    */
    public function about() {
        return view('about');
    }
}

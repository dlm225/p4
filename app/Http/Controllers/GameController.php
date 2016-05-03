<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use Carbon\Carbon;

class GameController extends Controller {

    /**
    * Responds to requests to GET /gameboard
    */
    public function getGameboard() {
        $category = \p4\Category::find($id);
        return view('game.gameboard')->with('category',$category);
    }

    public function getGameboardCategory($id) {
        $category = \p4\Category::find($id);
        return view('game.gameboard')->with('category',$category);
    }
}

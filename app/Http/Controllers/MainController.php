<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    function list() {

        // if (!isset(auth()->$user)) {

        if (view()->exists('default.main')) {
            return view('default.main');
        }
        abort(404);
        // } else {

        //     return view('default.main');
        // }
    }

    public function add()
    {
        if (view()->exists('default.forms.add')) {
            return view('default.forms.add');
        }
        abort(404);

    }

}

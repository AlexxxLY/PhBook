<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function show()
    {

        // if (!isset(auth()->$user)) {

            if (view()->exists('default.index')) {
                return view('default.index');
            }
            abort(404);
        // } else {

        //     return view('default.main');
        // }
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
  public function show(){

    if(view()->exists('default.index')){
        return view('default.index');
    }
    abort(404);
  }  
   
}

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
        } else {
            abort(404);
        }
        // $user_name = Auth::user()->name;
        // Phone_contact::create([
        //     'name' => $request->name,
        //     'number' => $request->number,
        //     'notes' => $request->notes,
        //     // 'user_id' => $user_name,
        // ]);
        // return redirect(route(''));
    }

    // public function delete($id)
    // {
    //     Phone_contact::find($id)->delete();
    //     // return redirect(route(''));
    // }

}

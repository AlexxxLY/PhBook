<?php

namespace App\Http\Controllers;

use App\Phone_contact;
use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        // if (view()->exists('default.forms.add')) {
        //     return view('default.forms.add');
        // } else {
        //     abort(404);
        // }
        //  $contacts  = Phone_contact::all();
        $contacts = Phone_contact::where('user_id', 1)
            ->orderBy('name')
        // ->limit($countNews)
            ->get();
        if (view()->exists('default.index')) {
            return view('default.index', ['contacts' => $contacts]);
            // return view('default.index');
        } else {
            abort(404);
        }

    }

    function list() {
        if (view()->exists('default.forms.add')) {
            return view('default.forms.add');
        } else {
            abort(404);
        }
        // $contacts  = Phone_contact::all();

        // if (view()->exists('default.index')) {
        //     // return view('default.index',['contacts' => $contacts]);
        //     return view('default.index');
        // }
        // else{
        //     abort(404);
        // }

    }

    public function add(Request $request)
    {
        // if (view()->exists('default.forms.add')) {
        //     return view('default.forms.add');
        // } else {
        //     abort(404);
        // }
        // $user_id = Auth::user()->id;
        //$user_id = "1";
        //$user_id = Auth::user()->id;
        Phone_contact::create([
            'name' => $request->name,
            'number' => $request->number,
            'notes' => $request->notes,
            'user_id' => $request->user_id,
        ]);
        return redirect(url('/'));
    }

    public function delete($id)
    {
        Phone_contact::find($id)->delete();
        return redirect(route('index'));
    }

}

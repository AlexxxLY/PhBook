<?php

namespace App\Http\Controllers;

use App\Phone_contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {

        $id = $this->get_id();

        $contacts = Phone_contact::where('user_id', $id)
            ->orderBy('name')->paginate(12);

        if (view()->exists('default.index')) {
            return view('default.index', ['contacts' => $contacts]);
            // return view('default.index');
        } else {
            abort(404);
        }

    }

    public function search(Request $request)
    {

        $search = $request->get('search');
        $id = $this->get_id();

        $contacts = Phone_contact::where('user_id', $id)
            ->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('number', 'like', '%' . $search . '%');
            })
            ->orderBy('name')->paginate(10);
        return view('default.index', ['contacts' => $contacts]);

    }

    public function add()
    {

        if (view()->exists('default.forms.add')) {
            return view('default.forms.add');
        } else {
            abort(404);
        }
    }

    public function create(Request $request)
    {
        $id = $this->get_id();

        if (empty($request->notes)) {
            $notes = "-";
        } else {
            $notes = $request->notes;
        }

        $this->validate($request, [
            'name' => "bail|required|max:25|unique:phone_contacts,name,NULL,id,user_id, $id",
            'number' => "bail|required|max:13|unique:phone_contacts,number,NULL,id,user_id, $id",
            'notes' => 'max:35',
        ]);

        Phone_contact::create([
            'name' => $request->name,
            'number' => $request->number,
            'notes' => $notes,
            'user_id' => $request->user_id,
        ]);
        return redirect(route('index'));
    }

    public function delete($id)
    {
        Phone_contact::find($id)->delete();
        return redirect(route('index'));
    }

    private function get_id()
    {

        if (Auth::check()) {

            return $id = Auth::user()->id;
        } else {
            return 0;
        }
    }

}

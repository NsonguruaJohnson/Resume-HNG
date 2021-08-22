<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index(){
        return view('resume');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => ['required',],
            'email' => ['required', 'email',],
            'message' => ['required',]
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        return back()->with('msg', 'Message sent');

    }
}

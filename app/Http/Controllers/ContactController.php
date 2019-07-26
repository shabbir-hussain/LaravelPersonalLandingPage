<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function receiveContact(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|alpha|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|alpha',
            'message' => 'required|alpha_num'
        ]);

        // TODO: Send message via email
        //\App\Form::create($validatedData);

        return view('redirectbanner',['title'=>'Message Received']);
    }
}

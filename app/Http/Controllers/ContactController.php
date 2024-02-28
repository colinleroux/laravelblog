<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller {

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::send('emails.contact', [
            'name' => $data['name'],
            'email' => $data['email'],
            'userMessage' => $data['message']  // Rename the key here
        ], function ($message) use ($data) {
            $message->to('colinleroux@gmail.com', 'Colin le Roux')
                ->subject('New Contact Message from '.$data['name'])
                ->replyTo($data['email']);
        });

        return back()->with('success', 'Your message has been sent!');
    }
}
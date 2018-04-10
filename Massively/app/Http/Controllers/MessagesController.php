<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $messages = Message::all();
        
        return view('/messages', compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());

        $message = new \App\Message;

        // Create a new post
        $message->name = request('name');
        $message->email = request('email');
        $message->message = request('message');

        // Save message to database
        $message->save();

        // Redirect to thank you page.
        return redirect('/');
    }
}

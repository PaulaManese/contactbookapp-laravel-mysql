<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Contacts;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $contacts = Contacts::with('message')->get();
        // $messages = Message::orderBy('id', 'desc')->get();
        // return view('messages.index')->with('messages', $messages);

        $contacts = Contacts::with('message')->get();
             return view('messages.index')->with('contacts', $contacts);
    }

}
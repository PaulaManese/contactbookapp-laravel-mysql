<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    // public function login(){
    //     return view('pages.login');
    // }

    
    public function about(){
        return view('pages.about');
    }

    public function profile(){
        return view('pages.profile');
    }

    public function contacts(){
        return view('pages.contacts');
    }

    public function messages(){
        return view('pages.messages');
    }

}
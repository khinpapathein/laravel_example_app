<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function homepage()
    {
        return view('home');
    }

    public function aboutpage()
    {
        return view('about');
    }
    public function postpage()
    {
        return view('post');
    }
    public function contactpage()
    {
        return view('contact');
    }
}

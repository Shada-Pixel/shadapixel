<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class HomeController extends Controller
{
    /**
     * Display visitor home page.
     */
    public function index(Request $request): View
    {
        return view('index');
    }


    // Displaying story page
    public function story(Request $request): View
    {
        return view('story');
    }


    // Displaying contact page
    public function contact(Request $request): View
    {
        return view('contact');
    }

    // Displaying career page
    public function career(Request $request): View
    {
        return view('career');
    }



    // Displaying uiux work page
    public function uiux(Request $request): View
    {
        return view('works.uiux');
    }
}

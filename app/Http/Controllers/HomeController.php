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
}
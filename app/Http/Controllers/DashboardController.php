<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:admin-dash', ['only' => ['dashboard']]);
        // $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }



    // Displaying dashboard work page
    public function dashboard(Request $request): View
    {
        return view('admin.dashboard');
    }

}

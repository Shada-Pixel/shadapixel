<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\Project;
use App\Models\Member;



class HomeController extends Controller
{
    /**
     * Display visitor home page.
     */
    public function index(Request $request): View
    {

        $exicutives = Member::where('executive',1)->get();
        return view('index',['exicutives' => $exicutives]);
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
    // Displaying dashboard work page
    public function dashboard(Request $request): View
    {
        return view('admin.dashboard');
    }


    public function industries($industry)
    {
        $industry = Category::with('projects')->where('slug', $industry)->first();
        return view('works.index', [
            'industry' => $industry,
        ]);
    }

    // Returning to project detsils page
    public function pdtails($project)
    {
        $project = Project::with('category','members')->where('slug', $project)->first();
        return view('works.show', [
            'project' => $project,
        ]);
    }

}

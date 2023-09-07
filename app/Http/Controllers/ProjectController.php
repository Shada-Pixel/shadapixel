<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of( Project::query())->addIndexColumn()->make(true);
        }
        return view('admin.projects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('mode', 3)->get();
        return view('admin.projects.create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $project = new Project;

        $project->name = $request->name;
        $project->slug = $request->slug;
        $project->keywords = $request->keywords;
        $project->tools = $request->tools;
        $project->category_id = $request->category_id;
        $project->start_date = $request->start_date;
        $project->delivery_date = $request->delivery_date;
        $project->description = $request->description;
        $project->link = $request->link;

        if ($request->client) {
            $project->client = $request->client;
        }


        // cover home
        if ($request->file('cover_home')) {
            $cover = $request->file('cover_home');
            $image_full_name = time().'cover_home'.$request->slug.'.'.$cover->getClientOriginalExtension();
            $upload_path = 'images/projects/';
            $image_url = $upload_path.$image_full_name;
            $success = $cover->move($upload_path, $image_full_name);
            $project->cover_home = $image_url;
        }
        // cover work
        if ($request->file('cover_work')) {
            $cover = $request->file('cover_work');
            $image_full_name = time().'cover_work'.$request->slug.'.'.$cover->getClientOriginalExtension();
            $upload_path = 'images/projects/';
            $image_url = $upload_path.$image_full_name;
            $success = $cover->move($upload_path, $image_full_name);
            $project->cover_work = $image_url;
        }
        // cover details
        if ($request->file('cover_details')) {
            $cover = $request->file('cover_details');
            $image_full_name = time().'cover_details'.$request->slug.'.'.$cover->getClientOriginalExtension();
            $upload_path = 'images/projects/';
            $image_url = $upload_path.$image_full_name;
            $success = $cover->move($upload_path, $image_full_name);
            $project->cover_details = $image_url;
        }

        $project->save();



        return redirect()->route('projects.index')->with(['status' => 200, 'message' => 'Project Added']);


    }

    /**
     * Display the specified resource.
     */
    public function show($project)
    {
        $project = Project::with('category')->where('slug',$project)->first();

        return view('admin.projects.show',['project'=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($project)
    {
        $project = Project::with('category')->where('slug',$project)->first();
        $categories = Category::where('mode', 3)->get();

        return view('admin.projects.edit',['project'=>$project,'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, $project)
    {
        $project = Project::where('slug',$project)->first();

        $project->name = $request->name;
        $project->slug = $request->slug;
        $project->keywords = $request->keywords;
        $project->tools = $request->tools;
        $project->category_id = $request->category_id;
        $project->start_date = $request->start_date;
        $project->delivery_date = $request->delivery_date;
        $project->description = $request->description;
        $project->link = $request->link;

        if ($request->client) {
            $project->client = $request->client;
        }


        // cover home
        if ($request->file('cover_home')) {
            // Delete old cover home
            if($project->cover_home) {
                unlink($project->cover_home);
            }
            $cover = $request->file('cover_home');
            $image_full_name = time().'cover_home'.$request->slug.'.'.$cover->getClientOriginalExtension();
            $upload_path = 'images/projects/';
            $image_url = $upload_path.$image_full_name;
            $success = $cover->move($upload_path, $image_full_name);
            $project->cover_home = $image_url;
        }
        // cover work
        if ($request->file('cover_work')) {
            // Delete old cover_work
            if($project->cover_work) {
                unlink($project->cover_work);
            }
            $cover = $request->file('cover_work');
            $image_full_name = time().'cover_work'.$request->slug.'.'.$cover->getClientOriginalExtension();
            $upload_path = 'images/projects/';
            $image_url = $upload_path.$image_full_name;
            $success = $cover->move($upload_path, $image_full_name);
            $project->cover_work = $image_url;
        }
        // cover details
        if ($request->file('cover_details')) {
            // Delete old cover_details
            if($project->cover_details) {
                unlink($project->cover_details);
            }
            $cover = $request->file('cover_details');
            $image_full_name = time().'cover_details'.$request->slug.'.'.$cover->getClientOriginalExtension();
            $upload_path = 'images/projects/';
            $image_url = $upload_path.$image_full_name;
            $success = $cover->move($upload_path, $image_full_name);
            $project->cover_details = $image_url;
        }

        $project->update();

        return redirect()->route('projects.index')->with(['status'=> 200, 'message' => 'Project Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // $project = Project::where('slug',$project)->first();

        if($project->cover_home) { unlink($project->cover_home); }
        if($project->cover_work) { unlink($project->cover_work); }
        if($project->cover_details) { unlink($project->cover_details); }

        $project->delete();
        // return redirect()->route('projects.index')->with(['status'=> 200, 'message' => 'Project Updated!']);
        return response()->json(['status'=>'success','message'=>'Delleted Successfully']);
    }
}
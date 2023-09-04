<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Member;
use App\Models\ProjectMember;
use App\Http\Requests\StoreProjectMemberRequest;
use App\Http\Requests\UpdateProjectMemberRequest;

class ProjectMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::select('id', 'name', 'cover_home')->get();
        $members = Member::select('id', 'name', 'photo')->get();
        return view('admin.projectmembers.create',['projects' => $projects, 'members' => $members]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectMemberRequest $request)
    {

        foreach ($request->member_id as $mi) {
            $projectMember = ProjectMember::create([
                'project_id' => $request->project_id,
                'member_id' => $mi
            ]) ;
        }

        return redirect()->route('projects.show',$request->project->slug)->with(['status' => 200, 'message' => 'Member added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectMember $projectMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectMember $projectMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectMemberRequest $request, ProjectMember $projectMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectMember $projectMember)
    {
        //
    }
}
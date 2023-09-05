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
     * Display a listing of the resource.
     */
    public function search($query)
    {
        $members = Member::where('name', 'LIKE', '%'.$query.'%')->get();
        return response()->json(['data'=> $members], 200);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create($slug)
    {
        $project = Project::with('members')->where('slug', $slug)->first();
        $members = Member::select('id', 'name', 'photo','designation')->get();
        return view('admin.projectmembers.create',['project' => $project, 'members' => $members]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectMemberRequest $request)
    {
        $existing = ProjectMember::where('project_id', $request->project_id)->where('member_id', $request->member_id)->get();
        if ($existing->count() <= 0) {
            # code...
            $projectMember = ProjectMember::create([
                'project_id' => $request->project_id,
                'member_id' => $request->member_id
            ]) ;

            $member = Member::find($request->member_id);

            $msg = 'Member added to the project.';
            return response()->json(['success'=> $msg,'data' =>$member]);
        }

        return response()->json(['error'=>"Member already added!"]);
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

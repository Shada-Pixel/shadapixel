<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(Member::query())->addIndexColumn()->make(true);
        }
        return view('admin.members.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {

        $member = new Member;
        $member->name = $request->name;
        $member->slug = $request->slug;
        $member->designation = $request->designation;
        if ($request->email) {
            $member->email = $request->email;
        }

        if ($request->website) {
            $member->website = $request->website;
        }

        // Social Medias
        $socialmedia = [];
        for ($i=0; $i < count($request->smedianame); $i++) {
            $eachsm = [
                'name' => $request->smedianame[$i],
                'link' => $request->smedialink[$i],
                'icon' => $request->smediaicon[$i]
            ];
            array_push($socialmedia, $eachsm);
        }
        $member->soocial_medias = $socialmedia;


        // Skills
        $skills = [];
        for ($i=0; $i < count($request->skillname); $i++) {
            $eachsk = [
                'name' => $request->skillname[$i],
                'exp' => $request->skillexp[$i]
            ];
            array_push($skills, $eachsk);
        }
        $member->skills = $skills;
        $member->type = $request->type;
        $member->executive = $request->executive;

        // Photo
        if ($request->file('photo')) {
            $cover = $request->file('photo');
            $image_full_name = time().'photo'.$request->slug.'.'.$cover->getClientOriginalExtension();
            $upload_path = 'images/members/';
            $image_url = $upload_path.$image_full_name;
            $success = $cover->move($upload_path, $image_full_name);
            $member->photo = $image_url;
        }


        $member->save();
        return redirect()->route('members.index')->with(['status'=> 200, 'message' => 'Member added successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $member = Member::where('slug',$slug)->first();
        return view('admin.members.show',['member' => $member]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $slug)
    {
        $member = Member::where('slug',$slug)->first();
        return view('admin.members.edit',['member' => $member]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, $slug)
    {

        $member = Member::where('slug',$slug)->first();
        $member->name = $request->name;
        $member->slug = $request->slug;
        $member->designation = $request->designation;
        if ($request->email) {
            $member->email = $request->email;
        }

        if ($request->website) {
            $member->website = $request->website;
        }

        // Social Medias
        $socialmedia = [];
        for ($i=0; $i < count($request->smedianame); $i++) {
            $eachsm = [
                'name' => $request->smedianame[$i],
                'link' => $request->smedialink[$i],
                'icon' => $request->smediaicon[$i]
            ];
            array_push($socialmedia, $eachsm);
        }
        $member->soocial_medias = $socialmedia;


        // Skills
        $skills = [];
        for ($i=0; $i < count($request->skillname); $i++) {
            $eachsk = [
                'name' => $request->skillname[$i],
                'exp' => $request->skillexp[$i]
            ];
            array_push($skills, $eachsk);
        }
        $member->skills = $skills;
        $member->type = $request->type;
        $member->executive = $request->executive;

        // Photo
        if ($request->file('photo')) {
            // Delete old photo
            if($member->photo) {
                unlink($member->photo);
            }
            $cover = $request->file('photo');
            $image_full_name = time().'photo'.$request->slug.'.'.$cover->getClientOriginalExtension();
            $upload_path = 'images/members/';
            $image_url = $upload_path.$image_full_name;
            $success = $cover->move($upload_path, $image_full_name);
            $member->photo = $image_url;
        }


        $member->update();
        return redirect()->route('members.index')->with(['status'=> 200, 'message' => 'Member Updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        if($member->photo) { unlink($member->photo); }
        $member->delete();
        return response()->json(['status'=>'success','message'=>'Delleted Successfully']);
    }
}

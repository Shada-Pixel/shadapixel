<?php

namespace App\Http\Controllers;

use App\Models\Query;
use App\Http\Requests\StoreQueryRequest;
use App\Http\Requests\UpdateQueryRequest;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $queries =  Query::all();
            return response()->json(['data' => $queries],200);
        }


        return view('admin.queries.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQueryRequest $request)
    {

        $query = Query::create([
            'name'=> $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return response()->json(['status' => 'success', 'message' => 'Thanks for contacting us!']);
    }


    /**
     * Display the specified resource.
     */
    public function show(Query $query)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Query $query)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQueryRequest $request, Query $query)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Query $query)
    {
        //
    }
}

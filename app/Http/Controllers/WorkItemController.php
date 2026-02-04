<?php

namespace App\Http\Controllers;

use App\Models\WorkItem;
use Illuminate\Http\Request;

class WorkItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(WorkItem::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $workItem = new WorkItem;
        $workItem->title = 'Work Item Number 1';
        $workItem->author_id = 1;
        $workItem->status = 'pending';
        $workItem->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkItem $workItem)
    {
        return response()->json($workItem->toArray(), 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkItem $workItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WorkItem $workItem)
    {
        $allInput = $request->all();
        $workItem->title = $allInput["new_title"];
        $workItem->author_id = $allInput["new_author_id"];
        $workItem->status = $allInput["new_status"];
        $workItem->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkItem $workItem)
    {
        $workItem->delete();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Description;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Description::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $description = new Description;
        $description->work_item_id = 1;
        $description->description_text = 'Description Number 1';
        $description->save();
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
    public function show(Description $description)
    {
        return response()->json($description->toArray(), 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Description $description)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Description $description)
    {
        $allInput = $request->all();
        $description->work_item_id = $allInput["new_work_item_id"];
        $description->description_text = $allInput["new_description_text"];
        $description->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Description $description)
    {
        $description->delete();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**no
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Author::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $author = new Author;
        $author->name = 'Author Number 1';
        $author->email = 'author1@example.com';
        $author->save();
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
    public function show(Author $author)
    {
        return response()->json($author->toArray(), 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $allInput = $request->all();
        $author->name = $allInput["new_name"];
        $author->email = $allInput["new_email"];
        $author->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
    }
}

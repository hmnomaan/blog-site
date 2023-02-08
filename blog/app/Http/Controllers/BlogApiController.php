<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return response()->json([
            'blogs' => Blog::latest()->get()
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['title', 'slug', 'description']);
        Blog::create($data);
        return response()->json([
            'message' => 'Blog created successfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blogsApi
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blogsApi)
    {
        return response()->json([
            'blog' => $blogsApi
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blogsApi
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blogsApi)
    {
        return view('blogs.edit', [
            'blog' => $blogsApi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blogsApi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blogsApi)
    {
        $data = $request->only(['title', 'slug', 'description']);
        $blogsApi->update($data);
        return response()->json([
            'message' => 'Blog Updated successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blogsApi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blogsApi)
    {
        $blogsApi->delete();
        return response()->json([
            'message' => 'Blog Deleted successfully'
        ], 200);
    }
}

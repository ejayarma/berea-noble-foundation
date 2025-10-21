<?php

namespace App\Http\Controllers;

use App\Models\Admin\BlogSubscription;
use Illuminate\Http\Request;

class BlogSubscriptionController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BlogSubscription::query()->firstOrCreate(['email' => $request->input('email')]);
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogSubscription $blogSubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogSubscription $blogSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogSubscription $blogSubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogSubscription $blogSubscription)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Images_post;
use Illuminate\Http\Request;

class ImagesPostController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Images_post $images_post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Images_post $images_post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Images_post $images_post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $p = Images_post::find($id )  ;
        $p->delete();
        return redirect()->back();

    }
}

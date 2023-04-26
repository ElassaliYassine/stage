<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd( 'zlkf,zm');
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
    public function store($id)
    {
        $user_id_1 =auth()->user()->id ;
        $user_id_2 = $id ;  
        $follower = new Follower ;
        $follower->user_id_1 = $user_id_1 ;
        $follower->user_id_2 = $user_id_2 ;
        $follower->save();
        
        


        
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(follower $follower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(follower $follower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, follower $follower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id )
    {
        $user_id_1 =   auth()->user()->id ;
        $user_id_2 =   $id  ;
        $f = Follower::where('user_id_1',$user_id_1)
                            ->where('user_id_2' , $user_id_2)->first();
        $f->delete();
        return redirect()->back();
    }
}

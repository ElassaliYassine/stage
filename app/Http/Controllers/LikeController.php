<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class LikeController extends Controller
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
    public function create($idd)
    {


        $post = Post::where('id' , $idd)->first() ;
        $user = auth()->user()->id ;

        $jj =  Like::where( 'user_id' ,  $user   ) 
            ->where(  'post_id' , $post->id  )->first() ;

           
        $vh = 0 ;
        ( $jj ) ?  dd('mmm23748mmm') : ($vh=1) ;
        if($vh == 1) {
            $lik = new Like;
            $lik->user_id = auth()->user()->id ;
            $lik->post_id = $idd ;
            $lik->save();
        }

        return redirect()->back();

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
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($like)
    {
        $del = Like::find($like);
        $del  -> delete(); 
        // dd($del);
        return  back();

        
    }
}

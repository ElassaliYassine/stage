<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;


use App\Models\Post;
use App\Models\User;
use App\Models\Like;
use App\Models\Follower;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $id = auth()->user()->id ;
        // $id = User::find($id) ; 
        $user = User::find($id);
        
        return view('/user/user_info' , [  'user' => $user ,  'active' => "user"  ] ) ;
    }

    /**
     * Display a listing of the profiles user.
     */
    public function Visit($id)
    {
        $user_auth = auth()->user()->id;
        $user = User::find($id);

        $follow = Follower::where('user_id_1' , $id )->count() ; 
        $following = Follower::where('user_id_2' , $id )->count() ;
        
        // following
        $u = auth()->user()->id;
        $f = Follower::whereIn('user_id_1' , [$u] )
                        ->Where('user_id_2' , $id )
                        ->first();

           $do_following =( (!empty($f->user_id_1) == $u )?"true":"false" );

        return view('user.profile_user' , [ 'user' => $user , "follow" =>$follow , 'following'=>$following  , 'do_following'=>$do_following ])  ;
    }
    

    
    public function all_post( )
    {   

        $user_id = auth()->user()->id ;
        $posts = Post::where( 'user_id' , $user_id )->get() ;

        // $post = Post::select('posts.*')
        // ->join('likes', 'posts.id', '=', 'likes.post_id')
        // ->join('users', 'likes.user_id', '=', 'users.id')
        // ->where('posts.id', 46)

        $table=[];
        $p = Like::select('post_id')->where( 'user_id' , auth()->user()->id )->get()  ;      
        foreach($p as $d) {
           $t =  Post::where('id', $d->post_id  )->get() ;
            array_push($table , $t );
        } 


    // following
    //     $user_auth = auth()->user()->id ;
    //     $foll= Follower::where( "user_id_1" , $user_auth )->get();
    
    //     $t=[];
    //     foreach( $foll as $f ){
    //         $following = User::where('id' ,$f->user_id_2)->get();
    //         array_push($t,$following );
    //     }
        
        
    //    $following = $t  ;
    
    //.............................................;

    $users = DB::table('users')
        ->join("followers" , 'followers.user_id_2' , 'users.id' )
        ->where('followers.user_id_1' , auth()->user()->id )
        ->get();
    
    $following = $users  ;

    //.............................................;

    $users_2 = DB::table('users')
        ->join("followers" , 'followers.user_id_1' , 'users.id' )
        ->where('followers.user_id_2' , auth()->user()->id )
        ->get();
    
    $followers = $users_2 ;

    // dd($followers) ;

        return  view('/user.all_post' , [  'posts' => $posts ,'posts_like' => $table , 'active' => "all_post"  , "following" =>$following  ,'followers' =>$followers ] ) ;

    }





    public function settings( )
    {   
        // $user = auth()->user()->id ;
        // $likes = Like::where('user_id' ,   $user )->get() ;
        $show_new_pas = 0 ;
         
        // return view('user.settings.settings' , [  'active' => "settings" , "likes" => $likes   , "show_new_pas" =>$show_new_pas   ]  ) ;
        return view('user.settings.settings' , [ 'active' => "settings"  , "show_new_pas" =>$show_new_pas ] ) ;
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
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage password .
     */

    public function change_password(Request $request){

        $this->validate($request, [
            'old_password' => ['required'] ,
            'new_password' => ['required'] ,
            'confirm_password' => ['required'] ,
        ]);

        $password = auth()->user()->password;

        $old_password =   $request->old_password;
        $new_password =   $request->new_password;
        $confirm_password =   $request->confirm_password;
        
        $show_new_pas = 0 ;
        if (Hash::check($old_password,$password)) {  
            // $show_new_pas= 1 ;
            if( $new_password == $confirm_password){
                User::where( 'id' , auth()->user()->id )
                        ->update([  'password' => Hash::make($request->confirm_password) , ]);
                        return "good" ;
            }
        
        };


        return redirect()->back();
        // return view('user.settings.settings' , [ 'active' => "settings"  , "show_new_pas" =>$show_new_pas] ) ;


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        if ( $request->hasFile('img_user') ){
            $newImageName = uniqid().time().'-.'.$request['img_user']->extension();
            $request['img_user']->move(public_path('assets/images/profile/'),$newImageName  );
            user::where('id' , auth()->user()->id)
                ->update([
                "img_user"=> $newImageName ,
            ]);
        }

            user::where('id' , auth()->user()->id)
                ->update([
                    "name"=> $request->name  ,
                    "lastname"=> $request->lastname ,
                    "Number_phone"=> $request->Number_phone ,
            ]);
            return redirect()->back();
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}

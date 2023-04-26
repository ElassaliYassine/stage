<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Like;
use Auth;
use Illuminate\Support\Facades\DB;

class admin_posts extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    public function table_users(){
        $users = User::paginate(5);
        return view('admin.user.users'   , ["users" => $users ] )  ;
    }

    public function search_user( Request $request  ){

        
         $search_user = $request->search_user  ;
         $option = $request->option  ;
        //  $city = $request->city  ;
        //  $v =   substr($v, 0 , 3) ;
        // dd($search_user , $option );

        if ( $option == "id"  ) {
            $users = User::where('id'  , $search_user     )
                       ->paginate(5) ;

         }else if ( $option == "name") {
           $users = User::where('name'  ,'like', '%'.$search_user.'%'      )
                        //  ->whereNotNull( 'name', $city )
                       ->paginate(5) ;
         }
         else if ( $option == "email" ) {
            $users = User::where('email' , 'like', '%'.$search_user.'%'     )
                       ->paginate(5) ;
         } 
         else if ($option == 'number_phone' ) {
            $users = User::where('number_phone' , 'like', '%'.$search_user.'%'     )
                       ->paginate(5) ;
         }
         else if ( $option == "admin"  ) {
             $users = User::where('is_admin' , 1    )->paginate(5) ;
                       
         }
         else if ( $option == "no_admin"  ) {
             $users = User::where('is_admin' , 0    )->paginate(5) ;
                       
         }
         else {
        $users = User::where('id' , $search_user  )
                       ->orWhere( "name" , 'like', '%'.$search_user.'%'  )
                       ->orWhere( "Lastname" , 'like', '%'.$search_user.'%'  )
                       ->orWhere( "number_phone" , 'like', '%'.$search_user.'%'  )
                       ->orWhere( "email" , 'like', '%'.$search_user.'%'  )
                       ->paginate(5) ;

                       $users = User::paginate(5)  ;
         
          }
         
          return view('admin.user.users'   , ["users" => $users ] )  ;
    }


    public function index()
    {
        $posts = Post::paginate(6);
        return view('admin.post.posts' , ['posts'=>$posts  ]);
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
    public function show(  $post )
    {
        $post = Post::where( 'id' , $post )->first() ;


        $count_like = Like::where('post_id' ,  $post->id)->get();
        $like = "kyn";
        $like_id = 0;
        // if ( Auth::user() ) {
        if ( Auth::user() ) {
            $user = auth()->user()->id ;
            $jj =  Like::where( 'user_id' ,  $user   ) 
                ->where(  'post_id' , $post->id  )->first() ;
                ($jj)?  ($like_id= $jj->id) : $like='mkynx' ;
            }

        return view('/admin/post/show' , ['post' => $post , 'like' => $like  , 'like_id' =>$like_id , 'count_like' => $count_like   ]  );
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    public function update(Request $request)
    {
        if( ! $request->id  == null) {
        for($i=0; $i<  count($request->id)  ; $i++) { 
            DB::table('posts')
            ->where('id', $request->id[$i])
            ->update(['active' => true ]);
        }
        return  redirect('admin/post/posts');

        }else {
            
            return  redirect('admin/post/posts');
        }

    
    }

    public function search(Request $request)
    {
        // return $request->select ;

        if ($request->select === 'active') { 
            $posts = Post::where('active' , 1 )->paginate(6);
            // return view('admin.post.posts' , ['posts'=>$posts  ]);
              return view('admin.post.posts', compact('posts'));
        }
        else if ($request->select === 'no_active') {
             $posts = Post::where('active' , 0 )->paginate(6);
            return view('admin.post.posts' , ['posts'=>$posts  ]);
        }else if ($request->select === 'all')  {
             $posts = Post::paginate(6);
            // return veiw('admin.post.posts' , ['posts'=>$posts  ]);
            return view('admin/post/posts')->with(['posts'=>$posts  ]);
        }

    }


    public function sel  ($id) 
    {
        if ($id === 'active') { 
            $posts = Post::where('active' , 1 )->paginate(2);
            // return view('admin.post.posts' , ['posts'=>$posts  ]);
              return view('admin.post.posts', compact('posts'));
        }
        else if ($id === 'no_active') {
             $posts = Post::where('active' , 0 )->paginate(2);
            return view('admin.post.posts' , ['posts'=>$posts  ]);
        }else if ($id === 'all')  {
             $posts = Post::paginate(2);
            // return veiw('admin.post.posts' , ['posts'=>$posts  ]);
            return view('admin/post/posts')->with(['posts'=>$posts  ]);
        }
    }

    public function update_to_admin($id)
    {
        User::where( 'id' , $id )
                ->update([ 'is_admin' => 1 ]) ;
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    public function destroy($id)
    {
        $s = Post::find($id);
        $s->delete();
        return redirect('/admin/post/posts')  ;
    }

    public function delete_user($id) {
         $s = User::find($id);
        $s->delete();
        return redirect('/admin/users')  ;
    }
}

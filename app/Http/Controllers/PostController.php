<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Like;
use App\Models\Images_post;
use Illuminate\Support\Facatdes\Storage ;
use Illuminate\Http\Request;
use Auth;
use Image;
use Carbon\Carbon ;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  public function index2  (Request $request   ) {
    //     return Post::where("id" ,  $request->id )->get() ;
    //  }
    //  public function index2( $id  ) {
    //     return Post::where('id' , $id)->get();
    //  }


    public function index()
    {
        $post = Post::get();
        return view('advertisement.index'  , ['post'=>$post] );
    }


    public function getNumber(  $id )
    {

     
        $user = User::find($id) ;
       $post = Post::where('id' , $id )->with('user')->first();

       return $post->user->number_phone;

       return $post;
        return $user ; 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('advertisement.create') ;
    }



    public function home()
    {

        // $count_like = Like::where('post_id' ,  $post->id  )->get();
        // $user = auth()->user()->id ;
        // $jj =  Like::where( 'user_id' ,  $user   ) 
        //     ->where(  'post_id' , $post->id  )->first() ;
        // $like = "kayn";
        // $like_id = 0;
        // ($jj)?  ($like_id= $jj->id) : $like='mkynx' ;



        $posts = Post::where("active",1)->get();
        return view('index' , ['posts' => $posts ] ); //, 'like' => $like  , 'like_id' =>$like_id , 'count_like' => $count_like    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
         $this->validate($request,[
            
            'categorie' => 'required'  ,
            'title' => ["required"  , "max:50"]   ,
            'description' => 'required|max:1000'  ,
            'price' => 'required|max:23'  ,
            'image_path' => 'required', //image|mimes:jpeg,png,jpg,gif'  ,
            'region' => 'required'  ,
            'city' => 'required'  ,
            'number_whats_app' => ["required" , 'min:10' , "max:10"] 
        ]);


        // $waterMark = public_path('watermark.png');
        // $file = $request->image_path;
        // $image = Image::make($file);
        // $image  ->resize( 1000 ,1000  ) 
        //         ->insert($waterMark  ); 

        // $newImageName = uniqid().time().'-.'.$request->image_path->extension();
        // $dd =   $request->image_path->move(public_path('assets/images/advertisement/'),$newImageName  );
        // $image->save($dd) ; 
        // mmmmmm
        
        // ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,

        $post = new Post();
        $post->user_id = $request->user_id ;
        $post->active =0;
        $post->categorie = $request->categorie ;
        $post->title = $request->title ;
        $post->description = $request->description ;
        $post->price = $request->price ;
        $post->region = $request->region ;
        $post->city = $request->city ;
        $post->number_whats_app = $request->number_whats_app ;
        $post->save();  
        // image 
        // $images = new Images_post();
        // $images ->image_path = $newImageName ;
        // $post->images_post()->save($images);
        // images ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
         
        if($request->hasfile('image_path'))
         {

            foreach($request->file('image_path') as $images)
            {
               
                $newImageName = uniqid().time().'-.'.$images ->extension();
                $dd =   $images->move(public_path('assets/images/advertisement/'),$newImageName  );
               
                $form= new Images_post();
                $form->image_path=  $newImageName   ;
                $waterMark = public_path('watermark.png');
        
                $post->images_post()->save($form);
            }
        }  

        




        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        // $p = $post->images_post;
        // $m = $p[0]->image_path;
        // return  $m;
        // $post = Post::where('id' , $idd)->first() ;

        $count_like = Like::where('post_id' ,  $post->id)->get();
        $like = "kyn";
        $like_id = 0;
        if ( Auth::user() ) {
            $user = auth()->user()->id ;
            $jj =  Like::where( 'user_id' ,  $user   ) 
                ->where(  'post_id' , $post->id  )->first() ;
                ($jj)?  ($like_id= $jj->id) : $like='mkynx' ;
            }
            
       
        return view('advertisement.show', [ 'post' => $post , 'like' => $like  , 'like_id' =>$like_id , 'count_like' => $count_like  ]    );
    }




    // public function show(Post $post)
    // {
    //     return  response()->json([
    //         'post' => $post
    //     ]);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        
        $data = Post::find($id);
        if(  Auth::user()  && auth()->User()->id == $data->user->id ){
        // $data = Post::find($id) ;
        return view('advertisement/update' , [ 'post'=>$data ] ) ;
        }else {
             abort(404) ;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

         $this->validate($request,[
            
            'categorie' => 'required'  ,
            'title' => ["required"  , "max:50"]   ,
            'description' => 'required|max:1000'  ,
            'price' => 'required|max:23'  ,
            // 'image_path' => 'required', //image|mimes:jpeg,png,jpg,gif'  ,
            'region' => 'required'  ,
            'city' => 'required'  ,
            'number_whats_app' => ["required" , 'min:9' , "max:10"] 
        ]);

        // user_id  // categorie  // title  // description  // price  // image_path  // region  // city  // number_whats_app
        $post = Post::find($request->id);
        if(  auth()->User()->id == $post->user->id ){


        
        

        Post::where('id', $request->id )
            ->update(['title' => $request->title , 
            'categorie' => $request->categorie ,
            'description' => $request->description ,
            'region' => $request->region  ,
            'city' => $request->city ,
            'number_whats_app' => $request->number_whats_app 
            ]);

    
        $data = Post::find($request->id);
        // like
        $count_like = Like::where('post_id' ,  $post->id)->get();
        $like = "kyn";
        $like_id = 0;
        if ( Auth::user() ) {
            $user = auth()->user()->id ;
            $jj =  Like::where( 'user_id' ,  $user   ) 
                ->where(  'post_id' , $post->id  )->first() ;
                ($jj)?  ($like_id= $jj->id) : $like='mkynx' ;
            }
        // image
        // if(   $request->image_path !== null )
        // {
        //     $newImageName = uniqid().'-.'.$request->image_path->extension();
        //     $request->image_path->move(public_path('assets/images/advertisement/'),$newImageName  );
           
        //     $images = new Images_post();

        //     $images->where('id', $data->images_post->id  )
        //     ->update(["image_path" => $newImageName ])   ;
         if($request->hasfile('image_path'))
         {

            
            foreach($request->file('image_path') as $images)
            {
                // dd($images );
                // $waterMark = public_path('watermark.png');
                // $file = $request->image_path;
                // $image = Image::make($file);
                // $image  ->resize( 1000 ,1000  ) 
                //         ->insert($waterMark  ); 

                // $newImageName = uniqid().time().'-.'.$request->image_path->extension();
                $newImageName = uniqid().time().'-.'.$images ->extension();
                $dd =   $images->move(public_path('assets/images/advertisement/'),$newImageName  );  
                                
                $form= new Images_post();
                $form->image_path=  $newImageName   ;
               $post->images_post()->save($form);
            }
        }  

          

        }    
        return view('advertisement.show', [ 'post' => $data , 'like' => $like  , 'like_id' =>$like_id , 'count_like' => $count_like ]   );

    
    
    
    }


    // eonstruction_professionals  //  craftsmen  //  electronic_maintenance  //  home_repairs

    public  function  search ( $text ) {
        $city = null ;
        $region = null ;

        $posts = Post::where( "categorie" , $text  )
                        ->where("active" , 1)->get() ; 

        return view('advertisement.posts' , [ "posts" => $posts  , 'categorie' => $text  , 'categorie' => $text  , 'city' => $city , 'region' => $region  ]) ;
    
    }

    // filter
    public function  filter( Request  $request ) {
        $text = $request->categorie;

         $city = $request->city ;
        //  if ( !empty()) {
            
             $region = $request->region ;
        //  }
        //  $posts = DB::table('posts')->where( "categorie"  , "=", $text  )
        // ->whereNotNull("city" ,"=", $city )
        // ->where("active" ,"=" , 1)->get() ; 



        if ( !$city == null &&   !$region == null ) {
           
            $posts = Post::where( "categorie" , $text  )
            ->where("region" , $region )
            ->where("city" , $city )
            ->where("active" , 1)->get() ; 
        }else  if (  !$region == null  ) {
            $posts = Post::where( "categorie" , $text  )
            ->where("region" , $region )
            ->where("active" , 1)->get() ; 
        }
        else{
            $posts = Post::where( "categorie" , $text  )
            ->where("active" , 1)->get() ; 
            // dd('ùdflg');
        }



        return view('advertisement.posts' , [ "posts" => $posts  , 'categorie' => $text  , 'city' => $city , 'region' => $region ] ) ;
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post =  Post::find($id);
        $post->delete();
    }
}

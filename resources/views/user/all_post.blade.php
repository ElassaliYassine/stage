@extends('/user/profile');


<style>
    .image_path {
        max-width : 100%;
        height: 130px;
    }
    .bi-upload {
      color: rgb(72, 151, 216);
      font-size:18px;
    }
    .bi-upload:hover {
      color: rgb(35, 117, 184);
      font-size:18px;
    }
</style>

@section('pages')




<div  class="   container " >
    <!-- row -->

    <div class="row   profile_m_info ">
      
      <div class="col-12    ">
        <div class="card   ">
          <div class="card-body ">
            <h4 class="card-title">Customtab vertical Tab</h4>
            <!-- Nav tabs -->
            <div class="vtabs customvtab      w-100 ">
              <ul class="nav nav-tabs tabs-vertical" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#my_posts" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> my posts </span> </a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#i_like_posts" role="tab"><span class="hidden-sm-up"> <i class="bi bi-heart  text-danger  "></i></span> <span class="hidden-xs-down">   i like posts</span></a> </li>
                {{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#follower" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li> --}}
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#following" role="tab"><span class="hidden-sm-up">                </span> <span class="hidden-xs-down">following</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#followers" role="tab"><span class="hidden-sm-up">                </span> <span class="hidden-xs-down">followers</span></a> </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="my_posts" role="tabpanel">
                  <section  class=" w-100   " >  
                      <div class="row">
                          @foreach ($posts as $post)
                              <div class="co/l-12 col-3 bg- info ">
                                <a href="/post/{{$post->id}}">
                                  <img src="/assets/images/advertisement/{{ $post->Images_post[0]->image_path }}" class="image_path" alt="">
                                </a>
                                </div>
                              <div class="col/-12 col-8  bg- danger ">
                                  <h5> {{ $post->title}}   </h5>
                                  <div> <span class="text-light bg-info  "  > {{ $post->price}} MD  </span>  </div>
                                  <div> {{$post->city}}  , {{$post->region}} </div>
                                  <p>
                                      {{$post->description}} 
                                  </p>
                              </div>
                              <div class="co/l-12 col-1 ">
                                  @if ( Auth::user() &&   Auth::user()->id == $post->user->id )
                                      
                                  <div class="mb-1" >
                                    <!-- Button trigger modal -->
                                    
                                      <i  class=" " data-toggle="modal" data-target="#del_post-user_127">
                                        <p class="ti-trash ti" ></p>
                                      </i>
                                      <a href="/advertisement/edit/{{  $post->id  }}" class="   bi bi-upload" ></a>
                                  </div>
                                  @endif
                                  
                                  {{-- start like --}}
                                    <p class="card-title  mt-2   d-flex ">{{ count($post->likes) }} 
                                    <span  hidden  >   {{   $f1 = 0  }} </span>
                                    <span  hidden  >   {{   $f2 = 0  }} </span>
                                    @if (auth()->user())
                                      @foreach ( $post->likes as $like)
                                            @if ( ($like->user_id  ) === (  auth()->user()->id )  )
                                              <span  hidden  >   {{   $f1 = 1  }} </span>     
                                            @else
                                              <span  hidden >  {{    $f2 = 1 }} </span> 
                                            @endif   
                                      @endforeach
                                    @endif
                                    @if ($f1 == 1)
                                    <a href="{{route('like/destroy'  , $like->id )}}"  class="mt-1" >
                                                <i class="bi bi-heart-fill  text-danger  "></i>
                                              </a> 
                                    @else
                                        <a href="{{route('like/create' , $post->id )}}" class="mt-1"  >
                                              <i class="bi bi-heart  text-danger  "></i>
                                            </a>
                                    @endif
                                          </p>
                                  {{-- end like --}}

                              </div>
                              <hr>
                          @endforeach
                      </div>
                  </section>
                </div>	

                <div class="tab-pane  p-20" id="i_like_posts" role="tabpanel">
                  <section  class=" w-100   " >  
                      <div class="row">
                          @foreach ($posts_like as $posts)
                              @foreach ($posts as $post)
                              <div class="co/l-12 col-3 bg- info ">
                                <a href="/post/{{$post->id}}">
                                  <img src="/assets/images/advertisement/{{ $post->Images_post[0]->image_path }}" class="image_path" alt="">
                                </a>
                              </div>
                              <div class="col/-12 col-8  bg- danger ">
                                  <h5> {{ $post->title}}   </h5>
                                  <div> <span class="text-light bg-info  "  > {{ $post->price}} MD  </span>  </div>
                                  <div> {{$post->city}}  , {{$post->region}} </div>
                                  <p>
                                      {{$post->description}} 
                                  </p>
                              </div>
                              <div class="co/l-12 col-1 ">
                                  @if ( Auth::user() &&   Auth::user()->id == $post->user->id )
                                      
                                  <div class="mb-1" >
                                    <!-- Button trigger modal -->
                                    
                                      <i  class=" " data-toggle="modal" data-target="#del_post-user_127">
                                        <p class="ti-trash ti" ></p>
                                      </i>
                                      <a href="/advertisement/edit/{{  $post->id  }}" class="   bi bi-upload" ></a>
                                  </div>
                                  @endif
                                  
                                  {{-- start like --}}
                                    <p class="card-title  mt-2   d-flex ">{{ count($post->likes) }} 
                                    <span  hidden  >   {{   $f1 = 0  }} </span>
                                    <span  hidden  >   {{   $f2 = 0  }} </span>
                                    @if (auth()->user())
                                      @foreach ( $post->likes as $like)
                                            @if ( ($like->user_id  ) === (  auth()->user()->id )  )
                                              <span  hidden  >   {{   $f1 = 1  }} </span>     
                                            @else
                                              <span  hidden >  {{    $f2 = 1 }} </span> 
                                            @endif   
                                      @endforeach
                                    @endif
                                    @if ($f1 == 1)
                                    <a href="{{route('like/destroy'  , $like->id )}}"  class="mt-1" >
                                                <i class="bi bi-heart-fill  text-danger  "></i>
                                              </a> 
                                    @else
                                        <a href="{{route('like/create' , $post->id )}}" class="mt-1"  >
                                              <i class="bi bi-heart  text-danger  "></i>
                                            </a>
                                    @endif
                                          </p>
                                  {{-- end like --}}

                              </div>
                              <hr>
                          @endforeach
                          @endforeach
                      </div>
                  </section>
                </div>


                <div class="tab-pane p-20" id="following" role="tabpanel">
                
                    {{-- @foreach ($following as $f)
                        @foreach ($f as $user)
                            {{
                              $user
                            }} <br>
                        @endforeach
                        
                    @endforeach --}}

                      <div class="row">
                      @foreach ($following as $f)
                        <div class="col-xs-1-12    col-md-6  col-lg-4  col-xl-3 ">
                          <div class="card border-success">
                            <div class="card-body">
                              <a href="/profile_user/visit/{{$f->user_id_2 }}">
                                <img class="card-img-top"  width="100px" src="/assets/images/profile/{{$f->img_user}}" alt="">
                              </a>
                              <h3 class="card-title">{{ $f ->name }}</h3>
                              {{-- <p class="card-text">Text</p> --}}
                            </div>
                          </div>
                        </div>
                      @endforeach
                      </div>

                </div>

                <div class="tab-pane p-20" id="followers" role="tabpanel">
                  <div class="row">
                      @foreach ($followers as $f)
                        <div class="col-xs-1-12    col-md-6  col-lg-4  col-xl-3 ">
                          <div class="card border-success">
                            <div class="card-body">
                              <a href="/profile_user/visit/{{$f->user_id_1 }}">
                                <img class="card-img-top"  width="100px" src="/assets/images/profile/{{$f->img_user}}" alt="">
                              </a>
                              <h3 class="card-title">{{ $f ->name }}</h3>
                              {{-- <p class="card-text">Text</p> --}}
                            </div>
                          </div>
                        </div>
                      @endforeach
                      </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<!-- row -->
</div>







<!-- Modal -->
<div class="modal fade" id="del_post-user_127" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
      <div class="modal-body">
        <div class="container-fluid">
          Are you sure to delete 
        </div>
      </div>
      @if (  !empty($post)     )
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save</button> --}}
        <a  class="btn btn-danger"  href="/advertisement/delete/{{  $post->id  }}" class="btn btn-success" >delete</a>
      </div>
      @endif

    </div>
  </div>
</div>
<!-- end  Modal -->
    
@endsection





<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details mt-5 ">
    <div class="container">

    <div class="row gy-4">

        <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
                @foreach ($post->images_post as $p)
                       
                    <div class="swiper-slide">
                      <a href="/assets/images/advertisement/{{$p->image_path}}" data-gallery="port/folioGallery" class="portfolio-lightbox" >
                        <img src="/assets/images/advertisement/{{ $p->image_path}}"   class="images_of_post" alt="{{ $p->image_path}}">
                      </a>
                    </div>
                    {{-- {{
                      dd($pl->image_path)
                    }} --}}
                @endforeach 

                </div>
                <div class="swiper-pagination"></div>
            </div>

            {{-- <img src="/assets/images/advertisement/{{$post->Images_post->image_path}}" width="100%" alt=""> --}}

            <div class="my-4   "   >
              
              <h6> title  : {{ $post->title }}</h6>
              <div class="d-flex  bitt   " >
                <h5>description</h5>
               
                @if ( Auth::user() &&   Auth::user()->id == $post->user->id )
                    
                <div class="mb-1" >
                   <!-- Button trigger modal -->
                    <span class=" " data-toggle="modal" data-target="#del_post-user_127">
                      
                      <span class="ti-trash ti  " ></span>
                    </span>
                    <a href="/advertisement/edit/{{  $post->id  }}" class=" m-3  text-light " >
                       <span class="ti-pencil-alt ti  " ></span>
                    </a>
                </div>
                  
                @endif
                
                 <span>
                  {{count($count_like)}}
                  @if ( $like == 'mkynx' )
                
                  <a href="{{route('like/create' , $post->id )}}">
                    <i class="bi bi-heart  text-danger  "></i>
                  </a>
                  @else
                  <a href="{{route('like/destroy'  , $like_id )}}">
                    <i class="bi bi-heart-fill  text-danger  "></i>
                  </a>
                  @endif   </span>  
                  
             
                  
                
              </div>

              <p class="Lorem" >
                 {{  $post->description  }}
              </p>
            </div>
          </div>


        <div class="col-lg-4">
        <div class="portfolio-info">
            <div class="img-prof mb-2" >
              <a href="/profile_user/visit/{{$post ->user->id}}">
                <img class=" rounded-circle m-auto "  src='/assets/images/profile/{{$post->user->img_user}}' width="90" height="90" >
              </a>
              </div>
            <ul>
            <li><strong>Name </strong>: {{ $post ->user->name }} </li>
            <li><strong>Category</strong>: {{ $post->categorie  }} </li>
            <li><strong>Email </strong>: {{ $post ->user->email  }} </li>
            <li><strong>City</strong>: {{$post->city}}</li>
            <li><strong> Region</strong>: {{$post->region}}</li>
            <li><div id="hello-react" ></div>
                <input    type="hidden" value="{{$post->user->id}}">
            </li>
            {{-- <li><strong>Project date</strong>: 01 March, 2020 </li> --}}
            </ul>
              {{-- <a href="whatsapp://send?text=Hello World!&phone=+212620858128" class="btn  bn_message whatsapp "> <i class="bx bxl-whatsapp"></i>  whatsapp   </a> --}}
             <a  class="btn  bn_message" href="https://wa.me/+212{{$post->number_whats_app}}?text='salam'"> <i class="bx bxl-whatsapp"></i>  whatsapp</a>
             
              <div class=" mt-3 ">
              
              <a href="#" class="  btn  bn_message "><i class="bx bxl-facebook"></i>Facebook</a>
              {{-- <div id="hello-react"></div> --}}
              <a href="#" class="btn  bn_message  "><i class="bx bxl-instagram"></i> Instagram </a>
              {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
          
            </div>
        </div>
        
        </div>

    </div>

    </div>
</section><!-- End Portfolio Details Section -->




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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save</button> --}}
        <a  class="btn btn-danger"  href="/advertisement/delete/{{  $post->id  }}" class="btn btn-success" >delete</a>
      </div>
    </div>
  </div>
</div>

{{-- <script>
  $('#exampleModal').on('show.bs.modal', event => {
    var button = $(event.relatedTarget);
    var modal = $(this);
    
  });
</script> --}}

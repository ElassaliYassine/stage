@extends('layouts.app')
@section('content')


    <style>
        .wid_card {
            width: 19rem;
            margin: 1rem 0rem ;

        }
        .bg-i{
            /* background: rgb(247, 237, 237); */
        }
        .image {
            width: 100%;
            height: 150px;
        }



        /* hero */
        #hero {
          margin-top: -25px !important;
        }
        




      
        
    </style>







<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Bettter digital experience with Ninestars</h1>
        <h2>We are team of talented designers making websites with Bootstrap</h2>
        <div>
          <a href="about" class="btn-get-started scrollto">Get Started</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<!-- ======= Category Section ======= -->
    <section  class="container " >
      <div class="row   " >
        <a  class=" col-md-2 m-1  bg-warning   text-dark  p-4"  href="advertisement/posts/eonstruction professionals"  > Construction professionals </a>
        <a  class=" col-md-2 m-1  bg-warning   text-dark  p-4"  href="advertisement/posts/craftsmen"                   > craftsmen </a>
        <a  class=" col-md-2 m-1  bg-warning   text-dark  p-4"  href="advertisement/posts/electronic maintenance"      >Electronic maintenance</a>
        <a  class=" col-md-2 m-1  bg-warning   text-dark  p-4"  href="advertisement/posts/home repairs"                >home repairs</a>
        <a  class=" col-md-2 m-1  bg-warning   text-dark  p-4"  href="advertisement/posts/building "                >Building </a>
        <a  class=" col-md-2 m-1  bg-warning   text-dark  p-4"  href="advertisement/posts/professionals craftsmen "                >  Professionals Craftsmen </a>
        <a  class=" col-md-2 m-1  bg-warning   text-dark  p-4"  href="advertisement/posts/food services"                > Food services   </a>
        <a  class=" col-md-2 m-1  bg-warning   text-dark  p-4"  href="advertisement/posts/transport and transportation"                > Transport and transportation  </a>
        <a  class=" col-md-2 m-1  bg-warning   text-dark  p-4"  href="advertisement/posts/local products "                >   Local products</a>
        <a  class=" col-md-2 m-1  bg-warning   text-dark  p-4"  href="advertisement/posts/other services"                >Other services    </a>
      
      </div>
    </section>
<!-- =======  End Category Section ======= -->
 
<!-- ======= search Section ======= -->
<section hidden >
  <form action=""  class="m-auto mb-4 "  >
    <div class="w-25 m-auto">
        <div class="d-flex">
            <input class="form-control" id="title"  name="title"  type="text" placeholder="search">
            <input type="submit" value="search"  >
        </div>
    </div>
  </form>
</section><!-- ======= end search Section ======= -->







    <!-- ======= card Section ======= -->
    <div class="bg-i container  mt-5  " >  
      <div class="row">
          @foreach ($posts as $post)    
        <div class="wid_card">
          <div class="card">
            <div class="card-body">
            <a href="/post/{{$post->id}}">
              <img src="/assets/images/advertisement/{{$post->images_post[0]->image_path}}" class="image" alt="">
            </a>  
              <h3 class="card-title">{{$post->title}} </h3>
              <p class="card-title">{{$post->price}}  MD </p>
              <p class="card-title  w-25 ">{{ count($post->likes) }}  
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
              <a href="{{route('like/destroy'  , $like->id )}}">
                          <i class="bi bi-heart-fill  text-danger  "></i>
                        </a> 
              @else
                  <a href="{{route('like/create' , $post->id )}}">
                        <i class="bi bi-heart  text-danger  "></i>
                      </a>
              @endif
              </p>
           
              
              <p class="card-text">{{$post->description}}</p>

            {{-- start like --}}
             
            {{-- like --}}

            </div>
          </div>
        </div>  
      @endforeach
  <!-- ======= End card Section ======= -->
       
      


          <!-- ======= Contact Us Section ======= -->
    {{-- <section  class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Contact us the get started</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            @if(session('msg'))
              <div class="alert alert-info alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                  {{session('msg')}}
              </div>
            @endif

            <form action="/send_email" method="post" class="php-email-form">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
             
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section> --}}
    <!-- End Contact Us Section -->
          <!-- ======= Contact Us Section ======= -->
    <section  class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Contact us the get started</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex " >
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> --}}
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex  ">
            @if(session('msg'))
              <div class="alert alert-info alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                  {{session('msg')}}
              </div>
            @endif

            <form action="/send_email" method="post" class="php-email-form">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
             
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Us Section -->


  
  </div>
</div>
@endsection



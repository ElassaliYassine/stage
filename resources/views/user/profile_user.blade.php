@extends('/layouts.app')

@section('link')

 <!-- Common -->
 
    <link href="{{asset('profile/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('profile/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('profile/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('profile/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('profile/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{asset('profile/css/style.css')}}" rel="stylesheet">






@endsection

@section('content')




 <!-- /# row -->
        <section id="main/-content        "  class="pro/file_m_t" >
          <div class="row  container m-auto  ">
            <div class="col-lg-12 mt-4 ">
              <div class="card      ">
                <div class="card-body">
                  <div class="user-profile">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="user-photo m-b-30">
                          <img class="img-fluid" src="/assets/images/profile/{{ $user->img_user  }}"  width="300px"  alt="" />
                        </div>
                        <div class="user-work">
                          <h4>work</h4>
                          <div class="work-content">
                            <h3>It Solution </h3>
                            <p>123, South Mugda</p>
                            <p> New York, 1214</p>
                          </div>
                          <div class="work-content">
                            <h3>Unix</h3>
                            <p>123, South Mugda</p>
                            <p>New York, 1214</p>
                          </div>
                        </div>
                        <div class="user-skill">
                          <h4>Skill</h4>
                          <ul>
                            <li>
                              <a href="#">Branding</a>
                            </li>
                            <li>
                              <a href="#">UI/UX</a>
                            </li>
                            <li>
                              <a href="#">Web Design</a>
                            </li>
                            <li>
                              <a href="#">Wordpress</a>
                            </li>
                            <li>
                              <a href="#">Magento</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="user-profile-name"> {{ $user->name}}   </div>
                        <div class="user-Location">
                          <i class="ti-location-pin"></i> #  New York, New York</div>
                        <div class="user-job-title"> # Product Designer</div>
                        <div class="ratings">
                          <h4>Ratings</h4>
                          <div class="rating-star">
                            <span>8.9</span>
                            <i class="ti-star color-primary"></i>
                            <i class="ti-star color-primary"></i>
                            <i class="ti-star color-primary"></i>
                            <i class="ti-star color-primary"></i>
                            <i class="ti-star"></i>
                          </div>
                        </div>
                        <div class="user-send-message">
                          @if (  auth()->user()->id !== $user->id )
                          
                          @if ( $do_following  == 'false')    
                          <a href="/follower/store/{{$user->id}}" class="btn btn-info  " >  
                            <span  > {{ $following}} </span>
                            following
                          </a>
                          @elseif( $do_following  == 'true') 
                          <a href="/follower/delete/{{$user->id}}" class="btn btn-info  " >  
                            <span  > {{ $following}} </span>
                            unfollowing
                          </a>
                          @endif
                       
                            {{-- <a href="#" class="btn btn-info mx-1 " >  
                                <span>{{  $following }}</span>
                              followers
                            </a> --}}
                          @else
                              <a class="btn btn-primary btn-addon" href="/profile_user/all_post">  
                                <i class="ti-email"></i>
                            All post 
                          </a>
                          @endif

                        </div>
                        <div class="custom-tab user-profile-tab">
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                              <a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a>
                            </li>
                          </ul>
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="1">
                              <div class="contact-information">
                                <h4>Contact information</h4>
                                <div class="phone-content">
                                  <span class="contact-title">Phone:</span>
                                  <span class="phone-number"> {{ $user->number_phone  }}  </span>
                                </div>
                                <div class="address-content">
                                  <span class="contact-title">Address:</span>
                                  <span class="mail-address">#123, Rajar Goli, South Mugda</span>
                                </div>
                                <div class="address-content">
                                  <span class="contact-title">city:</span>
                                  @if (   !empty($user->profiles->city)  )    
                                  <span class="mail-address">  {{ $user->profiles->city }}   </span>
                                  @endif
                                </div>
                                <div class="email-content">
                                  <span class="contact-title">Email:</span>
                                  <span class="contact-email">{{$user->email  }} </span>
                                </div>
                                <div class="website-content">
                                  <span class="contact-title">Website:</span>
                                  <span class="contact-website">#www.Admin Board.com</span>
                                </div>
                                <div class="skype-content">
                                  <span class="contact-title">Skype:</span>
                                  <span class="contact-skype">##Admin Board</span>
                                </div>
                              </div>
                              <div class="basic-information">
                                <h4>Basic information</h4>
                                <div class="birthday-content">
                                  <span class="contact-title">Birthday:</span>
                                  <span class="birth-date"> #January 31, 1990 </span>
                                </div>
                                <div class="gender-content">
                                  <span class="contact-title">Gender:</span>
                                  <span class="gender">#Male</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
       </div>
       
        </section>








@endsection

@section('script')
        <!-- Common  profile -->
    <script src="{{asset('/profile/css/lib/jquery.min.js')}}"></script>
    <script src="{{asset('/profile/css/lib/jquery.nanoscroller.min.js')}}"></script>
    <script src="{{asset('/profile/css/lib/menubar/sidebar.js')}}"></script>
    <script src="{{asset('/profile/css/lib/preloader/pace.min.js')}}"></script>
    <script src="{{asset('/profile/css/lib/bootstrap.min.js')}}"></script>
    <script src="{{asset('/profile/css/scripts.js')}}"></script>
@endsection
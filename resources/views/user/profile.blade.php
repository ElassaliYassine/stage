@extends('/layouts.app')

@section('link')

 <!-- Common -->
 
    {{-- <link href="{{asset('profile/css/lib/font-awesome.min.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('profile/css/lib/themify-icons.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('profile/css/lib/menubar/sidebar.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('profile/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('profile/css/lib/helper.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('profile/css/style.css')}}" rel="stylesheet">


<style>
  #main-content {
    margin-top: -70px ;
  }
</style>



@endsection

@section('content')



<section   class="     container   " >
  <div class="row  ">

    <div class="col-12 ">
      <div class="card">
        <div class="card-body p-b-0">
         
        <!-- Nav tabs -->
        <ul class="nav nav-tabs customtab" > {{-- <i class="ti-email"> --}}
          <li class="nav-item"> <a class="nav-link  {{( $active== 'user') ? 'active' : ''}}  "     href="/user/profile" ><span class="hidd/en-sm-up"> <i class="ti-user"></i>  </i></span> <span class="hidd/en-xs-down"> Profile  </span></a> </li>
          <li class="nav-item"> <a class="nav-link   {{ ($active== 'all_post') ? 'active' : ''}}  "  href="/profile_user/all_post"><span class="hidd/en-sm-up"><i class="ti-layout-list-thumb-alt"></i></span> <span class="hid/den-xs-down">Post</span></a> </li>
          <li class="nav-item"> <a class="nav-link   {{ ($active== 'settings') ? 'active' : 'settings'}}  "  href="/profile_user/settings"><span class="hidd/en-sm-up"><i class="ti-settings"></i></span> <span class="hid/den-xs-down">settings</span></a> </li>
        </ul>
       
      
          
       
      </div>
        </div>
      </div>
    <!-- row -->
  </div>
</section>




@yield('pages')







@endsection

@section('script')
        <!-- Common  profile -->
    {{-- <script src="{{asset('/profile/css/lib/jquery.min.js')}}"></script>
    <script src="{{asset('/profile/css/lib/jquery.nanoscroller.min.js')}}"></script>
    <script src="{{asset('/profile/css/lib/menubar/sidebar.js')}}"></script>
    <script src="{{asset('/profile/css/lib/preloader/pace.min.js')}}"></script> --}}
    {{-- <script src="{{asset('/profile/css/lib/bootstrap.min.js')}}"></script> --}}
    {{-- <script src="{{asset('/profile/css/scripts.js')}}"></script> --}}
@endsection
@extends('/user/profile');
<style>
	.pages {
		/* margin-top: -40px !important ; */
	}
	
</style>
@section('pages')
<section  class="container    profile_m_t   " >
	<!-- row -->
	<div class="row    ">
		
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Customtab vertical Tab</h4>
					<!-- Nav tabs -->
					<div class="vtabs customvtab">
						<ul class="nav nav-tabs tabs-vertical" role="tablist">
							<li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#follower" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">follower</span> </a> </li>
							<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile3" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages3" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane " id="follower" role="tabpanel">
								<div class="p-20">
									<h5>Best Clean Tab ever</h5>
									<h6>you can use it with the small code</h6>
									<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
								</div>
								{{-- @foreach ($likes as $p)
									{{$p ->post_id }}
								@endforeach --}}
							</div>

							<div class="tab-pane  p-20 active " id="profile3" role="tabpanel"    >


								<div class=" card p-5 " >
									
									<form action="/profile_user/update" method="post" enctype="multipart/form-data" class="w-100" >
										@csrf
										<div>
											<label for="">	address:</label> <br>
											<input type="text" name="address"  class="w-100" value="{{ auth()->user()->address }}" >
										</div>
										<div>
											<label for="">url_facebook:</label><br>
											<input type="text" name="url_facebook" class="w-100" value="{{ auth()->user()->url_facebook }}" >
										</div>
										<div>
											<label for="">url_instagram:</label> <br>
											<input type="file" name="url_instagram" class="w-100"  value="{{ auth()->user()->url_instagram }}" >
										</div>
										<div>
											<label for="">brithday:</label><br>
											<input type="text"  name="brithday" class="w-100" value="{{ auth()->user()->brithday }}">
										</div><br>
										<div>
											<label for="">	gender:</label><br>
											<input type="text"  name="gender" class="w-100" value="{{ auth()->user()->brithday }}">
										</div><br>

										<input type="submit" value="valide">
										<input type="reset" value="reset" class="mx-5"  >
										
									</form>
								</div>


								<div class=" card p-5 " >
									
									<form action="/profile_user/update" method="post" enctype="multipart/form-data" class="w-100" >
										@csrf
										<div>
											<label for="">name:</label> <br>
											<input type="text" name="name"  class="w-100" value="{{ auth()->user()->name }}" >
										</div>
										<div>
											<label for="">lastname:</label><br>
											<input type="text" name="lastname" class="w-100" value="{{ auth()->user()->lastname }}" >
										</div>
										<div>
											<label for="">photo:</label> <br>
											<input type="file" name="img_user" class="w-100"  value="{{ auth()->user()->img_user }}" >
										</div>
										<div>
											<label for="">Number phone:</label><br>
											<input type="text"  name="Number_phone" class="w-100" value="{{ auth()->user()->number_phone }}">
										</div><br>

										<input type="submit" value="valide">
										<input type="reset" value="reset" class="mx-5"  >
										
									</form>
								</div>
								<div  class=" card p-5 "   >
									<form action="/profile_user/change_password" method="post" class="w-100" >
										@csrf
										
									
										<div>
											<label for=""> old password  :</label><br>
											<input type="text"  name="old_password" class="w-100" >
											<span class="text-danger">
												@if (  !empty($error_pass))	
												     {{$error_pass}}	
												@endif
											</span>
											@error('old_password')
											<span class="text-danger">
												{{ $message }} 
												@if (  !empty($error_pass))	{{$error_pass}}	@endif
											</span>
											@enderror
										</div><br>
										{{-- @endif --}}

										{{-- @if ( $show_new_pas == 1 ) --}}
											<div>
												<label for=""> new password  :</label><br>
												<input type="text"  name="new_password" class="w-100"  >
												@error('new_password')
												<span class="text-danger">{{ $message }}</span>
												@enderror
											</div><br>

											<div>
												<label for=""> Confirm  password  :</label><br>
												<input type="text"  name="confirm_password" class="w-100"  >
												@error('confirm_password')
												<span class="text-danger">{{ $message }}</span>
												@enderror
											</div><br>
										{{-- @endif --}}
										
	
										<input type="submit" value="valide">
										<input type="reset" value="reset" class="mx-5"  >
										
									</form>
								</div>
							</div>
							<div class="tab-pane p-20" id="messages3" role="tabpanel">3</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- row -->
</section>
@endsection
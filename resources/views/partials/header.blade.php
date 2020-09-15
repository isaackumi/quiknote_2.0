<!DOCTYPE html>
<html lang="en">
<head>


  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


<title>QuikNote</title>




  <link href="{{asset('/assets/img/favicon.png')}} " rel="shortcut icon">

  <link rel="stylesheet" href="{{asset('/assets/plugins/bootstrap/css/bootstrap.min.css')}} ">
  <link rel="stylesheet" href="{{asset('/assets/plugins/bootstrap/css/bootstrap-slider.css')}} ">

  <link href="{{asset('/assets/plugins/font-awesome/css/font-awesome.min.css')}} " rel="stylesheet">

  <link href="{{asset('/assets/plugins/slick-carousel/slick/slick.css')}} " rel="stylesheet">
  <link href="{{asset('/assets/plugins/slick-carousel/slick/slick-theme.css')}} " rel="stylesheet">

  <link href="{{asset('/assets/plugins/fancybox/jquery.fancybox.pack.css')}} " rel="stylesheet">
  <link href="{{asset('/assets/plugins/jquery-nice-select/css/nice-select.css')}} " rel="stylesheet">

  <link href="{{asset('/assets/css/style.css')}} " rel="stylesheet">
  <link href="{{asset('/assets/css/price_tag.css')}} " rel="stylesheet">




</head>

<body class="body-wrapper">


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="{{url('/')}}">
						<img src="{{asset('assets/images/logo.jpg')}} " alt="LOGO" style="border-radius: -5%">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="/" style="color: #800000">Home</a>
							</li>
              @if (Route::has('login'))
							<li class="nav-item">
                @if(Auth::user())
								<a class="nav-link" href="{{route('dashboard')}} ">{{ Auth::user()->username }}'s Dashboard</a>

                @else
                <a class="nav-link" href="{{route('dashboard')}} ">Dashboard</a>
                @endif

							</li>


              @endif


							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pages <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="{{route('about-us')}}">About Us</a>
									<a class="dropdown-item" href="{{route('contact-us')}}">Contact Us</a>
									<!-- <a class="dropdown-item" href="user-profile.html">User Profile</a> -->

									<a class="dropdown-item" href="{{route('pricing')}}">Pricing Package</a>

									<a class="dropdown-item" href="{{route('blog')}}">Blog</a>
									<a class="dropdown-item" href="{{route('terms-condition')}}">Terms & Condition</a>

								</div>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Notes <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="{{ url('all-notes') }}">View all notes</a>
								</div>
							</li>

							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link" href="{{url('cart')}} ">Cart</a>
							</li>

						</ul>
						<ul class="navbar-nav ml-auto mt-10">

              @if (Route::has('login'))
              <li class="nav-item">
                @if(Auth::user())
                <!-- <a href="#" class="nav-link ml-4">{{ Auth::user()->username }}</a> -->
                	<a class="nav-link login-button" href="{{ url('logout') }}">{{ __('Logout') }}</a>
                @else

                <a class="nav-link login-button" href="{{ route('login') }}"> {{ __('Login') }}</a>
                @endif
                </li>
                @endif








							<li class="nav-item">
								<a class="nav-link text-white add-button" href="{{ route('note-upload') }}" style="background-color: #800000"><i class="fa fa-plus-circle"></i> Add Notes</a>


							</li>


{{--                  <li class="nav-item dropdown ml-auto">--}}
{{--                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Admin</a>--}}
{{--                      <div class="dropdown-menu dropdown-menu-right">--}}
{{--                          <a href="#" class="dropdown-item">Reports</a>--}}
{{--                          <a href="#" class="dropdown-item">Settings</a>--}}
{{--                          <div class="dropdown-divider"></div>--}}
{{--                          <a href="#"class="dropdown-item">Logout</a>--}}
{{--                      </div>--}}
{{--                  </li>--}}

						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>





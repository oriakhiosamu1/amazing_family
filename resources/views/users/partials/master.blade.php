<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Amazing Fire And Miracle Ministry</title>

		<!-- Loading third party fonts -->
		<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		{{-- Bootstrap css starts --}}

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

		{{-- bootstrap css ends --}}

		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

	</head>

    <body>
		<div class="site-content">
            <header class="site-header">
				<div class="container">
					<a href="/" class="branding">

						{{-- session message start --}}
						@if(session('success'))
							<div class="alert alert-success alert-dismissible fade show my-4" role="alert">
								{{ session('success') }}
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						@endif
	
						@if(session('failure'))
							<div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
								{{ session('failure') }}
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						@endif

						<img src="images/amazing_logo.jpg" alt="" class="logo" width="70">
						<h1 class="site-title">Amazing Fire And Miracle Ministry</h1>
					</a>

					{{-- Navigation bar start --}}

					<div class="main-navigation">
						<button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
						<ul class="menu">
                            <li class="menu-item current-menu-item"><a href="/">Home</a></li>
                            <li class="menu-item"><a href="{{ route('give') }}">Give</a></li>
                            
                            @auth
                                <li class="menu-item"><a href="{{ route('events') }}">Events</a></li>
                                <li class="menu-item"><a href="{{ route('news') }}">News</a></li>
                                <li class="menu-item"><a href="{{ route('sermons') }}">Sermons</a></li>
                                <li class="menu-item"><a href="{{ route('user/signout') }}">Logout</a></li>
                            @endauth
                            @guest
                                <li class="menu-item"><a href="{{ route('contact') }}">Contact</a></li>
                                <li class="menu-item"><a href="{{ route('signin') }}">Join us</a></li>
                            @endguest

						</ul>
					</div>

					{{-- Navigation bar ends --}}

					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->


            @yield('content')

            
            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="widget">
                                <h3 class="widget-title">Our address</h3>
                                <p></p>
                                <ul class="address">
                                    <li><i class="fa fa-map-marker"></i>Number 139 Ufuoma Town, Ughelli, Delta State, Nigeria</li>
                                    <li><i class="fa fa-phone"></i>0807 154 1760</li>
                                    <li><i class="fa fa-envelope"></i>amazingfireandmiracleministry@gmail.com</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="widget">
                                <h3 class="widget-title">About Us</h3>
                                <p>
                                    <strong>History of church:</strong> The church started on the 27th January, 2019 at number 18 Aka street, Ufuoma, Ughelli, Delta State.
                                </p>
                                <p>
                                    <strong>Main Purpose or Mission statement:</strong> "... making ready a people prepared for the second coming of our LORD JESUS CHRIST (luke 1: 17)".
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="widget">
                                <h3 class="widget-title">Contact form</h3>
                                <form action="{{ route('contact-form-submit') }}" method="POST" class="contact-form">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="Your name..." value="{{ old('name') }}" >
                                            @error('name')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" name="email" placeholder="Email..." value="{{ old('email') }}" >
                                            @error('email')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                
                                    <textarea name="message" placeholder="Your message...">{{ old('message') }}</textarea>
                                    @error('message')
                                        <small>{{ $message }}</small>
                                    @enderror

                                    <div class="text-right"><input type="submit" value="Send message"></div>
                                    
                                </form>
                            </div>
                        </div>
                    </div> <!-- .row -->

                    <p class="colophon">Copyright 2014 True Church. All right reserved</p>
                </div><!-- .container -->
            </footer> <!-- .site-footer -->

        </div>
		<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ asset('js/plugins.js') }}"></script>
		<script src="{{ asset('js/app.js') }}"></script>

		{{-- Bootstrap javascript cdn starts --}}

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
	
		{{-- Bootstrap javascript cdn end --}}
		
	</body>

</html>
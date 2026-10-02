<body>
	<!-- loder -->
	  <div class="loader-wrapper">
		<div class="loader"></div>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div>
	<!--==================================================-->
	<!-- Start Solar Panel  Top Bar Section -->
	<!--==================================================-->
	<div class="solar-topbar-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="solar-top-menu">
						<ul>
							<li class="line"><a href="#"><i class="bi bi-geo-alt"></i> 12/7 new town, USA</a></li>
							<li><a href="#"><i class="bi bi-telephone"></i> +91 97041 61945</a></li>
							<li><a href="#"><i class="bi bi-envelope"></i> info@ssres.in</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="solar-top-content-menu">
						
						<div class="solar-top-social-icon">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Solar Panel  Top Bar Section -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Solar Panel  Header Section -->
	<!--==================================================-->
	<header class="solar-header-section" id="sticky-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3 col-md-6">
					<div class="logo">
						<a href="{{ route('front_home_two') }}"><img src="{{ asset('frontend/assets/images/logo.png')}}" alt="logo"></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="solar-menu">
						<ul>
							<li><a href="{{route('front_home_two')}}">Home </a></li>
							<li><a href="{{route('front_about')}}">About</a></li>
							<li><a href="{{route('front_service')}}">Services <!-- <i class="fas fa-chevron-down"></i>--></a> 
								<!-- <div class="sub-menu">
									<ul>
										<li><a href="{{route('front_service')}}">Services</a></li>
										<li><a href="{{route('front_service_details')}}">Service Details</a></li>
									</ul>
								</div> -->
							</li>
							<li><a href="{{route('front_project')}}">Blog <!-- <i class="fas fa-chevron-down"></i>--></a>
								<!-- <div class="sub-menu">
									<ul>
										<li><a href="{{route('front_project')}}">Project Grid</a></li>
										<li><a href="{{route('front_project_details')}}">Project Details</a></li>
									</ul>
								</div> -->
							</li>
							<!-- <li><a href="#">Pages <i class="fas fa-chevron-down"></i></a>
								<div class="sub-menu">
									<ul>
										<li><a href="{{route('front_blog')}}">Blog</a></li>
										<li><a href="{{route('front_blog_details')}}">Blog Details</a></li>
										<li><a href="{{route('front_team')}}">Team</a></li>
										<li><a href="{{route('front_team_details')}}">Team Details</a></li>
										<li><a href="{{route('front_faq')}}">Faq</a></li>
										<li><a href="{{route('front_error')}}">Error</a></li>
									</ul>
								</div>
							</li> -->
							<li><a href="{{route('front_contact')}}">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					
						<div class="solar-btn">
							<a href="{{ route('front_contact') }}">Get A Quote <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<!-- Solar Mobile Menu Area -->
	<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
		<div class="mobile-menu">
			<nav class="solar_menu">
				<ul class="nav_scroll">
						<li><a href="{{ route('front_home_two') }}">Home</a></li>
							
						
						<li><a href="{{route('front_about')}}">About</a></li>
						<li><a href="{{route('front_service')}}">Services</a>
							<!-- <div class="sub-menu">
								<ul>
									<li><a href="{{route('front_service')}}">Services</a></li>
									<li><a href="{{route('front_service_details')}}">Service Details</a></li>
								</ul>
							</div> -->
						</li>
						<li><a href="{{route('front_project')}}">Blog</a>
							<!-- <div class="sub-menu">
								<ul>
									<li><a href="{{route('front_project')}}">Project Grid</a></li>
									<li><a href="{{ route('front_project_details') }}">Project Details</a></li>
								</ul>
							</div> -->
						</li>
						<!-- <li><a href="#">Pages</a>
							<div class="sub-menu">
								<ul>
									<li><a href="{{route('front_blog')}}">Blog</a></li>
									<li><a href="{{route('front_blog_details')}}">Blog Details</a></li>
									<li><a href="{{route('front_team')}}">Team</a></li>
									<li><a href="{{route('front_team_details')}}">Team Details</a></li>
									<li><a href="{{route('front_faq')}}">Faq</a></li>
									<li><a href="{{route('front_error')}}">Error</a></li>
								</ul>
							</div>
						</li> -->
						<li><a href="{{route('front_contact')}}">Contacts</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Solar Panel  Header Section -->
	<!--==================================================-->

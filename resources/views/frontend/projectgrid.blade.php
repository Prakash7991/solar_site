@extends('frontend.master')

@section('content')

	<!--==================================================-->
	<!-- Start Solar Panel  slider Section -->
	<!--==================================================-->
	<div class="breatcome-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="breatcome-content">
						<div class="breatcome-title">
							<h1>Projects Gird</h1>
						</div>
						<div class="bratcome-text">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li> Projects Gird</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--==================================================-->
	<!--End Solar Panel  slider Section  -->
	<!--==================================================-->




	<!--==================================================-->
	<!-- Start Solar Panel  Project Grid Section -->
	<!--==================================================-->
	<div class="project-grid-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="protfolio-nav text-center">
						<div class="protfolio-menu">
							<ul class="menu-filtering">
								<li class="current_menu_item" data-filter="*"> All Projects </li>
								<li data-filter=".physics" class=""> Business </li>
								<li data-filter=".chemistry" class=""> Energy </li>
								<li data-filter=".math"> Finance </li>
								<li data-filter=".bangla"> Supply Chain </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row image_load">
				<div class="col-lg-4 col-md-6 grid-item physics math mb-30">
					<div class="project-grid-box">
						<div class="project-thumb">
							<img src="{{ asset('frontend/assets/images/project/project1.png')}}" alt="">
						</div>
						<div class="project-content">
							<h4>Chain Finance Program</h4>
							<span>ECO, Supply Chain</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item chemistry bangla mb-30">
					<div class="project-grid-box">
						<div class="project-thumb">
							<img src="{{ asset('frontend/assets/images/project/project2.png')}}" alt="">
						</div>
						<div class="project-content">
							<h4>New Public Attitude Tracker</h4>
							<span>Digital Product</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item chemistry physics mb-30">
					<div class="project-grid-box">
						<div class="project-thumb">
							<img src="{{ asset('frontend/assets/images/project/project3.png')}}" alt="">
						</div>
						<div class="project-content">
							<h4>Smarter Ways to Manage</h4>
							<span>ECO, Supply Chain</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item bangla physics mb-30">
					<div class="project-grid-box">
						<div class="project-thumb">
							<img src="{{ asset('frontend/assets/images/project/project4.png')}}" alt="">
						</div>
						<div class="project-content">
							<h4>Task Managemen</h4>
							<span>Creative Work</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item chemistry math mb-30">
					<div class="project-grid-box">
						<div class="project-thumb">
							<img src="{{ asset('frontend/assets/images/project/project5.png')}}" alt="">
						</div>
						<div class="project-content">
							<h4>Addressing Wind Energy</h4>
							<span>ECO, Supply Chain</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item math bangla mb-30">
					<div class="project-grid-box">
						<div class="project-thumb">
							<img src="{{ asset('frontend/assets/images/project/project6.png')}}" alt="">
						</div>
						<div class="project-content">
							<h4>Historical Book Design</h4>
							<span>Finance, Supply</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Solar Panel  Project Grid  Section -->
	<!--==================================================-->




	<!--==================================================-->
	<!-- Start Solar Panel  Subscribe  Section -->
	<!--==================================================--> 

	<div class="subscribe-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="section-title">
						<div class="section-main-title Subscribe">
							<h2>Subscribe For The </h2>
							<h2>Exclusive</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<form action="https://formspree.io/f/myyleorq" method="POST" id="it-form">
						<div class="form-box Subscribe wow animate__slideInRight">
							<input type="text" name="email" placeholder="Your Email Address...">
							<button type="submit" class="icons">
								<i class="bi bi-send"></i>
							</button>
						</div>
						<div class="checkbox-box">
							<input type="checkbox" id="reviewcheck" name="reviewcheck">
							<label for="reviewcheck"> I agree to the <a href="#">Privacy Policy</a></label>
						</div>
					</form>
					<div id="status"></div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Solar Panel  Subscribe  Section -->
	<!--==================================================--> 
@endsection

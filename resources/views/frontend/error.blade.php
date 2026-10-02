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
							<h1>Error Page</h1>
						</div>
						<div class="bratcome-text">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li> 404</li>
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
	<!-- Start Solar Panel  Error Section -->
	<!--==================================================-->

	<div class="error-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="error-thumb mb-60">
						<img src="{{ asset('frontend/assets/images/resource/error-thumb.png')}}" alt="">
					</div>
					<div class="solar-btn text-center">
						<a href="index.php">Go To Home <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--==================================================-->
	<!-- End Solar Panel  Error  Section -->
	<!--==================================================-->
@endsection
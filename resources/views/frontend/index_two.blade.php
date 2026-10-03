@extends('frontend.master')

@section('content')

	<!--==================================================-->
	<!-- Start Solar Panel  slider Section -->
	<!--==================================================-->
	<div class="slider-section style-two d-flex">
		<div class="container">
			<div class="row align-items-center mt-50">
				<div class="col-lg-5"></div>
				<div class="col-lg-7 col-md-12">
					<div class="slider-content style-two wow animate__slideInRight">
						<h4> Sky Solar Renewable Energy Solutions Pvt Ltd</h4>
						
						<div class="choose-contact-boxx wow animate__fadeOutDown">
						<div class="choose-contact-title">
							<h4>Make an Appointment</h4>
						</div>
						<form action="{{ route('front_appointment_insert') }}" method="POST" id="appointment-form">
							@csrf
							<div class="row">
								<div class="col-lg-6">
									<div class="form-box">
										<input type="text" name="name" class="border border-black border-[3px]" placeholder="Full Name *" required>
										<i class="bi bi-person"></i>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-box">
										<input type="email" name="email" placeholder="Email Here *" required>
										<i class="bi bi-envelope"></i>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-box">
										<input type="tel" name="mobile_number" placeholder="Mobile Number *" required>
										<i class="bi bi-pencil-square"></i>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-box">
										<input type="number" name="current_bill" placeholder="Monthly Current Bill *" min="0" step="0.01" required>
										<i class="bi bi-pencil-square"></i>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-box-button">
										<button type="submit" id="appointment-submit">Appointment Now <i class="bi bi-arrow-right"></i></button>
									</div>
								</div>
							</div>
						</form>
						<div id="status"></div>
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
	<!-- Start Solar Panel  About Section -->
	<!--==================================================-->

	<div class="about-section style-two">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="about-thumb wow animate__zoomIn">
						<img src="{{ asset('frontend/assets/images/about/about-thumb2.png')}}" alt="">
						<div class="about-video-icon">
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i class="bi bi-play"></i></a>
						</div>
						<div class="about-counter-two style-two wow animate__slideInLeft">
							<div class="about-number-two style-two">
								<h4 class="counter">10</h4>
							</div>
							<div class="about-counter-content">
								<h5>Years Of Experience
									We Just Achived</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="about-section-title wow animate__slideInDown">
						<div class="about-section-sub-title">
							<h4>Our Introductton</h4>
						</div>
						<div class="about-section-main-title">
							<h2>We Are Pioneers In The World
								Of Solar  Energy! </h2>
						</div>
					</div>		
						<div class="about-content-discription wow animate__zoomIn">
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
								laudantium, totam aperiam, eaquecy epsa abillo inventore veritatis architecto beatae</p>
						</div>
							<div class="process-ber-plugin wow animate__zoomIn">
								<span class="process-bar">Business Success </span>
								<div id="bar1" class="barfiller">
									<div class="tipWrap" style="display: inline;">
										<span class="tip" style="left: 68.802px; transition: left 7s ease-in-out 0s;">90%</span>
									</div>
									<span class="fill" data-percentage="90" style="background: rgb(22, 181, 151); width: 305.798px; transition: width 7s ease-in-out 0s;"></span>
								</div>  
								<span class="process-bar">Install Solar Energy Panel</span>
								<div id="bar2" class="barfiller">
									<div class="tipWrap" style="display: inline;">
										<span class="tip" style="left: 50.997px; transition: left 7s ease-in-out 0s;">69%</span>
									</div>
									<span class="fill my-class" data-percentage="69" style="background: rgb(22, 181, 151); width: 287.779px; transition: width 7s ease-in-out 0s;"></span>
								</div>
								<span class="process-bar">Solar Production Energy</span>
								<div id="bar3" class="barfiller">
									<div class="tipWrap" style="display: inline;">
										<span class="tip" style="left: 50.997px; transition: left 7s ease-in-out 0s;">69%</span>
									</div>
									<span class="fill my-class" data-percentage="59" style="background: rgb(22, 181, 151); width: 287.779px; transition: width 7s ease-in-out 0s;"></span>
								</div>
							</div>
						   <div class="solar-btn about about2 wow animate__slideInUp">
							<a href="#">Get A Quout <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div> 
			</div>
		</div>	
    </div>
	
	<!--==================================================-->
	<!-- End Solar Panel  About Section -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Solar Panel  Offer  Section -->
	<!--==================================================-->

	<div class="offer-section style-two">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-12">
					<div class="section-title wow animate__slideInDown">
						<div class="section-sub-title offer">
							<h4>What We Offer</h4>
						</div>
						<div class="section-main-title offer">
							<h2>Few Reasons to Choose Us</h2>
						</div>
					</div>
					<div class="row inner">
						<div class="col-lg-4 col-md-4 col-sm-6 col-6">
							<div class="offer-items-box wow animate__slideInRight">
								<div class="offer-icon-thumb">
									<img src="{{ asset('frontend/assets/images/resource/offer-icon1.png')}}" alt="">
								</div>
								<div class="offer-content">
									<h4>Battery Storage</h4>
									<p>Solar PV, Battery Storage
										Heat Recovery </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-6">
							<div class="offer-items-box wow animate__slideInLeft">
								<div class="offer-icon-thumb">
									<img src="{{ asset('frontend/assets/images/resource/offer-icon2.png')}}" alt="">
								</div>
								<div class="offer-content">
									<h4>Energy Around</h4>
									<p>Solar PV, Battery Storage
										Heat Recovery </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-6">
							<div class="offer-items-box">
								<div class="offer-icon-thumb wow animate__slideInRight">
									<img src="{{ asset('frontend/assets/images/resource/offer-icon3.png')}}" alt="">
								</div>
								<div class="offer-content wow animate__slideInDown">
									<h4>Solar PV Systems</h4>
									<p>Solar PV, Battery Storage
										Heat Recovery </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-6">
							<div class="offer-items-box">
								<div class="offer-icon-thumb wow animate__slideInUp">
									<img src="{{ asset('frontend/assets/images/resource/offer-icon4.png')}}" alt="">
								</div>
								<div class="offer-content wow animate__slideInLeft">
									<h4>Technical Service</h4>
									<p>Solar PV, Battery Storage
										Heat Recovery </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-6">
							<div class="offer-items-box wow animate__zoomIn">
								<div class="offer-icon-thumb">
									<img src="{{ asset('frontend/assets/images/resource/offer-icon5.png')}}" alt="">
								</div>
								<div class="offer-content">
									<h4>Wind Generators</h4>
									<p>Solar PV, Battery Storage
										Heat Recovery </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-6">
							<div class="offer-items-box wow animate__slideInDown">
								<div class="offer-icon-thumb">
									<img src="{{ asset('frontend/assets/images/resource/offer-icon6.png')}}" alt="">
								</div>
								<div class="offer-content">
									<h4>Inspection skill</h4>
									<p>Solar PV, Battery Storage
										Heat Recovery </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-12 pl-0">
					<div class="offer-thumb wow animate__slideInUp">
						<img src="{{ asset('frontend/assets/images/resource/offer-thumb.png')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Solar Panel  Offer  Section -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Solar Panel  contanct us Section -->
	<!--==================================================-->
	 <div class="contact-us-section">
		<div class="container">
			<div class="row contact-us align-items-center">
				<div class="col-lg-2"></div>
				<div class="col-lg-7 col-md-6">
					<div class="section-title wow animate__bounceInRight">
						<div class="section-main-title contact-us wow animate__zoomIn">
							<h2>How We Create Solar Energy</h2>
						</div>
					</div>
					<div class="contact-us-discription wow animate__fadeInBottomLeft">
						<p>Building & Maintaining The Energy</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="solar-btn contact-us wow animate__slideInRight">
						<a href="contact-us.html">Contact Now <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	 </div>
	<!--==================================================-->
	<!-- End Solar Panel  contanct us Section -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Solar Panel  Team  Section -->
	<!--==================================================-->

	<div class="team-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center wow animate__slideInUp">
						<div class="section-sub-title">
							<h4>Our Team Members</h4>
						</div>
						<div class="section-main-title ">
							<h2>Meet Experience Team</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="team-items-box wow animate__zoomIn">
						<div class="team-thumb">
							<img src="{{ asset('frontend/assets/images/team/team4.png')}}" alt="">
							<div class="team-icon style-two">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
							<div class="team-main-icon style-two">
								<a href="#"><i class="bi bi-dash"></i></a>
							</div>
							<div class="team-content">
								<h4><a href="team-details.html">Roten Barsaw</a></h4>
								<span>Founder</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="team-items-box wow animate__slideInRight">
						<div class="team-thumb">
							<img src="{{ asset('frontend/assets/images/team/team3.png')}}" alt="">
							<div class="team-icon style-two">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
							<div class="team-main-icon style-two">
								<a href="#"><i class="bi bi-dash"></i></a>
							</div>
							<div class="team-content">
								<h4><a href="team-details.html">Angel Berryel</a></h4>
								<span>Founder</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="team-items-box wow animate__fadeInTopRight">
						<div class="team-thumb">
							<img src="{{ asset('frontend/assets/images/team/team2.png')}}" alt="">
							<div class="team-icon style-two">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
							<div class="team-main-icon style-two">
								<a href="#"><i class="bi bi-dash"></i></a>
							</div>
							<div class="team-content">
								<h4><a href="team-details.html">Jacksh Wider</a></h4>
								<span>Founder</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="team-items-box wow animate__zoomIn">
						<div class="team-thumb">
							<img src="{{ asset('frontend/assets/images/team/team1.png')}}" alt="">
							<div class="team-icon style-two">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
							<div class="team-main-icon style-two">
								<a href="#"><i class="bi bi-dash"></i></a>
							</div>
							<div class="team-content">
								<h4><a href="team-details.html">Mindar Plxerrw</a></h4>
								<span>Founder</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- Start Solar Panel  Team  Section -->
	<!--==================================================-->



	
	<!--==================================================-->
	<!-- Start Solar Panel  Testiomonial Section -->
	<!--==================================================-->

	<div class="testimonial-section wow animate__slideInUp">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center wow animate__zoomIn">
						<div class="section-sub-title">
							<h4>Our Testimonials</h4>
						</div>
						<div class="section-main-title ">
							<h2>Words From Our Customer</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testi_list owl-carousel">
					<div class="col-lg-12">
						<div class="testi-item-box">
							<div class="testi-content">
								<div class="testi-icon-thumb">
									<img src="{{ asset('frontend/assets/images/resource/testi-icon.png')}}" alt="">
								</div>
								<div class="testi-title">
									<h4>Lahiru Kumara</h4>
									<span>Designer</span>
								</div>
								<div class="testi-discription">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
								</div>
								<div class="testi-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="testi-item-box">
							<div class="testi-content">
								<div class="testi-icon-thumb">
									<img src="{{ asset('frontend/assets/images/resource/testi-icon.png')}}" alt="">
								</div>
								<div class="testi-title">
									<h4>Curtis Campher</h4>
									<span>Designer</span>
								</div>
								<div class="testi-discription">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
								</div>
								<div class="testi-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="testi-item-box">
							<div class="testi-content">
								<div class="testi-icon-thumb">
									<img src="{{ asset('frontend/assets/images/resource/testi-icon.png')}}" alt="">
								</div>
								<div class="testi-title">
									<h4>Barry McCarthy</h4>
									<span>Designer</span>
								</div>
								<div class="testi-discription">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
								</div>
								<div class="testi-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="testi-item-box">
							<div class="testi-content">
								<div class="testi-icon-thumb">
									<img src="{{ asset('frontend/assets/images/resource/testi-icon.png')}}" alt="">
								</div>
								<div class="testi-title">
									<h4>Lahiru Kumara</h4>
									<span>Designer</span>
								</div>
								<div class="testi-discription">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
								</div>
								<div class="testi-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="testi-item-box">
							<div class="testi-content">
								<div class="testi-icon-thumb">
									<img src="{{ asset('frontend/assets/images/resource/testi-icon.png')}}" alt="">
								</div>
								<div class="testi-title">
									<h4>Curtis Campher</h4>
									<span>Designer</span>
								</div>
								<div class="testi-discription">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
								</div>
								<div class="testi-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="testi-item-box">
							<div class="testi-content">
								<div class="testi-icon-thumb">
									<img src="{{ asset('frontend/assets/images/resource/testi-icon.png')}}" alt="">
								</div>
								<div class="testi-title">
									<h4>Barry McCarthy</h4>
									<span>Designer</span>
								</div>
								<div class="testi-discription">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
								</div>
								<div class="testi-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="testi-item-box">
							<div class="testi-content">
								<div class="testi-icon-thumb">
									<img src="{{ asset('frontend/assets/images/resource/testi-icon.png')}}" alt="">
								</div>
								<div class="testi-title">
									<h4>Lahiru Kumara</h4>
									<span>Designer</span>
								</div>
								<div class="testi-discription">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
								</div>
								<div class="testi-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="testi-item-box">
							<div class="testi-content">
								<div class="testi-icon-thumb">
									<img src="{{ asset('frontend/assets/images/resource/testi-icon.png')}}" alt="">
								</div>
								<div class="testi-title">
									<h4>Curtis Campher</h4>
									<span>Designer</span>
								</div>
								<div class="testi-discription">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
								</div>
								<div class="testi-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="testi-item-box">
							<div class="testi-content">
								<div class="testi-icon-thumb">
									<img src="{{ asset('frontend/assets/images/resource/testi-icon.png')}}" alt="">
								</div>
								<div class="testi-title">
									<h4>Barry McCarthy</h4>
									<span>Designer</span>
								</div>
								<div class="testi-discription">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
								</div>
								<div class="testi-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Solar Panel  Testiomonial Section -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Solar Panel  Get Call Back Section -->
	<!--==================================================-->

	<div class="call-back-section wow animate__slideInUp">
		<div class="container">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6 col-md-12">
					<div class="call-back-content text-center">
						<div class="call-back-numbar">
							<h3>+91 97041 61945</h3>
						</div>
						<div class="call-back-discription">
							<p>Perfectly simple & easy to distinguish free hour when power of choice is 
								nothing prevents our being. Mistaken idea denouncing</p>
						</div>
						<div class="solar-btn call-back">
							<a href="#">Get Call Back <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3"></div>
			</div>
		</div>
	</div>






	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		document.getElementById('appointment-form').addEventListener('submit', async function (event) {
			event.preventDefault();

			const form = event.currentTarget;
			const submitButton = document.getElementById('appointment-submit');
			const originalButtonContent = submitButton.innerHTML;

			submitButton.disabled = true;
			submitButton.textContent = 'Booking...';

			try {
				const response = await fetch(form.action, {
					method: 'POST',
					body: new FormData(form),
					headers: {
						'Accept': 'application/json',
						'X-Requested-With': 'XMLHttpRequest'
					}
				});

				const data = await response.json();

				if (!response.ok) {
					const validationMessage = data.errors
						? Object.values(data.errors).flat().join('\n')
						: (data.message || 'Please check the entered details and try again.');
					throw new Error(validationMessage);
				}

				form.reset();
				await Swal.fire({
					icon: 'success',
					title: 'Success!',
					text: data.message,
					confirmButtonText: 'OK'
				});
			} catch (error) {
				Swal.fire({
					icon: 'error',
					title: 'Unable to book appointment',
					text: error.message
				});
			} finally {
				submitButton.disabled = false;
				submitButton.innerHTML = originalButtonContent;
			}
		});
	</script>

@endsection

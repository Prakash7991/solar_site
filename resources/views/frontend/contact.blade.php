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
							<h1>Contact Us</h1>
						</div>
						<div class="bratcome-text">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>Contact Us</li>
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
	<!-- Start Solar Panel  Contact Us Section -->
	<!--==================================================-->

	<div class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="contact-title">
						<div class="contact-sub-title ">
							<h4> Contact Wlth Us</h4>
						</div>
						<div class="contact-main-title">
							<h2>Get In Touch!</h2>
						</div>
						<div class="contact-discription">
							<p>Get in Touch! Contact with us Get in Touch! Contact with us</p>
						</div>
					</div>
					<div class="contact-box-item">
						<div class="contact-icon">
							<i class="bi bi-geo-alt-fill"></i>
						</div>
						<div class="contact-adress">
							<h5>Address</h5>
							<span>7515 Carriage Court, Coachella,</span>
						</div>
					</div>
					<div class="contact-box-item">
						<div class="contact-icon">
							<i class="bi bi-phone-flip"></i>
						</div>
						<div class="contact-adress">
							<h5>Call Us Today</h5>
							<span>(+001) 123-456-7890</span>
						</div>
					</div>
					<div class="contact-box-item">
						<div class="contact-icon">
							<i class="bi bi-envelope"></i>
						</div>
						<div class="contact-adress">
							<h5>Email Us</h5>
							<span>example@gmail.com</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="choose-contact-box contact-inner">
						<form action="https://formspree.io/f/myyleorq" method="POST" id="it-form">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-box contact-inner">
										<input type="text" name="name" placeholder="Full Name*">
										<i class="bi bi-person"></i>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-box contact-inner">
										<input type="text" name="email" placeholder="Email Address*">
										<i class="bi bi-envelope"></i>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-box contact-inner">
										<input type="text" name="phone" placeholder="Phone Number*">
										<i class="bi bi-phone-flip"></i>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-box">
										<input type="text" name="subject" placeholder="Select Service *">
										<i class="bi bi-pencil-square"></i>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-box contact-inner">
										<input type="text" name="compnay" placeholder="Your Company Name*">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-box contact-inner">
										<textarea name="massage" id="massage" cols="30" rows="10" placeholder="Write your question here*"></textarea>
										<i class="bi bi-chat-left-text-fill"></i>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-box-button contact-inner">
										<button type="Submit">Send Messages</button>
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
	<!--==================================================-->
	<!-- End Solar Panel  Contact Us  Section -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Solar Panel  Map  Section -->
	<!--==================================================-->
	<div class="map-area">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7496149.95373021!2d85.84621250756469!3d23.452185887261447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2sBangladesh!5e0!3m2!1sen!2sbd!4v1635150422284!5m2!1sen!2sbd" width="1920" height="800" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Solar Panel  Map  Section -->
	<!--==================================================-->
@endsection
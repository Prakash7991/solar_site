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
							<h1>Faq</h1>
						</div>
						<div class="bratcome-text">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li> Faq</li>
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
	<!-- Start Solar Panel  Faq Section -->
	<!--==================================================-->

	<div class="faq-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="section-title wow fadeInUp animated animated">
						<div class="section-sub-title faq">
							<h4>Faq Asked</h4>
						</div>
						<div class="section-main-title faq">
							<h2>Want to Ask Something from Us?</h2>
						</div>
						<div class="faq-discription">
							<p>Asi enim ad minim veniam, quis nostrud exerci Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
						</div>
					</div>
					<!-- Start Accordion -->
					<div class="tab_container">
						<div id="tab1" class="tab_content">
							<ul class="accordion">
								<li>
									<a class=""><span> What warranties do I have for installation? </span></a>
									<p style="display: none;">The time it takes to repair a roof depends on the extent of the damage. 
										For minor repairs, it might take an hour or two. For significant repairs, 
										A or team might be at your home for half a day.</p>
								</li>
								<li>
									<a class=""><span> What warranties do I have for installation? </span></a>
									<p style="display: none;">The time it takes to repair a roof depends on the extent of the damage. 
										For minor repairs, it might take an hour or two. For significant repairs, 
										A or team might be at your home for half a day.</p>
								</li>
								<li>
									<a><span> What warranties do I have for installation? </span></a>
									<p>The time it takes to repair a roof depends on the extent of the damage. 
										For minor repairs, it might take an hour or two. For significant repairs, 
										A or team might be at your home for half a day.</p>
								</li>
								<li>
									<a><span> What warranties do I have for installation? </span></a>
									<p>The time it takes to repair a roof depends on the extent of the damage. 
										For minor repairs, it might take an hour or two. For significant repairs, 
										A or team might be at your home for half a day.</p>
								</li>
							</ul>
						</div>
					</div>
					<!-- End Accordion -->
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="choose-contact-box faq">
						<div class="choose-contact-title faq">
							<h4>Make an Appointment</h4>
						</div>
						<form action="https://formspree.io/f/myyleorq" method="POST" id="it-form">
							<div class="row">
								<div class="col-lg-12">
									<div class="form-box faq">
										<input type="text" name="name" placeholder="Name">
										<i class="bi bi-person"></i>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-box faq">
										<input type="text" name="email" placeholder="Email*">
										<i class="bi bi-envelope"></i>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-box faq">
										<textarea name="massage" id="massage" cols="30" rows="10" placeholder="write somethings"></textarea>
										<i class="bi bi-chat-left-text-fill"></i>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-box-button faq">
										<button type="Submit">Send Request</button>
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
	<!-- End Solar Panel  Faq Section -->
	<!--==================================================-->
@endsection


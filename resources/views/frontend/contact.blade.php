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
							<span>+91 97041 61945</span>
						</div>
					</div>
					<div class="contact-box-item">
						<div class="contact-icon">
							<i class="bi bi-envelope"></i>
						</div>
						<div class="contact-adress">
							<h5>Email Us</h5>
							<span>info@ssres.in</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="choose-contact-box contact-inner">
						<form action="{{ route('front_contact_insert') }}" method="POST" id="contact-form" novalidate>
							@csrf
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-box contact-inner">
										<input type="text" name="name" placeholder="Full Name*">
										<i class="bi bi-person"></i>
										<small class="contact-field-error" data-error-for="name"></small>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-box contact-inner">
										<input type="email" name="email" placeholder="Email Address*">
										<i class="bi bi-envelope"></i>
										<small class="contact-field-error" data-error-for="email"></small>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-box contact-inner">
										<input type="text" name="phone" placeholder="Phone Number*">
										<i class="bi bi-phone-flip"></i>
										<small class="contact-field-error" data-error-for="phone"></small>
									</div>
								</div>
								
								<div class="col-lg-12 col-md-12">
									<div class="form-box contact-inner">
										<textarea name="message" id="message" cols="30" rows="10" placeholder="Write your question here*"></textarea>
										<i class="bi bi-chat-left-text-fill"></i>
										<small class="contact-field-error" data-error-for="message"></small>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-box-button contact-inner">
										<button type="submit" id="contact-submit">Send Messages</button>
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

	<style>
		#contact-form .contact-field-error{display:block;color:#dc3545;font-size:13px;line-height:1.4;margin-top:6px;min-height:18px}
		#contact-form .contact-field-invalid{border-color:#dc3545!important;box-shadow:0 0 0 1px rgba(220,53,69,.15)}
	</style>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const form = document.getElementById('contact-form');
			const submitButton = document.getElementById('contact-submit');
			const fields = ['name', 'email', 'phone', 'message'];

			const clearError = function (fieldName) {
				const field = form.elements[fieldName];
				const errorElement = form.querySelector('[data-error-for="' + fieldName + '"]');
				field.classList.remove('contact-field-invalid');
				errorElement.textContent = '';
			};

			const showError = function (fieldName, message) {
				const field = form.elements[fieldName];
				const errorElement = form.querySelector('[data-error-for="' + fieldName + '"]');
				field.classList.add('contact-field-invalid');
				errorElement.textContent = message;
			};

			const validateForm = function () {
				let valid = true;
				fields.forEach(clearError);

				fields.forEach(function (fieldName) {
					if (!form.elements[fieldName].value.trim()) {
						showError(fieldName, 'This field is required.');
						valid = false;
					}
				});

				const email = form.elements.email.value.trim();
				if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
					showError('email', 'Please enter a valid email address.');
					valid = false;
				}

				return valid;
			};

			fields.forEach(function (fieldName) {
				form.elements[fieldName].addEventListener('input', function () {
					clearError(fieldName);
				});
			});

			form.addEventListener('submit', async function (event) {
				event.preventDefault();

				if (!validateForm()) return;

				const originalButtonText = submitButton.textContent;
				submitButton.disabled = true;
				submitButton.textContent = 'Sending...';

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
						if (data.errors) {
							Object.entries(data.errors).forEach(function ([fieldName, messages]) {
								if (fields.includes(fieldName)) showError(fieldName, messages[0]);
							});
						}
						throw new Error(data.message || 'Please check the entered details.');
					}

					form.reset();
					fields.forEach(clearError);
					await Swal.fire({
						icon: 'success',
						title: 'Success!',
						text: data.message,
						confirmButtonText: 'OK'
					});
				} catch (error) {
					Swal.fire({
						icon: 'error',
						title: 'Unable to submit enquiry',
						text: error.message
					});
				} finally {
					submitButton.disabled = false;
					submitButton.textContent = originalButtonText;
				}
			});
		});
	</script>
@endsection

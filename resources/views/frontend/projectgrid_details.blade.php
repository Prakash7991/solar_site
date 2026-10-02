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
							<h1> Project Details</h1>
						</div>
						<div class="bratcome-text">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li> Project Details</li>
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
	<!-- Start Solar Panel  Priject Details  Section -->
	<!--==================================================-->
	<div class="project-details-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="projetct-details-image">
						<img src="{{ asset('frontend/assets/images/resource/project-details1.jpg')}}" alt="Service">
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="info-area">
						<div class="sub-title">
							<h5>information</h5>
						</div>
						<ul class="info">
							<li>
								<h6>project name:</h6>
								<p>solar &amp; exterior design</p>
							</li>
							<li>
								<h6>client:</h6>
								<p>theme pvt ltd</p>
							</li>
							<li>
								<h6>category:</h6>
								<p>commercial</p>
							</li>
							<li>
								<h6>delivery mode:</h6>
								<p>in hand delivery</p>
							</li>
							<li>
								<h6>location:</h6>
								<p>USA</p>
							</li>
							<li>
								<h6>share:</h6>
								<ul class="d-flex">
									<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-12">
                    <div class="title">
                        <h4>Description of Situation</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nul pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus e voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</p>
                </div>
				<div class="col-lg-12 list-part">
                    <div class="row align-items-end">
                        <div class="col-lg-8 col-md-12">
                            <div class="title">
                                <h4>client's goal</h4>
                            </div>
                            <p>The result of employees, over 115 detailers and engineers, all coming together to solve probl before they arise. the teamwork it demonstrates both internally and externally is outstandingThe result of employees, over 115 detailers and engineers, all coming together to solve problem before they</p>
                            <ul class="desc-list">
                                <li><p>The triple pressures of more regulations outstanding in the creation.</p></li>
                                <li><p>The legacy of the financial crisis has meant a few tricky years</p></li>
                                <li><p>Now, the triple pressures of more regulations more regulations</p></li>
                                <li><p>Outstanding in the creation he triple pressures of more regulations</p></li>
                                <li><p>The triple pressures of more regulations outstanding in the creation</p></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/resource/service3.png')}}" alt="Service">
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!-- Start Solar Panel  Priject Details  Section -->
	<!--==================================================-->

@endsection
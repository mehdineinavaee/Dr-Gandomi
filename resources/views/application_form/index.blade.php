@extends('layouts.app')
@section('title', 'فرم کاربردی')
@section('content')
<!-- Start Page Title Area -->
		<div class="page-title-area bg-27">
			<div class="container">
				<div class="page-title-content">
					<h2>Application</h2>

					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>

						<li class="active">Application</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Candidates Resume Area -->
		<section class="candidates-resume-area ptb-100">
			<div class="container">
				<div class="candidates-resume-content">
					<form class="resume-info">
						<h3>Student basic information</h3>

						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Student's Full Name</label>
									<input class="form-control" type="text" name="First-Name">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Degree level</label>
									<select class="form-control">
										<option value="1">Select Degree level</option>
										<option value="2">First Class</option>
										<option value="3">Second Class</option>
										<option value="4">Third Class</option>
									</select>
									<i class="ri-arrow-down-s-line"></i>
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label for="img">Student photo</label>
									<input type="file" class="form-control" id="img-1" name="img" accept="image/*">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label for="img">Upload passport or birth documentation</label>
									<input type="file" class="form-control" id="img" name="img" accept="image/*">
								</div>
							</div>

							<p>Photo Must be in Passport (PP) Size. Max Upload Size 256KB</p>
						</div>

						<h3>Student personal information</h3>

						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Father's name</label>
									<input type="text" class="form-control" name="Father">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Mother's name</label>
									<input type="text" class="form-control" name="Mother">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Contact no</label>
									<input type="text" class="form-control" name="contact">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>E-mail</label>
									<input type="email" class="form-control" name="email">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Present address</label>
									<input type="text" class="form-control" name="address">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Date Of Barth</label>
									<div class="input-group date" id="datetimepicker">
										<input type="text" class="form-control">
										<span class="input-group-addon"></span>
										<i class="bx bx-calendar"></i>
									</div>	
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>National ID</label>
									<input type="text" class="form-control" name="national">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Student type</label>
									<select class="form-control">
										<option value="1">Select Student Type</option>
										<option value="2">First Class</option>
										<option value="3">Second Class</option>
										<option value="4">Third Class</option>
									</select>
									<i class="ri-arrow-down-s-line"></i>
								</div>
							</div>
						</div>

						<h3>Student academic information</h3>

						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>School</label>
									<input class="form-control" type="text" name="School">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<div class="form-group">
										<label>Year of completion</label>
										<div class="input-group date" id="datetimepicker-2">
											<input type="text" class="form-control">
											<span class="input-group-addon"></span>
											<i class="bx bx-calendar"></i>
										</div>	
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Highest qualification</label>
									<input type="text" class="form-control" name="qualification">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Current status</label>
									<select class="form-control">
										<option value="1">Select Current status</option>
										<option value="2">Student</option>
										<option value="3">Worker</option>
									</select>
									<i class="ri-arrow-down-s-line"></i>
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Select area of study</label>
									<input type="text" class="form-control" name="study">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Degree level</label>
									<select class="form-control">
										<option value="1">Select Degree level</option>
										<option value="2">First Class</option>
										<option value="3">Second Class</option>
										<option value="4">Third Class</option>
									</select>
									<i class="ri-arrow-down-s-line"></i>
								</div>
							</div>

							<div class="col-lg-12 col-md-12">
								<div class="form-group checkboxs">
									<input type="checkbox" id="chb2">
									<p>
										By submitting this form, you agree to the <a href="terms-conditions.html">Terms &amp; Conditions</a> And <a href="privacy-policy.html">Privacy Policy</a> notice.
									</p>
								</div>
							</div>

							<div class="col-lg-12">
								<a href="index.htm#" class="default-btn">
									Submit application
									<i class="ri-arrow-right-line"></i>
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End Candidates Resume Area -->
@endsection

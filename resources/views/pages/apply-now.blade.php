@extends('pages.template')
@section('view')
		<section class="page-header">
			<div class="page-header__bg"
				style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="{{route('home')}}">Home</a></li>
					<li><span>Apply Now</span></li>
				</ul><!-- /.thm-breadcrumb list-unstyled -->
				<h2>Apply Now</h2>
			</div><!-- /.container -->
		</section><!-- /.page-header -->


		<section class="finloan-apply-one pt-120 pb-120">
			<div class="container">
				<form method="POST" action="{{ url('apply') }}" class="form-one contact-one__form">
{{--				<form method="POST" action="{{ route('apply') }}" class="form-one contact-one__form">--}}
                    @method('POST')
                    @csrf
					<div class="contact-one__form-box">
						<div class="row">
							<div class="col-md-12">
								<div class="block-title">
									<p class="block-title__tagline">Calculate you loan amount</p>
									<h2 class="block-title__title">Loan Details</h2>
								</div><!-- /.block-title-->
							</div><!-- /.col-md-12-->
						</div><!-- /.row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Loan Amount*</label>
									<input class="form-control" type="number"  name="loan_amount"  placeholder="Loan Amount" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>Monthly Income*</label>
									<input class="form-control" type="number" name="monthly_income"  placeholder="Monthly Income" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
						</div><!-- /.row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Purpose of Loan</label>
									<select name="loan_purpose" class="form-control" required>
										<option value="" disabled>Select Purpose of Loan</option>
										<option value="business">Business</option>
										<option value="home_purchase">Home Purchase</option>
										<option value="car_purchase">Car Purchase</option>
										<option value="holiday">Holiday</option>
										<option value="other">Other</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>Loan Years</label>
									<select id="loan_period" name="loan_period" class="form-control" required>
										<option value="">Select Loan Period</option>
										<option value="1">1 Month</option>
										<option value="2">2 Months</option>
										<option value="3">3 Months</option>
										<option value="6">6 Months</option>
										<option value="12">12 Months</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
						</div><!-- /.row-->
					</div><!-- /.contact-one__form-box-->
					<div class="contact-one__form-box">
						<div class="row">
							<div class="col-md-12">
								<div class="block-title pt-50">
									<p class="block-title__tagline">Ask for More Details</p>
									<h2 class="block-title__title">Personal Details</h2>
								</div><!-- /.block-title-->
							</div><!-- /.col-md-12-->
						</div><!-- /.row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Full Name*</label>
									<input class="form-control" type="text" name="name" placeholder="Full Name" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>Email*</label>
									<input class="form-control" type="email" name="email" placeholder="Your Email" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
						</div><!-- /.row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Mobile Number*</label>
									<input class="form-control" type="text" name="phone_number" placeholder="Mobile Number" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>Marital Status*</label>
									<select name="marital_status" class="form-control" required>
										 <option value="">Select Martial Status</option>
										<option value="single">Single</option>
										<option value="married">Married</option>
										<option value="separated">Separated</option>
										<option value="divorced">Divorced</option>
										<option value="widowed">Widowed</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
						</div><!-- /.row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Birth Date*</label>
									<input class="form-control" type="text" name="birth_date" placeholder="Birth Date" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>Mode of Identification*</label>
									<input class="form-control" type="number" name="tax_id" placeholder="Taxpayer ID/ Passport No./ SSN/ Driver Licence No." required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
						</div><!-- /.row-->
					</div><!-- /.contact-one__form-box-->
					<div class="contact-one__form-box">
						<div class="row">
							<div class="col-md-12">
								<div class="block-title pt-50">
									<p class="block-title__tagline">Additional Information</p>
									<h2 class="block-title__title">Other Details</h2>
								</div><!-- /.block-title-->
							</div><!-- /.col-md-12-->
						</div><!-- /.row-->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Property Location*</label>
									<input class="form-control" type="text" name="property_address" placeholder="Address" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Employer Status*</label>
									<select name="employment_status" class="form-control" required>
										 <option value="">Select Employement Status</option>
										<option value="employed">Business</option>
										<option value="business">Business</option>
										<option value="self_employed">Self Employed</option>
										><option value="student">Student</option>
										<option value="other">Other</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div><!-- /.form-group-->
							</div><!-- col-md-6 -->
						</div><!-- row -->
					</div><!-- contact-one__form-box -->
                    <div class="col-md-12">
                        <button type="submit" class="thm-btn"> Submit</button>
                    </div>
				</form><!-- /.contact-one__form-->
			</div><!-- /.container-->
		</section><!-- /.contact-one-->

@endsection

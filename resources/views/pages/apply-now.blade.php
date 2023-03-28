@extends('pages.template')
@section('view')
		<section class="page-header">
			<div class="page-header__bg"
				style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="{{route('home')}}">@lang('navigation.home')</a></li>
					<li><span>@lang('apply_now.apply_now')</span></li>
				</ul><!-- /.thm-breadcrumb list-unstyled -->
				<h2>@lang('apply_now.apply_now')</h2>
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
									<p class="block-title__tagline">@lang('apply_now.loan.calc_text')</p>
									<h2 class="block-title__title">@lang('apply_now.loan.loan_details')</h2>
								</div><!-- /.block-title-->
							</div><!-- /.col-md-12-->
						</div><!-- /.row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>@lang('apply_now.loan.loan_amount')*</label>
									<input class="form-control" type="number"  name="loan_amount"  placeholder="@lang('apply_now.loan.loan_amount')" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>@lang('apply_now.loan.monthly_income')*</label>
									<input class="form-control" type="number" name="monthly_income"  placeholder="@lang('apply_now.loan.monthly_income')" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
						</div><!-- /.row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>@lang('apply_now.loan.loan_purpose')</label>
									<select name="loan_purpose" class="form-control" required>
										<option value="" disabled>@lang('apply_now.loan.select_loan_purpose')</option>
										<option value="business">@lang('apply_now.loan.business')</option>
										<option value="home_purchase">@lang('apply_now.loan.home_purchase')</option>
										<option value="car_purchase">@lang('apply_now.loan.car_purchase')</option>
										<option value="holiday">@lang('apply_now.loan.holiday')</option>
										<option value="other">@lang('apply_now.loan.other')</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>@lang('apply_now.loan.loan_years')</label>
									<select id="loan_period" name="loan_period" class="form-control" required>
										<option value="">@lang('apply_now.loan.select_loan_period')</option>
										<option value="1">@lang('apply_now.loan.1_month')</option>
										<option value="2">@lang('apply_now.loan.2_months')</option>
										<option value="3">@lang('apply_now.loan.3_months')</option>
										<option value="6">@lang('apply_now.loan.6_months')</option>
										<option value="12">@lang('apply_now.loan.12_months')</option>
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
									<p class="block-title__tagline">@lang('apply_now.loan.ask_for_details')</p>
									<h2 class="block-title__title">@lang('apply_now.loan.personal_details')</h2>
								</div><!-- /.block-title-->
							</div><!-- /.col-md-12-->
						</div><!-- /.row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>@lang('apply_now.loan.full_name')*</label>
									<input class="form-control" type="text" name="name" placeholder="@lang('apply_now.loan.full_name')" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>@lang('apply_now.loan.email')*</label>
									<input class="form-control" type="email" name="email" placeholder="@lang('apply_now.loan.email')" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
						</div><!-- /.row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>@lang('apply_now.loan.mobile_number')*</label>
									<input class="form-control" type="text" name="phone_number" placeholder="@lang('apply_now.loan.mobile_number')" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>@lang('apply_now.loan.marital_status')*</label>
									<select name="marital_status" class="form-control" required>
										 <option value="">@lang('apply_now.loan.select_marital_status')</option>
										<option value="single">@lang('apply_now.loan.single')</option>
										<option value="married">@lang('apply_now.loan.married')</option>
										<option value="separated">@lang('apply_now.loan.separated')</option>
										<option value="divorced">@lang('apply_now.loan.divorced')</option>
										<option value="widowed">@lang('apply_now.loan.widowed')</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
						</div><!-- /.row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>@lang('apply_now.loan.birth_date')*</label>
									<input class="form-control" type="text" name="birth_date" placeholder="@lang('apply_now.loan.birth_date')" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>@lang('apply_now.loan.mode_of_identification')*</label>
									<input class="form-control" type="number" name="tax_id" placeholder="Taxpayer ID/ Passport No./ SSN/ Driver Licence No." required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
						</div><!-- /.row-->
					</div><!-- /.contact-one__form-box-->
					<div class="contact-one__form-box">
						<div class="row">
							<div class="col-md-12">
								<div class="block-title pt-50">
									<p class="block-title__tagline">@lang('apply_now.loan.additional_info')</p>
									<h2 class="block-title__title">@lang('apply_now.loan.other_details')</h2>
								</div><!-- /.block-title-->
							</div><!-- /.col-md-12-->
						</div><!-- /.row-->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>@lang('apply_now.loan.property_location')*</label>
									<input class="form-control" type="text" name="property_address" placeholder="@lang('apply_now.loan.property_location')" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>@lang('apply_now.loan.employer_status')*</label>
									<select name="employment_status" class="form-control" required>
										 <option value="">@lang('apply_now.loan.select_employment_status')</option>
										<option value="employed">@lang('apply_now.loan.emp_status_employed')</option>
										<option value="business">@lang('apply_now.loan.emp_status_business')</option>
										<option value="self_employed">@lang('apply_now.loan.emp_status_self_employed')</option>
										><option value="student">@lang('apply_now.loan.emp_status_student')</option>
										<option value="other">@lang('apply_now.loan.emp_status_other')</option>
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

@extends('layouts.inner')
@section('inner')
	
	<div class="m-portlet m-portlet--tab">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<span class="m-portlet__head-icon m--hide">
					<i class="la la-gear"></i>
				</span>
				<h3 class="m-portlet__head-text">
					Search Institution Blacklist 
				</h3>
			</div>
		</div>
	</div>
	<form method="POST" action="/institution/search" class="m-form m-form--fit m-form--label-align-right">
		@csrf
		<input type="hidden" name="RequestType" value="Institution">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<div class="col-lg-4">
					<label class="">Serial No:</label>
					<input type="text" class="form-control m-input" placeholder="Enter Serial No." name="SerialNumber" required="">
					<!-- <span class="m-form__help">Please enter Serial No.</span> -->
				</div>
				<div class="col-lg-4">
					<label>Name:</label>
					<input type="text" class="form-control m-input" placeholder="Enter Name">
					<!-- <span class="m-form__help">Please enter Name of Institution</span> -->
				</div>
				<div class="col-lg-4">
					<label>PAN No.:</label>
					<input type="email" class="form-control m-input" placeholder="Enter Father's Name" name="PanNo">
					<!-- <span class="m-form__help">Please enter PAN No</span> -->
				</div>
			</div>
			<div class="form-group m-form__group row">
				<div class="col-lg-4">
					<label>Company Registration No.:</label>
					<input type="email" class="form-control m-input" placeholder="Enter Citizenship" name="CompanyRegNo">
					<!-- <span class="m-form__help">Please enter company registration number</span> -->
				</div>
				<div class="col-lg-4">
					<label for="category">Company Registration Date:</label>
					<input type="text" class="form-control m-input" aria-describedby="title" placeholder="Enter Citizenship Issued Date" name="CompanyRegDate">
					<!-- <span class="m-form__help">Please enter company registration date</span> -->
			</div>
			<div class="col-lg-4">
					<label for="category">Company Registration Auth:</label>
					<input type="text" class="form-control m-input " aria-describedby="title" placeholder="Enter Citizenship Issued District" name="CompanyRegAuth">
					<!-- <span class="m-form__help">Please enter company registration Auth</span> -->
			</div>
			</div>
			<div class="form-group m-form__group row">
				<div class="col-lg-4">
					<label class="">Date of Birth:</label>
					<input type="text" class="form-control m-input" placeholder="Enter Date of Birth." name="ConsumerDOB">
					<!-- <span class="m-form__help">Please enter DOB.</span> -->
				</div>
				<div class="col-lg-4">
					<label class="">Passport No.:</label>
					<input type="text" class="form-control m-input" placeholder="Enter Passport No." name="PassportNo">
					<!-- <span class="m-form__help">Please enter Passport No.</span> -->
				</div>
				<div class="col-lg-4">
					<label class="">Indian Embassy No.:</label>
					<input type="text" class="form-control m-input" placeholder="Enter Passport No." name="IndianEmbassyNo">
					<!-- <span class="m-form__help">Please enter Indian Embassy No.</span> -->
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</div>

@endsection
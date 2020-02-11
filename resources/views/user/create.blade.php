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
					Create User
				</h3>
			</div>
		</div>
	</div>
	<form method="POST" action="{{route('storeUser')}}" class="m-form m-form--fit m-form--label-align-right">
		@csrf
		<input type="hidden" name="created_by" value="{{auth()->user()->id}}">
		<div class="m-portlet__body">
			<div class="form-group m-form__group">
				<label for="branchCode">Branch Code</label>
				<input type="number" class="form-control m-input m-input--solid" id="branchCode" aria-describedby="branchCode" placeholder="Enter branch code" name="branch_code" required="">
			</div>
			<div class="form-group m-form__group">
				<label for="name">Name</label>
				<input type="text" class="form-control m-input m-input--solid" id="name" aria-describedby="name" placeholder="Enter name" name="name" required="">
			</div>

			<div class="form-group m-form__group">
				<label for="email">Email</label>
				<input type="text" class="form-control m-input m-input--solid" id="email" aria-describedby="email" placeholder="Enter email" name="email" required="">
			</div>
			
			<div class="form-group m-form__group">
				<label for="level">Level</label>
				<input type="text" class="form-control m-input m-input--solid" id="level" aria-describedby="level" placeholder="Enter level" name="level" required="">
			</div>

			<div class="form-group m-form__group">
				<label for="designation">Designation</label>
				<input type="text" class="form-control m-input m-input--solid" id="designation" aria-describedby="designation" placeholder="Enter designation" name="designation" required="">
			</div>

			<div class="form-group m-form__group">
				<label for="password">password</label>
				<input type="password" class="form-control m-input m-input--solid" id="password" aria-describedby="password" placeholder="Enter password" name="password" required="">
			</div>

			<div class="form-group m-form__group">
				<label for="confirmPassword">Confirm Password</label>
				<input type="password" class="form-control m-input m-input--solid" id="confirmPassword" aria-describedby="confirmPassword" placeholder="Confirm Password" name="password_confirmation" required="">
			</div>

		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>

	<!--end::Form-->
</div>
@endsection
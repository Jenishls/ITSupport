@extends('layouts.inner')
@section('inner')
	<div class="m-portlet m-portlet--tab">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<span class="m-portlet__head-icon">
					<i class="flaticon-placeholder-2"></i>
				</span>
				<h3 class="m-portlet__head-text">
					Edit User
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<form method="POST" action="{{route('passwordReset')}}" >
						@csrf
						<button class="btn btn-danger">Reset Password</button>
					</form>
				</li>
			</ul>
		</div>
	</div>
	<form method="POST" action="{{route('updateUser')}}" class="m-form m-form--fit m-form--label-align-right">
		@csrf
		<input type="hidden" name="id" value="{{$user->id}}">
		<div class="m-portlet__body">
			<div class="form-group m-form__group">
				<label for="branchCode">Branch Code</label>
				<input type="number" class="form-control m-input m-input--solid" id="branchCode" aria-describedby="branchCode" placeholder="Enter branch code" name="branch_code" required="" value={{$user->branch_code}}>
			</div>
			<div class="form-group m-form__group">
				<label for="name">Name</label>
				<input type="text" class="form-control m-input m-input--solid" id="name" aria-describedby="name" placeholder="Enter name" name="name" required="" value="{{$user->name}}">
			</div>

			<div class="form-group m-form__group">
				<label for="email">Email</label>
				<input type="text" class="form-control m-input m-input--solid" id="email" aria-describedby="email" placeholder="Enter email" name="email" required="" value="{{$user->email}}">
			</div>
			
			<div class="form-group m-form__group">
				<label for="level">Level</label>
				<input type="text" class="form-control m-input m-input--solid" id="level" aria-describedby="level" placeholder="Enter level" name="level" required="" value="{{$user->level}}">
			</div>

			<div class="form-group m-form__group">
				<label for="designation">Designation</label>
				<input type="text" class="form-control m-input m-input--solid" id="designation" aria-describedby="designation" placeholder="Enter designation" name="designation" required="" value="{{$user->designation}}">
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
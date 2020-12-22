@extends('layouts.inner')
@section('inner')
<!--begin::Portlet-->
<div class="m-portlet m-portlet--tab">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<span class="m-portlet__head-icon m--hide">
					<i class="la la-gear"></i>
				</span>
				<h3 class="m-portlet__head-text">
					Edit Vendor
				</h3>
			</div>
		</div>
	</div>
	<form method="POST" action="{{route('updateVendor')}}" class="m-form m-form--fit m-form--label-align-right">
		@csrf
		<input type="hidden" name="updated_by" value="{{auth()->user()->id}}">
		<input type="hidden" name="vendor_id" value="{{$data->id}}">
		<div class="m-portlet__body">
			<div class="form-group m-form__group">
				<label for="exampleInputTitle">Name</label>
				<input type="text" class="form-control m-input m-input--solid" id="exampleInputTitle" aria-describedby="title" placeholder="Enter Name" name="name" required="" value="{{$data->name}}">
			</div>

			<div class="form-group m-form__group">
				<label for="exampleInputTitle">Address</label>
				<input type="text" class="form-control m-input m-input--solid" id="exampleInputTitle" aria-describedby="title" placeholder="Enter Address" name="address" required="" value="{{$data->address}}">
			</div>

			<div class="form-group m-form__group">
				<label for="exampleInputTitle">PAN</label>
				<input type="text" class="form-control m-input m-input--solid" id="exampleInputTitle" aria-describedby="title" placeholder="Enter PAN" name="pan" required="" value="{{$data->pan}}">
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

<!--end::Portlet-->
@endsection
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
					Create Product
				</h3>
			</div>
		</div>
	</div>
	<form method="POST" action="/product" class="m-form m-form--fit m-form--label-align-right">
		@csrf
		<input type="hidden" name="created_by" value="{{auth()->user()->id}}">
		<input type="hidden" name="vendor_id" value="{{$id}}">
		<div class="m-portlet__body">
			<div class="form-group m-form__group">
				<label for="exampleInputTitle">Name</label>
				<input type="text" class="form-control m-input m-input--solid" id="exampleInputTitle" aria-describedby="title" placeholder="Enter Name" name="name" required="">
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
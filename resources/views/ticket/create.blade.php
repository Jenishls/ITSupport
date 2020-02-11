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
					Create Ticket
				</h3>
			</div>
		</div>
	</div>
	<form method="POST" action="/ticket" class="m-form m-form--fit m-form--label-align-right">
		@csrf
		<input type="hidden" name="created_by" value="{{auth()->user()->id}}">
		<div class="m-portlet__body">
			<div class="form-group m-form__group">
				<label for="exampleInputTitle">Title</label>
				<input type="text" class="form-control m-input m-input--solid" id="exampleInputTitle" aria-describedby="title" placeholder="Enter problem title" name="title" required="">
			</div>
			<div class="form-group m-form__group">
				<label for="description">Description</label>
				<textarea class="form-control m-input m-input--solid" id="description" rows="3" name="body" required="">

				</textarea>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="form-group m-form__group">
						<label for="priority">Priority</label>
						<select class="form-control m-input m-input--solid" id="priority" name="priority">
							<option value="" selected="selected" hidden="hidden">Choose here</option>
							<option value="Low">Low</option>
							<option value="Normal">Normal</option>
							<option value="Medium">Medium</option>
							<option value="High">High</option>
						</select>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group m-form__group">
						<label for="category">Category</label>
						<select class="form-control m-input m-input--solid" id="category" name="category">
							<option value="" selected="selected" hidden="hidden">Choose here</option>
							@forelse($cats as $cat)
								<option value="{{$cat->id}}">{{$cat->title}}</option>
							@empty
							@endforelse
						</select>
					</div>
				</div>
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
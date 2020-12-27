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
					Create Bill
				</h3>
			</div>
		</div>
	</div>
	<form method="POST" action="{{route('storeBill')}}" class="m-form m-form--fit m-form--label-align-right">
		@csrf
		<input type="hidden" name="created_by" value="{{auth()->user()->id}}">
		<input type="hidden" name="product_id" value="{{$id}}">
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

	<!--begin::Form-->
		<form class="m-form m-form--fit m-form--label-align-right" enctype="multipart/form-data" >
			@csrf
			<div class="m-portlet__body">
				<div class="form-group m-form__group row">
					<label class="col-form-label col-lg-1 col-sm-12">Bill</label>
					<div class="col-lg-4 col-md-9 col-sm-12">
						<div class="m-dropzone dropzone m-dropzone--success" id="fileUpload" action=" {{route('uploadBill')}} " name='files' >
							
							<div class="m-dropzone__msg dz-message needsclick">
								<h3 class="m-dropzone__msg-title">Drop files here or click to upload.</h3>
								<span class="m-dropzone__msg-desc">Only image and pdf files are allowed for upload</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="m-portlet__foot m-portlet__foot--fit">
				<div class="m-form__actions m-form__actions">
					<div class="row">
						<div class="col-lg-12 ml-lg-auto">
							<button type="reset" class="btn btn-brand">Submit</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	<!--end::Form-->
</div>

<!--end::Portlet-->
@endsection
@extends('layouts.master')
@section('js')
	<script type="text/javascript">
		Dropzone.autoDiscover = false;
		// autoProcessQueue: false
		// Dropzone.autoDiscover = false;
		// Dropzone.options.fileUpload = {
		//   paramName: "file", // The name that will be used to transfer the file
		//   maxFilesize: 2, // MB
		//   autoProcessQueue: false,
		//   accept: function(file, done) {
		//   	// debugger;
		//     if (file.name == "justinbieber.jpg") {
		//       done("Naha, you don't.");
		//     }
		//     else { done(); }
		//   }
		// }
$(document).ready(function(){
		var DropzoneDemo={init:function(){
		
			Dropzone.options.fileUpload={
				autoProcessQueue: false,
				paramName:"file",maxFiles:10,maxFilesize:10,addRemoveLinks:!0,
				acceptedFiles:"image/*,application/pdf",
				accept:function(e,o){
					"1.jpg"==e.name?o("Naha, you don't."):o()
				}
			}}};DropzoneDemo.init();
		});
	</script>

@endsection
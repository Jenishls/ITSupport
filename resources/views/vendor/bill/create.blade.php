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
		<input type="hidden" name="product_id" value="{{$id}}" id="product_id">
		<input type="hidden" name="vendor_id" value="{{$product->vendor->id}}" id="product_id">
		<div class="m-portlet__body">
			<div class="form-group m-form__group">
				<label for="txtName">Name</label>
				<input type="text" class="form-control m-input m-input--solid" id="txtName" aria-describedby="title" placeholder="Enter Name" name="name" required="">
			</div>

			<div class="form-group m-form__group ">
				<label >File</label>
				<div class=" mt-2" >
					<div class="m-dropzone  m-dropzone--success dz-clickable" id="fileUpload">
						
						<div class="m-dropzone__msg dz-message needsclick">
							<h3 class="m-dropzone__msg-title">Drop files here or click to upload.</h3>
							<span class="m-dropzone__msg-desc">Only image, pdf and psd files are allowed for upload</span>
						</div>
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

<!--end::Portlet-->
@endsection
@extends('layouts.master')
@section('js')
<script type="text/javascript">
	Dropzone.autoDiscover = false;
	// console.log(window.Dropzone)
	// var myDropzone = new Dropzone("#fileUpload");

 //  myDropzone.options.acceptedFiles = "image/*,application/pdf";
 //  myDropzone.options.addRemoveLinks = true;
 //  myDropzone.options.success()
	console.log(Dropzone.options);

	var token = "{!! csrf_token() !!}";
	Dropzone.options.fileUpload = {
    url: "{{route('uploadBill')}}",

    paramName: "file",
    acceptedFiles: "image/*,application/pdf",
    addRemoveLinks : true,
    params: {
        _token: token
    },
    init: function() {
        
        this.on("success", function(file, response) {
        	// console.log(response);
        	if(response.status == 'success' ){
            let element = `<input type="hidden" class="newVal" name="file[]" value="${response.message}" data-id = "${response.message}">`
            $('#product_id').after(element);
        	}
        });

        this.on("removedfile",function(file){
        	x = confirm('Do you want to delete?');
			    if(!x) 
			    { 
			    	return false
			    }
			    else
			    {
			    	console.log( file.name.substr(-5) )
			    };
        })
    }
}

$('#fileUpload').dropzone();

</script>

@endsection
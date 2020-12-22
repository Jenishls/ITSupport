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
					{{ucfirst($data->name)}}
					{{-- {{dd( $data->products ) }} --}}
				</h3>
			</div>
		</div>
	</div>

</div>


	<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						Products
					</h3>
				</div>
			</div>
			<div class="m-portlet__head-tools">
				<ul class="m-portlet__nav">
					<li class="m-portlet__nav-item">
						<a href="{{route('createProduct',[$data->id])}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
							<span>
								<i class="la la-plus"></i>
								<span>Create Product</span>
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="m-portlet__body">

			<!--begin::Widget5-->
			<div class="m-widget4">
				@forelse($data->products as $product)
				<div class="m-widget4__item">
					<div class="m-widget4__info">
						<span class="m-widget4__title">
							{{ucfirst($product->name)}}
						</span><br>
						<span class="m-widget4__sub">
							
						</span>
					</div>
					<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
						<a href="{{route('editProduct',[$data->id])}}">
							<i class="la la-edit"></i>
						</a>
						<a href="{{route('deleteProduct',[$data->id])}}">
							<i class="la la-trash-o"></i>
						</a>
					</div>
					
				</div>
				{{-- <hr/> --}}
				@empty
				<div class="alert alert-danger" role="alert">
					<strong>Data not found </strong> 
				</div>
				@endforelse
			</div>
			<!--end::Widget 5-->
		</div>
	</div>
@endsection
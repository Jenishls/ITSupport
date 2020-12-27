@extends('layouts.master')
@section('content')
		<div class="m-grid m-grid--hor m-grid--root m-page">
			@include('layouts.header')
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				@include('layouts.sidenav')
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					{{-- @include('dashboard.subheader') --}}
					<div class="m-content">
						<div class="row">

							</div>
							<div class="tab-content">
								<div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">
									@include('vendor.product.datatable')
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
@endsection
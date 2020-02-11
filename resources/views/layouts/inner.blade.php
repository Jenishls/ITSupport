@extends('layouts.master')
@section('content')
		<div class="m-grid m-grid--hor m-grid--root m-page">
			@include('layouts.header')
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				@include('layouts.sidenav')
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<div class="m-content">
						<div class="row">
							<div class="col-lg-12">
								@yield('inner')
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
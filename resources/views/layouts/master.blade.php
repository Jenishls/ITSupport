<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	    <meta name="csrf-token" content="{{ csrf_token() }}">
		

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

		<!--end::Web font -->

		<!--begin::Global Theme Styles -->
		<link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="{{asset('assets/demo/default/media/img/logo/favicon.ico')}}" />
	</head>
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

	@yield('content')

		<!-- end:: Page -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->

		<!--begin::Global Theme Bundle -->
		<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/app/js/dashboard.js')}}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->



		<!--begin::Page Scripts -->
		{{-- <script src="{{asset('assets/app/js/dashboard.js')}}" type="text/javascript"></script> --}}

		<!--begin::Page Vendors -->
		<script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="{{asset('assets/demo/default/custom/crud/datatables/advanced/multiple-controls.js')}}" type="text/javascript" async=""></script>
		<script src="{{asset('assets/demo/default/custom/crud/forms/widgets/summernote.js')}}" type="text/javascript"></script>
		{{-- <script type="text/javascript"> --}}
			@yield('js')
		{{-- </script> --}}

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
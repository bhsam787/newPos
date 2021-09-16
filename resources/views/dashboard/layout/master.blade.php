<html lang="en">
<!--begin::Head-->

<head>
	<base href="">
	<meta charset="utf-8" />
	<title>Guinea pig | Dashboard</title>
	<meta name="description" content="Updates and statistics" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendors Styles(used by this page)-->
	<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
	<!--end::Page Vendors Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<link href="{{ asset('assets/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
	<!--begin::Page Vendors Styles(used by this page)-->
	<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
	<!--end::Page Vendors Styles-->

	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.png') }}" />
	<!-- Start::exam page karban board drag and drop css  -->
	<link href="assets/plugins/custom/kanban/kanban.bundle.css" rel="stylesheet" type="text/css" />
	<!-- End::exam page karban board drag and drop css  -->
	<!--begin::Custom css-->
	<link href="{{ asset('assets/css/custom/mystyle.css') }}" rel="stylesheet" type="text/css" />
	<!--begin::Custom css-->
	<!-- SweetAlert2 -->
	{{-- <link rel="stylesheet" href="{{asset('assets/css/custom/sweetalert2.min.css')}}"> --}}
	{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	{{-- <script src='https://meet.jit.si/external_api.js'></script> --}}
	{{-- <script src="{{ asset('assets/js/config.js') }}"></script> --}}
	{{-- <script src="{{ asset('assets/js/myapp1.js') }}"></script> --}}

	@php
	$name=Auth::user()->name;

	@endphp
	<script type="text/javascript">
		var name = "<?php echo $name; ?>";
	</script>


	<script>
		function slug(meeting) {
			var meeting = meeting;
			StartMeeting(meeting, name);

		}
		// $(function(){
		//
		//
		// 		$('#meeting').on('click',function(){
		// 				StartMeeting(meeting,name);
		// 		});
		// });
	</script>


	{{-- <script>
        $(function(){
            var meeting='cse499B';
            $('#meeting').on('click',function(){
                StartMeeting(meeting);
            });
        });



    </script> --}}



</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	<!--begin::Main-->
	<!--begin::Header Mobile-->
	<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
		<!--begin::Logo-->
		<a href="index.html">
			<img alt="Logo" src="{{ asset('assets/media/logos/logo-light.png') }}" />
		</a>
		<!--end::Logo-->
		<!--begin::Toolbar-->
		<div class="d-flex align-items-center">
			<!--begin::Aside Mobile Toggle-->
			<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
				<span></span>
			</button>
			<!--end::Aside Mobile Toggle-->
			<!--begin::Header Menu Mobile Toggle-->
			<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
				<span></span>
			</button>
			<!--end::Header Menu Mobile Toggle-->
			<!--begin::Topbar Mobile Toggle-->
			<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
				<span class="svg-icon svg-icon-xl">
					<!--begin::Svg Icon | path:{{ asset('assets/media/svg/icons/General/User.svg') }}-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
							<path
							  d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
							  fill="#000000" fill-rule="nonzero" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
			</button>
			<!--end::Topbar Mobile Toggle-->
		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Header Mobile-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">
			<!--begin::Aside-->

			@include('dashboard.layout.admin.sidebar')


			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

				<!--begin::Header-->
				<div id="kt_header" class="header header-fixed">
					<!--begin::Container-->
					@include('dashboard.layout.navbar')
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				@yield('section')
				<!--end::Content-->

			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Main-->

	{{-- <script>
		var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
	</script> --}}
	<!--begin::Global Config(global config for global JS scripts)-->
	{{-- <script>
		var KTAppSettings = {
			"breakpoints": {
				"sm": 576,
				"md": 768,
				"lg": 992,
				"xl": 1200,
				"xxl": 1200
			},
			"colors": {
				"theme": {
					"base": {
						"white": "#ffffff",
						"primary": "#6993FF",
						"secondary": "#E5EAEE",
						"success": "#1BC5BD",
						"info": "#8950FC",
						"warning": "#FFA800",
						"danger": "#F64E60",
						"light": "#F3F6F9",
						"dark": "#212121"
					},
					"light": {
						"white": "#ffffff",
						"primary": "#E1E9FF",
						"secondary": "#ECF0F3",
						"success": "#C9F7F5",
						"info": "#EEE5FF",
						"warning": "#FFF4DE",
						"danger": "#FFE2E5",
						"light": "#F3F6F9",
						"dark": "#D6D6E0"
					},
					"inverse": {
						"white": "#ffffff",
						"primary": "#ffffff",
						"secondary": "#212121",
						"success": "#ffffff",
						"info": "#ffffff",
						"warning": "#ffffff",
						"danger": "#ffffff",
						"light": "#464E5F",
						"dark": "#ffffff"
					}
				},
				"gray": {
					"gray-100": "#F3F6F9",
					"gray-200": "#ECF0F3",
					"gray-300": "#E5EAEE",
					"gray-400": "#D6D6E0",
					"gray-500": "#B5B5C3",
					"gray-600": "#80808F",
					"gray-700": "#464E5F",
					"gray-800": "#1B283F",
					"gray-900": "#212121"
				}
			},
			"font-family": "Poppins"
		};
	</script> --}}
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
	<script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
	<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::Page Vendors(used by this page)-->
	{{-- <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script> --}}
	<!--end::Page Vendors-->
	<!--begin::Page Scripts(used by this page)-->
	{{-- <script src="{{ asset('assets/js/pages/widgets.js') }}"></script> --}}
	<!--end::Page Scripts-->
	<!-- began::for single message page -->
	{{-- <script src="assets/js/pages/custom/chat/chat.js"></script> --}}
	<!-- end::for single message page -->
	<!--begin::For calender-->
	<!-- <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>		 -->
	{{-- <script src="assets/js/pages/features/calendar/basic.js"></script> --}}
	<!--end::For calender-->
	<!--begin::For pre-advising-->
	{{-- <script src="assets/js/custom/pre-advising.js"></script> --}}
	<!--end::For pre-advising-->
	<!--begin::used by stream home page-->
	<!-- 1st 2 are ckeditor and last one is Summernote WYSIWYG editor  -->
	{{-- <script src="assets/plugins/custom/ckeditor/ckeditor-inline.bundle.js"></script>
	<script src="assets/js/pages/crud/forms/editors/ckeditor-inline.js"></script>
	<script src="assets/js/pages/crud/forms/editors/summernote.js"></script> --}}
	<!--end::used by stream home page-->
	<!--Start::used by exam page-->
	{{-- <script src="assets/js/custom/exam-timer.js"></script> --}}
	<!--end::used by exam page-->
	<!-- START::exam page karban board drag and drop js  -->
	{{-- <script src="assets/js/custom/kanban.bundle.js"></script>
	<script src="assets/js/custom/kanban-board.js"></script> --}}
	<!-- SweetAlert2 -->
	{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
	{{-- <script src="{{asset('assets/css/custom/sweetalert2.min.js')}}"> </script> --}}



	{{-- <script type="text/javascript">
		$('.delete').on('click', function() {
			var btn = this;
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.value) {
					let url = $(this).attr('data-url');
					$.get(url, function(result) {
						Swal.fire(
							'Deleted!',
							'Record has been deleted.',
							'success'
						);
						$(btn).closest('tr').fadeOut(1500);
					});
				}
			})
		});
	</script> --}}
	<script type="text/javascript">
	@if (session()->has('msg'))
	Swal.fire({
  icon: 'success',
  text: '{{ session()->get('msg') }}',

})
	@endif

		$('.delete').on('click', function() {
			var btn = this;
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",

				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.value) {

						var id=$(this).attr('data-id');
						var token=$(this).attr('data-token');
						$.ajax({
							type: "DELETE",
							data: {
								'id': id,
								'_token':token
							},
							url: $(this).attr('data-url'),
							success: function(data) {
								Swal.fire(
									'Deleted!',
									'Record has been deleted.',
									'success'
								);
								$(btn).closest('tr').fadeOut(1500);
							},
							error: function(data) {
								Swal.fire("Cancelled", "Something error happend) ", " error ");
							}
						});




				}
			})
		});
	</script>



	<!--begin ::For all responsive table::-->
	<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<!--end::Page Vendors-->
	 <script src="assets/js/pages/crud/datatables/basic/paginations.js"></script>
	<!--end::Page Scripts-->

	{{-- <script>
		var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
	</script> --}}
	<!--begin::Global Config(global config for global JS scripts)-->
	<!--end::Demo Panel-->
	{{-- <script>
		var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
	</script> --}}
	<!--begin::Global Config(global config for global JS scripts)-->
	{{-- <script>
		var KTAppSettings = {
			"breakpoints": {
				"sm": 576,
				"md": 768,
				"lg": 992,
				"xl": 1200,
				"xxl": 1200
			},
			"colors": {
				"theme": {
					"base": {
						"white": "#ffffff",
						"primary": "#6993FF",
						"secondary": "#E5EAEE",
						"success": "#1BC5BD",
						"info": "#8950FC",
						"warning": "#FFA800",
						"danger": "#F64E60",
						"light": "#F3F6F9",
						"dark": "#212121"
					},
					"light": {
						"white": "#ffffff",
						"primary": "#E1E9FF",
						"secondary": "#ECF0F3",
						"success": "#C9F7F5",
						"info": "#EEE5FF",
						"warning": "#FFF4DE",
						"danger": "#FFE2E5",
						"light": "#F3F6F9",
						"dark": "#D6D6E0"
					},
					"inverse": {
						"white": "#ffffff",
						"primary": "#ffffff",
						"secondary": "#212121",
						"success": "#ffffff",
						"info": "#ffffff",
						"warning": "#ffffff",
						"danger": "#ffffff",
						"light": "#464E5F",
						"dark": "#ffffff"
					}
				},
				"gray": {
					"gray-100": "#F3F6F9",
					"gray-200": "#ECF0F3",
					"gray-300": "#E5EAEE",
					"gray-400": "#D6D6E0",
					"gray-500": "#B5B5C3",
					"gray-600": "#80808F",
					"gray-700": "#464E5F",
					"gray-800": "#1B283F",
					"gray-900": "#212121"
				}
			},
			"font-family": "Poppins"
		};
	</script> --}}
	<!--end::Global Config-->
	<!--end::For all responsive table::-->





</body>
<!--end::Body-- >
		</html >

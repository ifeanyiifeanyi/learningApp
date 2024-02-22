
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{ asset("") }}assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="{{ asset("") }}assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{ asset("") }}assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{ asset("") }}assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset("") }}assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{ asset("") }}assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset("") }}assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset("") }}assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset("") }}assets/css/app.css" rel="stylesheet">
	<link href="{{ asset("") }}assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset("") }}assets/css/dark-theme.css" />
	<link rel="stylesheet" href="{{ asset("") }}assets/css/semi-dark.css" />
	<link rel="stylesheet" href="{{ asset("") }}assets/css/header-colors.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    @yield('css')
	<title>@yield('title') - {{ config('app.name') }}</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('instructor.layouts.siebar')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('instructor.layouts.header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			@yield('instructor')
		</div>
		<!--end page wrapper -->
        
		@include('instructor.layouts.footer')
	</div>
	<!--end wrapper-->

    @include('instructor.layouts.extras')
    
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{ asset("") }}assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{ asset("") }}assets/js/jquery.min.js"></script>
	<script src="{{ asset("") }}assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{ asset("") }}assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{ asset("") }}assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{ asset("") }}assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset("") }}assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{ asset("") }}assets/plugins/chartjs/js/chart.js"></script>
	<script src="{{ asset("") }}assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<!--Morris JavaScript -->
	<script src="{{ asset("") }}assets/plugins/raphael/raphael-min.js"></script>
	<script src="{{ asset("") }}assets/plugins/morris/js/morris.js"></script>
	<script src="{{ asset("") }}assets/js/index2.js"></script>
	<!--app JS-->
	<script src="{{ asset("") }}assets/js/app.js"></script>
    
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		@if(Session::has('message'))
		var type = "{{ Session::get('alert-type','info') }}"
		switch(type){
		   case 'info':
		   toastr.info(" {{ Session::get('message') }} ");
		   break;
	   
		   case 'success':
		   toastr.success(" {{ Session::get('message') }} ");
		   break;
	   
		   case 'warning':
		   toastr.warning(" {{ Session::get('message') }} ");
		   break;
	   
		   case 'error':
		   toastr.error(" {{ Session::get('message') }} ");
		   break; 
		}
		@endif 
	</script>

	@yield('js')
</body>

</html>
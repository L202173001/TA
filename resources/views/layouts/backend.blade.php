<!doctype html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('/backend')}}/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('/backend')}}/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('/backend')}}/vendor/linearicons/style.css">
	<link rel="stylesheet" href="{{asset('/backend')}}/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('/backend')}}/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('/backend')}}/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="asset('/backend')}}/img/apple-icon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="{{asset('/backend')}}/img/logo.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/dashboard" class="{{ (request()->is('dashboard')) ? 'active' : '' }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="{{ route('symptoms') }}" class="{{ (request()->is('dashboard/symptoms*')) ? 'active' : '' }}"><i class="lnr lnr-list"></i> <span>Symptoms Data</span></a></li>
						<li><a href="{{ route('trouble') }}" class="{{ (request()->is('dashboard/trouble*')) ? 'active' : '' }}"><i class="lnr lnr-dice"></i> <span>Trouble Data</span></a></li>
						<li><a href="{{ route('rule') }}" class="{{ (request()->is('dashboard/rule*')) ? 'active' : '' }}"><i class="lnr lnr-code"></i> <span>Rules Data</span></a></li>
						<li><a href="{{ route('history') }}" class="{{ (request()->is('dashboard/history*')) ? 'active' : '' }}"><i class="lnr lnr-database"></i> <span>Troubleshoot History</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		@yield('content')
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('/backend')}}/vendor/jquery/jquery.min.js"></script>
	<script src="{{asset('/backend')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{asset('/backend')}}/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="{{asset('/backend')}}/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="{{asset('/backend')}}/vendor/chartist/js/chartist.min.js"></script>
	<script src="{{asset('/backend')}}/scripts/klorofil-common.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		@if(Session::has('status'))
			toastr.success("{{Session::get('status')}}", "Success")
		@endif
		@if(Session::has('error'))
			toastr.error("{{Session::get('error')}}", "Failed")
		@endif
	</script>

	@yield('footer');
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="{{asset('/login')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/login')}}/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>@yield('title')</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{asset('/frontend')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('/frontend')}}/css/fontawesome-all.css" rel="stylesheet">
    <link href="{{asset('/frontend')}}/css/swiper.css" rel="stylesheet">
	<link href="{{asset('/frontend')}}/css/magnific-popup.css" rel="stylesheet">
	<link href="{{asset('/frontend')}}/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body class="bg-primary" data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
<!--        <a class="navbar-brand logo-image" href="index.html"><img src="{{asset('frontend')}}/images/logo.svg" alt="alternative"></a>-->
		<h3>Expert System</h3>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/data">Data</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/troubleshoot">Troubleshoot</a>
                </li>   
				<li class="nav-item">
                    <a class="nav-link page-scroll" href="/loginn">Admin Login</a>
                </li>
            </ul>	
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    @yield('content')
        	
    <!-- Scripts -->
    <script src="{{asset('/frontend')}}/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{asset('/frontend')}}/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{asset('/frontend')}}/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="{{asset('/frontend')}}/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('/frontend')}}/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('/frontend')}}/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{asset('/frontend')}}/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{asset('/frontend')}}/js/scripts.js"></script> <!-- Custom scripts -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('/login')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('/login')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('/login')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('/login')}}/js/sb-admin-2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
    @if(Session::has('status'))
		toastr.success("{{Session::get('status')}}", "Success")
	@endif
    @if(Session::has('error'))
		toastr.error("{{Session::get('error')}}", "Failed")
	@endif
    </script>
    @stack('scripts')
</body>
</html>
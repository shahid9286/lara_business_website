<!doctype html>
<html class="no-js" lang="zxx">

<head>	
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Page title</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
	
    
    <!-- ========== Start Stylesheet ========== -->
	@include('site.layouts.css-links')
	<!-- ========== End Stylesheet ========== -->
  
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="assets/js/html5/html5shiv.min.js"></script>
	  <script src="assets/js/html5/respond.min.js"></script>
	<![endif]-->
	
</head>

<body>		

	<!-- Start PreLoader
    ============================================= -->
	<div class="se-pre-con"></div>
	<!-- Start PreLoader-->

	<!-- Start header
    ============================================= -->
    @include('site.layouts.header')
    <!-- End header -->
	
	<div class="clearfix"></div>
	
	<!-- Start breadcrumb
    ============================================= -->
    <div class="site-breadcrumb-title" style="background: url(assets/img/breadcrumb/1920x508.png)">
		<h2>About Page</h2>
    </div>
    <!--  End breadcrumb -->
	
	@yield('content')
	
	<!-- Start Footer
	============================================= -->
    @include('site.layouts.footer')
	
	<!-- End Footer-->
	
	<!-- Start Scroll top
	============================================= -->
	<a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
	<!-- End Scroll top-->
	
	<!-- jQuery Frameworks 
    ============================================= -->
	
    @include('site.layouts.js-links')
	
</body>

</html>
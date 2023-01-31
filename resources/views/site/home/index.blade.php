<!doctype html>
<html class="no-js" lang="zxx">

<head>	
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home</title>
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

<body class="demo-1" id="bdy">		

	<!-- Start PreLoader
    ============================================= -->
	<div class="se-pre-con"></div>
	<!-- Start PreLoader-->
	
	<!-- Start header
    ============================================= -->
    @include('site.home.header')
    <!-- End header -->
	
	<div class="clearfix"></div>

	<main class="main home-2">
		
		<!-- Start Hero
		============================================= -->
		@include('site.home.slider')
		<!-- End hero -->
		
		<!-- Start Feature
		============================================= -->
		@include('site.home.features')
		<!-- End Feature -->
		
		<!-- Start about
		============================================= -->
		@include('site.home.about')
		<!-- End about-->
		
		<!-- Start Services
		============================================= -->
		@include('site.home.services')
		<!-- End Services-->
		
		<!-- Start Progress
		============================================= -->
		@include('site.home.progress')
		<!-- End Progress-->
		
		<!-- Start Why Choose
		============================================= -->
        @include('site.home.whychoose')
		<!-- End Why Choose-->		
		
		<!-- Start Team
		============================================= -->
        @include('site.home.team')
		<!-- End Team-->
		
		<!-- Start Subscribe
		============================================= -->
        @include('site.home.news-letter')
		<!-- End Subscribe-->
		
		<!-- Start Review
		============================================= -->
        @include('site.home.reviews')
		<!-- End Review-->
		
		<!-- Start Video
		============================================= -->
		<div class="video-area de-padding" data-background="assets/img/video/cta-bg.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div class="site-title wh text-center">
							<span class="hero-p1">Working Video</span>
							<h2>We Provide Outsourced Services For Small & <span> Mid-Sized Video</span></h2>
						</div>
					</div>
				</div>
				<div class="video-wrapper text-center">
					<a href="#" class="video-play-btn"><i class="fas fa-play"></i></a>
					<div class="vid-btn">
						<a href="#" class="theme-btn">More Video Now <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Video-->
		
		<!-- Start Brand
		============================================= -->
		@include('site.home.clients')
		<!-- End Brand-->
		
		<!-- Start Price -->
		
		
		<!-- Start Blog
		============================================= -->
		@include('site.home.blog')
		<!-- End Blog-->
		
		<!-- Start Contact
		============================================= -->
		@include('site.home.contact-us')
		<!-- End Contact-->
	</main>	
	
	<div class="clearfix"></div>
	
	<!-- Start Footer
	============================================= -->
    @include('site.home.footer')
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
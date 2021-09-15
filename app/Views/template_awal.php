<!DOCTYPE html>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" style="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistem Pengelolaan Proyek - WIKA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="shorcut icon" type="text/css" href="<?= base_url(); ?>/images/logo_wika.jpeg">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?= base_url(); ?>/images/logo_wika.jpeg">

	<!-- Animate.css -->
	<link rel="stylesheet" href="https://koperasi.inti.co.id/theme/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="https://koperasi.inti.co.id/theme/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="https://koperasi.inti.co.id/theme/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="https://koperasi.inti.co.id/theme/css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="https://koperasi.inti.co.id/theme/css/style.css">
	<link rel="stylesheet" href="https://koperasi.inti.co.id/theme/css/dropdown.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>


	<!-- Modernizr JS -->
	<script src="https://koperasi.inti.co.id/theme/js/modernizr-2.6.2.min.js"></script>
</head>
<body><a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a><div id="fh5co-offcanvas"><ul id="fh5co-side-links"></ul></div>
	<div id="fh5co-page">
	<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img src="<?= base_url(); ?>/images/logo_wika.jpeg" width="120px">
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">				
          <li <?= $title == 'Home' ? 'class="active"' : ''; ?>><a href="<?= base_url(); ?>">Rumah <span class="sr-only">(current)</span></a></li>
          <li <?= $title == 'About' ? 'class="active"' : ''; ?>><a href="<?= base_url(); ?>/tentang">Tentang</a></li>
          <li><a href="https://koperasi.inti.co.id/artikel">Info Proyek</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?= base_url(); ?>/login">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <?= view($konten); ;?>
  
	<footer id="fh5co-footer" role="contentinfo">

		<div class="container">
			<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Tentang Kami</h3>
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
			<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Anak Perusahaan</h3>
				<ul class="float">
					<li><a href="https://koperasi.inti.co.id/portfolio">Lorem ipsum dolor sit amet.</a></li>
					<li><a href="https://koperasi.inti.co.id/portfolio">Lorem ipsum dolor sit amet.</a></li>
					<li><a href="https://koperasi.inti.co.id/portfolio">Lorem ipsum dolor sit amet.</a></li>
				</ul>
				<ul class="float">
					<li><a href="https://koperasi.inti.co.id/portfolio">Lorem ipsum dolor sit amet.</a></li>
					<li><a href="https://koperasi.inti.co.id/portfolio">Lorem ipsum dolor sit amet.</a></li>
				</ul>

			</div>

			<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Media Sosial</h3>
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-google-plus"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>


			<div class="col-md-12 fh5co-copyright text-center">
				<p>© 2020 by <a href="#" target="_blank">WIKA</a>. All Rights Reserved.</p>
			</div>

		</div>
	</footer>
	</div>


	<!-- jQuery -->
	<script src="https://koperasi.inti.co.id/theme/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="https://koperasi.inti.co.id/theme/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="https://koperasi.inti.co.id/theme/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="https://koperasi.inti.co.id/theme/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="https://koperasi.inti.co.id/theme/js/jquery.flexslider-min.js"></script>

	<!-- MAIN JS -->
	<script src="https://koperasi.inti.co.id/theme/js/main.js"></script>
		<!-- dropdown -->
	<script>
		// Prevent closing from click inside dropdown
		$(document).on('click', '.dropdown-menu', function (e) {
		  e.stopPropagation();
		});
    
		$('.dropdown-toggle').click(function(e) {
  		e.preventDefault();
  		setTimeout($.proxy(function() {
   		 if ('ontouchstart' in document.documentElement) {
     	 $(this).siblings('.dropdown-backdrop').off().remove();
   		 }
  			}, this), 0);
			});	
	</script>

	

</body></html>
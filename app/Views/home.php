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
          <li class="active"><a href="<?= base_url(); ?>">Rumah <span class="sr-only">(current)</span></a></li>
          <li><a href="https://koperasi.inti.co.id/about">Tentang</a></li>
          <li><a href="https://koperasi.inti.co.id/artikel">Info Proyek</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?= base_url(); ?>/login">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

	<aside id="fh5co-hero" class="js-fullheight" style="height: 657px;">
		<div class="flexslider js-fullheight" style="height: 657px;">
			<ul class="slides">
        <li style="background-image: url(&quot;https://koperasi.inti.co.id/assets/images/ce65a885d020bfd6f100f03afb3144c6.png&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1; height: 657px;" class="" data-thumb-alt="">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text" style="height: 657px;">
		   				<div class="slider-text-inner">
		   					<h2></h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
        <li style="background-image: url(&quot;https://koperasi.inti.co.id/assets/images/ba284c7629b001bc6e1b5e478a845936.png&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2; height: 657px;" data-thumb-alt="" class="flex-active-slide">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text animated fadeInUp" style="height: 657px;">
		   				<div class="slider-text-inner">
		   					<h2></h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
      </ul>
	  	<ol class="flex-control-nav flex-control-paging">
        <li><a href="#" class="">1</a></li>
        <li><a href="#" class="flex-active">2</a></li>
      </ol>
      <ul class="flex-direction-nav">
        <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
        <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
      </ul>
    </div>
	</aside>

  <div id="fh5co-blog" class="animate-box mb-0">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>PROYEK KAMI</h2>
				</div>
			</div>
		</div>
	
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-4">
          <figure>
            <a href="https://koperasi.inti.co.id/bisnis"><img src="https://koperasi.inti.co.id/assets/images/b1dec92f4c223f2df8defb1db561de44.jpg" class="img-responsive"></a>
          </figure>
          <div class="fh5co-copy">
            <h3>UNIT SIMPAN PINJAM</h3>
            <span class="fh5co-date">18 August 2020 | Admin</span>
            <hr>
            <p>Menghimpun dana dari anggota dalam bentuk Simpanan Pokok, Simpanan...</p>
          </div>
        </div>
			
        <div class="col-md-4">
          <figure>
            <a href="https://koperasi.inti.co.id/bisnis"><img src="https://koperasi.inti.co.id/assets/images/a55241594068b5911fbfd4b1b54871ab.jpg" class="img-responsive"></a>
          </figure>
          <div class="fh5co-copy">
            <h3>UNIT USAHA - WARUNG INTIMART</h3>
            <span class="fh5co-date">18 August 2020 | Admin</span>
            <hr>
            <p>Melayani kebutuhan Anggota Koperasi INTI, khususnya karyawan di lingkungan...</p>
          </div>
        </div>
				
				<div class="col-md-4">
          <figure>
						<a href="https://koperasi.inti.co.id/bisnis"><img src="https://koperasi.inti.co.id/assets/images/4f78246e662f6e7bdae034218fa66fb0.jpg" class="img-responsive"></a>
          </figure>
          <div class="fh5co-copy">
            <h3>UNIT USAHA - AGEN AMDK JATILUHUR</h3>
            <span class="fh5co-date">18 August 2020 | Admin</span>
            <hr>
            <p>Melayani&nbsp; kebutuhan air minum dalam kemasan dengan jumlah yang...</p>
          </div>
				</div> -->
				
				<!-- <div class="col-md-12 text-center">
					<p><a href="https://koperasi.inti.co.id/bisnis" class="btn btn-primary btn-outline with-arrow">Lihat lebih <i class="icon-arrow-right"></i></a></p>
				</div> -->
			</div>
		</div>
	</div>
  
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
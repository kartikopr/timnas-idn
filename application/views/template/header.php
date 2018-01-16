<!DOCTYPE html>
<html>
<head>
<title><?php echo $title;?></title>
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!-- Font Awesome icon -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <script src="<?php echo base_url();?>assets/js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 750,
        namespace: "callbacks",
        pager: true,
      });
    });
	
  </script>
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
			<div class="top-menu">
				<ul>
          <nav class="cl-effect-5">
					<li><a href="<?php echo base_url();?>Halaman/home"><span data-hover="Beranda">Beranda</span></a></li> 
					<li>/</li>
					<li><a href="<?php echo base_url();?>Halaman/about"><span data-hover="Tentang">Tentang</span></a></li>
					<li>/</li>
					<li><a href="<?php echo base_url();?>Halaman/squad"><span data-hover="Skuad">Skuad Tim</span></a></li> 
					<li>/</li>
					<li><a href="<?php echo base_url();?>Halaman/photos"><span data-hover="Galeri">Galeri</span></a></li> 
					<li>/</li>
					<li><a href="<?php echo base_url();?>Halaman/contact"><span data-hover="Kontak">Kontak</span></a></li>
					
				</nav>
				</ul>
			</div>
			
	</div>
    <!-- header-section-ends -->
    
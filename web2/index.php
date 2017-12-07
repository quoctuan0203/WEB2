<?php 
	include "config/config.php";
	include ROOT."/include/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Bookstations - Website bán sách</title>

<!-- Favicons Icon -->
<link rel="icon" href="images/icon.png" type="image/x-icon" />
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon" />

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<!--<link rel="stylesheet" href="css/animate.css" type="text/css">-->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/slider.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="css/owl.theme.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index">
<div class="page"> 
  <!-- Header -->
  <header class="header-container">
    <?php include ROOT."/include/header.php"; ?>
   </header>
  <!-- end header --> 
  <!-- Navbar -->
  <nav>
    <div class="container">
      
        <!-- End Search-col --> 
      <?php include ROOT."/include/navbar.php"; ?>
    </div>
  </nav>
  <section class="slider-intro">
    <?php include ROOT."/include/slider.php"; ?>
  </section>
  <section class="main-container col1-layout home-content-container">
    <div class="container">
      <div class="row">
        <div class="std">
          <div class="best-pro col-lg-12">
            <div class="slider-items-products">
				<div class="new_title center">
					<h2>Sách bán chạy</h2>
				</div>
            <div id="best-seller-slider" class="product-flexslider hidden-buttons">
					<div class="slider-items slider-width-col4"> 
					  
					  <!-- Item -->
					  <?php include "sach.php"; ?>
					  <!-- End Item --> 				  
					   
					  
					</div>
				</div>
            </div>
          </div>
			<div class="featured-pro col-lg-12">
				<div class="slider-items-products">
				  <div class="new_title center">
					<h2>Sách Mới</h2>
				  </div>
					<div id="featured-slider" class="product-flexslider hidden-buttons">
						<div class="slider-items slider-width-col4"> 
						  
						  <!-- Item -->
						  <?php include "sach.php"; ?>
						  <!-- End Item --> 
						</div>
					</div>
				</div>
			</div>
        </div>
      </div>
    </div>
  </section>
  <!-- End main container --> 
  
  <!-- Latest Blog -->
  
  <!-- Footer -->
  <footer class="footer">
    <?php include ROOT."/include/footer.php"; ?>
  </footer>
  <!-- End Footer --> 
  
</div>

<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/slider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript">
    //<![CDATA[
	jQuery(function() {
		jQuery(".slideshow").cycle({
			fx: 'scrollHorz', easing: 'easeInOutCubic', timeout: 10000, speedOut: 800, speedIn: 800, sync: 1, pause: 1, fit: 0, 			pager: '#home-slides-pager',
			prev: '#home-slides-prev',
			next: '#home-slides-next'
		});
	});
    //]]>
    </script>
</body>

</html>
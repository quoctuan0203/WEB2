<?php 
  include "config/config.php";
  include ROOT."/include/autoload.php";
  
?>
<!DOCTYPE html>
<html lang="en">

<!-- Giao dien duoc chia se mien phi tai www.ptheme.net [Free HTML Download]. SKYPE[ptheme.net] - EMAIL[ptheme.net@gmail.com].-->
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
    <?php include ROOT."/include/header.php" ?>
  </header>
  <!-- end header --> 
  <!-- Navbar -->
  <nav>
    <div class="container">
      <?php include ROOT."/include/navbar.php"; ?>
    </div>
  </nav>
  <!-- end nav -->  
  
  <!-- breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> </li>
          <li class=""> </li>
          <li class="category13"><strong></strong></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- End breadcrumbs --> 
  <!-- Two columns content -->
   <div class="main-container col2-left-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 col-sm-push-3">
          <?php include "sach-grid.php" ?>
        </section>
        <aside class="col-right sidebar col-sm-3 col-xs-12 col-sm-pull-9">
         <?php include "include/nav-cate.php"; ?>
        </aside>
      </div>
    </div>
  </div>
  <!-- End Two columns content -->
  
  <!-- Footer -->
  <footer class="footer">
    <?php include ROOT."/include/footer.php"; ?>
  </footer>
  <!-- End Footer --> 
  
</div>
  <!--right-side-content hidden1--> 
</div>

<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/revslider.html"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
</body>

<!-- Giao dien duoc chia se mien phi tai www.ptheme.net [Free HTML Download]. SKYPE[ptheme.net] - EMAIL[ptheme.net@gmail.com].-->
</html>
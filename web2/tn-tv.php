<?php 
  include "config/config.php";
  include ROOT."/include/autoload.php";
  
  $obj = new Sach();
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
          <li class="home"> <a href="index.html" title="Go to Home Page">Trang Chủ</a><span>&raquo; </span></li>
          <li class=""> <a href="grid.html" title="Go to Home Page">Danh Mục</a><span>&raquo; </span></li>
          <li class="category13"><strong>Truyện Ngắn &amp; Tản Văn</strong></li>
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
          <div class="category-title">
            <h1>Truyện Ngắn &amp; Tản Văn</h1>
          </div>
          
          <div class="category-products">
            <div class="toolbar">
              <div id="sort-by">
                <label class="left">Sort By: </label>
                <ul>
                  <li><a href="#">Position<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">Name</a></li>
                      <li><a href="#">Price</a></li>
                      <li><a href="#">Position</a></li>
                    </ul>
                  </li>
                </ul>
                 </div>
              <div class="pager">
                <div class="pages">
                  <label>Trang:</label>
                  <ul class="pagination">
                    <li><a href="#">«</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <ul class="products-grid">
              <?php $data = $obj ->getAll();
                  foreach($data as $arr){ ?>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="product_detail.html" title="Sample Product" class="product-image"> 
                        <?php
                          echo '<img src="products-images/'.$arr["urlhinh"].'" alt=""> </a>';
                          ?>
                        <div class="item-box-hover">
                          <div class="box-inner">
                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Xem chi tiết</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.html" title="Sample Product"><?php echo $arr['tensach']; ?> </a> </div>
                        <div class="item-content">
                           
                          <div class="item-price">
                            <div class="price-box">
                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"><?php echo number_format($arr['giagoc']); ?>đ</span> </p>
                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo number_format($arr['giagiam']); ?>đ </span> </p>
                  </div>
                        </div>
                      </div>
                      <div class="actions"><span class="add-to-links">  
                        <button type="button" title="Thêm vào giỏ hàng" class="button btn-cart"><span>Thêm vào giỏ hàng</span></button>
                        </span> </div>
                    </div>
                  </div>
                </div>
              </li>
              <?php } ?>
            </ul>
          </div>
        </section>
        <aside class="col-right sidebar col-sm-3 col-xs-12 col-sm-pull-9">
         <?php include "/include/nav-cate.php"; ?>
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
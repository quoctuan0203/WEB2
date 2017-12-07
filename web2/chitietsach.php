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
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="css/owl.theme.css" type="text/css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css">
<link rel="stylesheet" href="css/fancybox.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
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
  <!-- end breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> </li>
          <li class=""> </li>
          <li class="category13"></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end breadcrumbs --> 
  <!-- main-container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="row">
          <div class="product-view">
            <div class="product-essential">
              <form action="#" method="post" id="product_addtocart_form">
                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                <div class="product-img-box col-sm-4 col-xs-12">
                  <?php 
                  $ma =isset($_GET['masach']) ? $_GET['masach'] : "";
                  $obj = new sach();
                  $data = $obj ->getSach($ma);
                  foreach($data as $arr){
                  ?>
                  <div class="new-label new-top-left"> New </div>
                  <div class="product-image">
                    <div class="large-image"> <img alt="product-image" src="products-images/<?php echo $arr['urlhinh']; ?>"> </div>
                    
                  </div>
                  <!-- end: more-images -->
                  <div class="clear"></div>
                </div>
                
                <div class="product-shop col-sm-5 col-xs-12">
                  <div class="product-name">
                    <h1><?php echo $arr['tensach']; ?></h1>
                  </div>
                  <div class="short-description">
                    <?php $data_tg= $obj ->gettenTG_Sach($arr['masach']); ?>
                    <p> Tác giả:<?php foreach($data_tg as $row){ echo $row['tentacgia'].' ';} ?>   </p>
                    <?php $data_nxb= $obj -> getnxb_sach($arr['manxb']); ?>
					           <p> Nhà Xuất Bản: <?php foreach($data_nxb as $row) { echo $row['tennxb']; } ?> </p>
                  </div>
                  
                  <div class="price-block">
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo $arr['giagoc']; ?> </span> </p>
                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo $arr['giagiam']; }?> </span> </p>
                    </div>
                  </div>
                  <div class="add-to-box">
                    <div class="add-to-cart">
                      <label>Số Lượng</label>
                      <select>
                        <option>1</option>
                        <option>2 </option>
                        <option>3</option>
                        <option>4</option>
                        <option>5 </option>
                        <option>6</option>
                        <option>7</option>
                        <option>8 </option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>
                    <button type="button" title="Thêm vào giỏ hàng" class="button btn-cart" onClick="productAddToCartForm.submit(this)"><span>Thêm vào giỏ hàng</span></button>
                  </div>
                  
                  <div class="toggle-content">
                    <div class="toggle toggle-white">
                      <h4 class="trigger"><a href="#">Mô Tả</a></h4>
                      <div style="display: none;" class="toggle_container tabcontent">
                        <div class="std">
                          <?php echo $arr['mota']; ?>
                          
                        </div>
                      </div>
                    </div>
                    <!--
                    <div class="toggle toggle-white">
                      <h4 class="trigger"><a href="#">Chi tiết sản phẩm</a></h4>
                      <div style="display: none;" class="toggle_container ">
                        <p>Triangular shaped backpack/ shoulder bag with front zip open and croc textured finish. </p>
                        <p>Made from water-repellent Squall fabric, this is one tough travel bag. The efficient bag sports a cushioned shoulder strap for carrying ease. With an exterior pocket running the length of the front and secure zipper closure. 100% nylon with polyester base. Spot clean. Imported. </p>
                      </div>
                    </div>
                    -->
                  </div>
                </div>
                <div class="product-img-box col-sm-3 col-xs-12">
                  <div class="product-additional"><span class="product-additional"><img alt="custom block" src="images/offer-banner1.png"></span></div>
                </div>
              </form>
              
              <!-- related Product Slider -->
              <div class="product-collateral"> 
                
                <!-- related Product Slider -->
                <section class="related-pro">
                  <div class="slider-items-products">
                    <div class="new_title center">
                      <h2>Related Products</h2>
                    </div>
                    <div id="related-products-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4 products-grid"> 
                        <!-- Item -->
                        <?php include "sach.php"; ?>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- related Product Slider End --> 
                
                <!-- Upsell Product Slider -->
                <!-- Upsell Product Slider End --> 
                
              </div>
            </div>
          </div>
          <div class="box-collateral box-reviews" id="customer-reviews">
              <div class="page-title">
                <h2>Reviews</h2>
              </div>
              <div class="box-reviews1">
                <div class="form-add">
                  <?php include ROOT."/include/review.php"; ?>
                </div>
              </div>
              
              <div class="clear"></div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Two columns content -->
  
  
  <!-- Footer -->
  <footer class="footer">
    <?php include ROOT."/include/footer.php"; ?>
  </footer>
  
  <!-- End Footer --> 
  
</div>

<!-- JavaScript --> 
<script type="text/javascript" src="js/prototype.js"></script> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/toggle.js"></script> 
<script type="text/javascript" src="js/pro-img-slider.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/cloud-zoom.js"></script> 
<script>
			new UISearch( document.getElementById( 'form-search' ) );
		</script>
</body>

<!-- Giao dien duoc chia se mien phi tai www.ptheme.net [Free HTML Download]. SKYPE[ptheme.net] - EMAIL[ptheme.net@gmail.com].-->
</html>

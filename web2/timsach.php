<?php 
  include "config/config.php";
  include ROOT."/include/autoload.php";
 $obj1=new sach();
        $kq=isset($_GET["search"]) ? $_GET["search"] :false;
        $data=$obj1->search($kq);
        //$ma =isset($_GET['matheloai']) ? $_GET['matheloai'] : "";
        $page=1;//khởi tạo trang ban đầu
  $limit=2;//số bản ghi trên 1 trang (2 bản ghi trên 1 trang)
  $total_record=count($data);
  $total_page=ceil($total_record/$limit);//tính tổng số trang sẽ chia
  if(isset($_GET["page"]))
      $page=$_GET["page"];//nếu biến $_GET["page"] tồn tại thì trang hiện tại là trang $_GET["page"]
    if($page<1) $page=1; //nếu trang hiện tại nhỏ hơn 1 thì gán bằng 1
    if($page>$total_page) $page=$total_page;//nếu trang hiện tại vượt quá số trang được chia thì sẽ bằng trang cuối cùng
 
    //tính start (vị trí bản ghi sẽ bắt đầu lấy):
    $start=($page-1)*$limit;
    $arrs =$obj1->searchpt($kq,$start,$limit);//print_r($arrs);
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
          <div class="category-title">
      <h1>Có <?php echo $total_record;?> Kết Quả Tìm Kiếm cho từ khóa <strong><?php echo $kq;?></strong></h1>

    </div>
    <div class="pager" style="margin-left:300px;">
          <div class="pages">
            <ul class="pagination" >
              <?php for($i=1;$i<=$total_page;$i++){ ?>
            <li <?php if($page == $i) echo "class='active'"; ?> ><a href="timsach.php?search=<?php echo $kq;?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php } ?>
            </ul>
          </div>
        </div>
    <div class="category-products">
      <div class="toolbar">
        
           </div>
      
      <ul class="products-grid" >
        <?php
foreach($arrs as $arr){ ?>
<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12" style="list-style: none;">
  <div class="col-item">
  <div class="sale-label sale-top-right">Sale</div>
  <div class="item-inner">
    <div class="item-img">
      <div  class="item-img-info"> <a href="chitietsach.php?masach=<?php echo $arr['masach']; ?>" title="<?php echo $arr['tensach']; ?>" class="product-image"> 
        <?php
          echo '<img src="products-images/'.$arr["urlhinh"].'" alt=""> </a>';
          ?>
        <div class="item-box-hover">
          <div class="box-inner">
            <div class="product-detail-bnt"><a href="chitietsach.php?masach=<?php echo $arr['masach']; ?>" class="button detail-bnt"><span>Xem chi tiết</span></a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="item-info">
      <div class="info-inner">
        <div class="item-title"> <a href="chitietsach.php?masach=<?php echo $arr['masach']; ?>" class="button detail-bnt"><?php echo $arr['tensach']; ?> </a> </div>
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
<?php 
          } ?>
      </ul>
    </div>
    
    
        

        </section>
        <aside class="col-right sidebar col-sm-3 col-xs-12 col-sm-pull-9">
         <?php include "include/nav-cate.php"; ?>
        </aside>

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
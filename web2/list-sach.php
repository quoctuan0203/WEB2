<?php 
  $obj = new sach();
  $ma =isset($_GET['matheloai']) ? $_GET['matheloai'] : "";
  $page=1;//khởi tạo trang ban đầu
  $limit=3;//số bản ghi trên 1 trang (2 bản ghi trên 1 trang)
  $data = $obj ->getsach_tl($ma);
  $total_record=count($data);
  $total_page=ceil($total_record/$limit);//tính tổng số trang sẽ chia
  if(isset($_GET["page"]))
      $page=$_GET["page"];//nếu biến $_GET["page"] tồn tại thì trang hiện tại là trang $_GET["page"]
    if($page<1) $page=1; //nếu trang hiện tại nhỏ hơn 1 thì gán bằng 1
    if($page>$total_page) $page=$total_page;//nếu trang hiện tại vượt quá số trang được chia thì sẽ bằng trang cuối cùng
 
    //tính start (vị trí bản ghi sẽ bắt đầu lấy):
    $start=($page-1)*$limit;
    $arrs =$obj->getsach_tlpt($ma,$start,$limit);
    ?>
<div class="pager" style="margin-left:300px;">
          <div class="pages">
            <ul class="pagination" >
              <?php for($i=1;$i<=$total_page;$i++){ ?>
            <li <?php if($page == $i) echo "class='active'"; ?> ><a href="danhmuc.php?page=<?php echo $i; ?>&matheloai=<?php echo $ma; ?>"><?php echo $i; ?></a></li>
            <?php } ?>
            </ul>
          </div>
</div>
    <?php
foreach($arrs as $arr){ ?>
<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12" >
<div class="col-item">
  <div class="sale-label sale-top-right">Sale</div>
  <div class="item-inner">
    <div class="item-img">
      <div class="item-img-info"> <a href="chitietsach.php?masach=<?php echo $arr['masach']; ?>" title="<?php echo $arr['tensach']; ?>" class="product-image"> 
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
<?php } ?>
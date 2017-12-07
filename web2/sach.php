<?php 
	$obj = new sach();
	$data = $obj ->getAll();
  	foreach($data as $arr){ ?>
  <div class="item">
	<div class="col-item">
	  <div class="item-inner">
		<div class="item-img">
		  <div class="item-img-info"> <a href="chitietsach.php?masach=<?php echo $arr['masach']; ?>" class="button detail-bnt"> 
		  
		 	<?php
		    echo '<img src="products-images/'.$arr["urlhinh"].'" alt=""> </a>'; 
		    ?>
			<div class="item-box-hover">
			  <div class="box-inner">
				<div class="product-detail-bnt"><a href="#" class="button detail-bnt"> <span> Xem chi tiết</span></a></div>
		
			  </div>
			</div>
		  </div>
		</div>
		<div class="item-info">
		  <div class="info-inner">
			<div class="item-title"> <a href="chitietsach.php?masach=<?php echo $arr['masach']; ?>" class="button detail-bnt"><?php echo $arr['tensach']; ?> </a> </div>

			<div class="item-content">
			  <div class="rating">
			  </div>
			  <div class="item-price">
				<div class="price-box">
				  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"><?php echo number_format($arr['giagoc']); ?>đ</span> </p>
				  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo number_format($arr['giagiam']); ?>đ </span> </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="actions">
			<button  title="Thêm vào giỏ hàng" class="button btn-cart"><span>Thêm vào giỏ hàng</span></button>
			 </div>
		</div>
	  </div>
	  
	</div>
  </div>
  <?php } ?>
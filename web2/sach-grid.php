<?php 
  
  $ma =isset($_GET['matheloai']) ? $_GET['matheloai'] : "";
  $tl_obj = new theloai();
  $tl_data= $tl_obj -> gettentl($ma);
?>
<div class="category-title">
      <?php foreach($tl_data as $arr){ ?>
      <h1><?php echo $arr['tentheloai']; } ?></h1>
    </div>
    
    <div class="category-products">
      <div class="toolbar">
        
           </div>
      
      <ul class="products-grid" >
        <?php include "list-sach.php"; ?>
      </ul>
    </div>
<?php 
$obj = new theloai();
    $data = $obj -> getAll_TL();
    foreach($data as $arr){ 
?>
	  <li class="level1 first"><a href="danhmuc.php?matheloai=<?php echo $arr['matheloai']; ?>"><span><?php echo $arr['tentheloai']; ?></span></a></li> 
<?php } ?>
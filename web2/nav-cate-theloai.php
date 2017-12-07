<?php
  $obj = new theloai();
  $data = $obj -> getAll_TL();
  foreach ($data as $arr) {
?>
<li> <a href="danhmuc.php?matheloai=<?php echo $arr['matheloai']; ?>"><?php echo $arr['tentheloai']; ?></a> </li>
<?php } ?>
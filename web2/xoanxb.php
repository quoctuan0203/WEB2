
<?php 
  include "config/config.php";
  include ROOT."/include/autoload.php";
 
$obj = new nhaxuatban();
    $data= $obj -> getAll_NXB();
    $manxb= $_GET["manxb"];
	$obj->delNXB($manxb);
?>
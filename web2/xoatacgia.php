
<?php 
  include "config/config.php";
  include ROOT."/include/autoload.php";
 
$obj = new tacgia();
    $data= $obj -> getAll_TG();
    $matg= $_GET["matg"];
	$obj->delTacGia($matg);
?>
<?php
include "config/config.php";
  include ROOT."/include/autoload.php";
	$obj = new theloai();
    $data= $obj -> getAll_TL();
    $matl= isset($_GET['matl'])?$_GET["matl"]:false;
	$obj->delTheLoai($matl);
?>
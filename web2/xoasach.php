<?php
include "config/config.php";
  include ROOT."/include/autoload.php";
	$obj = new sach();
    $data= $obj -> getAll();
    $masach= isset($_GET['masach'])?$_GET["masach"]:false;
	$obj->delSach($masach);
?>
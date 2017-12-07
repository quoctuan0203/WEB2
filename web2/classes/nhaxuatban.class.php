<?php 
class nhaxuatban extends DB{
	function getAll_NXB(){
		return $this->query("select * from nhaxuatban");
	}
	function getNXB($manxb){
	$arr = array(":T"=> "$manxb");
	$sql ="select * from nhaxuatban where manxb = :T ";
	return $this->query($sql, $arr);
	}
	function insertNXB($tennxb){
		$arr = array(":T"=>"$tennxb");
		$sql="insert into nhaxuatban( tennxb) ";
		$sql .=" values(:T)";
		$stm = $this->query($sql, $arr);
		//$stm->execute($arr);

		//return 
	}
		function updateNXB($manxb,$tennxb){
		$arr = array(":T"=>"$tennxb",":M"=>"$manxb");
		$sql="update nhaxuatban set tennxb= :T where manxb=:M";
		$stm = $this->query($sql, $arr);
		//$stm->execute($arr);

		//return 
	}
	function delNXB($manxb){
		$sql="delete from nhaxuatban where manxb='$manxb'";
		$stm = $this->query($sql, $arr);
		header("location:capnhatnhaxuatban.php");
	}
}
?>
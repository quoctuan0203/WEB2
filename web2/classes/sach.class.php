<?php
class sach extends DB{
	function getAll(){
		return $this->query("select * from sach");
	}
	function getSach($masach){
		$arr = array(":M" => "$masach");
		$sql = "select * from sach where masach = :M";
		return $this->query($sql,$arr);
	}
	function getSachPhanTrang($start,$limit){
		$sql = "select * from sach limit $start,$limit";
		return $this->query($sql);
	}
	function insertSach($tensach,$mota,$giagoc,$giagiam,$urlhinh,$manxb,$matheloai){
		$arr = array(":TS"=> "$tensach", ":MT"=>"$mota",":GG"=>"$giagoc",":GGI"=>"$giagiam",":URL"=>"$urlhinh",":NXB"=>"$manxb",":TL"=>"$matheloai",);
		$sql="insert into sach(tensach,mota,giagoc,giagiam,urlhinh,manxb,matheloai) ";
		$sql .=" values(:TS,:MT,:GG,:GGI,:URL,:NXB,:TL)";
		$stm = $this->query($sql, $arr);
		
	}
	function delSach($masach){
		$sql="delete from sach where masach='$masach'";
		$stm = $this->query($sql);
		header("location:capnhatsach.php");
	}
	function updateSach($masach,$tensach,$mota,$giagoc,$giagiam,$urlhinh,$manxb,$matheloai){
		$arr = array(":MS"=>"$masach",":TS"=> "$tensach", ":MT"=>"$mota",":GG"=>"$giagoc",":GGI"=>"$giagiam",":URL"=>"$urlhinh",":NXB"=>"$manxb",":TL"=>"$matheloai");
		$sql="UPDATE sach set tensach= :TS,mota= :MT,giagoc= :GG, giagiam= :GGI,
							urlhinh= :URL, manxb=:NXB,matheloai=:TL  where masach=:MS";
		$stm = $this->query($sql, $arr);
		//$stm->execute($arr);

		//return 
	}
	function searchpt($ten,$position,$display)
	{
		$arr = array(":T"=> "%$ten%");
		$sql ="select * from sach where tensach like :T ";
		$sql.=" limit $position,$display";
		return $this->query($sql, $arr);	
	}
	function search($ten)
	{
		$arr = array(":T"=> "%$ten%");
		$sql ="select * from sach where tensach like :T ";
		
		return $this->query($sql, $arr);	
	}
	function getsach_tl($matheloai){
		$arr = array(":TL" => "$matheloai");
		$sql = "select * from sach where matheloai = :TL";
		return $this -> query($sql,$arr);
	}
	function getsach_tlpt($matheloai,$start,$limit){
		$arr = array(":TL" => "$matheloai");
		$sql = "select * from sach where matheloai = :TL";
		$sql.=" limit $start,$limit";
		return $this -> query($sql,$arr);
	}
	function getsach_tg($matacgia){
		$arr = array(":M" => "$matacgia");
		$sql = "SELECT masach
				FROM sachtacgia 
				WHERE  matacgia= :M";
		return $this -> query($sql,$arr);	
	}
	function getsach_nxb($manxb){
		$arr = array(":M" => "$manxb");
		$sql = "SELECT masach
				FROM sach 
				WHERE  manxb= :M";
		return $this -> query($sql,$arr);	
	}
	function gettenTG_Sach($masach){
		$arr = array(":M" => "$masach");
		$sql = "SELECT tentacgia 
				FROM tacgia 
				WHERE tacgia.matacgia IN  (SELECT matacgia 
											FROM sachtacgia 
											WHERE sachtacgia.masach= :M )";
		return $this -> query($sql,$arr);									
	}
	function getnxb_sach($manxb){
		$arr = array(":N" => "$manxb");
		$sql = "select * from nhaxuatban where manxb = :N";
		return $this -> query($sql,$arr);
	}
}
?>
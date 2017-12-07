<?php 
class theloai extends DB{
	function getAll_TL(){
		return $this->query("select * from theloai");
	}
	function getTheLoai($matheloai){
		$arr = array(":T"=> "$matheloai");
		$sql ="select * from theloai where matheloai = :T ";
		return $this->query($sql, $arr);
	}
	function insertTheLoai($matheloai,$tentheloai){
		$arr = array(":M"=> "$matheloai", ":T"=>"$tentheloai");
		$sql="insert into theloai(matheloai, tentheloai) ";
		$sql .=" values(:M,:T)";
		$stm = $this->query($sql, $arr);
	}
	function gettentl($matheloai){
		$arr = array(":M"=> "$matheloai");
		$sql="select tentheloai from theloai where matheloai = :M ";
		return $this->query($sql, $arr);
	}
	function delTheLoai($matheloai){
		$sql="delete from theloai where matheloai='$matheloai'";
		$stm = $this->query($sql);
		header("location:capnhattheloai.php");
	}
	function updateTheLoai($matheloai,$tentheloai){
		$arr = array(":M"=> "$matheloai", ":T"=>"$tentheloai");
		$sql="update theloai set tentheloai=:T where matheloai=:M";
		$stm = $this->query($sql, $arr);
	}
}
?>
<?php
class sachtacgia extends DB{
	function getAll(){
		return $this->query("select * from sachtacgia");
	}
	function getSach($masach){
		$arr = array(":M" => "$masach");
		$sql = "select * from sachtacgia where masach = :M";
		return $this->query($sql,$arr);
	}
	function getsach_tg($matacgia){
		$arr = array(":M" => "$matacgia");
		$sql = "SELECT masach
				FROM sachtacgia 
				WHERE  matacgia= :M";
		return $this -> query($sql,$arr);	
	}
	
}
?>
<script src="jquery-3.2.1.min.js"></script>
<style type="text/css">
	.label{
	color: #0431B4;
	font-weight:bold;
	font-size:19px;	}
	.error{
	color:#F00;
}

</style>
<script type="text/javascript" language="javascript">
$(document).ready(function()
	{
	$('#Test').submit(function(){
	var flag = true;
	var tentg    = $.trim($('#tentg').val());
	if(tentg=='')
	{
		$('#tentg_error').text('Tên tác giả không được trống');
		flag=false;
	}
	else  $('#tentg_error').text('');
	return flag;
	});
		});

</script>
 <form method="post" id="Test" name="Test" enctype="multipart/form-data" action="capnhattacgia.php"  >
    <label class="label"><u>Tên tác giả:</u> </label>
  </br>
    <input name="tentg" id="tentg" type="text" size="60" placeholder="Nhập tên tác giả" />
    <label id="tentg_error" class="error"></label>
  </br>
    <input name="ok" id="submit" type="submit" value="Submit"  class="nut"  />
   <h1>Danh mục tác giả </h1>
<?php/
include "config/config.php";
  include ROOT."/include/autoload.php";
	$obj=new tacgia();
	$data=$obj->getAll_TG();
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"."Mã tác giả"."</th>";
	echo "<th>"."Tên tác giả"."</th>";
	echo "<th>"."Thao tác"."</th></tr>";
	foreach ($data as $value) {
		$m=$value['matacgia']; ?>
		 <tr><td><?php echo $value["matacgia"];?></td>
		 	<td><?php echo $value["tentacgia"];?></td>
    <td><a href="xoatacgia.php?matg=<?php echo $m;?>">Xoa</a>
    	&nbsp; <a href="updatetacgia.php?matacgia=<?php echo $m;?>">Sua</a>
    </td>
    </tr>


		<?php }
	echo "</table>";
if (isset($_POST["ok"]))
	{
		$tentg=isset($_POST["tentg"])?$_POST["tentg"]:false;
		if($tentg !=false)
		{$obj->insertTacGia($tentg);
		header("location:capnhattacgia.php");}
	}
?>

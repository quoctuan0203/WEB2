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
	var tennxb    = $.trim($('#tennxb').val());
	if(tennxb=='')
	{
		$('#tennxb_error').text('Tên nhà xuất bản không được trống');
		flag=false;
	}
	else  $('#tennxb_error').text('');
	return flag;
	});
		});

</script>
 <form method="post" id="Test" name="Test" enctype="multipart/form-data" action="capnhatnhaxuatban.php"  >
   	
    <label class="label"><u>Tên nhà xuất bản:</u> </label>
  </br>
    <input name="tennxb" id="tennxb" type="text" size="60" placeholder="Nhập tên nhà xuất bản" />
    <label id="tennxb_error" class="error"></label>
  </br>
    <input name="ok" id="submit" type="submit" value="Submit"  class="nut"  />
   <h1>Danh mục nhà xuất bản </h1>
<?php
include "config/config.php";
  include ROOT."/include/autoload.php";
	$obj=new nhaxuatban();
	$data=$obj->getAll_NXB();
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"."Mã nhà xuất bản"."</th>";
	echo "<th>"."Tên nhà xuất bản"."</th>";
	echo "<th>"."Thao tác"."</th></tr>";
	foreach ($data as $value) {
		$m=$value['manxb']; ?>
		 <tr><td><?php echo $value["manxb"];?></td>
		 	<td><?php echo $value["tennxb"];?></td>
    <td><a href="xoanxb.php?manxb=<?php echo $m;?>">Xoa</a>
    	&nbsp; <a href="updatenxb.php?manxb=<?php echo $m;?>">Sua</a>
    </td>
    </tr>


		<?php }
	echo "</table>";
if (isset($_POST["ok"]))
	{
		$tennxb=isset($_POST["tennxb"])?$_POST["tennxb"]:false;
		if($tennxb !=false)
		{$obj->insertNXB($tennxb);
		header("location:capnhatnhaxuatban.php");}
	}
?>

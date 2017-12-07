<script src="js/jquery-3.2.1.min.js"></script>
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
		var matl    = $.trim($('#matl').val());
	var flag = true;
	var tentl    = $.trim($('#tentl').val());
	if( matl=='')
		{
			 $('#matl_error').text('Mã thể loại không được trống');
			flag=false;
		}
		else  $('#matl_error').text('');

	if(tentl=='')
	{
		$('#tentl_error').text('Tên thể loại không được trống');
		flag=false;
	}
	else  $('#tentl_error').text('');
	return flag;
	});
		});

</script>
 <form method="post" id="Test" name="Test" enctype="multipart/form-data" action="capnhattheloai.php"  >
    <label class="label"><u>Mã Thể Loại:</u> </label>
  </br>
    <input name="matl" id="matl" type="text" size="60" placeholder="Nhập mã thể loại" />
    <label id="matl_error" class="error"> </label>
  </br>
    <label class="label"><u>Tên Thể Loại:</u> </label>
  </br>
    <input name="tentl" id="tentl" type="text" size="60" placeholder="Nhập tên thể loại" />
    <label id="tentl_error" class="error"></label>
  </br>
    <input name="ok" id="submit" type="submit" value="Submit"  class="nut"  />
   <h1>Danh mục thể loại </h1>
<?php
include "config/config.php";
  include ROOT."/include/autoload.php";
	$obj=new TheLoai();
	$data=$obj->getAll_TL();
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"."Mã thể loại"."</th>";
	echo "<th>"."Tên thể loại"."</th>";
	echo "<th>"."Thao tác"."</th></tr>";
	foreach ($data as $value) {
		$m=$value['matheloai']; 
		echo "<tr><td>".$value["matheloai"]."</td>";
		echo "<td>".$value["tentheloai"]."</td>"; ?>
		<td><a href="xoatheloai.php?matl=<?php echo $m;?>">Xoa</a>
    	&nbsp; <a href="updatetheloai.php?matheloai=<?php echo $m;?>">Sua</a>
    </td></tr>
	<?php	
	}
	echo "</table>";
if (isset($_POST["ok"]))
	{
		$matheloai=isset($_POST["matl"])?$_POST["matl"]:false;
		$tentheloai=isset($_POST["tentl"])?$_POST["tentl"]:false;
		if($matheloai !=false && $tentheloai!=false)
		{$obj->insertTheLoai($matheloai,$tentheloai);
		header("location:capnhattheloai.php");}
	}
?>

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
<?php 
  include "config/config.php";
  include ROOT."/include/autoload.php";
 
$obj = new tacgia();
    $matg= $_GET["matacgia"];
	$data=$obj->getTacGia($matg);
	foreach ($data as $row) { ?>
		<form action="updatetacgia.php" method="post" id="Test" name="Test">
<label class="label"><u>Mã tác giả:</u> </label>
<input type="hidden" name="matg" value="<?php echo $matg;?>" /><?php echo $matg;?> <br />
<label class="label"><u>Tên tác giả:</u> </label>
<input type="text" id="tentg" name="tentg" value="<?php echo $row["tentacgia"];?>" />
<label id="tentg_error" class="error"></label><br />
      <input type="submit" name="sua" value="Save" />
</form>
<?php }
if(isset($_POST['sua'])){
$matacgia = isset($_POST["matg"])?$_POST["matg"]:0;
$tentacgia = isset($_POST["tentg"])?$_POST["tentg"]:0;
$a=$obj->updatetacgia($matacgia,$tentacgia);
print_r($a);
header("location: capnhattacgia.php");	}
?>
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
	var tentl   = $.trim($('#tentl').val());
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
<?php 
  include "config/config.php";
  include ROOT."/include/autoload.php";
 
$obj = new theloai();
    $matl= isset($_GET["matheloai"])?$_GET["matheloai"]:0;echo $matl;
	$data=$obj->getTheLoai($matl);
	foreach ($data as $row) { ?>
		<form action="updatetheloai.php" method="post" id="Test" name="Test">
<label class="label"><u>Mã tác giả:</u> </label>
<input type="hidden" name="matl" value="<?php echo $matl;?>" /><?php echo $matl;?> 
<label id="matl_error" class="error"></label><br />
<label class="label"><u>Tên thể loại:</u> </label>
<input type="text" id="tentl" name="tentl" value="<?php echo $row["tentheloai"];?>" />
<label id="tentl_error" class="error"></label><br />
      <input type="submit" name="sua" value="Save" />
</form>
<?php }
if(isset($_POST['sua'])){
$matheloai = isset($_POST["matl"])?$_POST["matl"]:0;
$tentheloai = isset($_POST["tentl"])?$_POST["tentl"]:0;
echo $matheloai; echo $tentheloai;
$a=$obj->updateTheLoai($matheloai,$tentheloai);
//print_r($a);
header("location: capnhattheloai.php");	
}
?>
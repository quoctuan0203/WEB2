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
	var tennxb   = $.trim($('#tennxb').val());
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
<?php 
  include "config/config.php";
  include ROOT."/include/autoload.php";
 
$obj = new nhaxuatban();
    $manxb= $_GET["manxb"];
	$data=$obj->getNXB($manxb);
	foreach ($data as $row) { ?>
		<form action="updatenxb.php" method="post" id="Test" name="Test">
<label class="label"><u>Mã nhà xuất bản:</u> </label>
<input type="hidden" name="manxb" value="<?php echo $manxb;?>" /><?php echo $manxb;?> <br />
<label class="label"><u>Tên nhà xuất bản:</u> </label>
<input type="text" id="tennxb" name="tennxb" value="<?php echo $row["tennxb"];?>" />
<label id="tennxb_error" class="error"></label><br />
      <input type="submit" name="sua" value="Save" />
</form>
<?php }
if(isset($_POST['sua'])){
$manxb = isset($_POST["manxb"])?$_POST["manxb"]:0;
$tennxb = isset($_POST["tennxb"])?$_POST["tennxb"]:0;
$a=$obj->updateNXB($manxb,$tennxb);
print_r($a);
header("location: capnhatnhaxuatban.php");	}
?>
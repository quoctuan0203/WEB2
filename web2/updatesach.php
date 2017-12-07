<?php 
	include "config/config.php";
  include ROOT."/include/autoload.php";
  $obj=new Sach();
  if (isset($_POST["ok"]))
	{
		$masach=isset($_POST["masach"])?$_POST["masach"]:false;
		$tensach=isset($_POST["tensach"])?$_POST["tensach"]:false;
		$mota=isset($_POST["mota"])?$_POST["mota"]:false;
		$giagoc=isset($_POST["giagoc"])?$_POST["giagoc"]:false;
		$giagiam=isset($_POST["giagiam"])?$_POST["giagiam"]:false;
		$urlhinh=$_FILES['hinh']['name'];
		$temp = $_FILES["hinh"]["tmp_name"];
		move_uploaded_file($temp, "products-images/".$urlhinh);
		$manxb=isset($_POST["listnxb"])?$_POST["listnxb"]:false;
		$matheloai=isset($_POST["listtheloai"])?$_POST["listtheloai"]:false;
		if( $urlhinh!=false ){
		$obj->updateSach($masach,$tensach,$mota,$giagoc,$giagiam,$urlhinh,$manxb,$matheloai);
		header("location:capnhatsach.php");
		}
	}
 ?>
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
	var tensach    = $.trim($('#tensach').val());
	var giagoc    = eval($.trim($('#giagoc').val()));
	var giagiam    = eval($.trim($('#giagiam').val()));
	var urlhinh    = $.trim($('#hinh').val());
	var mota    = $.trim($('#mota').val());
	var extension = $('#hinh').val().split('.').pop().toLowerCase();
	
	if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','']) == -1)
 			  {
   				 $('#hinh_error').text('Không phải file hình!');
   				 flag=false;
  			 }
  	else  $('#hinh_error').text('');
	if( tensach=='')
		{
			 $('#tensach_error').text('Tên sách không được trống');
			flag=false;
		}
		else  $('#tensach_error').text('');
	if(mota=='')
	{
		$('#mota_error').text('Mô tả không được trống');
		flag=false;
	}
	else  $('#mota_error').text('');
	if(giagoc=='')
	{
		$('#giagoc_error').text('Giá gốc không được trống');
		flag=false;
	}
	else  $('#giagoc_error').text('');
	if(giagiam=='')
	{
		$('#giagiam_error').text('Giá giảm không được trống');
		flag=false;
	}
	else  $('#giagiam_error').text('');
	if(giagiam>=giagoc)
	{
		$('#giagiam_error').text('Giá giảm phải nhỏ hơn giá gốc');
		flag=false;
	}
	else  $('#giagiam_error').text('');
	if(urlhinh=='')
	{
		$('#hinh_error').text('Chưa chọn hình!');
		flag=false;
	}
	else  $('#hinh_error').text('');
	return flag;
	//$('#Test').load('capnhatsach.php');
	});
	
	});

</script>
<?php 
  
 
$obj = new sach();
    $masach= $_GET["masach"];
	$data=$obj->getSach($masach);
	foreach ($data as $row) { ?>
		<form method="post" id="Test" name="Test" enctype="multipart/form-data" action="updatesach.php"  > 	
	<label class="label"><u>Mã sách:</u> </label>
<input type="hidden" name="masach" value="<?php echo $masach;?>" /><?php echo $masach;?> </br>
	<label class="label"><u>Tên sách:</u> </label>
	</br>
	<input name="tensach" id="tensach" type="text" size="60" value="<?php echo $row["tensach"];?>" />
	<label id="tensach_error" class="error"></label>
	</br>
	<label class="label"><u>Mô tả:</u> </label>
	</br>
	<textarea name="mota" id="mota"  size="60"  rows="5" cols="62" maxlength="200" ><?php echo $row["mota"];?> </textarea>  
	<label id="mota_error" class="error"></label>
	</br>
	<label class="label"><u>Giá gốc:</u> </label>
	</br>
	<input name="giagoc" id="giagoc" type="text" size="60" value="<?php echo $row["giagoc"];?>" />
	<label id="giagoc_error" class="error"></label>
	</br>
	<label class="label"><u>Giá giảm:</u> </label>
	</br>
	<input name="giagiam" id="giagiam" type="text" size="60" value="<?php echo $row["giagiam"];?>" />
	<label id="giagiam_error" class="error"></label>
	</br>
	<label class="label"><u>Mã thể loại:</u> </label>
	</br>
	<?php
			$a= new theloai();
			$b=$a->getAll_TL(); ?>
	<select name="listtheloai">
		<?php
			foreach ($b as $value) { ?>
				<option value="<?php echo $row['matheloai']; ?>" <?php if($row['matheloai']==$value['matheloai']) echo "selected"; ?>> <?php echo $value['matheloai']; ?></option>
			<?php } ?>
		?>
	</select>
	
	
	</br>
	<label class="label"><u>Mã nhà xuất bản:</u> </label>
	</br>
	<?php
			$c= new nhaxuatban();
			$d=$c->getAll_NXB(); ?>
	<select name="listnxb">
		<?php
			foreach ($d as $v) { ?>
				<option  value="<?php echo $row['manxb']; ?>" <?php if($row['manxb']==$v['manxb']) echo "selected"; ?>> <?php echo $v['manxb']?></option>
			<?php } ?>
		?>
	</select>
	</br>
	<label class="label"><u>Hình:</u> </label>
	</br>
	<input type="file" name="hinh" id="hinh">
	<label id="hinh_error" class="error"></label>
	</br>
	<?php echo "Hình ảnh"."<br><img src='products-images/".$row['urlhinh']."' width='200' /><br>"; ?>
  </br>
	<input name="ok" id="submit" type="submit" value="Update"  class="nut"  />
</form>
<?php }
?>
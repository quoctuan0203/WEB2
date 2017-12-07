<?php
	
 	$obj1=new sach();
	$page_url = 'navbar.php'; 
	$display = 2; 
	$num_links = 2; 
	// tìm kiếm 
	$search = ''; // giá trị tìm kiếm mặc định ban đầu = ''
 // lấy yêu cầu từ URL
	if(isset($_GET['search']) && !empty($_GET['search']))
	{
		 $search = $_GET['search'];
		 echo '<div class="txtsearch">Kết quả tìm kiếm cho từ khóa:<strong> '. $search.'</strong></div>';
	}
	else
	{
		 $search = '';
	}
	if(isset($_GET['page']) && is_numeric($_GET['page']))
	{
   		$curr_page = $_GET['page'];
	}
	else
	{
		$curr_page = 1; 
	}	
	// truy vấn lấy kết quả trả về có từ cần tìm 
	$result_search = $obj1->search($search);
	
	// đếm số kết quả tìm được
	$total_rows = count($result_search);
	// tính vị trí của món ăn bắt đầu một trang
	$position = ($curr_page - 1)*$display;
	// truy vấn đầy đủ với tìm kiếm +  sắp xếp
	// tổng số trang
	$total_pages = ceil($total_rows/$display);
	
	if($curr_page > $num_links)
	{
		  $start = $curr_page - ($num_links - 1);
	}
	else
	{
		  $start = 1;
	}
	if(($curr_page + $num_links ) < $total_pages)
	{
		  $end = $curr_page + $num_links;
	}
	else
	{
		  $end = $total_pages;
	}
?>
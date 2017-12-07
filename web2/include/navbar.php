
<div class="nav-inner"> 
        <!-- mobile-menu -->
        <!--End mobile-menu -->
        <ul id="nav" class="hidden-xs">
          <li id="nav-home" class="level0 parent drop-menu active"><a href="index.php"><span>Trang chủ</span> </a>            
          </li>
          <li class="level0 parent drop-menu"><a href="#"><span>Danh Mục</span> </a>
				<ul style="display: none;" class="level1">
          <?php include "theloai.php"; ?>
				</ul>
          </li>
          <li class="level0 nav-5 level-top first"> <a href="#" class="level-top"> <span>Tác Giả</span> </a>
            <div style="display: none; left: 0px;" class="level0-wrapper dropdown-6col">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center">
                  <ul class="level0">
                    <?php include "tacgia.php"; ?>
            </div>
          </li>
          <li class="level0 nav-8 level-top"> <a href="sachbanchay.php" class="level-top"> <span>Sách Bán Chạy</span> </a> </li>
          <li class="level0 nav-8 level-top"> <a href="sachnoibat.php" class="level-top"> <span>Sách Nổi Bật</span> </a> </li>
          <li class="level0 nav-8 level-top"> <a href="sachgiamgia.php" class="level-top"> <span>Sách Giảm Giá</span> </a> </li>
		 
        </ul>
        <!-- Search-col -->
        <div class="search-box">
          <form action="timsach.php" method="get" id="search_mini_form" name="Categories">
            <input type="text" placeholder="Tìm kiếm sản phẩm..."  maxlength="70" name="search" id="search">
            <button name="btntim" class="btn btn-default  search-btn-bg"> <span class="glyphicon glyphicon-search"></span>&nbsp;</button>
          </form>
        </div></div>
       
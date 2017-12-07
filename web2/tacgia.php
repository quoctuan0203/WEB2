<?php
    $obj = new tacgia();
    $data= $obj -> getAll_TG();
    
    foreach($data as $arr){ 
  ?>
  <li class="level1 nav-6-1 first parent item"> 
    <ul class="level1">
      <li class="level2 nav-6-1-1 first"> <a href="tacgia1.php?matacgia=<?php echo $arr['matacgia']; ?>"> <span><?php echo $arr['tentacgia']; ?></span> </a> </li>
    </ul>
  </li>
<?php } 

?>

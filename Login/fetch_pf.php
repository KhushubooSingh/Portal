<?php

include 'index.php';



$query ="SELECT pf_no FROM registration_tbl";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    ?>
 <select name="pfno">
   <option>Select id</option>
  <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option['pf_no']; ?> </option>
    <?php 
    }
   ?>
</select>

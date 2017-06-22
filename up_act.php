<?php
   $row_id=$_GET['id'];
   $one = 1;
   $zer = 0;

  $dv = mysqli_connect("localhost","root","root","Name_Generator");

  $sql = "SELECT name.ID,name.Status FROM name WHERE ID = '$row_id'";
  $res = mysqli_query($dv,$sql);

  if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {

          $current_status = $row['Status'];
          if($current_status == 0){
            $new_status=$one;
          }
          if($current_status == 1){
            $new_status=$zer;
          }
    }
  }

  if($new_status == $one){
      $squ = "UPDATE name SET Status = '$one' WHERE ID = '$row_id' ";
      mysqli_query($dv,$squ);
      header("Location: admin.php");
  }
  else if ($new_status == $zer ) {
    $squ = "UPDATE name SET Status = '$zer' WHERE ID = '$row_id'";
    mysqli_query($dv,$squ);
    header("Location: admin.php");
  }
 ?>

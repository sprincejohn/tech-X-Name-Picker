<?php

  include_once('database.php');
  $sta = 0  ;
  $dv = mysqli_connect("localhost","$username","$password","Name_Generator");

  $squ = "UPDATE name SET Status = '$sta'";
  mysqli_query($dv,$squ);

    header("Location: admin.php");
 ?>

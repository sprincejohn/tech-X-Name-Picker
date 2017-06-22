<?php

echo $ret_name;

  if(isset($_POST['renter'])){

      $dql = "UPDATE name SET Status = '$sta' WHERE Name = '$ret_name' ";
      mysqli_query($db,$dql);
      header("Location: picker.php");
    }

?>

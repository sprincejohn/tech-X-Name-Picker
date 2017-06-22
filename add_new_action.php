<?php

    $db = mysqli_connect("localhost","root","root","Name_Generator");

      if(isset($_POST["Enter"])){
          $Name =$_POST['Name'];
          $sta = 0;
          $Err = "";

          if(empty($_POST["Name"])) {
                $Err = $Err."Please Enter the name<br>";
            }
          if ($Err == "") {

            $sql = "INSERT INTO name (Name,Status) VALUES('$Name','$sta')";
            mysqli_query($db,$sql);
            header("Location: admin.php");

          }
      }
 ?>

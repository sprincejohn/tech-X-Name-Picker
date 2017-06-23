<?php
session_start();
$admin = $SESSION['username'];
    include_once('database.php');

    $db = mysqli_connect("localhost","$username","$password","Name_Generator");
    $one = 1;
    $zer = 0;
    $num_fin = " ";
    $num_nt_fin = " ";

    $sql = "SELECT COUNT(Status) AS No_of_people_taken_session FROM name WHERE Status = '$one'";
    $out_one = mysqli_query($db,$sql);

    if ($out_one->num_rows == 0) {
          $num_fin = "0";
    }

    if ($out_one->num_rows > 0) {
      while($row = $out_one->fetch_assoc()) {
        $num_fin = $row['No_of_people_taken_session'];

      }
    }

    $sqm = "SELECT COUNT(Status) AS No_of_people_yet_to_take_session FROM name WHERE Status = '$zer'";
    $out_zer = mysqli_query($db,$sqm);

    if ($out_zer->num_rows == 0) {
          $num_nt_fin = "0";
    }

    if ($out_zer->num_rows > 0) {
      while($row = $out_zer->fetch_assoc()) {
        $num_nt_fin = $row['No_of_people_yet_to_take_session'];

      }
    }
     ?>

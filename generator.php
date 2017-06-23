<?php
session_start();
$admin = $SESSION['username'];
    include_once('database.php');

        $db = mysqli_connect("localhost","$username","$password","Name_Generator");
        $new_status = 1;
        if (isset($_POST['enter'])) {
          $checker = 0;
          $value = $_POST['enter'];
          $err = " ";
          $ret_name = "";

            $sql = "SELECT name.ID,name.Name FROM name where status = '0' ORDER BY RAND() LIMIT 0,1";
            $result = mysqli_query($db,$sql);

                  if ($result->num_rows == 0) {
                        $err = "Please reset ! ";
                  }

                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      $id = $row['ID'] ;
                      $nam = $row['Name'];
                      $ret_name = $nam;
                      $sel_id = $id;
                    }
                  }
      }

      if(isset($_POST['renter'])){
        $msg = "";
        $id = $_POST['user_id'];
        $squ = "UPDATE name SET Status = '$new_status' WHERE ID = '$id'";
        mysqli_query($db,$squ);


        $sql = "SELECT name.Name FROM name WHERE ID = '$id'";
        $picked_name = mysqli_query($db,$sql);
        if($picked_name->num_rows > 0){
          while($roww = $picked_name->fetch_assoc()){
            $msg = $roww['Name'];
          }
        }
              // header("Refresh:1");

    }

<?php
session_start();
$admin = $SESSION['username'];
  if(isset($_POST["check"]))
  {

        $Username =  $_POST['us_name'];
        $Password =  $_POST['pss_wrd'];

        $login_name = "nikhil";
        $login_psswrd = "nikhil";
        $err = "";

        if($Username == " ") {
            $err = "Username and Password is required<br>";
        }
        if ($Password == " ") {
        $err = "Username and Password is required<br>";
        }

        if ($Username == $login_name && $Password == $login_psswrd) {

              session_start();
               $_SESSION['username']=$_POST['us_name'];
               $admin = $_SESSION['username'];
               header("Location: admin.php");
        }
        else {
          $err = "Username and Password is Invalid";
        }
  }
 ?>

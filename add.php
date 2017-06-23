<?php
session_start();
$admin = $SESSION['username'];

if(isset($_SESSION['username'])) {
        $dummy = 0;
}
else {
      header("Location:index.php");
  }
  include_once('add_new_action.php');
    include_once('jquery.js');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css\add_style.css">
  </head>
<body>
  <h1>New Registry</h1>
  <div id="fixed">
   <img src="image\techx.png">
    <a href="admin.php"><button class="buttons"></button></a>
    </div>
  <h3>
       <?php
            if ($Err != "") {
                echo  $Err;
           }
       ?>
    </h3>

  <div id="house">
    <h3>Enter the Name </h3>
    <form method="post" action="add.php">
      <input type="text" name="Name" id="field" />
      <input type="submit" id="btn" name="Enter" value="`"/>
    </form>

    <img id="image" src="image\techx.png">
  </div>


  <br><br><br><br>
    <div id="footer">
      <footer><b>Copyright  &copy<small>2017</small>|<strong>ValueBound  &trade;</strong></b></footer>
    </div>
</body>
</html>

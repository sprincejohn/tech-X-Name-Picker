<?php
  include_once('add_new_action.php');
    include_once('jquery.js');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css\add_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js\jquery.js"></script>
</head>
<body>
  <h1>New Registry</h1>
  <a href="admin.php"><button class="buttons"></button></a>

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
  </div>


  <br><br><br><br>
    <div id="footer">
      <footer><b>Copyright  &copy<small>2017</small>|<strong>ValueBound  &trade;</strong></b></footer>
    </div>
</body>
</html>

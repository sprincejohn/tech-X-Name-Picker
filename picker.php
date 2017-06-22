<?php
    include_once('jquery.js');
    include_once('generator.php');
    include_once('report.php')
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css\style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js\jquery.js"></script>
</head>
<body>


    <div id="top_menu">
      <a href="admin.php">  <button class="buttons"></button> </a>
      <a href="refresh.php"><button class="buttons9"></button></a>
    </div>

  <div id="home">
      <h1> Tech-X Name Picker </h1>


    <br><br>
    <h3 id="rand">
       <?php
            if ($err != "") {
                echo  $err;
           }
       ?>
    </h3>
    <h3 id="rand">
       <?php
            if ($msg != "") {
                echo "Next Week Tech-X Will be Taken by ". $msg."  ! ";
           }
       ?>
    </h3>
    <h1 id="rand"><?php echo $ret_name ; ?></h1>

  </div>

         <form method="post" action="picker.php">
                <input type="submit" name="enter" class="create" id="spin" value="" />
                <input type="hidden" name="user_id" value="<?php echo $sel_id; ?>" /><br><br>
                <input type="submit" name="renter" id="respin" value="Confirm">
         </form>
<div id="report">
    <div id="no_finished">
      <h1 id="left_side">No of Sessions Completed </h1>

         <?php
              echo $num_fin;
         ?>

    </div>

    <div id="yet_to_finish">
      <h1 id="left_side">No of Sessions Yet to be Completed </h1>

         <?php
              echo $num_nt_fin;
         ?>

    </div>
</div>


  <div id="footer">
    <footer><b>Copyright  &copy<small>2017</small>|<strong>ValueBound  &trade;</strong></b></footer>
  </div>
</body>
</html>

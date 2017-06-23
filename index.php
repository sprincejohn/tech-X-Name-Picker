<?php
session_start();
$admin = $SESSION['username'];
  include_once('index_action.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css\index_style.css">
  </head>
  <body>

    <a href="picker.php"><button class="buttons"></button></a>
    <div id="login">
      <div id="techx">
      <img src="image\techx.png">
      </div>

      <h6>
        <?php
                if($err != " ")
                {
                  echo $err;
                }
           ?>
       </h6>


      <h1>Log In </h1>

      <h6> Enter the <u>Required Fields</u> *</h6>
      <form method="post" action="index.php">
        * <input type="text" name="us_name" placeholder="  Username" class="user_pass"><br><br>
        * <input type="password" name="pss_wrd" placeholder="Password" class="user_pass"><br><br>
          <input type="submit" name="check" value="Log In" id="check"><br>
      </form>
    </div>


    <br><br><br>
    <div id="footer">
    	<footer><b>Copyright  &copy<small>2017</small>|<strong>ValueBound  &trade;</strong></b></footer>
    </div>

  </body>
</html>

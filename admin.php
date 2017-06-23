<?php
  session_start();
  $admin = $SESSION['username'];

  if(isset($_SESSION['username'])) {
          $dummy = 0;
  }
  else {
        header("Location:index.php");
    }
  include_once('database.php');
  include_once('jquery.js');
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css\admin_style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js\jquery.js"></script>
</head>
<body>

  <h1> Administrator</h1>

  <div id="fixed">
    <img id="image" src="image\techx.png"><br>
    <a href="logout.php"><button id="buttons"></button></a>
    <a href="add.php"><button class="buttons1"></button></a>
    <button class="buttons2" id="btn"></button>
  </div>

  <div id="tabledis">
    <table id="myTable">
      <tr>

          <th>Name</th>
          <th>Status</th>
          <th id="width">Operations</th>
      </tr>

      <?php
          $conn = new mysqli("localhost", "$username", "$password", "Name_Generator");

          $sql= "SELECT name.ID,name.Name,name.Status FROM name ORDER BY Name ASC";
          $results = mysqli_query($conn,$sql);

          if ($results->num_rows > 0) {
            while($row = $results->fetch_assoc()) {

      ?>
      <tr id="<?php echo $row['ID'] ?>">
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Status']; ?></td>
        <td> <?php
              $id = $row['ID'];
              $st = $row['Status'];
              echo '<a href="up_act.php?id='.$id.'"><button class="Change"><b>Change Status</b></button>  </a>';
              echo '<a href="delete_action.php?id=' .$id. '"><button class="del">  </button>   </a>';
              ?>
        </td>

      </tr>

        <?php
           }
          }
      ?>
    </table>
  </div>


  <br><br><br>
  <div id="footer">
  	<footer><b>Copyright  &copy<small>2017</small>|<strong>ValueBound  &trade;</strong></b></footer>
  </div>
</body>
</html>

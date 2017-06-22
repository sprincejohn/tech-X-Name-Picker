<?php
  // include_once('up_act.php');
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
    <a href="picker.php"><button class="buttons"></button></a>
    <a href="add.php"><button class="buttons1"></button></a>
    <a href="reset.php"><button class="buttons2"></button></a>
  </div>
  
  <div id="tabledis">
    <table id="myTable">
      <tr>
          <th>S.No</th>
          <th>Name</th>
          <th>Status</th>
          <th id="width">Operations</th>
      </tr>

      <?php
          $conn = new mysqli("localhost", "root", "root", "Name_Generator");

          $sql= "SELECT name.ID,name.Name,name.Status FROM name";
          $results = mysqli_query($conn,$sql);

          if ($results->num_rows > 0) {
            while($row = $results->fetch_assoc()) {

      ?>
      <tr>
        <td><?php echo $row['ID']; ?></td>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Status']; ?></td>
        <td> <?php
              $id = $row['ID'];
              $st = $row['Status'];
              echo '<a href="up_act.php?id= '.$id.'"><button class="Change"><b>Change Status</b></button>  </a>';
              echo '<a href="delete_action.php?id= ' .$id. '"><button class="del">  </button>   </a>';
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

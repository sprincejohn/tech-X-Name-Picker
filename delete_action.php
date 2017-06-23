<?php

include_once('database.php');
$id=$_GET['id'];
$db = mysqli_connect("localhost","$username","$password","Name_Generator");

    $sql = "DELETE FROM name WHERE ID = '$id'";
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));

     header("Location: admin.php");

  ?>

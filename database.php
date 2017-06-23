<?php
session_start();
$admin = $SESSION['username'];
$server_ip = $_SERVER['SERVER_ADDR'];

if($server_ip == '127.0.0.1'){
  $username = "root";
  $password = "root";
}
else {
  $username = "root";
  $password = "cyroot";
}

<?php

$http_ip = $_SERVER['REMOTE_HOST'];
$localIP = getHostByName(getHostName());

if($http_ip == $local_ip){
  $username = "root";
  $password = "root";
}
else {
  $username = "root";
  $password = "cyroot";
}

?>

<?php

$localhost ='localhost';
$user ='root';
$db = 'login';
$pass ='';

$mysqli = new mysqli($localhost, $user, $pass, $db);

if($mysqli->connect_error){
  die("Connection error: $mysqli->connect_error");
}

?>
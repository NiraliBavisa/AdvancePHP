<?php
$servername = "localhost";
$username = "root"; 
$password = "mysql";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
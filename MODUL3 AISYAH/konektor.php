<?php
$host = "localhost:3315";
$user = "root";
$password = "";
$database   = "modul 3 Aisyah";

$connector = mysqli_connect($host, $user, $password, $database);

if ($connector->connect_error) {
  die("Connection failed: " . $connector->connect_error);
} else {
  echo "Connected successfully";
}

?>
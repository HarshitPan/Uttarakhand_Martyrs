<?php
$servername = "localhost:3306";
$username = "harshit";
$password = "Harsh@9977";
$db='UK_Mayrtr';
$conn = new mysqli($servername, $username, $password,$db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 
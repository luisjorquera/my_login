<?php

$servername = "localhost";
$username = "root";
$password = "root";
$sal= '$2y$05$REOOI32L3KN42LN3244234A';

try {
  $conn = new PDO("mysql:host=$servername;dbname=testing", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


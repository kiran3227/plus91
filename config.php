<?php

  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'plus91';

  // Connection Created
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Connection checked
  if($conn->connect_error) {
    die("Connection Failed!" . $conn->connect_error);
  }

?>

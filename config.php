<?php  //reffered from labsheets
   $servername = "localhost";
   $username = "root";
   $password = "mysql123";
   $db = "ezbuy";
// Create connection
   $conn = new mysqli($servername, $username, $password, $db);
// Check connection
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
     }
      echo "Connected successfully";
?> 
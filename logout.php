<?php
   session_start();
   include_once 'config.php';     //w3school was reffered to do this

   unset($_SESSION["username"]);
   unset($_SESSION["password"]);

   $sql="Delete From cart";

   if(mysqli_query($conn,$sql)){
    echo "<br>Cart deleted<br>";
  }
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = index.php');

 
?>
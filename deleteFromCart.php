<?php 
	session_start();
    include_once 'config.php';
    $dltid=$_GET['itemId'];
?>

<?php 
  
  $sql = "Delete From cart Where itemId=".$dltid;

   if(mysqli_query($conn,$sql)){
   	                 echo "<script>alert('Item deleted from the cart.')</script> ";
                     header('Refresh: 0.1; URL = cart.php');
                     
                   }
                   else{
                     echo "<script>alert('Error!!')</script> ";
                   }


?>
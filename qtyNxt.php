<?php 
    session_start();
    include_once 'config.php';
    $itemIdentity=$_GET['itemId'];


?>

<?php     

          $sql = "SELECT * From cart where itemId = ".$itemIdentity;
          $result=$conn->query($sql); 
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()){   
                $qty=$row['quantity'];
                $qty++;              
                }
              }
              else{
                echo "<script>alert('Error')</script>";
              }
              $query = "update cart set quantity = '".$qty."' where itemId = ".$itemIdentity;
                   if(mysqli_query($conn,$query)){
                       echo 'Success';
                       header("Location:cart.php");
                   }
                   else{
                       echo 'Error';
                   }



              $conn->close();
            ?>
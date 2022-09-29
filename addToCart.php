<?php 
  session_start();
  include_once 'config.php';
  $iID=$_GET['ItemId'];
?>

<?php 
     if(isset($_SESSION['username'])){ 
        $sql = "SELECT * From item WHERE ItemId =".$iID;
        $result=$conn->query($sql); 
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    $itemname=$row["ItemName"];
                    $itemdesc=$row["ItemDescription"];
                    $price=$row["Price"];
                    $pict=$row["pic"];
                    $cateid=$row["categoryId"];
                    $quantity = 1;

                    //insert values

                    $sql ="INSERT INTO `cart`(`itemId`, `ItemName`, `ItemDescription`, `Price`, `pic`, `categoryId`,`quantity`) VALUES ('','$itemname','$itemdesc',$price,'$pict','$cateid',$quantity)";


                    //execute  the query
                   if(mysqli_query($conn,$sql)){
                     echo "<script>alert('Item added to the cart.')</script> ";
                     header("Refresh: 0.2; URL = category.php? categoryId=$cateid");
                   }
                   else{
                     echo "<script>alert('Error!!')</script> ";
                   }
                }
              }
              else{
                echo "Error!!";
              }

        
     }
     
     else{
        echo "<script>alert('You need to login first!')</script> ";
       header('Refresh: 0.5; URL = login.php');
     }   

      mysqli_close($conn);  
?>
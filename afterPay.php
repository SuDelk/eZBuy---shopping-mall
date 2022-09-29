<?php 
  include_once 'config.php';
  session_start();
  $paymentType = $_GET['paymentType'];
                $total=0;
                $sub=0;
                $sql = "SELECT * From cart";
        $result=$conn->query($sql); 
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()){      
                             $sub=($row["Price"]*$row["quantity"]);
                              $total += $sub;
                }
              }                
?>
<?php
  if ($paymentType==1){
    $paymentTypeName='Card Payment';
    $cardType=$_POST['ct'];
    $cardNumber=$_POST['cnumber'];
    $nameOncard=$_POST['NOC'];
    $expDate = $_POST['exp'];
    $cvv = $_POST['cvv'];
    
    $sql ="INSERT INTO `payment`(`paymentNo`, `paymentType`, `paymentTypeName`) VALUES ('',$paymentType,'$paymentTypeName')";
  //execute  the query
            if(mysqli_query($conn,$sql)){
                $qToGetLast="select * from payment ORDER BY paymentNo DESC LIMIT 1";
                $result = $conn->query($qToGetLast);
                $paymentNo= $result->fetch_assoc()['paymentNo'];
           
                $newsql = "INSERT INTO `carddetails`(`cardID`, `paymentNo`, `cardType`, `cardNo`, `nameOnCard`, `expDate`, `cvv`) VALUES ('',$paymentNo,'$cardType','$cardNumber','$nameOncard','$expDate',$cvv)"; 
                  $conn->query($newsql);

                  $username=$_SESSION['username'];
                  $sqlnewest ="Select * From Customer where uname="."'".$username."';";

                   $result=$conn->query($sqlnewest);
                   $cid=$result->fetch_assoc()['CID'];

                  $newsqlq = "INSERT INTO `orders`(`Oid`, `PaymentNo`, `CID`, `Price`) VALUES ('',$paymentNo,$cid,$total)";
                  $conn->query($newsqlq);

                  $qToGetLast="select * from orders ORDER BY Oid DESC LIMIT 1";
                  $result = $conn->query($qToGetLast);
                  $oid= $result->fetch_assoc()['Oid'];

                  $sub=0;
                  $sql = "SELECT * From cart";
                  $result=$conn->query($sql); 
                  if($result->num_rows>0){
                      while($row = $result->fetch_assoc()){      
                             $itemid=$row['itemId'];
                             $itemName=$row['ItemName'];
                             $qty=$row["quantity"];
                             $sub=($row["Price"]*$row["quantity"]);

                             $sqlc = "SELECT * From item WHERE ItemName = '$itemName' ";
                                   $resultc=$conn->query($sqlc); 
                                      if($resultc->num_rows>0){
                                           while($row = $resultc->fetch_assoc()){      
                                               $itemidc=$row['ItemId'];}}
                 

                  $newsqlFor = "INSERT INTO `order_items`(`Oid`, `itemId`, `itemName`, `quantity`, `subPrice`) VALUES ($oid,$itemidc,'$itemName',$qty,$sub)";
                             $conn->query($newsqlFor);
                      }
                  } 
                  echo "<script>alert('Payment Successful.')</script> ";
                  $conn->query("Truncate Table cart;");
                   header("Refresh:1;URL=cart.php");
                  
             }
             else{
               echo "<script>alert('Error!!')</script> ";
             }
  }
  else if($paymentType==2){
      $paymentTypeName='Cash On Delivery';
      $sql ="INSERT INTO `payment`(`paymentNo`, `paymentType`, `paymentTypeName`) VALUES ('',$paymentType,'$paymentTypeName')";
      $conn->query($sql);

      $qToGetLast="select * from payment ORDER BY paymentNo DESC LIMIT 1";
      $result = $conn->query($qToGetLast);
      $paymentNo= $result->fetch_assoc()['paymentNo'];

      $username=$_SESSION['username'];
      $sqlnewest ="Select * From Customer where uname="."'".$username."';";

      $result=$conn->query($sqlnewest);
      $cid=$result->fetch_assoc()['CID'];

      $newsqlq = "INSERT INTO `orders`(`Oid`, `PaymentNo`, `CID`, `Price`) VALUES ('',$paymentNo,$cid,$total)";
      $conn->query($newsqlq);

      $qToGetLast="select * from orders ORDER BY Oid DESC LIMIT 1";
      $result = $conn->query($qToGetLast);
      $oid= $result->fetch_assoc()['Oid'];

      $sub=0;
      $sql = "SELECT * From cart";
       $result=$conn->query($sql); 
      if($result->num_rows>0){
          while($row = $result->fetch_assoc()){      
                 $itemid=$row['itemId'];
                 $itemName=$row['ItemName'];
                 $qty=$row["quantity"];
                 $sub=($row["Price"]*$row["quantity"]);

                             $sqlc = "SELECT * From item WHERE ItemName = '$itemName' ";
                                   $resultc=$conn->query($sqlc); 
                                      if($resultc->num_rows>0){
                                           while($row = $resultc->fetch_assoc()){      
                                               $itemidc=$row['ItemId'];}}
                 

                  $newsqlFor = "INSERT INTO `order_items`(`Oid`, `itemId`, `itemName`, `quantity`, `subPrice`) VALUES ($oid,$itemidc,'$itemName',$qty,$sub)";
                             $conn->query($newsqlFor);
          }
      } 


      echo "<script>alert('Payment Successful.')</script> ";
      $conn->query("Truncate Table cart;");
      header("Refresh:1;URL=cart.php");
  }
  //close the connection
mysqli_close($conn);
?>
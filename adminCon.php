<?php 
  
  session_start();
  include_once 'config.php';
  $req=$_GET['req'];
?>
<?php 
  $firstSql="Select * From requestseller WHERE requestNo=".$req;
  $result=$conn->query($firstSql); 
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                  if ($row['status']=='Pending'){
                    $sql="UPDATE `requestseller` SET `status`='Accepted' WHERE requestNo=".$req;
                    mysqli_query($conn,$sql);
                    header("Refresh:0.1;adminDashboard.php");
                    echo "<script>alert('Seller request accepted')</script>";
                  }
                  else if($row['status']=='Accepted') {
                    $sql="UPDATE `requestseller` SET `status`='Declined' WHERE requestNo=".$req;
                    mysqli_query($conn,$sql);
                    header("Refresh:0.1;adminDashboard.php");
                    echo "<script>alert('Seller request Declined')</script>";

                  }
                  else{
                    $sql="UPDATE `requestseller` SET `status`='Pending' WHERE requestNo=".$req;
                    mysqli_query($conn,$sql);
                    header("Refresh: 0.1;adminDashboard.php");
                    echo "<script>alert('Seller request status changed to pending')</script>";
                  }
                   
                }
                    }
              else{
                echo "Empty Row";
              }
 

  
?>
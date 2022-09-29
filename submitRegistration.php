<?php 
  include_once 'config.php';
?>

<?php 
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $dob = $_POST['dob'];
  $uname = $_POST['uname'];
  $pwd = $_POST['pwd'];


  //insert values

  $sql ="INSERT INTO `customer`(`CID`, `firstName`, `lastName`, `gender`, `mobile`, `email`, `address`, `dob`, `uname`, `pwd`) VALUES('','$fname','$lname','$gender','$mobile','$email','$address','$dob','$uname','$pwd')";
  //execute  the query
  if(mysqli_query($conn,$sql)){
    header("Location:index.php");
    echo "<script>alert('record insert successfully')</script> ";
  }
  else{
    echo "<script>alert('Error!!')</script> ";
  }

  //close the connection
mysql_close($conn);
?>


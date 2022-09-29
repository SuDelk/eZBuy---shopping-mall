<?php 
  session_start();
  $catId=$_GET['categoryId'];
  include_once 'config.php';
  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eZBuy | category</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Styles/category.css">
  
</head>
<body>
  <div class="container">
  	<div class="navbar">
  	  <div class="logo">
  	  	<center><a href="index.php"><img src="Images/logo1.png" width="250px"></a></center>
  		<nav class="top">
  			<?php if(isset($_SESSION['username'])){             
          echo '<h2 id="head">Hi! , '.$_SESSION['username'].'</h2>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="sellerRequestForm.php">Become a seller</a></li>
          <li><a href="contactUs.php">Help</a></li>
          <li><a href="cart.php">My Cart</a></li>
        </ul><br>';
        if($_SESSION['username']=='administrator'){
            echo '<ul><li><a href="adminDashboard.php" class="admin">Admin Dashboard</a></li></ul><br>';
          }

        }

          else{
         echo '<ul><li><a href="index.php">Home</a></li>
          <li><a href="register.php">Sign Up</a></li>
          <li><a href="login.php">Log In</a></li>
          <li><a href="contactUs.php">Help</a></li>
        </ul><br>' ;
        } ?>
  			  <form method="GET" action="/action_page.php">
     		    <input  class="navigation" type="text" placeholder="Search.." name="search" >
      		  <button class="navigation" type="submit"><i class="fa fa-search"></i></button>
    		  </form>
  		</nav>
  	  </div>
  	      <div align="center">		 <!-- Reffered from labsheets -->
			        <button class="category" id="gym" onclick="window.location.href='category.php? categoryId=CA01'">Sports&Gym</button>    
              <button class="category" id="fashion" onclick="window.location.href='category.php? categoryId=CA02'">Fashion</button>
              <button class="category" id="kids" onclick="window.location.href='category.php? categoryId=CA03'">Kids&Toys</button>
              <button class="category" id="groceries" onclick="window.location.href='category.php? categoryId=CA04'">Groceries</button>
              <button class="category" id="beauty" onclick="window.location.href='category.php? categoryId=CA05'">Health&Beauty</button>
              <button class="category" id="electronics" onclick="window.location.href='category.php? categoryId=CA06'">Electrical Items</button>
              <button class="category" id="pharmacy" onclick="window.location.href='category.php? categoryId=CA07'">Pharmaceutical</button>
              <button class="category" id="books" onclick="window.location.href='category.php? categoryId=CA08'">Books</button>

			        <br>
		      </div>
		      <hr class="new1">
    </div>
    
  <!-- My code starts here -->
    


        <center>
          <?php

          if ($catId=='CA01') {
            echo "<h1>Sports & Gym</h1><br>";
          }
          else if($catId=='CA02'){
            echo "<h1>Fashion</h1><br>";
          }
          else if($catId=='CA03'){
            echo "<h1>Kids & Toys</h1><br>";
          }
          else if($catId=='CA04'){
            echo "<h1>Groceries</h1><br>";
          }
          else if($catId=='CA05'){
            echo "<h1>Health & Beauty</h1><br>";
          }
          else if($catId=='CA06'){
            echo "<h1>Electrical Items</h1><br>";
          }
          else if($catId=='CA07'){
            echo "<h1>Pharmaceutical Items</h1><br>";
          }
          else if($catId=='CA08'){
            echo "<h1>Books</h1><br>";
          }
          else
            echo "<script>alert('Error!!')</script>";

            
       echo '<table border="1" class="tab1">';
        

        $sql = "SELECT * From item WHERE categoryId ="."'".$catId."';";
        $result=$conn->query($sql); 
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    echo "<tr><td class='col1'>".'<a href="moreDetails.php? ItemName=\''.$row["ItemName"].'\'"><img src="'.$row["pic"].'" class ="img1"></a>'."</td>";
                    echo "<td><p><h2>".$row["ItemName"]."</h2><br><h3>".$row["ItemDescription"]."</h3></p><small>"."Rs. ".$row["Price"]."</small></td>";
                    echo "<td><a href='addToCart.php?ItemId=".$row["ItemId"]."'><button class='addItems' >Add to cart</button></a></td></tr><tr>";
                }
                    }
              else{
                echo "Empty Row";
              }
              $conn->close();
            ?>
           
</table>
</center>
               
  
  <!-- My code ends here -->
    <div>
      <footer>
      	<hr class="new1"><nav class="foot">
      	  <ul class="foot">
  				<li><a href="index.php">Home</a></li>
  				<li><a href="promotions.php">Promotions</a></li>
  				<li><a href="aboutUs.php">About Us</a></li>
  				<li><a href="contactUs.php">Contact Us</a></li>
  			</ul></nav>
      	<hr class="new1">
        <table class="t1" width="100%">
          <tr>
            <th>Online Shopping Mall</th>
            <th >Find Shops</th>
            <th>More</th>
          </tr>
          <tr>
            <td>
              <li>Promotion</li>
              <li>About Us</li>
              <li>Contact Us</li>
              <li>Category</li>
            </td>
            <td style="border-right: solid 1px grey; border-left: solid 1px grey;">
              <div class="fut">
              <li><a href="https://www.ithaka.travel/blog/places-to-shop-in-sri-lanka/">Fashion House</a></li>
             <li><a href="https://list.ly/list/2PX8-top-5-supermarkets-near-colombo-five-of-the-best-supermarkets-in-and-around-colombo">City Food</a></li>
             <li><a href="https://www.facebook.com/sephoramakeupstoresrilanka/">Sephora
             <li><a href="https://www.nike.com/retail/s/nike-colombo">Nike
             <li><a href="http://www.willsdesign.lk/">Wills Design</a></li>
             <li><a href="https://www.healthguard.lk/">City Food pharmacy</a></li>
             <li><a href="https://www.sarasavi.lk/">Sarasavi
             <li><a href="index.php">Other</a></li></div>
            </td>
            <td><center>
              <a href=""><img src="Images/youtube.png" alt="Youtube"></a>
              <a href=""><img src="Images/fb.png" alt="Facebook"></a><br><br>
              <a href=""><img src="Images/twitter.png" alt="Twitter"></a>
              <a href=""><img src="Images/whatsapp.png" alt="Whatsapp"></a></center>
            </td>
          </tr>
        </table>
      </footer>
  </div>  
      
</body>
</html>
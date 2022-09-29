<!DOCTYPE html>

<?php 
session_start();
  include_once 'config.php';
 
  $ItemId1=rand(1,24);
  $ItemId2=rand(25,48);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Fancy Brown Leather Shoes| eZBuy | Online Shopping Mall</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css">
	<link rel="stylesheet" type="text/css" href="Styles/itemdes.css">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="Scripts/itemdes.js"></script>
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
  	      <div align="center">		
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




		<table>
			<tr>
				<td><img src="Images/fancy.jpg" align="left" alt="jordan" id="mainImage" width="88%"></td>
			
				<td>
					<div class="itemdetail">
						<form method="POST" action="" >
							<h1 name="ItemName">Fancy Brown Leather Brogue Shoes</h1>
							<p>High Genuine Brown Fancy Leather Shoes with luxury broguing.</p>
							<h4 name="Price">Rs.6450</h4>
							
						<br>
							
							
						</form><button class="butt" name="ATC" onclick="window.location.href='addToCart.php?ItemId=56'">Add To Cart</button>

					</div>
				</td>
				<td>
					<div id="Delivery">
					<br>
					<b>Delivery Details: </b>The Courier Will Contact In Due Time. Will Be Shipped After Two Working Days After the Payment Verification.
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="small_imgs">
						<img src="Images/fancy1.jpg" class="minImage" id="minImage1" width="30%" onclick="enLarge('minImage1')">
						<img src="Images/fancy.jpg" class="minImage" id="minImage2" width="30%" onclick="enLarge('minImage2')">
						<img src="Images/fancy3.jpg" class="minImage" id="minImage3" width="30%" onclick="enLarge('minImage3')">
					</div>
				</td>
				<td></td>
				<td><div id="Warranty">
					<b>Warranty Details: </b>Contact The Website Admin For Warranty Details<a href="">Contact Us</a>
					</div>
				</td>
			</tr>

			<tr>
				<td><center><h3>Ratings; </h3> 
					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star"></span>
 					<span class="fa fa-star"></span></center>
 				</td>
				<td >
					
					 <table>
<?php
$sql = "SELECT * From item WHERE ItemId = $ItemId2";
$result=$conn->query($sql);
	if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
?>						
						<tr>
							<td class="reco"><a href="moreDetails.php? ItemName='<?php echo $row['ItemName']; ?>'"><img src="<?php echo $row["pic"]?>" ></a></td>
						</tr>	
						<tr><td class="reco"><?php echo $row["ItemName"]?></td></tr>
						<tr>
							<td class="reco">Rs. <?php echo $row["Price"]?></td>
						</tr>

<?php

}
	}
		else{
				echo "Empty Row";
			}


?>
					</table>
				</td>
				<td>
					<table>
<?php
$sql = "SELECT * From item WHERE ItemId = $ItemId1";
$result=$conn->query($sql);
	if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
?>
						
						<tr>
							<td class="reco"><a href="moreDetails.php? ItemName='<?php echo $row['ItemName'];?>'"><img src="<?php echo $row["pic"]?>" id="reco2"></a></td>
						</tr>	
						<tr><td class="reco"><?php echo $row["ItemName"]?></td></tr>
						<tr>
							<td class="reco">Rs. <?php echo $row["Price"]?></td>
						</tr>
					</table>
<?php

}
	}
		else{
				echo "Empty Row";
			}
		$conn->close();

 
?>
				</td>
				
			</tr>

		</table>
			


		<hr>





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
             <li><a href="https://www.facebook.com/sephoramakeupstoresrilanka/">Sephora</a></li>
             <li><a href="https://www.nike.com/retail/s/nike-colombo">Nike</a></li>
             <li><a href="http://www.willsdesign.lk/">Wills Design</a></li>
             <li><a href="https://www.healthguard.lk/">City Food pharmacy</a></li>
             <li><a href="https://www.sarasavi.lk/">Sarasavi</a></li>
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
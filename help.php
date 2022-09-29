<?php 
  include_once 'config.php';
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eZBuy | Online Shopping Mall</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css">
	<style>
    h2{
        text-align: center;
        color: purple;
    }

    p{
        font-weight: bold;
        font-size: 120%;
        padding-left: 45px;
    }
    /*login and cancel order*/
    ol{
        font-size: 110%;
        padding-left: 85px;
    }

    /*return item and cancel order */

    .image{
        width: 20%;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }    
</style>
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
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
      <h2>Are you having trouble with log in.</h2>

    <p>If you are having problems with log in here are some tips to follow.</p>
        
        <ol>
            <li>If you get an error message saying your <span style="color: red;">username or password is incorrect</span>,check whether you entered the correct username and password.</li>
            <li>Check wether you entered the most recent password. If you changed your password then use only the new password. Don't use previous passwords.</li>
            <li>If you own't remember your password, reset your password by clicking forgot password.When you are changing your password, don't use passwords that you are already used for this site.</li>
            <li>Instead of logging in using your username, check that you have entered the email.</li>
        </ol>
    

    <h2>How to cancel an order.</h2>

    <img src="Images/cancelOrder.png" alt="cancel order" class="image">
    <p>If you want to cancel an order follow these steps.</p>
        
        <ol>
            <li>Go to order summary page.</li>
            <li>Check for the item that you need to cancel.</li>
            <li>In the left side of the item, there you can see the delete button.Click on that button.</li>
            <li>After few moments check whether you got a mail confirming your cancellation.</li>
            <li>Also check the order summary page to see if the cancellerd item is not displayed.</li>
        </ol>
        <h4 style="font-weight:normal; padding-left: 45px;"><span style="color: red; font-weight: bold;">Note</span>: If your item has already been shipped, you can not cancel the order.</h4>
    
        <h2>How to return an item.</h2>

        <img src="Images/return.jpg" alt="return item" class="image">
        <p>If you are not satisfied with the item you recieved or if the item is damaged or item is not matching with the item that you ordered, you can return that relevant item.</p>
            
            <ul type="square" style="font-size:110%">
                <li>Go to your profile and select the item that you need to return.</li>
                <li>Click the return item button.</li>
                <li>Give the reason for returning the item.</li>
                <li>Confirm the return.</li>
            </ul>

        <h4 style="font-weight: normal; padding-left: 45px;"><span style="color: red; font-weight: bold;">Note</span>:
            <ul>
                <li>Some items may not be able to return. To clarify the item can return or not, see th eitem description.</li>
                <li>Return the item within 3 days after you recieved it.</li>
            </ul>
        </h4>
	

		<br>
		
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
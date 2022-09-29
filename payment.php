<?php 
  include_once 'config.php';
  session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eZBuy | Payment Details</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css">
    <link rel="stylesheet" type="text/css" href="Styles/payment1.css">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
	
  <div class="container">
  	<div class="navbar">
  	  <div class="logo">
  	  	<center><img src="Images/logo1.png" width="250px"></center>
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

	<h2>SELECT PAYMENT METHOD</h2><!-- used https://www.youtube.com/watch?v=qRW-VRb4Kjs&t=550s -->
	                               <!--used w3school-->

	<div class="row">
		<div class="column">
			<div class="vl"></div>
			<fieldset style="width: 200px;">
				<legend>Credit/Debit Card</legend>
				<center>
					<i class="fa fa-credit-card fa-3x" style="color: gray;"></i>
				</center>
			</fieldset>

			<br><br>
			<form action="afterPay.php? paymentType=1" method="POST">
				<div class="fill">
					<label for="cardtype">Card Type</label><br>
					<input type="radio" name="ct" value="Visa" style="padding-bottom: 10px;"><img src="Images/Visa.png" width="80px" style="border-radius: 3px; border: 0px solid gray " align="center">
					<input type="radio" name="ct" value="Master Card"><img src="Images/MasterCard.png" width="80px" style="border-radius: 3px; border: 0x solid gray " align="center">
					<input type="radio" name="ct" value="American Express"><img src="Images/ax.png" width="80px" style="border-radius: 3px; border: 0px solid gray " align="center">
					
					<fieldset style="width: 48%;">
                        <legend>Card Number</legend> 
                        <input class="input" type="text" id="Cnumber" name="cnumber" required>  
                    </fieldset>
                    <br>

					<fieldset style="width: 48%;">
                        <legend>Name On Card</legend> 
                        <input class="input" type="text" id="name" name="NOC" required>  
                    </fieldset>
                    <br>

					<fieldset style="width: 15%;">
						<legend>Expiration Date</legend>  
						<input class="input" type="month" id="expDate" name="exp" required>  
					</fieldset>

					<fieldset style="width: 15%;">
						<legend>CVV</legend>   
						<input class="input" type="text" id="cvv" name="cvv" required> 
					</fieldset>				
						
						<br><br>

					<input type="submit" valueid="pay" value="Pay Now">
                	<br><br><br>
				</div>
			</form>
			</div>

		<div class="column">
			<fieldset style="width: 200px;">
				<legend>Cash On Delivery</legend>
				<center>
					<i class="fa fa-usd fa-3x" style="color: green;"></i>
				</center>
			</fieldset>
			
			<br><br><br><br><br><br>

			<center>
			<button class="bttn1" type="button" onclick="confirmMe(),window.location.href='afterPay.php? paymentType=2'" >Confirm Order</button>
			</center>
			<script>
				function confirmMe(){
					alert("Your order is confirmed!!")
				}
			</script>
		</div>
	</div>

	<hr class="tot">
	<center><?php $total=0;
                $sub=0;
                $sql = "SELECT * From cart";
        $result=$conn->query($sql); 
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()){      
                             $sub=($row["Price"]*$row["quantity"]);
                              $total += $sub;
                           
                }    
              }
              else{
                echo "Invalid";
              }
              echo '<div class="total">
			                          Total Amount:Rs. '.$total.'
		                            </div>';
              $conn->close();
            ?>
	</center>
	
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
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
	<link rel="stylesheet" type="text/css" href="Styles/aboutUs.css">
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

	<div>		
	<div class="abtUsBlock">			
			<img src="Images/exp.jpg" alt="delivery image" class="image">
			<div class="sect">
				<h1 class="topic">Experience</h1>
				<p class="para">eZBuy has the widest selection of popular items all over Sri Lanka, which makes it easy to find exactly what you are looking for. We offers a diverse assortment in categories ranging from electronic and electrical items to sports & gym, kids & toys, groceries, health & beauty, pharmaceutical, books and fashion.eZBuy is focused on providing an excellent customer experience, ease of purchase, comprehensive customer care and a hassle-free shopping and returns experience.Simply place your order and get them delivered right at your doorstep with the facility of secured payment methods and an easy return facility as well.We also carefully review all ads that are being published, to make sure the quality is up to our standards.If you,d like to get touch with us, go to contact us.</p>
			</div>
		</div>

		<div class="abtUsBlock">			
			<div class="sect">
				<h1 style="text-align: left; font-size: 40px;">Return and refund</h1>
				<p class="para">Customers have to accept our return and refund policies before purchasing any item.These policies are only applicable for damaged items or undelivered items. Change of mind of the customer is not acceptable. If the refund inquiry is validated, user can choose between two refund options, either a voucher worth the same or the refund deposited the customer's bank account.</p>
				<div style="text-align: right;">
				<h1 class="topic">Doorstep Delivery</h1>
				<p class="para">We have partnered with one of the best delivery services in Sri Lanka in order to provide our customers a better delivery service at an affordable price. The average delivery time is about 2 days with in Sri Lanka after the shipment. Our delivery team will ensure that your products are carefully packaged and will be delivered to your door step by one of our delivery person.</p></div>
				<div style="text-align: left;">
				<h1 style="text-align: left; font-size: 40px;">Track Order Details</h1>
				<p class="para" >After you make the payment and purchase the product, tour order can be tracked with our system using the unique tracking number provided to the customer. You can even contact the seller if there are any detials to get clarified. You can track the details like the location and in which state the product is in using our system from the time of purchase until the product is delivered to your hands. This ensures that your order is not misplaced and delivered to you before the estimated date.</p></div>
				<div style="text-align: right;">
				<h1 class="topic">Cash On Delivery</h1>
				<p class="para">Eventhough using a credit card is more convinient, some people prefer paying by cash due to various reasons. The cash on delivery service that we offer is the best solution for this. The customers can pay for their products when the products are delivered to your door step, and the delivery person will confirm your purchase through our system.</p></div>

			</div>
			<img src="Images/pngegg.png" style="width : 500px" alt="delivery image" class="image">
		</div>

	</div>
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
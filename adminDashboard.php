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
	<link rel="stylesheet" type="text/css" href="Styles/home.css">
	<link rel="stylesheet" type="text/css" href="Styles/sd.css">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="Scripts/homejs.js"></script>
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
    </div><br>
  <h1 style="background-color:lightcoral; color: mintcream; font-family: georgia;"><center>Admin Dashboard</center></h1><br><br>
  <h2 style="color:rosybrown;"> Seller Requests</h2>
    <table class="tab1" id="tab1">
        	<tr>
        		<th>Request Number</th>
        		<th>First Name</th>
        		<th>Last Name</th>
        		<th>Category</th>
        		<th>Experience</th>
        		<th>Username</th>
        		<th>Mobile</th>
        		<th>Email address</th>
        		<th>status</th>
        	</tr>
        	
     <?php     

          $sql = "SELECT * From requestseller";
        $result=$conn->query($sql); 
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()){ 
                     $reqNo=$row["requestNo"];
                     echo '<tr>
        		                 <td>'.$row["requestNo"].'</td>
        		                 <td>'.$row["firstName"].'</td>
        		                 <td>'.$row["lastName"].'</td>
        		                 <td>'.$row["category"].'</td>
        		                 <td>'.$row["experience"].'</td>
        		                 <td>'.$row["username"].'</td>
        		                 <td>'.$row["mobile"].'</td>
        		                 <td>'.$row["email"].'</td>
        		                 <td>'.$row["status"].'<a href="adminCon.php?req='.$reqNo.'"><button>Change</button></td></tr>';
                           
               }
              }
              else{
                
                echo "Empty";
              }

            
            ?>

          </table><br>

          <h2 style="color:rosybrown;"> Orders</h2>
 
          <table class="tab1" id="tab1">
        	<tr>
        		<th>OrderID</th>
        		<th>Customer ID</th>
        		<th>Total Of Order</th>
        		<th>Item ID</th>
        		<th>Item Name</th>
        		<th>Quantity</th>
        		<th>SubPrice</th>
        	</tr>
        	
     <?php     

          $sql = "SELECT * From orders O,order_items OI Where O.Oid=OI.Oid";
        $result=$conn->query($sql); 
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()){ 
                     echo '<tr>
        		                 <td>'.$row["Oid"].'</td>
        		                 <td>'.$row["CID"].'</td>
        		                 <td>Rs.'.$row["Price"].'</td>
        		                 <td>'.$row["itemId"].'</td>
        		                 <td>'.$row["itemName"].'</td>
        		                 <td>'.$row["quantity"].'</td>
        		                 <td>Rs.'.$row["subPrice"].'</td></tr>';
                           
               }
              }
              else{
                
                echo "Empty";
              }

            
            ?>

          </table><br>


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
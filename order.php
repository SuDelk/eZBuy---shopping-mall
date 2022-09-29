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
	<link rel="stylesheet" type="text/css" href="Styles/order.css">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="Scripts/cart.js"></script>
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

	<div class="small-container cart-page">
    <div id="leftflt">
        <table class="tab1">
        	<tr>
        		<th>Product</th>
        		<th>Quantity</th>
        		<th>Price</th>
        	</tr>
        	
     <?php     
          $total=0;
          $sub=0;
          $sql = "SELECT * From cart";
        $result=$conn->query($sql); 
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()){    
                     echo '<tr>
        		                 <td>
                               <div class="cart-items">
        			                 <div class="cart-info">
        				                 <img src="'.$row["pic"].'">
        				                 <div>
        					                 <p>'.$row["ItemName"].'</p>
        					                 <small class="cart-price">Price : Rs.'.$row["Price"].'</small><br>
        				                 </div>
        			                 </div>
        		                 </td>
        		                 <td>'.$row["quantity"].'</td>';
                             $sub=($row["Price"]*$row["quantity"]);
        		                 echo '<td class="cart-row-sub">Rs.'.$sub.'</td></tr></div>';
                           $total += $sub;
                           
                }
              }
              else{
                echo "<script>alert('No Items in the cart!')</script>";
                header("Refresh = 1; URL = cart.php");
              }
              
            ?>

          </table>
          <br><br>

           <div class="tot-price">
              <table>
                <tr>
                  <td class="cart-row-sub">Sub Total</td>
                  <td>Rs. <?php echo $total;?></td>
                </tr>
                <tr>
                  <td>Shipping Cost</td>
                  <td style="font-style: italic;">Free</td>
                </tr>
                <tr>
                  <td>Total</td>
                  <td>Rs. <?php echo $total;?></td>
                </tr>
              </table><br>
           </div>
           </div>
           <div id="rightflt">
            <center><h1 style="background-color:orange;">Shipping & Billing</h1></center><br><br>

          <?php  
                 $sql = "SELECT * From customer Where uname = '".$_SESSION['username']."'";
                 $result=$conn->query($sql); 
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()){    
                     echo '<form border="1" class="details" action="" >
                             <label ><b>Name:  </b>'.$row["firstName"].' '.$row["lastName"].'</label><br><br>
                             <label ><b>Mobile Number: </b>'.$row["mobile"].'</label><br><br>
                             <label ><b>Address: </b>'.$row["address"].'</label><br><br>
                             <label ><b>Username:  </b>'.$row["uname"].'</label><br><br>
                             <label ><b>Email address: </b>'.$row["email"].'</label><br><br>
                            </form>';
                           
                }
              }
              else{
                echo "<script>alert('No Data!')</script>";
              }
              $conn->close();
            ?>
           <div class="proceed"><center>
           <button class="order1" onclick="window.location.href='payment.php'" >Proceed to pay</button></center>
           </div>

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
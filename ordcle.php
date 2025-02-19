<?php
session_start();
 if(isset($_SESSION['name']))
?>
<html>
    <head>
        <title>Cleaning service booking </title>
    
        <link rel="stylesheet" type="text/css" href="ordsty.css">
     
    </head>
	 
    <body>
	<div class = "navbar">
	<nav>
      <img src="img/HousePrologo.png" class= "logo" alt="">
	  <ul>
	     <li><a href= "hphomepage.html" class= "btn"> Home </a></li>
		 <li><a href= "aboutus.php" class= "btn">About Us</a></li>
		 <li><a href= "sercatog.php" class= "btn"> Lifestyle care Services </a></li>
		 <li><a href= "adminlog.php" class= "btn"> Admin </a></li>
		 <li><a href= "jobview.php" class= "btn"> Join Us ! </a></li>
	     <li><a href = "logout.php" class = "btn"><u style="color: white;height: 5px;">Log-out</u></a></li>
	  </ul>
	
	</nav>
	<div>
	
	<div class = "wrapper">
	
	
    <font style="font-weight:bold;font-size:40px; color: MintCream;"><h1>Place your details and preferences</h1>
	</font>
	
	<form action ="bill.php" method = "POST">
		<?php if(isset($_GET['error'])){?>
    <p class  = "error"> 
      <?php echo $_GET['error']; ?></p>
	  <?php } ?>
		
    <div class = "inpbox">
    <input type="text"  name="name" placeholder="Enter your Name"><br><br>
	</div>

	
	<div class = "inpbox">
    <input type="text" name="email" placeholder=" Enter your Email"><br><br>
	</div>
	
	<div class = "inpbox">
    <input type="textarea" cols="30" rows="10" name="address" placeholder=" Enter your address"><br><br>
	</div>
	
	<input type = "checkbox" name = "ch9" value = "4-6 hrs"> Deep Full House Cleaning of 1BHK @ RS.4500<BR>
	<br>
	<input type = "checkbox" name = "ch10" value = "4-6 hrs"> Deep Full House Cleaning of 2BHK @ RS.5000<BR>
	<br>
	<input type = "checkbox" name = "ch11" value = "4-6 hrs">Deep Full House Cleaning of 3BHK @ RS.6500<BR>
	<br>
	<input type = "checkbox" name = "ch12" value = "1 hr 35 mins"> Intense Bathroom / Kitchen Cleaning for 1 Room @ RS.500<BR>
	<br>
	<input type = "checkbox" name = "ch13" value = "1 hr 35 mins"> Intense Bathroom / Kitchen Cleaning for 2 Rooms @ RS.950<BR>
	<br>
	<input type = "checkbox" name = "ch14" value = "1 hr 35 mins"> Intense Bathroom / Kitchen Cleaning for 3 Rooms @ RS.1400<BR>
	<br>
	<input type = "checkbox" name = "ch15" value = "90 mins">Mini Component Cleaning ( 12 items ) @ RS.3500<BR>
	<br>
	
	<button type="submit" class ="btn"> Book </button>
	</form>
	</div>
	</font>
        
      
    </body>
</html>

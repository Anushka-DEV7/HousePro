<?php
session_start();
 if(isset($_SESSION['name']))
?>
<html>
    <head>
        <title>Plumbing service booking </title>
    
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
	
	<input type = "checkbox" name = "ch16" value = "1-2 hrs"> Basin and Tap Repair @ RS.99<BR>
	<br>
	<input type = "checkbox" name = "ch17" value = "1-2 hrs"> Basin and Tap Cleaning @ RS.200<BR>
	<br>
	<input type = "checkbox" name = "ch18" value = "1-2  hrs"> Basin and Tap Installation @ RS.500<BR>
	<br>
	<input type = "checkbox" name = "ch19" value = "2-3hrs"> Installation 999L Tank @ RS.1000<BR>
	<br>
	<input type = "checkbox" name = "ch20" value = "2-3hrs"> Installation above 999L Tank @ RS.1200<BR>
	<br>
	<input type = "checkbox" name = "ch21" value = "2-3hrs"> Installation Washing Machine Filter @ RS.900<BR>
	<br>
	<input type = "checkbox" name = "ch22" value = "2-3hrs"> Installation Shower Head Filter @ RS.500<BR>
	<br>
	<input type = "checkbox" name = "ch23" value = "2-3hrs"> Installation Taps Filter @ RS.200<BR>
	<br>
	<input type = "checkbox" name = "ch24" value = "2-3hrs"> Water Filters Cleaning @ RS.500<BR>
	<br>
	<input type = "checkbox" name = "ch25" value = "2-3hrs"> Water Tanks Cleaning @ RS.700<BR>
	<br>
	<input type = "checkbox" name = "ch26" value = "3-4hrs"> Bathroom Fitting Installation @ RS.3500<BR>
	<br>
	
	<button type="submit" class ="btn"> Book </button>
	</form>
	</div>
	</font>
        
      
    </body>
</html>

<?php
session_start();
 if(isset($_SESSION['name']))
?>
<html>
    <head>
        <title>Repair / service  service booking </title>
    
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
	
	<input type = "checkbox" name = "ch37" value = "2-3 hrs"> AC Repair / Service @ RS.2000<BR>
	<br>
	<input type = "checkbox" name = "ch38" value = "2-3 hrs"> Gyeser Repair / Service  @ RS.950<BR>
	<br>
	<input type = "checkbox" name = "ch39" value = "2-3 hrs"> Washing Machine Repair / Service  @ RS.700<BR>
	<br>
	<input type = "checkbox" name = "ch40" value = "2-3 hrs"> Laptop Repair / Service @ RS.700<BR>
	<br>
	<input type = "checkbox" name = "ch41" value = "2-3 hrs"> Television Repair / Service @ RS.300<BR>
	<br>
	<input type = "checkbox" name = "ch42" value = "2-3 hrs"> Microwave Repair / Service @ RS.400<BR>
	<br>
	<input type = "checkbox" name = "ch43" value = "2-4 hrs"> Chimney Repair / Service @ RS.900<BR>
	<br>
	<input type = "checkbox" name = "ch44" value = "2-4 hrs"> Refrigerator Repair / Service @ RS.800<BR>
	<br>
	<input type = "checkbox" name = "ch45" value = "2-4 hrs"> Water Purifier Repair / Service @ RS.500<BR>
	<br>
	
	<button type="submit" class ="btn"> Book </button>
	</form>
	</div>
	</font>
        
      
    </body>
</html>

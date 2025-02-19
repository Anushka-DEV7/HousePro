<?php
session_start();
 if(isset($_SESSION['name']))
?>
<html>
    <head>
        <title>Electrician service booking </title>
    
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
	
	<input type = "checkbox" name = "ch27" value = "1 hr"> Switchbox Installation @ RS.230<BR>
	<br>
	<input type = "checkbox" name = "ch28" value = "1 hr"> Switchbox Replacement @ RS.50<BR>
	<br>
	<input type = "checkbox" name = "ch29" value = "1 hr">Wiring(5M) @ RS.90<BR>
	<br>
	<input type = "checkbox" name = "ch30" value = "2-3 hrs">Heavy Appliance (Install) @ RS.3000<BR>
	<br>
	<input type = "checkbox" name = "ch31" value = "2-3 hrs"> Heavy Appliances (Repair) @ RS.2500<BR>
	<br>
	<input type = "checkbox" name = "ch32" value = "2-3 hrs"> Appliances(Install) @ RS.5000<BR>
	<br>
	<input type = "checkbox" name = "ch33" value = "2-3 hrs">Appliances(Uninstalling) @ RS.2000<BR>
	<br>
	
	<button type="submit" class ="btn"> Book </button>
	</form>
	</div>
	</font>
        
      
    </body>
</html>

<?php
session_start();
 if(isset($_SESSION['name']))
?>
<html>
    <head>
        <title>Beauty service booking </title>
    
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
	<div = "check">
	<input type = "checkbox" name = "ch1" value = "60 mins" class = "check"> Deep Tissue Pain Relief Massage for 60 mins @ RS.1440<BR>
	<br>
	<input type = "checkbox" name = "ch2" value = "90 mins"> Deep Tissue Pain Relief Massage for 90 mins @ RS.1480<BR>
	<br>
	<input type = "checkbox" name = "ch3" value = "90 mins"> Stress Relief Swedish Massage for 60 mins @ RS.1200<BR>
	<br>
	<input type = "checkbox" name = "ch4" value = "90 mins"> Stress Relief Swedish Massage for 90 mins @ RS.1260<BR>
	<br>
	<input type = "checkbox" name = "ch5" value = "90 mins"> Hair Spa , Cut and Styling @ RS.1600<BR>
	<br>
	<input type = "checkbox" name = "ch6" value = "90 mins"> Ayurvedic Strengthing Spa @ RS.1200<BR>
	<br>
	<input type = "checkbox" name = "ch7" value = "90 mins"> O3+ Power Brightening Facial @ RS.1050<BR>
	<br>
	<input type = "checkbox" name = "ch8" value = "90 mins"> Elysian Firming Wine Glow Facial @ RS.1200<BR>
	<br>
	</div>
	<button type="submit" class ="btn"> Book </button>
	</form>
	</div>
	</font>
        
      
    </body>
</html>

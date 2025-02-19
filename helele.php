
<html>
    <head>
        <title>Healthcare Service booking </title>
    
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
	
	<input type = "checkbox" name = "ch48" value = "60 mins"> Trail Pilates session @ 1000<BR>
	<br>
	<input type = "checkbox" name = "ch49" value = " 90 mins "> Pilates ( 1 3 Days (P/W ) for 1 Month session @ 9000<BR>
	<br>
	<input type = "checkbox" name = "ch50" value = " 30 mins "> Pilates ( 4 Days (P/W ) for 3 Month session @ 26000<BR>
	<br>
	
	<input type = "checkbox" name = "ch51" value = " 0 mins "> Initial Visit for Physiotherapy Session @ 200 <BR>
	<br>
	
	<input type = "checkbox" name = "ch52" value = " 60 mins "> Yoga Trail   session @ 300<BR>
	<br>
	<input type = "checkbox" name = "ch53" value = " 90 mins "> Cardio Workout ( 12 Classes P/M ) for 1 month session @ 6492 <BR>
	<br>
	<input type = "checkbox" name = "ch54" value = " 90 mins "> Power Yoga ( 12 Classes P/M ) for 1 month session @ 5496 <BR>
	<br>
	<input type = "checkbox" name = "ch55" value = " 90 mins "> Intense Workout ( 12 Classes P/M ) for 1 month session @ 4500 <BR>
	<br>
	
	<input type = "checkbox" name = "ch56" value = " 0 mins "> Initial Visit for Elder Care Session @ 250 <BR>
	<br>
	
	<input type = "checkbox" name = "ch57" value = " 0 mins "> CBC Lab test Session @ 430 <BR>
	<br>
	<input type = "checkbox" name = "ch58" value = " 0 mins "> Liver Function Lab test Session @ 840 <BR>
	<br>
	<input type = "checkbox" name = "ch59" value = " 0 mins "> Thyroid Profile Lab test Session @ 555 <BR>
	<br>
	<input type = "checkbox" name = "ch60" value = " 0 mins "> Diabetes Screening Lab test Session @ 178 <BR>
	<br>
	<input type = "checkbox" name = "ch61" value = " 0 mins "> Covid RT-PCR Lab test Session @ 750 <BR>
	<br>
	<input type = "checkbox" name = "ch62" value = " 0 mins "> Lipid Profile Lab test Session @ 760 <BR>
	<br>
	
	<button type="submit" class ="btn"> Book </button>
	</form>
	</div>
	</font>
        
      
    </body>
</html>

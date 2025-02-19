
<html>
    <head>
        <title>candidate entry</title>
    
        <link rel="stylesheet" type="text/css" href="jobapp.css">
     
    </head>
	 
    <body>
	<div class = "navbar">
	<nav>
      <img src="img/HousePrologo.png" class= "logo" alt="">
	  <br>
	  <ul>
	     <li><a href= "hphomepage.html" class= "btn"> Home </a></li>
		  <li><a href= "aboutus.php" class= "btn"> About us </a></li>
		 <li><a href= "sercatog.php" class= "btn">Lifestyle care Services</a></li>
		  <li><a href= "jobview.php" class= "btn">Career Bullentein ! </a></li>
	  </ul>
	  <div>
	   <a href = "adminlogin.php" class = "btn"><u style="color: white;height: 5px;">Log-out</u></a></li>
	  </div>
	</nav>
	<div>
	
	<div class = "wrapper">
	
	
    <font style="font-weight:bold;font-size:40px; color: MidnightBlue;"><h1>Please place in your details </h1>
	</font>
	
	<form action ="jobapplyme.php" method = "POST">
		<?php if(isset($_GET['error'])){?>
    <p class  = "error"> 
      <?php echo $_GET['error']; ?></p>
	  <?php } ?>
		
    <div class = "inpbox">
    <input type="text"  name="name" placeholder="please enter the name"><br><br>
	</div>
  
    <div class = "inpbox">
    <input type="text" name="email" placeholder=" please enter the email "><br><br>
	</div>
	
	<div class = "inpbox">
    <input type="text" name="mobileno" placeholder= "Please enter the contact number"><br><br>
	</div>
	
	<div class = "inpbox">
    <input type="text" name="applypost" placeholder=" please enter the applied post"><br><br>
	</div>
	
	<div class = "inpbox">
    <input type="text" name="highestqua" placeholder=" please enter the highest qualification"><br><br>
	</div>
	
	
	<button type="submit" class ="btn"> SUBMIT </button>
	</div>
	</form
	
	</font>
        
      
    </body>
</html>
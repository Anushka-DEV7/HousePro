<html>
    <head>
        <title>Loginemp</title>
    
        <link rel="stylesheet" type="text/css" href="style2.css">
     
    </head>
	 
    <body>
	<div class = "navbar">
	<nav>
      <img src="img/HousePrologo.png" class= "logo" alt="">
	  <ul>
	     <li><a href= "hphomepage.html" class= "btn"> Home </a></li>
		 <li><a href= "aboutus.php" class= "btn">About Us</a></li>
		 <li><a href= "sercatog2.php" class= "btn">Lifestylecare Services </a></li>
		  <li><a href= "adminlog.php" class= "btn"> Admin </a></li>
		 <li><a href= "jobview.php" class= "btn"> Join Us ! </a></li>
		 <li><a href= "custsignin.php" class= "btnn"> Register </a></li>
	  </ul>
	  
	</nav>
	<div>
	
	<div class = "wrapper">
	
	
    <font style="font-weight:bold;font-size:40px; color: MintCream;"><h1>LOGIN</h1>
	</font>
	
	<form action ="login.php" method = "post">
		<?php if(isset($_GET['error'])){?>
    <p class  = "error"> 
      <?php echo $_GET['error']; ?></p>
	  <?php } ?>
		
    <div class = "inpbox">
    <input type="text"  name="name" placeholder="Enter your Name"><br><br>
	</div>

	
	<div class = "inpbox">
    <input type="password" name="password" placeholder=" Enter your Password"><br><br>
	</div>
	
	<button type="submit" class ="btn"> LOGIN </button>
	
    <div class ="reglink">
     <p><a href = "custsignin.php"> New User ? </a></p>
	 <br>
	 <p><a href = "aboutus.php"> Explore More!</a></p>
	 </div>	
	
	</form>
	</div>
	</font>
        
      
    </body>
</html>

<html>
    <head>
        <title>LoginAdmin</title>
    
        <link rel="stylesheet" type="text/css" href="adminsty3.css">
     
    </head>
	 
    <body>
	<div class = "navbar">
	<nav>
      <img src="img/HousePrologo.png" class= "logo" alt="">
	  <ul>
	     <li><a href= "hphomepage.html" class= "btn"> Home </a></li>
		 <li><a href= "aboutus.php" class= "btn"> About us </a></li>
		 <li><a href= "jobview.php" class= "btn"> Join Us ! </a></li>
		 <li><a href= "jobview.php" class= "btn"> Career Bulletein !</a></li>
		
	  </ul>
	  <div>
	   
	  </div>
	</nav>
	<div>
	
	<div class = "wrapper">
	
	
    <font style="font-weight:bold;font-size:40px; color: MintCream;"><h1>ADMIN LOGIN</h1>
	</font>
	
	<form action ="adminlogin.php" method = "post">
		<?php if(isset($_GET['error'])){?>
    <p class  = "error"> 
      <?php echo $_GET['error']; ?></p>
	  <?php } ?>
		
    <div class = "inpbox">
    <input type="text"  name="name" placeholder="Admin Name"><br><br>
	</div>

	
	<div class = "inpbox">
    <input type="password" name="password" placeholder=" Admin Password"><br><br>
	</div>
	
	<button type="submit" class ="btn"> LOGIN </button>
	

	
	</form>
	</div>
	</font>
        
      
    </body>
</html>

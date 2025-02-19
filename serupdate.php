<?php
session_start();
 if(isset($_SESSION['name']))
?>
<html>
    <head>
        <title>Service Update </title>
    
        <link rel="stylesheet" type="text/css" href="adminsty.css">
     
    </head>
	 
    <body>
	<div class = "navbar">
	<nav>
      <img src="img/HousePrologo.png" class= "logo" alt="">
	  <br>
	  <ul>
	     <li><a href= "hphomepage.html" class= "btn"> Home </a></li>
		 <li><a href= "seradd.php" class= "btn">Service Addition</a></li>
		 <li><a href= "serdelete.php" class= "btn">Service Deletion</a></li>
	  </ul>
	  <div>
	   <a href = "adminlogin.php" class = "btn"><u style="color: white;height: 5px;">Log-out</u></a></li>
	  </div>
	</nav>
	<div>
	
	<div class = "wrapper">
	
	
    <font style="font-weight:bold;font-size:40px; color: MintCream;"><h1>Place the details of Services</h1>
	</font>
	
	<form action ="serfindme.php" method = "POST">
		<?php if(isset($_GET['error'])){?>
    <p class  = "error"> 
      <?php echo $_GET['error']; ?></p>
	  <?php } ?>
		
    <div class = "inpbox">
    <input type="text"  name="service_name" placeholder="Enter Name of Service"><br><br>
	</div>
  
    <div class = "inpbox">
    <input type="text" name="service_duration" placeholder= "enter the Service Duration"><br><br>
	</div>
	
	<button type="submit" class ="btn"> UPDATE </button>
	</form>
	</div>
	</font>
        
      
    </body>
</html>
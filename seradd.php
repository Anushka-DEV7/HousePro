<?php
session_start();
 if(isset($_SESSION['name']))
?>
<html>
    <head>
        <title>Service Addition </title>
    
        <link rel="stylesheet" type="text/css" href="adminsty.css">
     
    </head>
	 
    <body>
	<div class = "navbar">
	<nav>
      <img src="img/HousePrologo.png" class= "logo" alt="">
	  <br>
	  <ul>
	     <li><a href= "hphomepage.html" class= "btn"> Home </a></li>
		 <li><a href= "serdelete.php" class= "btn"> Service Deletion </a></li>
		 <li><a href= "serfindme.php" class= "btn"> Service Updation </a></li>
		  <li><a href= "jobadd.php" class= "btn"> New Job Entry </a></li>
	  </ul>
	  <div>
	   <a href = "logout.php" class = "btn"><u style="color: white;height: 5px;">Log-out</u></a></li>
	  </div>
	</nav>
	<div>
	
	<div class = "wrapper">
	
	
    <font style="font-weight:bold;font-size:40px; color: MintCream;"><h1>Place the details of Services</h1>
	</font>
	
	<form action ="seraddme.php" method = "POST">
		<?php if(isset($_GET['error'])){?>
    <p class  = "error"> 
      <?php echo $_GET['error']; ?></p>
	  <?php } ?>
		
    <div class = "inpbox">
    <input type="text"  name="service_name" placeholder="Enter Name of Service"><br><br>
	</div>
  
    <div class = "inpbox">
    <input type="textarea" cols="30" rows="10" name="service_decs" placeholder=" describe the Service "><br><br>
	</div>
	
	<div class = "inpbox">
    <input type="text" name="service_duration" placeholder= "enter the Service Duration"><br><br>
	</div>
	
	<div class = "inpbox">
    <input type="text" name="service_cost" placeholder=" Enter service cost"><br><br>
	</div>
	
	<div class = "inpbox">
    <input type="text" name="service_cate" placeholder=" Enter service category"><br><br>
	</div>
	
	
	<button type="submit" class ="btn"> ADD </button>
	</form
	</div>
	</font>
        
      
    </body>
</html>
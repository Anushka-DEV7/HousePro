<html>
    <head>
        <link rel="stylesheet" type="text/css" href="aboutus.css">
    </head>
 <body>
	<div class="divv2">
      <nav>
      <img src="img/HousePrologo.png" class= "logo" alt="">
	  <ul>
	     <li><a href= "hphomepage.html" class= "btn"> Home </a></li>
		 <li><a href= "aboutus.php" class= "btn"> About Us </a></li>
		 <li><a href= "sercatog2.php" class= "btn"> Services Cataloug </a></li>
		 
	  </ul>
	  <div>
	   <a href= "custsignup.php" class= "btn"> Log in </a>
	  </div>
	</nav>
    </center>
    <br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 


            <center>
                <font style="color: white ; font-family:'Lucida Handwriting'; font-size: 35px;font-weight: 100;"><b>
			
<?php
			  $name = $_POST['name'];
			  $email = $_POST['email'];
			  $password = $_POST['password'];
			  $phone = $_POST['phone'];
			  
			  
			  
			  if(!empty($name)||!empty($email)||!empty($password)||!empty($phone))
			  {
				  $host = "localhost";
				  $dbUserName = "root";
				  $dbPassword = "root";
				  $dbname = "housepro";
				  
				$conns = new mysqli($host ,$dbUserName, $dbPassword , $dbname);
				
				if(mysqli_connect_error())
				{
					die('Connect Error(' . mysqli_connect_errno().')'. mysqli_connect_error());
				}
				else
				{
					
					$INSERTT = "INSERT Into custdetails(name, email, password, phone) Values (?, ?, ?, ? )";
					$stmtr = $conns->prepare($INSERTT);
					$stmtr -> bind_param("sssi", $name, $email, $password, $phone);
					$stmtr -> execute();
					echo 'welcome to HousePro Family, to enjoy booking the quality service please login again';
					
				}
			 $stmtr->close();
			 $conns->close();
					
		      }
			  else
			  {
				  echo "all feilds are required";
				  die();
			  }
	
			  ?>
</b></u></font>
</center>
</body>
</html>
    
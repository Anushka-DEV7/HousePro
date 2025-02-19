<html>
    <head>
        <link rel="stylesheet" type="text/css" href="adminsty.css">
    </head>
    <body>
	<div class="divv2">
      <nav>
      <img src="img/HousePrologo.png" class= "logo" alt="">
	  <ul>
	      <li><a href= "hphomepage.html" class= "btn"> Home </a></li>
		  <li><a href= "aboutus.php" class= "btn"> About us </a></li>
		 <li><a href= "sercatog.php" class= "btn">Lifestyle care Services</a></li>
		 <li><a href= "adminlog.php" class= "btn">Admin </a></li>
		<li class = "navli"><a href = "logout.php" class = "btn"><u style="color: white;height: 5px;">Log-out</u></a></li>
	  </ul>
	  <div>
	  
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
			  $can_name = $_POST['name'];
			  $can_email = $_POST['email'];
			  $can_mobno = $_POST['mobileno'];
			  $can_applypost = $_POST['applypost'];
			  $can_qua = $_POST['highestqua'];
			  
			  
			  
			  if(!empty($can_name)||!empty($can_email )||!empty($can_mobno)||!empty($can_applypost)||!empty($can_qua))
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
				
					$INS = "INSERT Into jobcandidate(can_name , can_email , can_mobno , can_applypost , can_qua) values(? , ? , ? , ? , ?)";
					$stmts = $conns->prepare($INS);
					$stmts -> bind_param("ssiss" , $can_name , $can_email , $can_mobno , $can_applypost , $can_qua);
					$stmts -> execute();
					echo ' Your details are Registered , we will contact you soon for futher steps! ';
					
				}
			 $stmts->close();
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
</div>
</body>
</html>
    
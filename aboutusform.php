<html>
    <head>
        <link rel="stylesheet" type="text/css" href="billsty.css">
    </head>
    <body>
	<div class="divv2">
      <nav>
      <img src="img/HousePrologo.png" class= "logo" alt="">
	  <ul>
	     <li><a href= "hphomepage.html" class= "btn"> Home </a></li>
		 <li><a href= "sercatog2.php" class= "btn"> Services Cataloug </a></li>
		 
	  </ul>
	  <div>
	   <a href= "custsignup.php" class= "btn"> Log in </a>
	   
	   
	   <a href= "custsignin.php" class= "btn"> Register </a>
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
			  $Cname = $_POST['custname'];
			  $Cemail = $_POST['custemail'];
			  $comments = $_POST['comments'];
			  
			  if(!empty($Cname)||!empty($Cemail)||!empty($comments))
			  {
				  $host = "localhost";
				  $dbUserName = "root";
				  $dbPassword = "root";
				  $dbname = "housepro";
				  
				$conn = new mysqli($host ,$dbUserName, $dbPassword , $dbname);
				
				if(mysqli_connect_error())
				{
					die('Connect Error(' . mysqli_connect_errno().')'. mysqli_connect_error());
				}
				else
				{
					
					$INSERT = "INSERT Into feedbackk(name,email,comments) values(?,? ,?)";
					$stmt = $conn->prepare($INSERT);
					$stmt -> bind_param("sss",$Cname,$Cemail,$comments);
					$stmt -> execute();
					echo 'Thank you! Your feedback has been successfully sent';
					
				}
			 $stmt->close();
			 $conn->close();
					
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
    
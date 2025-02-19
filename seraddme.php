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
		 <li><a href= "serdelete.php" class= "btn"> Service Deletion </a></li>
		 <li><a href= "serfindme.php" class= "btn"> Service Updation </a></li>
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
			  $ser_name = $_POST['service_name'];
			  $ser_decs = $_POST['service_decs'];
			  $ser_dur = $_POST['service_duration'];
			  $ser_cost = $_POST['service_cost'];
			  $ser_cate = $_POST['service_cate'];
			  
			  
			  
			  if(!empty($ser_name)||!empty($ser_decs)||!empty($ser_dur)||!empty($ser_cost)||!empty($ser_cate))
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
					
					$INSERTS = "INSERT Into services(service_name , service_decs , service_duration , service_cost , service_cate) values(? , ? , ? , ? , ?)";
					$stmts = $conns->prepare($INSERTS);
					$stmts -> bind_param("sssis" , $ser_name , $ser_decs , $ser_dur , $ser_cost , $ser_cate);
					$stmts -> execute();
					echo ' New Services are added';
					
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
    
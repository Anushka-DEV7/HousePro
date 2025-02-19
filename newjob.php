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
			  $job_name = $_POST['jobname'];
			  $job_decs = $_POST['jobdecs'];
			  $exp_sal = $_POST['expsal'];
			  
			  
			  
			  
			  if(!empty($job_name)||!empty($job_decs)||!empty($exp_sal))6 
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
					
					$INSERTS = "INSERT Into jobs(job_name , job_decs , exp_salary ) values(? , ? , ? )";
					$stmts = $conns->prepare($INSERTS);
					$stmts -> bind_param("ssi" , $job_name , $job_decs , $exp_sal);
					$stmts -> execute();
					echo ' New job entries are added';
					
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
    
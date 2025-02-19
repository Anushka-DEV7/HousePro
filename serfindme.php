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
		 <li><a href= "serfindme.php" class= "btn"> Service Addition</a></li>
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


            <center>
                <font style="color: white ; font-family:'Lucida Handwriting'; font-size: 35px;font-weight: 100;"><b>
			
<?php
			  $ser_name = $_POST['service_name'];
			  $ser_dur = $_POST['service_duration'];
			  
			  
			  
			  
			  if(!empty($ser_name)||!empty($ser_dur))
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
					
					$Sel = "select * from services where service_name = '$ser_name' and service_duration = '$ser_dur' ";
					$result = $conns->query($Sel);
					$row = mysqli_num_rows($result);
					if(!$result)
					{
					 die("no recorD found ".$conns->error);
					}
					?>
					<table>
					<?php
					while($row = mysqli_fetch_assoc($result))
					{
					   ?>
					    
						<tr>
						<td><?php  echo $result['service_id'];?></td>
						<br><br>
						
						<td><?php  echo $result['service_name'];?></td>
						<br><br>
						
						<td><?php  echo $result['service_decs'];?></td>
						<br><br>
						
						<td><?php  echo $result['service_duration'];?></td>
						<br><br>
						
						<td><?php  echo $result['service_cost'];?></td>
						<br><br>
						
						</tr>
                    <table>
					<?php
	
					}
				
			 $result->close();
			 $conns->close();
					
		      }
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
    
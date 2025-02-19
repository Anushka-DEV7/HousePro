<html>
<head>
<link rel="stylesheet" type="text/css" href="jobsv2.css">
<title> Job Opportuity </title>
</head>
<body>
<div class="divv2">
      <nav>
      <img src="img/HousePrologo.png" class= "logo" alt="">
	  <ul>
	     <li><a href= "hphomepage.html" class= "btn"> Home </a></li>
		  <li><a href= "aboutus.php" class= "btn"> About us </a></li>
		 <li><a href= "sercatog.php" class= "btn">Service Cataloug </a></li>
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
<?php
session_start();
include "inv.php";
$query = "select * from jobs";
 $result = mysqli_query($co , $query);
   ?>
   <div class = "table">
	  <table>
	    <tr>
		  <th>job Id</th>
		  <th>job name</th>
		  <th>job description </th>
		  <th>expected salary</th>
		  <th>click here </th>
		  
		 </tr>
		
	
	<?php
    while($row = mysqli_fetch_assoc($result))
         {
		  ?>
		  <br>
		  <p>
		     <tr>
		     <td><?php echo $row['job_id'] ?><br> </td>
			 <td><?php echo $row['job_name'] ?><\n> </td>
			 <td><?php echo $row['job_decs'] ?><br> </td>
			 <td><?php echo $row['exp_salary'] ?><br> </td>
			
			 <td>
			 <a href= "jobapply.php" class= "btnn"> Apply now </a></li>
			  </td>
			 </tr>
			  
		   <?php
			}
			?>
		  </tr>
		 </div>
	</body>
</html>	
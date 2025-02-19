<?php
session_start();
 if(isset($_SESSION['name']))
?>
<html>
<head>
<title> Repair and Servicing services page</title>
<link rel="stylesheet" href = "STY3.CSS">
<link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
<nav class = "navv">
      <img src="img/HousePrologo.png" class= "logo1" alt="">
	  <ul>
	     <li class = "navli"><a href= "hphomepage.html" class= "btn1"> Home </a></li>
		 <li class = "navli"><a href= "aboutus.php" class= "btn1"> About Us </a></li>
		 <li class = "navli"><a href= "sercatog.php" class= "btn1"> Lifestyle care Services </a></li>
		 <li class = "navli"><a href= "adminlog.php" class= "btn1"> Admin </a></li>
		 <li class = "navli"><a href= "jobview.php" class= "btn1"> Join Us ! </a></li>
		 <li class =  "navli"><a href= "ordres.php" class ="btn1">BOOK NOW </a></li>
	     <li class = "navli"><a href = "logout.php" class = "btn1"><u style="color: white;height: 5px;">Log-out</u></a></li>
		 
	  </ul>
</nav>
<center>
<font style="color: Misty ; font-family:'Lucida Handwriting'; font-size: 35px;font-weight: 100; margin-top: 10px; margin-right:10px;align: left;  "> <b>Hello ,<?php echo $_SESSION['name']; ?> 
	 </b></font>
</center>
<div class="container">

<div class="services">
        <h1><span> Repair and Servicing </span> Services  </h1>
		<p> We Repair , So you can live with Ease ! </p>
 </div>
  <?php

include "inv.php";
$query = "select * from services where service_cate = 'Repair and Servicing' ";
 $result = mysqli_query($co , $query);
?>
 <div class="row">
<?php	  
	while($row = mysqli_fetch_assoc($result))
	 {	 
    ?>
   
   <div class ="col-md-4">
     <div class ="service-box">
	
	  <h3><span><?php echo $row['service_name'] ?></span></h3>
	  <br>
	  <img src="img/ac.jpeg" class= "logo0" alt="">
	  <br>
	    <?php echo $row['service_decs'] ?>
	  <p> 
	  <br>
	  <?php echo $row['service_cost'] ?> 
	  <br>
	   <?php echo $row['service_duration'] ?>
	   <br>
	   <br>
	  </p>
	  
	 </div>
	 </div>
	 <?php
    }
    ?>
 </div>
 <br>
 </div>
 <br>
 <br>
 <br>
 <br>
 <br>
</body>
</html> 
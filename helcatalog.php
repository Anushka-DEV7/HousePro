
<html>
<head>
<title> Healthcare services page</title>
<link rel="stylesheet" href = "hel1.CSS">
<link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
<nav class = "navv">
      <img src="img/HousePrologo.png" class= "logo1" alt="">
	  <ul>
	     <li class = "navli"><a href= "hphomepage.html" class= "btn1"> Home </a></li>
		 <li class = "navli"><a href= "aboutus.php" class= "btn1"> About Us </a></li>
		 <li class = "navli"><a href= "sercatog.php" class= "btn1"> Home / self care  </a></li>
		 <li class =  "navli"><a href= "helele.php" class ="btn1">BOOK NOW </a></li>
	     <li class = "navli"><a href = "logout.php" class = "btn1"><u style="color: white;height: 5px;">Log-out</u></a></li>
		 
		 
	  </ul>
</nav>
<?php
session_start();
include "inv.php";
$query = "select * from helservices";
 $result = mysqli_query($co , $query);
?>
<center>
<font style="color: Misty ; font-family:'Lucida Handwriting'; font-size: 35px;font-weight: 100; margin-top: 10px; margin-right:10px;align: left;  "> <b>Hello
	 </b></font>
</center>
<div class="container">

<div class="services">
        <h1><span> Healthcare </span> Services  </h1>
		<p> Healthcare , Done Right ! </p>
 </div>
 <div class="row">
 
  <?php	  
	while($row = mysqli_fetch_assoc($result))
	 {	 
    ?>
   <div class ="col-md-4">
     <div class ="service-box">
	<h3><span><?php echo $row['ser_name'] ?> </span> Service </h3>
	  <br>
	 <img src= "img/health1.jpg " class= "logo0" alt="">
	  <br>
	  <br> 
	  <p> 
	   <?php echo $row['ser_desc'] ?>   
	  <BR>    
	  <br>
	   <?php echo $row['ser_rate'] ?> 
	  <br>
	  <br>
	  <?php echo $row['ser_duration'] ?> 
	   </p>
	 </div>
   </div>
   <br>
   <?php
    }
    
	?>
</div>
</div>
 <br>
 <br>
 <br>
 <br>
 <br>
</body>
</html> 
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
		 <li><a href= "serdelete.php" class= "btn"> Service Addition </a></li>
		 <li><a href= "serfindme.php" class= "btn"> Service Updation </a></li>
		<li class = "navli"><a href = "adminlog.php" class = "btn"><u style="color: white;height: 5px;">Log-out</u></a></li>
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
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "housepro";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}

$ser_name = $_POST['service_name'];
$ser_cost = $_POST['service_cost'];
$ser_cate = $_POST['service_cate'];


$sql = "DELETE FROM services WHERE service_name = '$ser_name' AND service_cost = '$ser_cost' AND service_cate = '$ser_cate' ";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
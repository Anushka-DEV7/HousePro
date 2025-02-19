<?php
session_start();
include "db_con.php";
if(isset($_POST['name']) && isset($_POST['password']))
{
   function Validate($data)
   {
	 return $data;
	}
}

$name = Validate($_POST['name']);
$password = Validate($_POST['password']);

if(empty($name))
{
 header ("Location : custsignup.php?error=name is required");
 exit();
}
else if(empty($password))
{
 header ("Location : custsignup.php? error=password is required");
 exit();
}

$sql = "SELECT * FROM custdetails WHERE name = '$name' AND password = '$password'";

$result = mysqli_query($conn,$sql);
 
if(mysqli_num_rows($result) === 1)
{
$row = mysqli_fetch_assoc($result);
    if($row['name'] === $name && $row['password'] === $password )
	{
		echo " LOGIN SUCCESSFULL";
		$_SESSION['name'] = $row['name'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['phone'] = $row['phone'];
		header("Location: sercatog.php");
		exit();
	}

	else
	{
	  header("Location: custsignup.php?error= Incorrect crendentials");
	  exit();
	}
}
else
{
  header("Location: custsignup.php");
  exit();
}
	
    	

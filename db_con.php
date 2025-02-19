<?php
$host = "localhost";
$dbUserName = "root";
$dbPassword = "root";
$dbname = "housepro";

$conn = new mysqli($host ,$dbUserName, $dbPassword , $dbname);
if(!$conn)
{
	echo "connection failed";
}
?>
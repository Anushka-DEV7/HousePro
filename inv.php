<?php
$host = "localhost";
$dbUserName = "root";
$dbPassword = "root";
$dbname = "housepro";

$co = new mysqli($host ,$dbUserName, $dbPassword , $dbname);
if(!$co)
{
	echo "connection failed";
}

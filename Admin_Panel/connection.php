<?php
$servername="localhost:3306";
$username="root";
$password="";
$db_name="about_us_database";

$connection=mysqli_connect($servername,$username,$password,$db_name);
if(!$connection)
{
	die("Connection failed:".mysqli_connect_error());
}

?>
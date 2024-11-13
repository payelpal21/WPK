
<?php 


$hostname = "localhost";  
$user ="root";
$pass = "";
$dbname ="wpk";


$link = mysqli_connect($hostname,$user,$pass,$dbname);

if(!$link)
{
	die("connection failed ". mysqli_connect_error());
}
else
{
	
}











?>
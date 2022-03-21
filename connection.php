<?php
$host="localhost";
$user="root";
$pass="";
$db="abbank";
$conn=mysqli_connect($host,$user,$pass,$db);
if($conn)
{
	echo "Connection Laka";
}
else
{
	echo "connection fail";
}


?>

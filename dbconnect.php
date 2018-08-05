<?php
$hostname="localhost";
$username ="root";
$password="";
$dbname="mcqdb";
$dbhandle = mysqli_connect($hostname,$username,$password,$dbname);
$select = mysqli_select_db($dbhandle,$dbname);
if (mysqli_connect_errno()) {
	printf("Connection failed : %s",mysqli_connect_errno());
	exit;
}
?>
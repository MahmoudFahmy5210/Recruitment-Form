<?php
$servername="localhost";
$username="root";
$dbpassword="";
$dbname="registers";
$conn=mysqli_connect($servername,$username,$dbpassword,$dbname);
if(!$conn){
die('Connection Error'.mysqli_connect_error());
}
?>
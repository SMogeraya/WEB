
<?php

$info="";

require('connection.php');
require('saukya.php');

$id=$_GET['id'];
$query = "delete  from regi where Phone=$id";
$result= mysqli_query($con,$query);
header("location:admin.php");

?>
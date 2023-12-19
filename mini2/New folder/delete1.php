<?php

include("conn.php");
if(isset($_GET['id']))
$id=$_GET['id'];
$sqlii="delete from admindb where Phone=$id";
$res=mysqli_query($con,$sqlii);
header("location:ad.php");
?>
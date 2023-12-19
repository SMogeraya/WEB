<?php
include("connect.php");
$id=$_GET['id'];
$query="delete from admindb where Phone=$id";
$result=mysqli_query($con,$query);

header("location:admin.php");
?>
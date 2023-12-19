<?php
$con=mysqli_connect("localhost","root","","Sauuu");
if(mysqli_connect_errno())
{
    echo "Connection Failed".mysqli_connect_errno();
    exit;
}

if(isset($_POST['Submit']))
{
    $name=$_POST['name'];
    $ph=$_POST['Phone'];
    $email=$_POST['Email'];
    $pwd=$_POST['Password'];

$sql="INSERT INTO admindb(Email,Password,Name,Phone) VALUES('$email', '$pwd','$name',' $ph')";
$res = mysqli_query($con, $sql);

if($res){
    echo"Sucess";
    header("Location:admin.php");
}}


?>
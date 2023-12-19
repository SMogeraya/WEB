<?php

$con=mysqli_connect("localhost","root","","Sauuu");
if(mysqli_connect_errno())
{
    echo "unsuccesssful".mysqli_connect_errno();
    exit;
}
if(isset($_POST['Submit']))
{

    $name=$_POST['name'];
    $pwd=$_POST['Password'];
    $email=$_POST['Email'];
    $ph=$_POST['Phone'];
    $sql="INSERT INTO admindb(Email,Password,Name,Phone) VALUES ('$email','$pwd',' $name',' $ph')";
    $res=mysqli_query($con,$sql);
echo"success";
    header("location:ad.php");

}
?>
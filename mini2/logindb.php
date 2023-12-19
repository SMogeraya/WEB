<?php
session_start();
include("connection.php");


if(isset($_POST['submit']))
{
    $usemail=$_POST['mail'];
    $uspwd=$_POST['pass'];
  

    $sql="select * from regi where Email='$usemail' and Password='$uspwd'";

    $res=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
    $Name=$row['Name'];
    $_SESSION['uname']=$Name;

    $count=mysqli_num_rows($res);
    if($count==1)
    {
        if(substr($uspwd,0,6)=="admin/")
        {
            header("Location:admin.php");
        }
        else{
            header("Location:welcome.php");
        }
        
    }
    else
    {
        echo'<script>
        window.location.href="loginact.php";
        alert("Login failed\n Inavalid UserEmail or Password");
        </script>';
    }

}

?>
<?php
$con=mysqli_connect("localhost","root","","Sauuu");
global $info;
if(mysqli_connect_errno())
{
    echo "Failed to connect".mysqli_connect_error();
    exit();
}

if(isset($_POST["submit"]))
{
    $uemail=$_POST["mail"];
    $upass=$_POST["pass"];
    $uname=$_POST["usname"];
    $umob=$_POST["mob"];

    $query="INSERT INTO regi(Email,Password,Name,Phone) VALUES('$uemail','$upass','$uname','$umob')";
    $res = mysqli_query($con, $query);


if($res)
{
    echo'<script>
    window.location.href="loginact.php";
     alert("Registered successfully!!!\n Login To Continue");
    </script>';
   }
else
{
    header("Location:signupact.php");
$info="<span style=/'color:red/';>Not Registered </span>";
}
return $info;

}

?>

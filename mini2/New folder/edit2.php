<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
  .cont{
    border:2px solid black;
    width: 40%;
    display: flex;
    margin: auto;
    margin-top: 200px;
    padding: 20px;
  }
   </style>
<?php
$id="";
include("conn.php");
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sqli="SELECT * FROM admindb";
$res=mysqli_query($con,$sqli);
$row=mysqli_fetch_array($res);

$name=$row['Name'];
$pwd=$row['Password'];
}
if(isset($_POST['Update']))
{
    $name=$_POST['name'];
    $pwd=$_POST['Password'];

    $sqlii="Update admindb set Name='$name',Password='$pwd' where Phone='$id'";
    $res1=mysqli_query($con,$sqlii);
    header("location:ad.php");
}
?>
</head>

<body>
    <div class="cont">
   <form action="#" method="post">
    <label>
        Enter Your name      <input type="text" name="name" value="<?php  echo $name ?>">
    </label>
    <br>
    <label>
        Enter Your Password<input type="password" name="Password" value="<?php  echo $pwd ?>">
    </label>
    <div>
    <button type="submit" value="Submit" name="Update">Update</button>
    <button type="cancel" value="cancel" name="Cancel">Cancel</button></div>
   </form>
</div>
</body>
</html>
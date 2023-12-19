
<!DOCTYPE html>
<html lang="en">
<?php
include('connect.php');
$id="";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="select * from admindb where Phone=$id";
    $res=mysqli_query($con,$query);
    $row=mysqli_fetch_array($res);

    $name=$row['Name'];
    $pwd=$row['Password'];
}
if(isset($_POST['Update']))
{
$name=$_POST['name'];
$pwd=$_POST['Password'];

$query="update admindb set Name='$name', Password='$pwd' where Phone='$id'";
$res=mysqli_query($con,$query);
if($res)
{ echo "hiiie";
header("location:admin.php");

}
else{
    echo "bye";
}
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin: 10px;
        }
        .form{
            border: 2px solid black;
            margin: auto;
            padding: 10px;
            width: 35%;
            display: flex;
            flex-direction: column;
        }
        body{
            margin-top: 188px;
        }
    </style>
</head>
<body>
    
    <div class="form">
    <form action="#" method="post">

        <label>
            Enter Your name      <input type="text" name="name" value="<?php echo $name?>">
        </label>
        <br>
       
        <label>
            Enter Your Password<input type="password" value="<?php echo $pwd?>" name="Password">
        </label>
        <div>
        <button  value="Update" name="Update">Update</button>
        <button type="cancel" value="cancel" name="Cancel">Cancel</button>
    </div>
    </form>
</div>
</body>
</html>
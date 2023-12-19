<!-- <html>

<head>
<title>form</title>
<link href="saukya.css" rel="stylesheet" type="text/css">
<script src="saukya.js"></script>
<style>
    .signup,.signup:hover{
        background-color: rgb(119, 29, 29);
    padding: 20px;
    border-bottom: solid rgb(252, 251, 251) 2px;
}
.login{
    background-color: rgb(213, 62, 62);
}
.login:hover{
    background-color: rgb(178, 35, 35);
}
</style>
</head>
<body>
     -->
     <html>
     <?php
$info="";
require('connection.php');
$mob="";
    $usname="";
    $pass="";
    $id="";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = "select * from regi where Phone=$id";
    $result= mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);

    
    $name=$row['Name'];
    $pass=$row['Password'];
    
}

if(isset($_POST['update'])){


    $name=$_POST["usname"];
    $pwd=$_POST["pass"];


    $query="update regi set Name='$name',Password='$pwd' where Phone='$id'";
    $result = mysqli_query($con, $query);

    header("location:admin.php");

}

?>
<head>
<title>form</title>
<link href="saukya.css" rel="stylesheet" type="text/css">
<script src="saukya.js"></script>
<style>
    .login,.login:hover{
        background-color: rgb(119, 29, 29);
    padding: 20px;
   
  
}
.log{
    float:right;
    width:90px;
    height:30px;
    margin-top:15px;
    background-color: rgb(256,256,256);
    color:black;
    margin-right:5px;
}
.signup,.signup:hover{
        background-color: rgb(119, 29, 29);
    padding: 20px;
    border-bottom: solid rgb(252, 251, 251) 2px;
}
.login{
    background-color: rgb(213, 62, 62);
}
.login:hover{
    background-color: rgb(178, 35, 35);}
.topbar{
    width:100%;
    height: 60px;
    background-color: rgba(120, 43, 15, 0.795);
    border:2px solid black;
    display:flex;
    flex-direction: row;
    flex-wrap: nowrap;
    margin-top:0px;
   justify-content:space-between;
   
}
.icons
{text-align:center;
    width:auto;
    height:30px;
    background-color: rgb(256,256,256);
margin:8px;
border:2px solid black;
margin-left:8px;

}
.icons:hover{
    color:white;
    background-color: rgba(120, 43, 15, 0.895);
    border:2px solid white;
}
.topa:hover{
     color:white;  
} 
.topicons{
    margin-top:0px;
    display:flex;
    flex-direction:row;
    justify-content:start;
}
.topicons li{
    font-size:20px;
}
.topa{
    font-family:impact;
    color:black;
}
p{
    display:none;
    margin:0;
}
</style>
<?php
include("connection.php");
?>

</head>
<body>
<div class="topbar">
        <ul class="topicons">
            <li class="icons"><a class="topa"href="home.php">HOME</a></li>
            <li class="icons"><a class="topa"href="">INFO</a></li>
            <li class="icons"><a class="topa"href="home.php#aabt">ABOUT  US</a></li>
            <li class="icons"><a class="topa"href="home.php#fcon">Contact</a></li>
            
            </ul>
            
</div>

    <h1 class="heading">NATABHARANA</h1>
        
                
    <div class="container">
       <ul>
        <a href="signupact.php" onclick="signup()"><li class="signup">SIGN UP</li></a>
        <a href="loginact.php" onclick="login()"><li class="login">LOGIN</li></a>
        </ul>
<form  action="#" method="post" id="fsignup">
    
    
<h1> Registration form</h1>


<input type="hidden" name="mail" size="20" id="mail" value="<?php echo $id ?>" maxlength="20" required>



<label for="pass">Enter your password</label>
<input type="password" name="pass" size="10" id="pass" maxlength="20" value="<?php echo $pass ?>" required>
<span style=color:white><p id="passerror"></p></span>


<label for="usname">Enter full name </label>
<input type="text" name="usname" id="usname" value="<?php echo $name ?>" required>
<p id="usnameerror"></p>



<br>
<div class="btn">
    <button class="submit"type="submit" name="update" value="Register">Update</button>
    <button type="reset" value="cancel"class="cancel">Cancel</button></div>
</form>


</div>
</body>
</html>

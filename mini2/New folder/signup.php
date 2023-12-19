<html>
<?php
    require('saukya.php');
    ?>
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
    <div class="titlebar">

    </div>
    <h1 class="heading">NATABHARANA</h1>
        
                
    <div class="container">
       <ul>
        <a href="signup.html" onclick="signup()"><li class="signup">SIGN UP</li></a>
        <a href="login.html" onclick="login()"><li class="login">LOGIN</li></a>
        </ul>
<form action="saukya.php" method="post" id="fsignup">
    
    
<h1> Registration form</h1>

<label for="mail">Enter your mail id </label>
<input type="text" name="mail" size="20" id="mail" maxlength="20">

<label for="pass">Enter your password</label>
<input type="password" name="pass" size="10" id="pass" maxlength="20">

<label for="usname">Enter full name </label>
<input type="text" name="usname" id="usname" >

<label for="mob">Enter mobile number</label>
<input type="text" name="mob" id="mob" size="10" maxlength="10">
<br>
<div class="btn">
    <button class="submit"type="submit" name="submit">Submit</button>
    <button type="reset" value="cancel"class="cancel">Cancel</button></div>
</form>


</div>
</body>
</html>

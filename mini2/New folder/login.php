<html>
<?php
    require('saukya.php');
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
.signup{
    background-color: rgb(213, 62, 62);
    border-bottom: solid rgb(252, 243, 243) 2px;
}
.signup:hover{
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


<form action="saukya.php" id="flogin" method ="post">
    <h1> LOG IN</h1>

    <label for="mail">Enter your mail id </label>
<input type="text" name="mail" size="20" id="mail" maxlength="20">
<br>

<label for="pass">Enter your password</label>
<input type="password" name="pass" size="10" id="pass" maxlength="20">
<br>
<div class="btn">
    <button class="submit"type="submit" name="submit">Submit</button>
    <button type="reset" value="cancel"class="cancel">Cancel</button></div>

</form>
</div>
</body>
</html>

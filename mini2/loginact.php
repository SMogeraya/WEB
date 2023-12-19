<html>

<head>
<title>form</title>
<link href="saukya.css" rel="stylesheet" type="text/css">
<link href="saukya2.css" rel="stylesheet" type="text/css">
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
.signup{
    background-color: rgb(213, 62, 62);
    border-bottom: solid rgb(252, 243, 243) 2px;
   
}
.signup:hover{
    background-color: rgb(178, 35, 35);
}
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
label{
    font-family: 'Dhurjati', sans-serif;
    font-size:23px;
    margin-bottom:0;

}
footer.foot{
    margin-top: 100px !important;
}
</style>
<?php
include("connection.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="saukya2.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Ephesis&family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dhurjati&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<div class="topbar">
        <ul class="nav2">
            <li class="icons lii "><a class="anch"href="index.php"><div style="display:flex;flex-direction:row;"><i class="fa fa-home" style="color: white;font-size:20px;" ></i>  Home</a></li>
            <li class="icons lii"><a class="anch" href="index.php#foot"><i class="fa fa-quote-left" style="color: white;font-size:20px;" ></i>  Info</a></li>
            <li class="icons lii"><a class="anch" href="index.php#info"><i class="fa fa-briefcase" style="color: white;font-size:20px;" ></i>  About Us</a></li>
            <li class="icons lii"><a class="anch" href="index.php#foot"><i class="fa fa-address-book" ></i>  Contact</a></li>
            
            </ul>
            
</div>


    <h1 class="heading">NATABHARANA</h1>
        
                
    <div class="container" data-aos="zoom-in"  data-aos-duration="1000">
       <ul class="sahana">
        <a href="signupact.php" onclick="signup()"><li class="signup">SIGN UP</li></a>
        <a href="loginact.php" onclick="login()"><li class="login">LOGIN</li></a>
        </ul>


<form action="logindb.php" id="flogin" method ="post">
    <h1 style="font-size:35px;"><u> LOG IN</u></h1>

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

<footer class="foot" id="foot" data-aos="zoom-in"  data-aos-duration="1700">

<div class="fleft">

    <h1 style="font-size:40px;">Natabharan</h1>

    <p class="fcopy"style="margin-top:-30px;">Natabharan©2023</p>
    <!-- <img src="favicon32.png"> -->
</div>
<div class="botn"> <ul class="botnav">
            <li class="botli"><a class="bota"href="#"><div style="display:flex;flex-direction:row;"><i class="fa fa-home" style="color: white;font-size:20px;" ></i>HOME</a><div></li>
            <li class="botli"><a class="bota" href="#foot"><i class="fa fa-quote-left" style="color: white;font-size:20px;" ></i>INFO</a></li>
            <li class="botli"><a class="bota" href="#info"><i class="fa fa-briefcase" style="color: white;font-size:20px;" ></i>About Us</a></li>
            <li class="botli"><a class="bota" href="#foot"><i class="fa fa-address-book" ></i>Contact</a></li>
            
            </ul></div>
<div class="fcenter">

    <div>
    <i class="fa-solid fa-location-dot fa-lg;" style="color: #f02424;"></i>
        <span>South End Road</span> <span>Bengaluru-04</span>
    </div>
    <br><br>

    <div>
    <p style="margin-bottom:0;"><i class="fa fa-phone" style="color: white;font-size:20px;" id="fcon"></i>
          8073982090</p>
    </div>
    <br><br>

    <div>
        
    <p> <i class="fa fa-envelope"></i>
       <a href="mailto:saukya@gmail.com"style="color: white;">saukya2003@gmail.com</a></p>
    </div>

</div>

<div class="fright">

    <p class="fabt" id="aabt">
        <span><h3 style="font-size:30px;"><u>About the company</u></h3></span>
        <p>Natabharan is a start up initiative to help improve customer satisfaction with respect to buying musical and dance instruments and items.</p>
    </p>

    <div class="i" style="display:flex;">
        <div class="white one ii">
    <i class="fa fa-youtube-play abc " style="font-size:23px"></i></div>
    <div class="white2 fb two ii"> <i class="fa fa-facebook-official abd " style="font-size:22px"></i></div>
    <div class="white2 three ii"> <i class="fa fa-instagram abd " style="font-size:22px"></i></div>
    
    <div class="white2 twit four ii"> <i class="fa fa-twitter abd " style="font-size:22px"></i></div>
    

    </div></div>
    <!-- <div class="ficon">
        <br><br>

        <a href="#"><i class="fa-brands fa-facebook fa-2xl"></i></a> 
        <a href="#"><i class="fa-brands fa-twitter fa-2xl" style="color: #64b5dd; margin-left:30px;"></i></a>
        <a href="#"><i class="fa-brands fa-instagram fa-2xl" style="color: #e250c8; margin-left:30px;"></i></a>
       
    </div> -->

</div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init(

  );
</script>
</body>
</html>
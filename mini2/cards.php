<!-- <!DOCTYPE html> -->
<!-- <head>
    
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="actual.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color:white;">
   
    <div class="card">
<img src="https://i0.wp.com/s3.amazonaws.com/halleonard-pagepreviews/HL_DDS_12307546gfRRmtPWs.png">
<div>
<h1>The notes</h1><br>
<button >Buy here</button>
<a href="https://maps.app.goo.gl/VFUBnrsB9JfgQTAp8">Near Me</a>
</div>
    

    </div> -->

<!-- </body>
</html> -->
<?php
session_start();

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="saukya2.css" rel="stylesheet" type="text/css">
    <link href="saukya.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="welcome.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        h1,h2,nav,h3,.bton1,.bton{
            font-family:Agbalumo;
            
        }
        .topbar{
    width:100%;
    height: 60px;
    background-color: black;
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
    
margin:8px;
border:2px solid black;
margin-left:8px;

}
/* .icons:hover{
    color:white;
    background-color: rgba(120, 43, 15, 0.895);
    border:2px solid white;
}
.topa:hover{
     color:white;  
}  */
.topicons{
    margin-top:0px;
    display:flex;
    flex-direction:column;
    justify-content:start;
}
.row{
  display:flex;
    flex-direction:row;
    margin:auto;
    justify-content: space-around;
}
.contt{
  width: 93% !important;
  display:flex;
  flex-direction:row;
  height:90%;
padding-top:-50px;
}
.topicons li{
    font-size:20px;
}
.topa{
    font-family:impact;
    color:black;
}
.cardss{
  margin:10px;
  height:20%;
  padding:10px;
 
}



.headd{
  position: relative;
  opacity:0;
}
.headd:before{
  content:"";
position:absolute;
width:0%;
height:2.1px;
background-color:rgba(245, 240, 240,0.5);
left:3%;
bottom:0;
transition:0.3s;
}

.head:hover:before{
  width:47%;
}

 .headd{
  position: relative;
  opacity:0;
}
.headd:after{
  content:"";
position:absolute;
width:0%;
height:2.1px;
background-color:rgba(245, 240, 240,0.5);
right:3%;
bottom:0;
transition:0.3s;
}

.head:hover:after{
  width:47%;
} 
    </style>
</head>
<body>
<!-- <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg  nav-underline" data-bs-theme="dark">
  <div class="container-fluid">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link ndec " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ndec" href="#">Info</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link ndec" href="#" >About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ndec" href="#">Contact</a>
        </li>
<li>


</li>
      </ul>
      
    </div>
  </div>
</nav>
<?php
  echo $_SESSION['uname'];
  ?> -->
<div class="topbar">
        <ul class="nav2">
            <li class="icons lii "><a class="anch"href="index.php"><div style="display:flex;flex-direction:row;"><i class="fa fa-home" style="color: white;font-size:20px;" ></i>  Home</a></li>
            <li class="icons lii"><a class="anch" href="index.php#foot"><i class="fa fa-quote-left" style="color: white;font-size:20px;" ></i>  Info</a></li>
            <li class="icons lii"><a class="anch" href="index.php#info"><i class="fa fa-briefcase" style="color: white;font-size:20px;" ></i>  About Us</a></li>
            <li class="icons lii"><a class="anch" href="index.php#foot"><i class="fa fa-address-book" ></i>  Contact</a></li>
            
            </ul>
            
</div>


    <h1 data-aos="zoom-in" class="headd head"  style="width: 35%;"data-aos-duration="1300" style="margin-top:40px;">NATABHARANA</h1>
   <!-- <div class="titlee"> --><h2 data-aos="zoom-in"  data-aos-duration="1300" style="margin-top:30px;">Welcome To The World Of Music And Dance</h2> 
    <!-- <img class="inst2"src="https://th.bing.com/th/id/R.e40b416f6fa192d2558a379df5349ca6?rik=d0o6IVZuFold3A&riu=http%3a%2f%2fclipart-library.com%2fimages_k%2fviolin-transparent-png%2fviolin-transparent-png-11.png&ehk=fusME9gpIXbJ0puHfaNT9YdraJHd7ihcQGYEdJ8jQmc%3d&risl=&pid=ImgRaw&r=0"></div>
    <img class="inst1"src="https://clipartspub.com/images600_/musical-instruments-clipart-transparent-background-2.png">
   <img class="inst3" src="https://i.pinimg.com/originals/31/ff/d6/31ffd68d28acbf447c58727f81af1e4e.jpg"> -->

   <div class="conatiner text-center contt" data-aos="zoom-in"  data-aos-duration="2000">
<div class="row ">
<div class="card cardss" style="width: 18rem;">
  <img src="https://th.bing.com/th/id/OIP.GpMPE6owNVj1sdB-3AfUjwHaE8?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  
</div>
<div class="card cardss" style="width: 18rem;">
  <img src="https://th.bing.com/th/id/OIP.GpMPE6owNVj1sdB-3AfUjwHaE8?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  
</div>
<div class="card cardss" style="width: 18rem;">
  <img src="https://th.bing.com/th/id/OIP.GpMPE6owNVj1sdB-3AfUjwHaE8?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  
</div>
<div class="card cardss" style="width: 18rem;">
  <img src="https://th.bing.com/th/id/OIP.GpMPE6owNVj1sdB-3AfUjwHaE8?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  
</div>
<div class="card cardss" style="width: 18rem;">
  <img src="https://th.bing.com/th/id/OIP.GpMPE6owNVj1sdB-3AfUjwHaE8?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  
</div>
<div class="card cardss" style="width: 18rem;">
  <img src="https://th.bing.com/th/id/OIP.GpMPE6owNVj1sdB-3AfUjwHaE8?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  
</div>
<div class="card cardss" style="width: 18rem;">
  <img src="https://th.bing.com/th/id/OIP.GpMPE6owNVj1sdB-3AfUjwHaE8?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  
</div>
  
<div class="card cardss" style="width: 18rem;">
  <img src="https://th.bing.com/th/id/OIP.GpMPE6owNVj1sdB-3AfUjwHaE8?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  
</div>
</div>

</div>
<footer class="foot" id="foot" data-aos="zoom-in"  data-aos-duration="2000" style="margin:10px;background-color: rgba(115, 21, 21,0.6);">

<div class="fleft">

    <h1 style="font-size:40px;text-shadow:none">Natabharan</h1>

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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>  
<script>
  AOS.init();
</script>
</body>
</html>
















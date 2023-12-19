<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- <link href="card.css" rel="stylesheet" type="text/css"> -->
<link href="saukya2.css" rel="stylesheet" type="text/css">
<link href="saukya.css" rel="stylesheet" type="text/css">
   

    <style>
        h1,h2{
    font-size: 51px;
    font-weight: 80;
    -webkit-text-fill-color: rgb(255, 255, 255);
    width: 70%;
margin: auto ;
    text-shadow: 4px 7px 8px #121111;
    text-align: center;
    -webkit-text-stroke-color: rgba(0, 0, 0, 0);
    -webkit-text-stroke-width: 2px;
} 
h1{
    font-size: 65px;
    margin: 15px auto;
    
    -webkit-text-stroke-width: 2px;
}

.ndec{
  
    padding: 10px;
}
.nav-link {
    color: rgb(255, 255, 255) !important;
    font-size:18px !important;
    }
    h3{
        font-size: 35px;
    }

    body{
        background-color: rgb(197, 96, 59);
    
    }

    .cardalign{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        flex-basis: 25%;
        justify-content: center;
    }
        h1,h2,nav,h3,.bton{
            font-family:Agbalumo;
            
        }

    .card{
    width:250px;
    height: 300px;
    border-radius: 10px;
    position: relative;
    overflow:hidden;
    margin: 20px;

}
body{
     height: 150vh; 
    background-image: linear-gradient( 45deg,  rgba(134,15,15,0.5) 20.9%, rgba(183,10,10,0.5) 50.9%, rgba(210,70,0,0.5) 95.1% ); 
    
    background: url('https://i.pinimg.com/originals/74/73/98/7473984908e352422218a68b0b001026.jpg');
    background-size: cover; 
position: relative;
}
.card img{
    position: absolute;
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
    transform: scale(1.1);
    transition: all 0.5s;
    z-index: 0;
}
.card:hover img{
    transform:scale(1);
}

.cardcon{

    background-color: rgb(147, 17, 17);
    font-size:1.2em;
    color:white;
    position: absolute;
    bottom: 0;
    height: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 20px;
    z-index: 2;
    text-align: center;
    transition: all 0.5s;
    margin: auto;
    width:100%;
}

.cardcon::after, .cardcon::before{

    content: "";
    position: absolute;
    height: 120px;
    width: 100%;
    background-color:rgb(186, 28, 28);
    z-index: 2;
    transition: all 0.5s;
}

.cardcon::after{
    top: -10%;
    clip-path: ellipse(0% 20px at bottom center);
}

.cardcon::before{
    bottom: -10%;
    clip-path: ellipse(0% 20px at top center);
}

.card:hover .cardcon{
    bottom: 50%;
    background-color:rgb(186, 28, 28);
}

.card:hover .cardcon::after,.card:hover .cardcon::before{
    background-color:rgb(186, 28, 28);
}
.cardcon h2{
    color:aliceblue;
    font-size: 12px;
    margin-top: 2px;
    margin-bottom: 0;
    padding-bottom: 0;

}

/* .cardcont h2 span{
    color: black;
} */
.cardcon p{
    font-size: 10px;
    width: 90%;
    margin: 0;
    padding: 0;
    font-size:0.83rem;
}
.cardcon h2{
    font-size:1.2em;
}
.btnn{
    color: black;
    font-size: 13px;
    cursor: pointer;
    display: flex;
    gap:0;
    transition: all 0.5s;
    opacity:0;
    margin: 0;
    padding: 0;


}

.btnn i{
    color: white;
}

.btnn hover{
    gap: 10px;
    color: white;
}
.btnn a{
    text-decoration:none;
    color: black;

}
.card:hover .btnn{
    opacity: 1;
    color: black;
}
body{
    background-color: #fff;
}
.icons
{text-align:center;
    width:auto;
    height:30px;
    
margin:8px;
border:2px solid black;
margin-left:8px;

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
    </style>


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
    <h1 data-aos="zoom-in"  data-aos-duration="1300"> NATABHARANA</h1>
<h2 style="text-align:center;color:white;" data-aos="zoom-in"  data-aos-duration="1300">♫ Music</h2>
    <div class="cardalign "  >
    <div class="card" data-aos="flip-left"  data-aos-duration="1700">
        <img src="https://i.pinimg.com/originals/6a/d3/32/6ad332f4c1f7b334d7d6a6064b1cb21f.jpg">
        <div class="cardcon">
        <h2 >Mrudangam</h2>
            <p>The mridangam is a percussion instrument of ancient origin.It is the primary rhythmic accompaniment in a Carnatic music.</p>
            <div class="btnn btn btn-light">
              <a href="final.php#mrudangamm">Learn How</a>
                
            </div>
        </div>
    </div>

    <div class="card" data-aos="flip-left"  data-aos-duration="2100">
        <img src="https://i.pinimg.com/originals/21/3a/de/213adeb0d86186a486b1e0c800fcbd8f.jpg">
        <div class="cardcon">
            <h2>Guitar</h2>
            <p>The Guitar is a beautiful and versatile instrument that can produce a range of sounds and styles.</p>
            <div class="btnn btn btn-light">
            <a href="final.php#Guitar">Learn How </a>
                
            </div>
        </div>
    </div>

    <div class="card" data-aos="flip-left"  data-aos-duration="1700">
        <img src="https://cdn.britannica.com/27/176327-050-67702AB2/Violin.jpg">
        <img src="">
        <div class="cardcon">
            <h2>Violin</h2>
    <p>The violin,wooden chordophone in the violin family,is the smallest and highest-pitched instrument in the family.</p><div class="btnn btn btn-light"> 
    <a href="final.php#violinn">Learn How</a> 
                
            </div>
        </div>
    </div>
</div>
<div class="cardalign  px-10" style="margin:auto;"  >
    <div class="card" data-aos="flip-left"  data-aos-duration="1700">
        <img src="https://i.pinimg.com/474x/98/64/c7/9864c72c7682f7104ae7368567787498--pino-instruments.jpg">
        <div class="cardcon">
            <h2>Flute/Bhansuri</h2>
            <p>The flute is a beautiful and versatile instrument that can produce a range of sounds and styles.  </p>
            <div class="btnn btn btn-light">
            <a href="final.php#Flutee">Learn How </a>
                
            </div>
        </div>
    </div>

    <div class="card" data-aos="flip-left"  data-aos-duration="1700">
        <img src="https://th.bing.com/th/id/OIP.2Lx6wyBAodW09wP5QspuzwHaNj?rs=1&pid=ImgDetMain">
        <div class="cardcon">
            <h2>Sitar</h2>
            <p>Music always refreshes our minds and souls, and sitar is one of the wonderful instruments that produce the same melody. </p>
            <div class="btnn btn btn-light">
            <a href="final.php#Sitar">Learn How </a>
                
            </div>
        </div>
    </div>
    <div class="card" data-aos="flip-left"  data-aos-duration="2100">
        <img src="https://i.pinimg.com/474x/98/64/c7/9864c72c7682f7104ae7368567787498--pino-instruments.jpg">
        <div class="cardcon">
            <h2>Guitar</h2>
            <p>The Guitar is a beautiful and versatile instrument that can produce a range of sounds and styles.</p>
            <div class="btnn btn btn-light">
            <a href="final.php#Guitar">Learn How </a>
                
            </div>
        </div>
    </div>

    <div class="card" data-aos="flip-left"  data-aos-duration="2100">
        <img src="https://i.pinimg.com/originals/27/36/43/273643fd23591bd1e04642e0be6962ea.png">
        <div class="cardcon">
            <h2>Guitar</h2>
            <p>The Guitar is a beautiful and versatile instrument that can produce a range of sounds and styles.</p>
            <div class="btnn btn btn-light">
            <a href="final.php#Guitar">Learn How </a>
                
            </div>
        </div>
    </div>

</div>
    <h2 style="text-align:center;color:white;">𝆹𝅥𝅯 Dance</h2>
    <div class="cardalign">

    <div class="card" data-aos="flip-left"  data-aos-duration="2100">
        <img src="https://i.pinimg.com/originals/21/3a/de/213adeb0d86186a486b1e0c800fcbd8f.jpg">
        <div class="cardcon">
            <h2>Guitar</h2>
            <p>The Guitar is a beautiful and versatile instrument that can produce a range of sounds and styles.</p>
            <div class="btnn btn btn-light">
            <a href="final.php#Guitar">Learn How </a>
                
            </div>
        </div>
    </div>


    <div class="card" data-aos="flip-left"  data-aos-duration="2100">
        <img src="https://i.pinimg.com/originals/21/3a/de/213adeb0d86186a486b1e0c800fcbd8f.jpg">
        <div class="cardcon">
            <h2>Guitar</h2>
            <p>The Guitar is a beautiful and versatile instrument that can produce a range of sounds and styles.</p>
            <div class="btnn btn btn-light">
            <a href="final.php#Guitar">Learn How </a>
                
            </div>
        </div>
    </div>


    <div class="card" data-aos="flip-left"  data-aos-duration="2100">
        <img src="https://i.pinimg.com/originals/21/3a/de/213adeb0d86186a486b1e0c800fcbd8f.jpg">
        <div class="cardcon">
            <h2>Guitar</h2>
            <p>The Guitar is a beautiful and versatile instrument that can produce a range of sounds and styles.</p>
            <div class="btnn btn btn-light">
            <a href="final.php#Guitar">Learn How </a>
                
            </div>
        </div>
    </div>




    <div class="card" data-aos="flip-left"  data-aos-duration="2100">
        <img src="https://i.pinimg.com/originals/21/3a/de/213adeb0d86186a486b1e0c800fcbd8f.jpg">
        <div class="cardcon">
            <h2>Guitar</h2>
            <p>The Guitar is a beautiful and versatile instrument that can produce a range of sounds and styles.</p>
            <div class="btnn btn btn-light">
            <a href="final.php#Guitar">Learn How </a>
                
            </div>
        </div>
    </div>




    <div class="card" data-aos="flip-left"  data-aos-duration="2100">
        <img src="https://i.pinimg.com/originals/21/3a/de/213adeb0d86186a486b1e0c800fcbd8f.jpg">
        <div class="cardcon">
            <h2>Guitar</h2>
            <p>The Guitar is a beautiful and versatile instrument that can produce a range of sounds and styles.</p>
            <div class="btnn btn btn-light">
            <a href="final.php#Guitar">Learn How </a>
                
            </div>
        </div>
    </div>


    </div>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
    AOS.init(
    
     
    );
  </script>
</body>
</html>
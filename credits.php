<?php

?>

<!DOCTYPE html>
<html>
    <header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 11 Struktur Data A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/Km9gKuG06He-isPsP6saG8cn/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-tL/88+JE9Mv/pJzkZt5DBcS7efRA2LrT4YX0Htu8Rnmat69OIBwraynHJm/fWfbH"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style media="screen">
        @font-face {
            font-family: alexandria;
            src: url(assets/font/Alexandria-Regular.ttf);
        }

        @font-face {
            font-family: alexandriaLight;
            src: url(assets/font/Alexandria-Light.ttf);
        }
        .bg {
          background-image: url('');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: right;
          height: -webkit-fill-available;
          width: 100vw;
          height: 100vh;
          position: fixed;
          z-index: -99;

        }
        body {
            font-family: alexandriaLight;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            background-color: #fff;
            color: #000;
            box-sizing: border-box;
            overflow-x: hidden;
            /* background: url("assets/img/") no-repeat fixed;
            background-size: covers; */
        }

        h2, a {
            font-family: alexandria;
        }
        
        /* kolom deskripsi/penjelasan */
        .kolom .deskripsi {
            font-size: 20px;
            font-weight: bold;
            font-family: 'comic sans ms';
            color: #628395;
            margin-left: 20px;
            margin-right: 20px;
        }
        .row {
            min-height: 100vh;
        }

        @media only screen and (max-width: 768px) {
          .bg {
            background-image: url('');
          }
        }
          h1,h2{
        color: white;
      }
      #landing {
            background: url(assets/img/bg_landing.jpg) fixed no-repeat;
            background-size: cover;
        }

        #landing h2 {
            font-size: 4em;
        }
        
        #landing button {
            font-size: 1.5em;
        }

      button {
            width: 9em;
            height: 2.25em;
            border-radius: 30pt;
            font-size: 15px;
            border: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: .5s ease;
        }

        button::before {
            content: '';
            width: 0;
            height: 2.25em;
            border-radius: 30pt;
            position: absolute;
            top: 0;
            left: 0;
            background-image: linear-gradient(to right, #0fd850 0%, #f9f047 100%);
            transition: .5s ease;
            display: block;
            z-index: -1;
        }

        button:hover::before {
            width: 9em;
            background-image: linear-gradient(to right, #0fd850 0%, #f9f047 100%);
        }

        button:hover {
            transform:scale(1.1);
            background-color: transparent;
        }
        .navbar {
            background-color: transparent;
            transition: all .3s ease;
            backdrop-filter: blur(3px);
            
        }

        .nav-link:hover {
            background: linear-gradient(to left, #f9f047 0%, #0fd850 50%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
body{
    margin: 0;
    padding: 0;
    /* font-family: montserrat!important; */
    font-family: 'Montserrat', sans-serif!important;
    /* background-size: cover;
    background-repeat: no-repeat; */
}
.center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 10px;
    width: 300px;
    /* background: rgb(19 19 19 / 31%); */
    border-radius: 10px;
    justify-content: center;
    align-items: center;
    /* backdrop-filter: blur(5px); */
    /* box-shadow: 0 25px 45px rgba(0,0,0,0.1);
    border: 1px solid rgb(107 107 107 / 50%);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2); */
    color: white;
}
.center h1, h3{
    text-align: center;
    padding: 20px 0;
    border-bottom: 1px solid silver;
}

.dm {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.addition a {
    color: white;
    text-decoration: none;
  }

  .addition a:hover {
    color: lightgrey;
  }

  .logos {
    padding: 20px 0 0 20px;
    width: 200px;
    height: 100px;
    align-self:flex-start;
  }
  .logos .wgg {
    width: 75%;
  }
  .logos .ukp60 {
    width: 130%;
  }

  @media only screen and (max-width: 540px){
      .center{
          width: 350px;
      }
      .g-recaptcha {
          position: relative;
          transform: scale(0.77) translateX(-50%);
          left: 45%;
          -webkit-transform: scale(0.77) translateX(-50%);
          transform-origin: 0 0;
          -webkit-transform-origin: 0 0;
      }
  }

.mycontainer{
    display: flex;
    padding: 10px;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.mywrapper{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
.mywrapper> div{
    margin: 0 20px;
}
@import url(https://fonts.googleapis.com/css?family=Raleway:400,800);
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
figure.snip1033 {
  font-family: 'Raleway', Arial, sans-serif;
  color: #fff;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 220px;
  max-width: 310px;
  max-height: 330px;
  width: 100%;
  background:transparent;

  animation: textColor 10s ease infinite;
}
figure.snip1033::after {
  transition : all .8s ease;
  position: absolute;
  content: "";
  top: 5vw;
  /* bottom: 0; */
  left: 0;
  right: 0;
  z-index: -1;
  height: 100%;
  width: 100%;
  margin: 0 auto;
  transform: scale(0.75);
  -webkit-filter: blur(5vw);
  -moz-filter: blur(5vw);
  -ms-filter: blur(5vw);
  filter: blur(5vw);
  background: linear-gradient(270deg, #F2C9E1, #E04DB0);
  background-size: 200% 200%;
  animation: animateGlow 10s ease infinite;
  height: 0;
}
figure.snip1033:hover::after {
  height: 100%;

}
@keyframes animateGlow {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes textColor {
  0% {
    color: #E04DB0;
  }
  50% {
    color: #F2C9E1;
  }
  100% {
    color: #E04DB0;
  }
}
.left{
  color:#E04DB0;
}

figure.snip1033 img {
  opacity: 1;
  width: 100%;
  position: relative;
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
}
figure.snip1033 figcaption {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  text-align: left;
}
figure.snip1033 figcaption h3 {
  background-color: #ffffff;
  color: deepskyblue;
  word-spacing: -0.1em;
  font-weight: 800;
  text-transform: uppercase;
  font-size: 0.9em;
  opacity: 0;
  position: absolute;
  -webkit-transition: opacity 0.45s, -webkit-transform 0.45s;
  transition: opacity 0.45s,-webkit-transform 0.45s,-moz-transform 0.45s,-o-transform 0.45s,transform 0.45s;
}
figure.snip1033 figcaption .left h3 {
  border-radius: 5px 0 0 5px;
  top: 50%;
  padding: 4px 35px 4px 10px;
  right: 0;
  -webkit-transform: translate(100%, 0px);
  transform: translate(100%, 0px);
}
figure.snip1033 figcaption .right h3 {
  border-radius: 0 5px 5px 0;
  bottom: 50%;
  padding: 4px 10px 4px 35px;
  padding-left: 30px;
  -webkit-transform: translate(-100%, 0px);
  transform: translate(-100%, 0px);
}
figure.snip1033 a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
}
figure.snip1033 .white {
  background-color: deepskyblue;
  color: white;
}
figure.snip1033:hover img,
figure.snip1033.hover img {
  opacity: 1;
  /* filter: grayscale(0.4) hue-rotate(80deg); */
  -webkit-transform: translate(0%, 0px);

}
figure.snip1033:hover figcaption .left h3,
figure.snip1033.hover figcaption .left h3 {
  opacity: 1;
  -webkit-transform: translate(0%, 0px);
  transform: translate(0%, 0px);
}
figure.snip1033:hover figcaption .right h3,
figure.snip1033.hover figcaption .right h3 {
  opacity: 1;
  -webkit-transform: translate(0%, 0px);
  transform: translate(0%, 0px);
}

.left,.right{
    margin:0;
}
.center h1, h3 {

    border: none;
}
.michael{
    object-position: 0px -10px ;
    transform:scale(1.06)
}
.sidi{
    object-position: -10px -10px;
    transform:scale(1.06)
}
.vincent{
    object-position: -10px -10px;
    transform:scale(1.06)
}
.nico{
    object-position: -10px -10px;
    transform:scale(1.06)
}
figure.snip1033 {
    border-radius: 10px;
}
h1,h2{
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(15px);
  padding: 5px 10px;
  border-radius: 10px;
}
h1{
margin-bottom: 30px;
}
</style>
    </header>
    <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="credits.php" style="margin-left: 20px;">Credits</a>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li>
                    <a class="nav-link active" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">Visualization</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- container buat credit foto -->
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center" id="landing" style="font-family:alexandria">
            <div class="mycontainer">
                <div class="mywrapper" id="landing" style="font-family:alexandria">
                        <!-- Michael Adi Pratama -->
                    <figure class="snip1033" data-aos="fade-up" data-aos-offset="300">
                        <img src="assets/pictures/michael.png" class="michael foto" alt="Michael"/>
                            <figcaption>
                                <div class="left">
                                <h3>Michael Adi Pratama</h3>
                                </div>
                                <div class="right">
                                <h3 class="white">C14210016</h3>
                                </div>
                            </figcaption>
                        <a href="https://www.instagram.com/michaeladi26/" target="_blank"></a>
                    </figure>
                        <!-- Nico Samuelson -->
                    <figure class="snip1033" data-aos="fade-up" data-aos-offset="300">
                        <img src="assets/pictures/sidi.png" class="nico foto" alt="Nico"/>
                            <figcaption>
                                <div class="left">
                                <h3>Nico Samuelson</h3>
                                </div>
                                <div class="right">
                                <h3 class="white">C14210017</h3>
                                </div>
                            </figcaption>
                        <a href="https://www.instagram.com//" target="_blank"></a>
                    </figure>
                    <!-- Vincent -->
                    <figure class="snip1033" data-aos="fade-up" data-aos-offset="300">
                        <img src="assets/pictures/vincent.png" class="vincent foto" alt="Vincent"/>
                            <figcaption>
                                <div class="left">
                                <h3>Vincent</h3>
                                </div>
                                <div class="right">
                                <h3 class="white">C142100xx</h3>
                                </div>
                            </figcaption>
                        <a href="https://www.instagram.com//" target="_blank"></a>
                    </figure>
                    <!-- Sidi Praptama -->
                    <figure class="snip1033" data-aos="fade-up" data-aos-offset="300">
                        <img src="assets/pictures/sidi.png" class="sidi foto" alt="Sidi"/>
                            <figcaption>
                                <div class="left">
                                <h3>Sidi Praptama</h3>
                                </div>
                                <div class="right">
                                <h3 class="white">C14210017</h3>
                                </div>
                            </figcaption>
                        <a href="https://www.instagram.com//" target="_blank"></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <script>
        AOS.init();
        var nav= document.querySelector('nav');
        window.addEventListener('scroll', function(){
            if (window.pageYOffset > 100){
                nav.style.backgroundColor = "white";
                nav.style.boxShadow = "0px 0px 3px #aaa";
            }
            else {
                nav.style.backgroundColor = "transparent";
                nav.style.boxShadow = "";
            }
        });
    </script>
</body>
</html>
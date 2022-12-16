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
            <div class="d-flex flex-column align-items-center">
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
<?php

?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Heap Visualizer</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Animate CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <link href="https://unpkg.com/treeflex/dist/css/treeflex.css" rel="stylesheet">
    
    <style>
        @font-face {
            font-family: alexandria;
            src: url(assets/font/Alexandria-Regular.ttf);
        }

        @font-face {
            font-family: alexandriaLight;
            src: url(assets/font/Alexandria-Light.ttf);
        }

        body {
            font-family: alexandria;
            margin: 0;
            padding: 0;
            background: url("assets/foto/sidi.JPG") no-repeat fixed;
            background-size: covers;
        }

        /* Node Style */
        .example .tf-nc {
            border-radius: 50%;
            width: 50px;
            aspect-ratio: 1 / 1;
            text-align: center;
            color: white;
            background-color: black;
            display: flex;
            align-items:center;
            justify-content: center;
            transition: all 1s ease;
            z-index: 10;
        }
        
        /* Vertical Connector Style */
        .tf-tree .tf-nc:before, .tf-tree .tf-nc:after {
            border: 1px solid orange;
            background-color: orange;
            z-index: 5;
        }

        /* Horizontal Connector Style */
        .tf-tree li li:before {
            border: 1px solid orange;
            background-color: orange;
            z-index: 5;
        } 
    </style>
</head>
<body style="background-color: cyan;background-image:url('')">
    <!-- Navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand animate__animated animate__zoomIn" href="home.php" style="margin-left: 20px;">Credits</a>
            <span></span>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <button class="btn btn-danger" style="width: 120px;height: 50px;margin-left: 1000px;"> 
                    <a class="nav-link" href="home.php" style="color:white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                        Back
                    </a>
                </button>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid d-flex">
        <div class="row pt-3 d-flex justify-content-center" style="width:100%" style="background-color: black;">
           
        <strong style="color: white;margin-top: 100px;"><p>Thankyouu Bu Liliana karena sudah mengajar kami selama 1 semester ini!<br> Semoga semester depan ngga ngajar kami Bu!!!</p></strong>
        
        <!-- footer copy right -->
        <div id="layoutAuthentication_footer">
            <footer class="py-6 bg-light " style="margin-top: 330px;">
                <div class="container-fluid px-6">
                    <div class="d-flex align-items-bottom justify-content-between small" >
                        <div class="text-muted" style="color: white;">Copyright &copy; Kelompok 10 Struktur Data A 2022</div>
                    </div>
                </div>
            </footer>
        </div>     
    </div>

</body>
</html>
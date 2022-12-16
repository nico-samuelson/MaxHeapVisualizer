<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Heap Visualizer</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- Tree Flex -->
    <link href="https://unpkg.com/treeflex/dist/css/treeflex.css" rel="stylesheet">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    
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

        .row {
            min-height: 100vh;
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
        }

        button:hover {
            transform:scale(1.1);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php" style="margin-left: 20px;">Max Heap Visualizer</a>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li>
                    <a class="nav-link active" href="#deskripsi">Overview</a>
                </li>
                <!-- <li>
                    <a class="nav-link" href="#maxheap"> Max Heap Tree</a>
                </li> -->
                <li>
                    <a class="nav-link active" href="#implementation"> Implementation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">Visualization</a>
                </li>
                <li>
                    <a class="nav-link active" href="credits.php">Credits</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center" id="landing" style="font-family:alexandria">
            <div class="d-flex flex-column align-items-center">
            <a href="index.html"><button>Visualize →</button></a>
            </div>  
        </div>

        <!--untuk deskripsi-->
        <div class="row py-5" id="deskripsi">
            <div class="col-lg-2 col-1"></div>
            <div class="col-lg-8 col-10" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1500">
                <h2 class="text-center"><strong>Overview</strong></h2>
                <br>
                <p>A heap is a specialized tree-based data structure which is essentially an almost complete tree that satisfies the heap property: in a max heap, for any given node C, if P is a parent node of C, then the key (the value) of P is greater than or equal to the key of C. In a min heap, the key of P is less than or equal to the key of C.The node at the "top" of the heap (with no parents) is called the root node.</p>
                <br>
                <p>The heap is one maximally efficient implementation of an abstract data type called a priority queue, and in fact, priority queues are often referred to as "heaps", regardless of how they may be implemented. In a heap, the highest (or lowest) priority element is always stored at the root. However, a heap is not a sorted structure; it can be regarded as being partially ordered. A heap is a useful data structure when it is necessary to repeatedly remove the object with the highest (or lowest) priority, or when insertions need to be interspersed with removals of the root node.</p>
                <br>
                <p> A Heap is a special Tree-based data structure in which the tree is a complete binary tree. Since a heap is a complete binary tree, a heap with N nodes has log N height. It is useful to remove the highest or lowest priority element. It is typically represented as an array. There are two types of Heaps in the data structure.</p>
                <br>
            </div>
            </div>
        </div>

        <!--untuk implementasi dari maxheap-->
        <div class="row py-5" id="implementation">
            <div class="col-lg-2 col-1"></div>
            <div class="col-lg-8 col-10" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1500">
                <br>
                <h2 class="text-center"><b>Implementation of Max Heap Tree</b></h2>
                <br>
                <p> 
                </p>
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
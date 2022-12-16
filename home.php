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
    <!-- Animate CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- Tree Flex -->
    <link href="https://unpkg.com/treeflex/dist/css/treeflex.css" rel="stylesheet">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
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
            background: url(assets/img/bg_home.png) fixed no-repeat;
            background-size: cover;
            color: #fff;
            overflow:overlay;
        }

        h2, h3 {
            font-family: alexandria;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb, ::-webkit-scrollbar-thumb:hover {
            border-radius: 20pt;
            background: #555; 
        }
        
        /* kolom deskripsi/penjelasan */
        /* .kolom .deskripsi {
            font-size: 20px;
            font-weight: bold;
            font-family: 'comic sans ms';
            color: #628395;
            margin-left: 20px;
            margin-right: 20px;
        } */

        .navbar {
            background-color: transparent;
            transition: all .3s ease;
        }

        .nav-link:hover {
            background: linear-gradient(to right, #d14b71 0%, #f28f33 50%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .frosted {
            background-color: rgba(255, 255, 255, .1);
            border-radius: 20pt;
            backdrop-filter: blur(25px);
        }

        .row {
            min-height: 80vh;
        }

        #landing h2 {
            font-size: 3em;
            background: linear-gradient(to right, #d14b71, #f28f33);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        #landing button {
            font-size: 1.25em;
            box-shadow: 5px 5px 5px #333;
            border: 0;
        }

        #landingBtn {
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

        #landingBtn::before {
            content: '';
            width: 0;
            height: 2.25em;
            border-radius: 30pt;
            position: absolute;
            top: 0;
            left: 0;
            background-image: linear-gradient(to right, #d14b71 0%, #f28f33 100%);
            color: #fff;
            transition: .5s ease;
            display: block;
            z-index: -1;
        }

        #landingBtn:hover::before {
            width: 9em;
           
        }

        #landingBtn:hover {
            transform: scale(1.1);
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid">
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top">
            <!-- <a class="navbar-brand" href="home.php">Max Heap Visualizer</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="mx-5">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="mx-5">
                        <a class="nav-link active" href="#deskripsi">Overview</a>
                    </li>
                    <!-- <li>
                        <a class="nav-link" href="#maxheap"> Max Heap Tree</a>
                    </li> -->
                    <li class="mx-5">
                        <a class="nav-link active" href="#implementation"> Implementation</a>
                    </li>
                    <li class="mx-5">
                        <a class="nav-link active" href="index.html">Visualization</a>
                    </li>
                    <li class="mx-5">
                        <a class="nav-link active" href="credits.php">Credits</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container-fluid p-5">
        <!-- Landing -->
        <div class="row frosted m-5 align-items-center" id="landing" style="font-family:alexandria">
            <div class="col-lg-6 col-12 d-flex flex-column justify-content-center align-items-center">
                <h2 class="text-center animate__animated animate__zoomIn">Heap Tree</h2>
                <br>
                <a href="index.html"><button id="landingBtn">Visualize <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>  
            <div class="col-lg-6 pe-5">
                <img src="assets/img/landing_icon.png" style="float:right; width: 450px">
            </div>
        </div>

        <!--untuk deskripsi-->
        <h2 class="text-center" id="deskripsi"><strong>Overview</strong></h2>
        <div class="row frosted mx-5 mb-5 p-5" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1500">
            <div class="col-lg-2 col-1"></div>
            <div class="col-lg-8 col-10">
                <p>A heap is a specialized tree-based data structure which is essentially an almost complete tree that satisfies the heap property: in a max heap, for any given node C, if P is a parent node of C, then the key (the value) of P is greater than or equal to the key of C. In a min heap, the key of P is less than or equal to the key of C.The node at the "top" of the heap (with no parents) is called the root node.</p>
                <br>
                <p>The heap is one maximally efficient implementation of an abstract data type called a priority queue, and in fact, priority queues are often referred to as "heaps", regardless of how they may be implemented. In a heap, the highest (or lowest) priority element is always stored at the root. However, a heap is not a sorted structure; it can be regarded as being partially ordered. A heap is a useful data structure when it is necessary to repeatedly remove the object with the highest (or lowest) priority, or when insertions need to be interspersed with removals of the root node.</p>
                <br>
                <p> A Heap is a special Tree-based data structure in which the tree is a complete binary tree. Since a heap is a complete binary tree, a heap with N nodes has log N height. It is useful to remove the highest or lowest priority element. It is typically represented as an array. There are two types of Heaps in the data structure.</p>
            </div>
        </div>

        <!--untuk maxheap-->
        <!-- <div class="row py-5" id="maxheap">
            <div class="col-lg-2 col-1"></div>
            <div class="col-lg-8 col-10">
                <h2 class="text-center"><strong>Max Heap</strong></h2>
                <br>
                <p> A max-heap is a complete binary tree in which the value in each internal node is greater than or equal to the values in the children of that node. Mapping the elements of a heap into an array is trivial: if a node is stored an index k, then its left child is stored at index 2k + 1 and its right child at index 2k + 2. A-Max Heap is a Complete Binary Tree. A-Max heap is typically represented as an array. The root element will be at Arr[0].</p>
                <br>
            </div>
        </div> -->

        <!--untuk implementasi dari maxheap-->
        <h2 class="text-center" id="implementation"><b>Implementation of Max Heap Tree</b></h2>
        <div class="row mx-5 mx-5 mb-5 pb-5 justify-content-center">
            <div class="col-lg-3 col-5 me-5 p-5 frosted" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1500">
                <img src="assets/img/landing_icon.png"class="py-3" style="width:100%">
                <h3 class="text-center">Priority Queue</h3>
                <p style="text-align: justify">Lorem ipsum dolor sit amet</p>
            </div>
            <div class="col-lg-3 col-5 me-5 p-5 frosted" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1500">
                <img src="assets/img/landing_icon.png"class="py-3" style="width:100%">
                <h3 class="text-center">Shortest Path</h3>
            </div>
            <div class="col-lg-3 col-5 me-5 p-5 frosted" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1500">
                <img src="assets/img/landing_icon.png" class="py-3" style="width:100%">
                <h3 class="text-center">Statistics</h3>
            </div>
        </div>
    </div>

    <script>
        AOS.init();
        var nav= document.querySelector('nav');
        window.addEventListener('scroll', function(){
            if (window.pageYOffset > 50){
                nav.classList.add("bg-dark");
            }
            else {
                nav.classList.remove("bg-dark");
            }
        });
    </script>
</body>
</html>
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
            /* background: url("assets/img/") no-repeat fixed;
            background-size: covers; */
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
        /* kolom */
        .kolom {
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 20px;
            margin-right: 20px;
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
    </style>
</head>
<body style="background-color: cyan;background-image:url('')">
    <!-- Navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand animate__animated animate__zoomIn" href="home.php" style="margin-left: 20px;">Max Heap Visualizer</a>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="btn btn-danger me-6 mt-2 mb-2" href="index.html">Max Heap Tree Visualization</a>
                    <a class="btn btn-warning me-6 mt-2 mb-2" href="#deskripsi" style="margin-left: 10px;">Description of Heap Tree</a>
                    <a class="btn btn-success me-6 mt-2 mb-2" href="#maxheap" style="margin-left: 10px;"> Max Heap Tree</a>
                    <a class="btn btn-info me-6 mt-2 mb-2" href="#implementation" style="margin-left: 10px;"> Implementation Max Heap</a>
                    <a class="btn btn-secondary me-6 mt-2 mb-2" href="credits.php" style="margin-left: 10px;">Credits</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid d-flex">
            <div class="row pt-3 d-flex justify-content-center" style="width:100%" style="background-color: black;">
            
                <div class="wrapper">
                    <!--untuk deskripsi-->
                    <section id="deskripsi" >
                        <div class="kolom">
                        <h2 style="margin-left: 450px;"><strong>Description Of Heap Tree</strong></h2>
                        <br>
                        <p>A heap is a specialized tree-based data structure which is essentially an almost complete tree that satisfies the heap property: in a max heap, for any given node C, if P is a parent node of C, then the key (the value) of P is greater than or equal to the key of C. In a min heap, the key of P is less than or equal to the key of C.The node at the "top" of the heap (with no parents) is called the root node.</p>
                        <br>
                        <p>The heap is one maximally efficient implementation of an abstract data type called a priority queue, and in fact, priority queues are often referred to as "heaps", regardless of how they may be implemented. In a heap, the highest (or lowest) priority element is always stored at the root. However, a heap is not a sorted structure; it can be regarded as being partially ordered. A heap is a useful data structure when it is necessary to repeatedly remove the object with the highest (or lowest) priority, or when insertions need to be interspersed with removals of the root node.</p>
                        <br>
                        <p> A Heap is a special Tree-based data structure in which the tree is a complete binary tree. Since a heap is a complete binary tree, a heap with N nodes has log N height. It is useful to remove the highest or lowest priority element. It is typically represented as an array. There are two types of Heaps in the data structure.</p>
                        <br>
                        </div>
                    </section>
                    <!--untuk maxheap-->
                    <section id="maxheap">
                        <div class="kolom">
                            
                            <h2 style="margin-left: 500px;"><strong>Max Heap Tree</strong></h2>
                            <br>
                            <p> A max-heap is a complete binary tree in which the value in each internal node is greater than or equal to the values in the children of that node. Mapping the elements of a heap into an array is trivial: if a node is stored an index k, then its left child is stored at index 2k + 1 and its right child at index 2k + 2. A-Max Heap is a Complete Binary Tree. A-Max heap is typically represented as an array. The root element will be at Arr[0].</p>
                            <br>
                               
                        </div>
                        <img src="" />
                    </section>
                    <!--untuk implementasi dari maxheap-->
                    <section id="implementation">
                        <div class="tengah">
                            <div class="kolom">
                                <br>
                                <h2 style="margin-left: 400px;"><b>Implementation of Max Heap Tree</b></h2>
                                <br>
                                <p> 
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
    
            </div>

</body>
</html>
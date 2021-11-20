<?php require "../components/head.php" ?>
<link rel="stylesheet" href="../styles/forum.css">
<link rel="stylesheet" href="../styles/article-posts.css">
</head>
   
<body>
    

<header class="jumbotron">
         <!-- NAVBAR -->
    <?php require "../components/navbar.php" ?>
        
            <section class="row d-block container-fluid ">

                <!-- SEARCHBOX -->

                <div class=" collapse d-md-none text-center" id="search">
                    <?php include  '../components/searchbox.php' ?>
                </div>

                <div class="text-center d-none d-md-block">
                    <?php include  '../components/searchbox.php' ?>
                </div>

                <h1 class="d-md-none swFont flex-grow-1 text-center my-1 display-5">POSTS</h1>

            </section>
     
    </header>

    <main role="main">

    <section class="all-posts">
    <?php include  '../components/article-post.php' ?>
    <?php include  '../components/reverse-article-post.php' ?>
    </section>
        
    </main>
   
    <?php require "../components/footer.php" ?>
   <?php require "../components/script.php" ?>
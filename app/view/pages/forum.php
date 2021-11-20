<?php require "../components/head.php" ?>
<link rel="stylesheet" href="../styles/forum.css">
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

                <h1 class="d-md-none swFont flex-grow-1 text-center my-1 display-5">FORUM</h1>

            </section>
     
    </header>

 
    <main role="main">

        <section class="row d-lg-none">
            <div class="btn-group col-4">
                <button type="button" class="btn topic-selected p-0 m-0 bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    GERAL
                </button>

                <ul class="dropdown-menu p-0">
                    <li><a class="dropdown-item" href="#">Geral</a></li>
                    <li><a class="dropdown-item" href="#">Personagens</a></li>
                    <li><a class="dropdown-item" href="#">Veículos</a></li>
                    <li><a class="dropdown-item" href="#">Planetas</a></li>
                    <li><a class="dropdown-item" href="#">Especies</a></li>
                    <li><a class="dropdown-item" href="#">Filmes</a></li>
                    <li><a class="dropdown-item" href="#">Series</a></li>
                </ul>
            </div>
            <div class="col-2 offset-5 text-end">
                <a href="./form.php">

                    <button type="button" class="btn btn-outline-sw  ">
                        <i class="bi bi-plus-lg "></i>
                    </button>
                </a>
            </div>
        </section>


        <section class="row d-none d-lg-block">
            <?php require "../components/typesbar.php" ?>

            <div class="px-5 mx-5 my-3 ">
                <a href="./form.php"><button type="button" class="btn btn-outline-sw swTitle">
                        CRIAR NOVA DISCUSSÃO
                    </button></a>
            </div>
        </section>

        <!-- POSTS -->
        <section class="my-3">
            <?php

         
            include '../../database/connection.php';

            $sql = "SELECT * FROM `questions` WHERE 1";
            $busca = mysqli_query($connection, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_question = $array['id_question'];
                $title = $array['title'];
                $theme = $array['theme'];
                $text = $array['text'];


            ?>
                <a href="./posts.php?id=<?php echo $id_question ?>">
                    <?php require '../components/previewposts.php' ?>
                </a>

            <?php } ?>
        </section>


    </main>


    <?php require "../components/footer.php" ?>
    <?php require "../components/script.php" ?>
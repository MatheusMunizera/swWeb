<?php require "../components/head.php" ?>
<link rel="stylesheet" href="../styles/forum.css">
<link rel="stylesheet" href="../styles/main-post.css">
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

        <div class="all-posts">
            <?php

            include '../../database/connection.php';

            $id = $_GET['id'];
            $sql = "SELECT * FROM `questions` WHERE `id_question` = $id";
            $busca = mysqli_query($connection, $sql);
            $array_questions = mysqli_fetch_array($busca);

            $id = $array_questions['id_question'];
            $title = $array_questions['title'];
            $theme = $array_questions['theme'];
            $text = $array_questions['text'];



            ?>
            <?php include  '../components/main-post.php' ?>



            <?php

            $sql = "SELECT * FROM `answers` WHERE `id_question` = $id";
            $busca = mysqli_query($connection, $sql);
            $cont = 2;
            while($array_answers = mysqli_fetch_array($busca)){

                $id_answer = $array_answers['id_answer'];
                $text_answer = $array_answers['text'];
               
                if ($cont % 2 == 0) {
            ?>
                <?php include  '../components/answer-post.php' ?>
                <?php }else{ ?>
                    	
                 <?php include  '../components/reverse-answer-post.php' ?>

                <?php } ?>


            <?php 
                 $cont++;
             } ?>

        </div>

    </main>

    <?php require "../components/footer.php" ?>
    <?php require "../components/script.php" ?>
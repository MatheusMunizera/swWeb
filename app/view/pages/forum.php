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

            <?php require "../components/sm-forum-typesbar.php" ?>

            <div class="col-2 offset-5 text-end">
                <a href="./form.php">

                    <button type="button" class="btn btn-outline-sw  ">
                        <i class="bi bi-plus-lg "></i>
                    </button>
                </a>
            </div>
        </section>


        <section class="row d-none d-lg-block">
            <?php require "../components/lg-forum-typesbar.php" ?>

            <div class="px-5 mx-5 my-3 ">
                <a href="./form.php"><button type="button" class="btn btn-outline-sw swTitle">
                        CRIAR NOVA DISCUSSÃO
                    </button></a>
            </div>
        </section>

        <!-- POSTS -->
        <section class="my-3">
                    <?php require '../../controller/questions.php' ?>
        </section>


    </main>


    <?php require "../components/footer.php" ?>
    <?php require "../components/script.php" ?>
<?php require "../components/head.php" ?>
<link rel="stylesheet" href="../styles/databank.css">
<link rel="stylesheet" href="../styles/imageCard.css">
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
            <?php include  '../components/userModal.php' ?>
            <h1 class="d-md-none swFont flex-grow-1 text-center my-1 display-5">DATABANK</h1>

        </section>
    </header>

    <main role="main">
        <section class="row d-lg-none">
            <?php require "../components/mobileTypesbar.php" ?>
        </section>

        <section class="row d-none d-lg-block ">
            <?php require "../components/typesbar.php" ?>
        </section>

        <!-- bank -->
        <section class="text-center">
           <a href="../pages/info.php">

           
        <?php require "../components/bankItem.php" ?>
        </a>
        </section>
    </main>

    <?php require "../components/footer.php" ?>
    <?php require "../components/script.php" ?>
<?php require "../components/head.php" ?>
<link rel="stylesheet" href="../styles/info.css">
</head>

<body>

    <header class="jumbotron">
        <!-- NAVBAR -->
        <?php require "../components/navbar.php" ?>

        <section class="row d-block container-fluid ">

            <!-- SEARCHBOX -->

            <!-- <div class=" collapse d-md-none text-center" id="search">
                <?php include  '../components/searchbox.php' ?>
            </div>

            <div class="text-center d-none d-md-block">
                <?php include  '../components/searchbox.php' ?>
            </div> -->

            <h1 class="d-md-none swFont flex-grow-1 text-center my-1 display-5">INFO</h1>

            <?php include  '../components/userModal.php' ?>

        </section>

    </header>

    <!-- Page content -->

    <?php

    $type = $_GET['type'];
    $id = $_GET['id'];
    if($type == 'geral'){$type = "characters";}
    $url = 'https://Matheusmunizera.github.io/swAPI/api/' . $type . '/' . $id . '.json';

    $body = file_get_contents($url);
    $item = json_decode($body);

    ?>

    <div class="card" style="">
        <div class="row g-0">
            <div class="col-md-6 text-center">
                <img src="<?php echo $item->image ?>" class="img-fluid img-desk" alt="cringe">
            </div>
            <div class="col-md-6 bg-desk">
                <div class="card-body">
                    <h5 class="card-title swFont"><?php echo $item->name ?></h5>
                    <p class="card-text swText pt-0"><?php echo $item->resume ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="card p-3">
        <p class="segment-title text-xxl-start swFont">DADOS</p>
        <p class="btn-group" role="group">
            <button class="btn btn-secondary title swSeg seg" data-bs-toggle="collapse" href="#tecnico" role="button" aria-expanded="false" aria-controls="tecnico"><a>Técnico</a></button>
            <button class="btn btn-secondary title swSeg seg" type="button" data-bs-toggle="collapse" data-bs-target="#Prod" aria-expanded="false" aria-controls="Prod"><a>Produção</a></button>
            <button class="btn btn-secondary title swSeg seg" type="button" data-bs-toggle="collapse" data-bs-target="#Ideol" aria-expanded="false" aria-controls="Ideol"><a>Ideológico</a></button>
        </p>
        <?php 
      

        if ($type == "characters") {
            require "../components/characters.php";
        }
        if ($type == "species") {
            require "../components/species.php";
        }
        if ($type == "planets") {
            require "../components/planets.php";
        }
        if ($type == "vehicles") {
            require "../components/vehicles.php";
        }
        if ($type == "films") {
            require "../components/films.php";
        }
        if ($type == "series") {
            require "../components/series.php";
        } ?>

    </div>

    <?php require "../components/footer.php" ?>
    <script src="../../controller/info.js"></script>
    <?php require "../components/script.php" ?>
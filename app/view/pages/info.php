<?php require "../components/head.php" ?>
<link rel="stylesheet" href="../styles/info.css">
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

                <h1 class="d-md-none swFont flex-grow-1 text-center my-1 display-5">INFO</h1>

            </section>
     
    </header>

    <!-- Page content -->
    <main class="container">
        <section class="card" >
            <div class="row g-0">
                <figure class="col-md-6 text-center">
                    <img src="../../assets/images/databank_ackbar_01_169_55137220.png" class="img-fluid img-desk" alt="...">
                </figure>
                <article class="col-md-6 bg-desk">
                    <div class="card-body">
                        <h5 class="card-title swTitle">Ackbar</h5>
                        <p class="card-text swText ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sad. At vero eos et...</p>
                    </div>
                </article>
            </div>
        </section>

        <section class="card p-3">
            <p class="segment-title text-xxl-start swFont">DADOS</p>
            <p class="btn-group" role="group">
                <button class="btn btn-secondary swTitle swSeg seg" data-bs-toggle="collapse" href="#tecnico" role="button" aria-expanded="false" aria-controls="tecnico"><a>Técnico</a></button>
                <button class="btn btn-secondary swTitle swSeg seg" type="button" data-bs-toggle="collapse" data-bs-target="#Prod" aria-expanded="false" aria-controls="Prod"><a>Produção</a></button>
                <button class="btn btn-secondary swTitle swSeg seg" type="button" data-bs-toggle="collapse" data-bs-target="#Ideol" aria-expanded="false" aria-controls="Ideol"><a>Ideológico</a></button>
            </p>
            <article class="row">
                <div class="col">
                    <div class="collapse multi-collapse swText" id="tecnico">
                        <div class="card card-body swText">
                            Informações Técnicas sobre o individuo, planeta ou veiculo.
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="collapse multi-collapse" id="Prod">
                        <div class="card card-body swText">
                            Informações Produção sobre o individuo, planeta ou veiculo.
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="collapse multi-collapse" id="Ideol">
                        <div class="card card-body swText">
                            Informações Ideológicas sobre o individuo, planeta ou veiculo.
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <?php require "../components/footer.php" ?>
    <script src="../../controller/info.js"></script>
   <?php require "../components/script.php" ?>
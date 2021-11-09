<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/info.css">
    <link rel="stylesheet" href="../styles/search.css">
    <link rel="stylesheet" href="../styles/navbar.css"> 
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1688bd0752.js" crossorigin="anonymous"></script>


    <title>Tela Info</title>
</head>

<!-- Nav-Bar -->

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
        <section class="card" style="">
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
   


    <script src="/app/controller/posts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>
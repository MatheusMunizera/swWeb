

<?php require "../components/head.php" ?>
<link rel="stylesheet" href="../styles/home.css">
 <link rel="stylesheet" href="../styles/forum.css">
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

                <?php include  '../components/userModal.php' ?>
            </section>
     
    </header>

    <main >
<div class="container-fluid">
    <section class="news row my-5">
        <h4 class="col text-left ">
            Ultimas atualizações 
        </h4>
    </section>


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner row w-100 mx-auto">
            <div class="carousel-item col-md-4 active">
              <a href="https://starwarsbringhomethebountysweepstakes.com/" class="card">
                <img class="card-img-top img-fluid" src="../../assets/images/bring.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Guerra nas estrelas traz para casa a recompensa:
                    sorteios do Starcruiser galáctico</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </a>
            </div>
            <div class="carousel-item col-md-4">
              <a href="https://www.youtube.com/watch?v=rOJ1cw6mohw" class="card">
                <img class="card-img-top img-fluid" src="../../assets/images/boba.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Tensão está no ar em novo teaser de The Book of Boba Fett.</p>
                  <p>Clique e Assista</p>
                  <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
                </div>
              </a>
            </div>
            <div class="carousel-item col-md-4">
              <a href="https://www.disneyplus.com/pt-br/series/star-wars-visions/5AiiTRJ7OaKg" class="card">
                <img class="card-img-top img-fluid" src="../../assets/images/vision.jpeg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Conheça os episódios de Star Wars: Visions</p>
                  <p class="card-text"><small class="text-muted">Last updated 20 mins ago</small></p>
                </div>
              </a>
            </div>
                  
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
        </div>
     
      <section class="p-5 bg-stars">
            <figure class="text-center" >
                <img class="img-fluid p-5 "src="../../assets/images/eagames.png" alt="eagames">
            </figure>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <a href="https://www.ea.com/pt-br/games/starwars/squadrons" class="carousel-item active">
                  <img class="d-block w-100" src="../../assets/images/squadrons.jfif" alt="First slide">
                </a>
                <a href="https://www.ea.com/pt-br/games/starwars/jedi-fallen-order" class="carousel-item">
                  <img class="d-block w-100" src="../../assets/images/jedi.jpg" alt="Second slide">
                </a>
                <a href="https://www.ea.com/pt-br/games/star-wars/star-wars-battlefront" class="carousel-item">
                  <img class="d-block w-100" src="../../assets/images/batlefront.jpg" alt="Third slide">
                </a>
              </div>

              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
            </div>

          
      </section>


      <section class="news row my-5">
        <h4 class="col text-left ">
            Extras
        </h4>
    </section>

    <div class="card-group m-4 p-2 ">
        <a href="https://www.disneyplus.com/pt-br/login" class="card">
          <img src="../../assets/images/disney.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Disney +</h5>
            <p class="card-text">Venha assistir os filmes e séries pertencentes ao universo de Star Wars </p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </a>
        <a href="https://www.starwarscelebration.com/" class="card">
          <img src="../../assets/images/celebration.jfif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Star Wars Celebration</h5>
            <p class="card-text">Star Wars Celebration uma convenção de fãs afim de celebrar a franquia Star Wars.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </a>
        <a href="https://olhardigital.com.br/2021/03/30/cinema-e-streaming/star-wars-the-bad-batch-ganha-trailer-e-data-de-estreia-no-disney/" class="card">
          <img src="../../assets/images/thebad.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">News BadBatch</h5>
            <p class="card-text">Star Wars The Bad Batch ganha trailer e data de estreia no Disney+</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </a>
      </div>

    

</div>



</main>

 <?php require "../components/footer.php" ?>
 <script src="main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <?php require "../components/script.php" ?>

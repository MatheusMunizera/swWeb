

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

                <div class=" collapse d-md-none text-center" id="search">
                    <?php include  '../components/searchbox.php' ?>
                </div>

                <div class="text-center d-none d-md-block">
                    <?php include  '../components/searchbox.php' ?>
                </div>

                <?php include  '../components/userModal.php' ?>
            </section>
     
    </header>

<main >
<div class="container-fluid">
    <section class="news row my-3">
        <h4 class="col text-left ">
            Ultimas atualizações 
        </h4>
    </section>


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner row w-100 mx-auto">
            <div class="carousel-item col-md-4 active">
              <div class="card">
                <img class="card-img-top img-fluid" src="../../assets/images/bring.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="../../assets/images/boba.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="../../assets/images/vision.jpeg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
         
         
          
         
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
     

      <section class="p-5 bg-stars">
            <figure class="text-center" >
                <img class="img-fluid p-5 "src="../home/../../assets/images/eagames.png" alt="eagames">
            </figure>

          <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <a href="https://www.ea.com/pt-br/games/starwars/squadrons" class="carousel-item active">
                <img  src="../../assets/images/squadrons.jfif" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                 
                </div>
            </a>
              <a href="https://www.ea.com/pt-br/games/starwars/jedi-fallen-order" class="carousel-item">
                <img  src="../../assets/images/jedi.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                 
                </div>
            </a>
              <a href="https://www.ea.com/pt-br/games/star-wars/star-wars-battlefront" class="carousel-item">
                <img  src="../../assets/images/batlefront.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                 
                </div>
            </a>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
      </section>


      <section class="news row my-3">
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
           
          </div>
        </a>
        <a href="https://www.starwarscelebration.com/" class="card">
          <img src="../../assets/images/celebration.jfif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Star Wars Celebration</h5>
            <p class="card-text">Star Wars Celebration uma convenção de fãs afim de celebrar a franquia Star Wars.</p>
           
          </div>
        </a>
        <a href="https://olhardigital.com.br/2021/03/30/cinema-e-streaming/star-wars-the-bad-batch-ganha-trailer-e-data-de-estreia-no-disney/" class="card">
          <img src="../../assets/images/thebad.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">News BadBatch</h5>
            <p class="card-text">Star Wars The Bad Batch ganha trailer e data de estreia no Disney+</p>
           
          </div>
        </a>
      </div>

    

</div>


</main>

 <?php require "../components/footer.php" ?>
   <?php require "../components/script.php" ?>

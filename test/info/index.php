<!DOCTYPE html>
<html lang="pt-br">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1688bd0752.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    

    <title>Tela Info</title>
</head>

<!-- Nav-Bar -->
<body>
    <nav class="navbar navbar-dark bg-black fixed-top d-block position-sticky text-center ">
        <div class="container-fluid">
            <button type="button" class="navbar-toggler p-0 d-md-none " style="border-color: transparent;" data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="row">
                <div class="col">
                    <a href="https://github.com/matheusMunizera" class="icon-grey">
                        <i class="bi bi-github p-0 d-none d-md-flex"></i>
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.youtube.com/channel/UCih5H8dNtieYjGFSnYtgZzA/featured" class="icon-grey">
                        <i class="bi bi-youtube p-0 d-none d-md-flex"></i>
                    </a>
                </div>
                <div class="col">
                    <a href="https://discord.gg/hrFKyrrDRH" class="icon-grey">
                    <i class="bi bi-discord p-0 d-none d-md-flex"></i>
                    </a>
                </div>
            </div>
            <a href="index.php" class="navbar-brand flex-grow-1 swFont" id="home">
                <h1>swweb</h1>
            </a>
            <a class="btn mx-0 px-2 d-md-none" data-bs-toggle="collapse" href="#search" role="button" aria-expanded="false" aria-controls="search">
                <i class="bi bi-search icon-grey" style="font-size: 25px;"></i>
                
            </a>
      
            <a class="btn mx-0 px-2 d-none d-md-flex" >
                 <i class="bi bi-info-circle-fill icon-grey"></i>
            </a>
          
        <div class="m-0">
        <button type="button" class="btn m-0 p-0 " data-bs-toggle="modal" data-bs-target="#userModal">
                <i class="bi bi-person-fill icon-grey" ></i>
            </button>
        </div>
            
        </div>
    <div class="row  d-none d-md-flex">
    <ul class="nav swTitle  bar  m-0 p-0 justify-content-center text-uppercase">
            <li class="nav-item   ">
                <a class="nav-link  text-reset" href="#">Home</a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link text-reset" href="#">Quiz</a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link  text-reset" href="#">Databank</a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link active text-reset" href="#">Forum</a>
            </li>
        </ul>
    </div>
    </nav>
    <header class="jumbotron">
        <div class="container-fluid">
            <h1 class="swFont flex-grow-1 text-center my-1 display-5">INFO</h1>
        </div>

        <div class="collapse d-md-none text-center" id="search"> 

            <form class=" form-inline my-3">

  
                <input class=" searchbox form-control mr-sm-2" type="search" placeholder="SEARCH"
                    aria-label="SEARCH">
                <button class="btn btn-search p-0 my-2 " type="submit"><i class=" bi bi-arrow-right-circle-fill"></i></button>
                
            </form>
        </div>

        <div class="text-center d-none d-md-block">
            <form class=" form-inline my-3">

  
                <input class=" searchbox form-control mr-sm-2" type="search" placeholder="SEARCH"
                    aria-label="SEARCH">
                <button class="btn btn-search p-0 my-2 " type="submit"><i class=" bi bi-arrow-right-circle-fill"></i></button>
                
            </form>
        </div>

    </header>

    <!-- Page content -->

    <?php 
    
        $type = $_GET['type'];
        $id = $_GET['id'];
        $url = 'https://Matheusmunizera.github.io/swAPI/api/'.$type.'/'.$id.'.json';




        $body = file_get_contents($url);
        $item = json_decode($body);
    
    ?> 

    <div class="card" style="">
        <div class="row g-0">
        <div class="col-md-6 text-center">
            <img src="<?php echo $item->image?>" class="img-fluid img-desk" alt="cringe">
        </div>
        <div class="col-md-6 bg-desk">
            <div class="card-body">
            <h5 class="card-title swFont"><?php echo $item->name?></h5>
            <p class="card-text swText pt-0"><?php echo $item->resume?></p>
            </div>
        </div>
        </div>
    </div>

      <div class="card p-3">
        <p class = "segment-title text-xxl-start swFont">DADOS</p>
        <p class= "btn-group" role="group">
        <button class="btn btn-secondary title swSeg seg" data-bs-toggle="collapse" href="#tecnico" role="button" aria-expanded="false" aria-controls="tecnico"><a>Técnico</a></button>
        <button class="btn btn-secondary title swSeg seg" type="button" data-bs-toggle="collapse" data-bs-target="#Prod" aria-expanded="false" aria-controls="Prod"><a>Produção</a></button>
        <button class="btn btn-secondary title swSeg seg" type="button" data-bs-toggle="collapse" data-bs-target="#Ideol" aria-expanded="false" aria-controls="Ideol"><a>Ideológico</a></button>
      </p>
      
      <?php if($type=="characters"){ require "./characters.php";}?>
      <?php if($type=="species"){ require "./species.php";}?>
      <?php if($type=="planets"){ require "./planets.php";}?>
      <?php if($type=="vehicles"){ require "./vehicles.php";}?>
      <?php if($type=="films"){ require "./films.php";}?>
      <?php if($type=="series"){ require "./series.php";}?>
      
      
      
      


      
      
</div>
</div>

    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <!-- Meu JS -->
    <link rel="script" href="main.js">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>

</html>
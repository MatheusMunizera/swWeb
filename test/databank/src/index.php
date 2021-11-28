<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Meu CSS  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/search.css">
    <link rel="stylesheet" href="./css/navbar.css"> 
    <link rel="stylesheet" href="./css/imageCard.css"> 
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Databank</title>
    <link rel="shortcut icon" href="swWEB.ico" type="image/x-icon">
</head>

<body>
    <!-- NAVBAR -->
    <?php require "components/navbar.php" ?>
    <header class="jumbotron">
        <div class="container-fluid">
            <div class="row d-block ">
                <!-- SEARCHBOX -->
                <div class=" collapse d-md-none text-center" id="search">
                    <?php include  'components/searchbox.php' ?>
                </div>
                <div class="text-center d-none d-md-block">
                    <?php include  'components/searchbox.php' ?>
                </div>
                <h1 class="d-md-none swFont flex-grow-1 text-center my-1 display-5">Databank</h1>
            </div>
        </div>
    </header>

    <main role="main">
        <section class="row d-lg-none">
            <?php require "components/mobileTypesbar.php" ?> 
        </section>
        <section class="row d-none d-lg-block">
            <?php require "components/typesbar.php" ?>            
        </section>

        <!-- bank -->
        <section class="my-3"></section>
            <?php require "components/bankItem.php" ?>            
        </section>         
        </li>
    </main>
    
    <?php require "components/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>
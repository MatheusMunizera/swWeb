<?php require "../components/head.php" ?>
<link rel="stylesheet" href="../styles/quiz.css">
</head>

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

                <h1 class="d-md-none swFont flex-grow-1 text-center my-1 display-5">QUIZ</h1>

                <?php include  '../components/userModal.php' ?>
            </section>
     
    </header>

    <main role=main class="container">
       


        <section id='container'>

                <figure>
                  <img  id="title"src="../../assets/images/databank_ackbar_01_169_55137220.png" alt="">
               </figure>
          
            <br />
            <article id='quiz' class="text-white" ></article>
            <button class='button btn' id='next'><a href='#'>Próxima</a></button>
            <button class='button' id='prev'><a href='#'>Anterior</a></button>
            <button class='button' id='start'> <a href='#'>Reiniciar</a></button>
        </section>

        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src='questions.json'></script>
        <script type='text/javascript' src='jsquiz.js'></script>
    </main>

    
    <?php require "../components/footer.php" ?>
    
    <script src="../../controller/quiz.js"></script>
   <?php require "../components/script.php" ?>
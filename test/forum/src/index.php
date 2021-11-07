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

  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forum</title>
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

                <h1 class="d-md-none swFont flex-grow-1 text-center my-1 display-5">FORUM</h1>
            </div>
        </div>
    </header>

    <main role="main">

        <section class="row d-lg-none">
            <div class="btn-group col-4">
                <button type="button" class="btn topic-selected p-0 m-0 bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    GERAL
                </button>

                <ul class="dropdown-menu p-0">
                    <li><a class="dropdown-item" href="#">Geral</a></li>
                    <li><a class="dropdown-item" href="#">Personagens</a></li>
                    <li><a class="dropdown-item" href="#">Veículos</a></li>
                    <li><a class="dropdown-item" href="#">Planetas</a></li>
                    <li><a class="dropdown-item" href="#">Especies</a></li>
                    <li><a class="dropdown-item" href="#">Filmes</a></li>
                    <li><a class="dropdown-item" href="#">Series</a></li>
                </ul>
            </div>
            <div class="col-2 offset-5 text-end">
                <button type="button" class="btn btn-outline-sw  " data-bs-toggle="modal" data-bs-target="#createPostModal">
                    <i class="bi bi-plus-lg "></i>
                </button>
            </div>
        </section>


        <section class="row d-none d-lg-block">
            <?php require "components/typesbar.php" ?>

            <div class="px-5 mx-5 my-3 ">
                <button type="button" class="btn btn-outline-sw swTitle " data-bs-toggle="modal" data-bs-target="#createPostModal">
                    CRIAR NOVA DISCUSSÃO
                </button>
            </div>
        </section>

        <!-- POSTS -->
        <section class="my-3" href="posts.php">
            <a href="posts.php">
                <?php require 'components/previewposts.php' ?>

                <?php require 'components/previewposts.php' ?>
                <?php require 'components/previewposts.php' ?>
                <?php require 'components/previewposts.php' ?>
            </a>
        </section>






        <!-- Modal Post -->
        <div class="modal fade " id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title swFont" id="createPostModalLabel">Criar nova discussão</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">




                        <form action="index.php" method="post">
                            <div class="form-group">
                                <label for="title" class="swTitle" style="color: #ffc500;">Titulo:</label>
                                <input id="title" name="title" type="text" class="form-control" placeholder="Insira o titulo do post">
                                <div class="invalid-feedback"> </div>
                            </div>


                            <div class="form-group">
                                <label for="theme" class="swTitle" style="color: #ffc500;">Tema:</label>
                                <select id="theme" name="theme" class="form-control" required>
                                    <option>Geral</option>
                                    <option>Personagens</option>
                                    <option>Veículos</option>
                                    <option>Planetas</option>
                                    <option>Especies</option>
                                    <option>Filmes</option>
                                    <option>Series</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="subject" class="swTitle" style="color: #ffc500;">Assunto:</label>
                                <input id="subject" name="subject" type="text" class="form-control " placeholder="Insira um assunto ao post" required>
                            </div>

                            <div class="form-group">
                                <label for="text" class="swTitle" style="color: #ffc500;">Descrição:</label>
                                <textarea id="text" name="text" type="text" class="form-control" rows="8" placeholder="Nos diga o que pensa..." required></textarea>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-outline-sw">Save changes</button>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>













    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>
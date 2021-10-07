<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Meu CSS  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/search.css">

    <!-- Bootstrap JS  -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Jquery -->
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>

    <!-- Meu JS -->
    <link rel="script" href="main.js">



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forum</title>
    <link rel="shortcut icon" href="swWEB.ico" type="image/x-icon">

</head>

<body>

    <!-- NAVBAR -->
    <?php require "components/navbar.php"?>

    <header class="jumbotron">
        <div class="container-fluid">
            <div class="row d-block ">

                <!-- SEARCHBOX -->
                <div class=" collapse   text-center" id="search">
                    <?php include  'components/searchbox.php' ?>
                </div>



                <h1 class="d-md-none swFont flex-grow-1 text-center my-1 display-5">FORUM</h1>
            </div>
        </div>
    </header>

    <main role="main">

        <section class="row">
            <div class="btn-group col-4">
                <button type="button" class="btn topic-selected p-0 m-0 bg-transparent dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
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
            <div class="col-2 offset-5">
                <button type="button" class="btn btn-outline-sw  " data-bs-toggle="modal"
                    data-bs-target="#createPostModal">
                    <i class="bi bi-plus-lg "></i>
                </button>
            </div>
        </section>

        <!-- POSTS -->
        <?php require 'components/posts.php'?>



        <!-- Modal Post -->
        <div class="modal fade " id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title swFont" id="createPostModalLabel">Criar nova discussão</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <?php 
                            echo ($_SERVER['REQUEST_METHOD']);
                            echo ($title);
                            echo ($_POST['title']);
                        
                            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                $title = $_POST['title'];

                                if($title == ""){
                                    $erro_title = 'Insira um titulo válido';
                                }
                        }
                        ?>


                        <form action="index.php" method="post">
                            <div class="form-group">
                                <label for="title" class="swTitle" style="color: #ffc500;">Titulo:</label>
                                <input id="title" name="title" type="text" class="form-control"
                                    placeholder="Insira o titulo do post"  >
                                <div class="invalid-feedback"> <?php echo $erro_title ?></div>
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
                                <input id="subject" name="subject" type="text" class="form-control "
                                    placeholder="Insira um assunto ao post" required>
                            </div>

                            <div class="form-group">
                                <label for="text" class="swTitle" style="color: #ffc500;">Descrição:</label>
                                <textarea id="text" name="text" type="text" class="form-control" rows="8"
                                    placeholder="Nos diga o que pensa..." required></textarea>
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

















</body>

</html>
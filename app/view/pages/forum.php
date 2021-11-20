<?php require "../components/head.php" ?>
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

                <h1 class="d-md-none swFont flex-grow-1 text-center my-1 display-5">FORUM</h1>

            </section>
     
    </header>

    <main role="main">

        <section class="row d-lg-none">
            <nav class="btn-group col-4">
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
            </nav>
            <section class="col-2 offset-5 text-end">
                <button type="button" class="btn btn-outline-sw  " data-bs-toggle="modal" data-bs-target="#createPostModal">
                    <i class="bi bi-plus-lg "></i>
                </button>
            </section>
        </section>


        <section class="row d-none d-lg-block">
            <?php require "../components/typesbar.php" ?>

            <section class="px-5 mx-5 my-3 ">
                <button type="button" class="btn btn-outline-sw swTitle " data-bs-toggle="modal" data-bs-target="#createPostModal">
                    CRIAR NOVA DISCUSSÃO
                </button>
            </section>
        </section>

        <!-- POSTS -->
        <section class="my-3" href="posts.php">
            <a href="posts.php">
                <?php require '../components/previewposts.php' ?>

                <?php require '../components/previewposts.php' ?>
                <?php require '../components/previewposts.php' ?>
                <?php require '../components/previewposts.php' ?>
            </a>
        </section>






        <!-- Modal Post -->
        <section class="modal fade " id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title swFont" id="createPostModalLabel">Criar nova discussão</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">




                        <form action="forum.php" method="post">
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
        </section>



    </main>


    <?php require "../components/footer.php" ?>
    <?php require "../components/script.php" ?>
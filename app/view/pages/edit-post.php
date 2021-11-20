<?php

include '../../database/connection.php';

$id = $_GET['id'];

?>

<?php require "../components/head.php" ?>
<link rel="stylesheet" href="../styles/forum.css">
</head>

<body>

    <!-- NAVBAR -->
    <?php require "../components/navbar.php" ?>


    <div class="container ">
        <div class="jumbotron container-fluid m-3">
            <h1 class="swFont"> Editando seu post</h1>
        </div>


        <form action="../../controller/_update_post.php" method="post">
            <?php
            $sql = "SELECT * FROM `questions` WHERE id_question = $id";
            $buscar = mysqli_query($connection, $sql);

            while ($array = mysqli_fetch_array($buscar)) {

                $id_question = $array['id_question'];
                $title = $array['title'];
                $theme = $array['theme'];
                $text = $array['text'];


            ?>
                <div class="form-group">
                    <label for="title" class="swTitle d-block" style="color: #ffc500;">Titulo:
                        <div>
                            <p class="swText text-muted">Seja criativo, imagine que esteja perguntando algo a alguém</p>
                        </div>
                    </label>
                    <input id="title" name="title" type="text" class="form-control" placeholder="Exemplo: Como surgiu o nome han solo?" value="<?php echo $title ?>" >
                    <input id="id" name="id_question" type="number" class="d-none" hidden  value="<?php echo $id ?>" >
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group my-2">
                    <label for="theme" class="swTitle" style="color: #ffc500;">Tema:</label>
                    <select id="theme" name="theme" class="form-control" >
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
                    <label for="text" class="swTitle d-block" style="color: #ffc500;">Descrição:
                        <div>
                            <p class="swText text-muted">Você pode detalhar melhor sua pergunta ou detalhar melhor sua teoria</p>
                        </div>

                    </label>
                    <textarea id="text" name="text" type="text" class="form-control" rows="8" placeholder="Han solo foi um apelidado com esse nome pois..." ><?php echo $text ?></textarea>
                </div>
                        
                <div class="modal-footer">
                    <a href="../pages/forum.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                    <button type="submit" class="btn btn-outline-sw">Atualizar</button>

                </div>
                <?php } ?>
        </form>
    </div>
</body>

<?php require "../components/footer.php" ?>
    <?php require "../components/script.php" ?>
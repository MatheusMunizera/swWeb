<?php   
include_once("../../model/question.php");
session_start(); ?>
<?php require "../components/head.php" ?>
<link rel="stylesheet" href="../styles/forum.css">
</head>

<body>

    <!-- NAVBAR -->
    <?php require "../components/navbar.php" ?>

    <?php
  
 
    
    $id = $_SESSION["obj_question"]->getId();
    $title = $_SESSION["obj_question"]->getTitle();
    $theme = $_SESSION["obj_question"]->getTheme();
    $text = $_SESSION["obj_question"]->getText();
    ?>

     <div class="container ">
        <div class="jumbotron container-fluid m-3">
            <h1 class="swFont"> Editando seu post</h1>
        </div> 


         <form action="../../controller/questions.php" method="post">
         
                <div class="form-group">
                    <label for="title" class="swTitle d-block" style="color: #ffc500;">Titulo:
                        <div>
                            <p class="swText text-muted">Seja criativo, imagine que esteja perguntando algo a alguém</p>
                        </div>
                    </label>
                    <input id="title" name="title" type="text" class="form-control" placeholder="Exemplo: Como surgiu o nome han solo?" value="<?php echo $title?>" >
                    <input id="id" name="id" type="number" class="d-none" hidden  value="<?php echo $id ?>" >
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group my-2">
                    <label for="theme" class="swTitle" style="color: #ffc500;">Tema:</label>
                    <select id="theme" name="theme" class="form-control" >
                        <option><?php echo $theme ?></option>
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
                    <button type="submit" name="save-edit" class="btn btn-outline-sw">Atualizar</button>

                </div>

        </form>
    </div> 
</body>

<?php require "../components/footer.php" ?>
    <?php require "../components/script.php" ?>
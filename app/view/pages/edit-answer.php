<?php
include_once("../../model/answer.php");

//session_start(); ?>

<?php require "../components/head.php" ?>
<link rel="stylesheet" href="../styles/forum.css">
</head>

<body>

    <!-- NAVBAR -->
    <?php require "../components/navbar.php" ?>

    <?php

    $id_answer = $_SESSION["obj_answer"]->getId();
    $id_question = $_SESSION["obj_answer"]->getIdQuestion();
    $text = $_SESSION["obj_answer"]->getText();
    ?>
    <div class="container ">
        <div class="jumbotron container-fluid m-3">
            <h1 class="swFont"> Editando sua resposta</h1>
            <?php include  '../components/userModal.php' ?>
        </div>


        <form action="../../controller/answers.php" method="post">
           
                <div class="form-group">
                    <label for="text" class="swTitle d-block" style="color: #ffc500;">Resposta:

                    </label>
                    <textarea id="text" name="text" type="text" class="form-control" rows="8" placeholder="Han solo foi um apelidado com esse nome pois..."><?php echo $text ?></textarea>
                    <input id="id" name="id_answer" type="number" class="d-none" hidden value="<?php echo $id_answer ?>">
                    <input id="id_question" name="id_question" type="number" class="d-none" hidden value="<?php echo $id_question ?>">
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
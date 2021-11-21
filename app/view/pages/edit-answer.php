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
            <h1 class="swFont"> Editando sua resposta</h1>
        </div>


        <form action="../../controller/_update_answer.php" method="post">
            <?php
            $sql = "SELECT * FROM `answers` WHERE id_answer = $id";
            $buscar = mysqli_query($connection, $sql);

            while ($array = mysqli_fetch_array($buscar)) {

                $id_question = $array['id_question'];
                $id_answer = $array['id_answer'];
                $text = $array['text'];


            ?>
            
                <div class="form-group">
                    <label for="text" class="swTitle d-block" style="color: #ffc500;">Resposta:
                    
                    </label>
                    <textarea id="text" name="text" type="text" class="form-control" rows="8" placeholder="Han solo foi um apelidado com esse nome pois..." ><?php echo $text ?></textarea>
                    <input id="id" name="id_answer" type="number" class="d-none" hidden  value="<?php echo $id_answer ?>" >
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
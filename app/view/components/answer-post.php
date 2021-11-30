<div class="container ">
    <div class="row m-2 flex-row-reverse pb-5 mb-5 ">
        <div class="col-4 p-0 col-sm-2 align-self-start text-center ">
            <i class="bi bi-person-circle" style="font-size: 50px; color:#ffc500;"></i>
            <h6 class="swText p-0 text-center text-break text-capitalize"> <?php echo $username ?></h6>
            <?php
            if (empty($_SESSION['obj_user']) == 1) {
                $userLogged = "";
            } else {
                $userLogged = $_SESSION["obj_user"]->getIdUser();

                if ($userLogged == $id_user || $userLogged == 10) { ?>
                    <form action="../../controller/answers.php" method="POST">
                        <input id="id_question" name="id_question" type="number" class="d-none" hidden value="<?php echo $id_question ?>">
                        <input id="id_answer" name="id_answer" type="number" class="d-none" hidden value="<?php echo $id_answer ?>">

                        <button type="submit" name="edit" class="d-none d-md-inline btn btn-outline-sw m-0">Editar</button>
                        <button type="submit" name="delete" class="d-none d-md-inline btn  m-0 m-2 btn-danger">Excluir</button>
                    </form>

            <?php }
            } ?>


        </div>
        <div class="col  p-0 align-self-center text-end my-3">
            <?php
            if (empty($_SESSION['obj_user']) == 1) {
                $userLogged = "";
            } else {
                $userLogged = $_SESSION["obj_user"]->getIdUser();

                if ($userLogged == $id_user || $userLogged == 10) { ?>
                    <form action="../../controller/answers.php" method="POST">
                        <input id="id_question" name="id_question" type="number" class="d-none" hidden value="<?php echo $id_question ?>">
                        <input id="id_answer" name="id_answer" type="number" class="d-none" hidden value="<?php echo $id_answer ?>">
                        <button type="submit" name="edit" class="btn btn-outline-sw float-end d-md-none">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button type="submit" name="delete" class="btn btn-outline-sw float-end d-md-none mx-2">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
            <?php }
            } ?>


            <div class="p-2 text-break img-anexada d-none d-md-flex swText bg-clear-grey">
                <?php echo $text ?>
        </div>
        </div>

        <div class="row">

            <div class="p-2 text-break img-anexada d-md-none m-0 swText bg-clear-grey">
                <?php echo $text ?>
        </div>


        </div>

    </div>
</div>
<div class="container ">
    <div class="row m-2 pb-5 mb-5">
        <div class="col-4 p-0 col-sm-2 align-self-start text-center ">
            <i class="bi bi-person-circle" style="font-size: 50px; color:#ffc500;"></i>
            <h6 class="swText p-0 text-center text-break"> Username</h6>
            <a href="../pages/edit-answer.php?id=<?php echo $id_answer ?>" class="d-none d-md-inline btn btn-outline-sw m-0">

                EDITAR

            </a>
            <a href="../../controller/_delete_answer.php?id=<?php echo $id_answer ?>" class="d-none d-md-inline btn  m-0 m-2 btn-danger">

                EXCLUIR

            </a>
        </div>
        <div class="col p-0 align-self-center text-start my-3">

            <a href="../pages/edit-answer.php?id=<?php echo $id_answer ?>" class="btn btn-outline-sw float-end d-md-none">

                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="../pages/_delete_answer.php?id=<?php echo $id_answer ?>" class="btn btn-outline-sw float-end d-md-none mx-2">

                <i class="bi bi-trash"></i>
            </a>

            <p class="p-2 text-break img-anexada d-none d-md-flex swText bg-clear-grey">
                <?php echo $text_answer ?>
            </p>
        </div>

        <div class="row">

            <p class="p-2 text-break img-anexada mx-3 d-md-none swText bg-clear-grey">
            <?php echo $text_answer ?>
            </p>
        </div>

    </div>

   

</div>
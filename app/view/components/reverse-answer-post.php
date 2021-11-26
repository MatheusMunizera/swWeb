<div class="container ">
    <div class="row m-2 pb-5 mb-5">
        <div class="col-4 p-0 col-sm-2 align-self-start text-center ">
            <i class="bi bi-person-circle" style="font-size: 50px; color:#ffc500;"></i>
            <h6 class="swText p-0 text-center text-break"> Username</h6>
            <form action="../../controller/answers.php" method="POST">
            <input id="id_question" name="id_question" type="number" class="d-none" hidden value="<?php  echo $linha["id_question"] ?>">
                <input id="id_answer" name="id_answer" type="number" class="d-none" hidden value="<?php  echo $linha["id_answer"] ?>">
                <button type="submit" name="edit" class="d-none d-md-inline btn btn-outline-sw m-0">Editar</button>
                <button type="submit" name="delete" class="d-none d-md-inline btn  m-0 m-2 btn-danger">Excluir</button>
            </form>
        </div>
        <div class="col p-0 align-self-center text-start my-3">
        <form action="../../controller/answers.php" method="POST">
        <input id="id_question" name="id_question" type="number" class="d-none" hidden value="<?php  echo $linha["id_question"] ?>">
                <input id="id_answer" name="id_answer" type="number" class="d-none" hidden value="<?php  echo $linha["id_answer"] ?>">
                <button type="submit" name="edit" class="btn btn-outline-sw float-end d-md-none"> <i class="bi bi-pencil-square"></i></button>
                <button type="submit" name="delete" class="btn btn-outline-sw float-end d-md-none mx-2"> <i class="bi bi-trash"></i></button>
            </form>
            <p class="p-2 text-break img-anexada d-none d-md-flex swText bg-clear-grey">
                <?php echo $linha["text"] ?>
            </p>
        </div>

        <div class="row">

            <p class="p-2 text-break img-anexada mx-3 d-md-none swText bg-clear-grey">
            <?php echo $linha["text"] ?>
            </p>
        </div>

    </div>

   

</div>
<section class="container " >
    <div class="row m-2 flex-row-reverse pt-5 mt-5 ">
        <section class="col-4 p-0 col-sm-2 align-self-start text-center ">
            <i class="bi bi-person-circle" style="font-size: 50px; color:#ffc500;"></i>
            <h6 class="swText p-0 text-center"> Username</h6>
            <a href="../pages/edit-answer.php?id=<?php echo $id_answer ?>" class="d-none d-md-inline btn btn-outline-sw m-0">

                EDITAR

            </a>
            <a href="../../controller/_delete_answer.php?id=<?php echo $id_answer ?>" class="d-none d-md-inline btn  m-0 m-2 btn-danger">

                EXCLUIR

            </a>
        </section>
        <article class="col  p-0 align-self-center text-end my-3">

            <a href="../pages/edit-answer.php?id=<?php echo $id_answer ?>" class="btn btn-outline-sw float-end d-md-none">

                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="../pages/_delete_answer.php?id=<?php echo $id_answer ?>" class="btn btn-outline-sw float-end d-md-none mx-2">

                <i class="bi bi-trash"></i>
            </a>

            <p class="p-2  d-none d-md-flex swText text-capitalize text-uppercase bg-clear-grey">
            <?php echo $text_answer ?>
            </p>
        </article>

        <article class="row">

            <p class="p-2  d-md-none m-0 swText text-capitalize text-uppercase bg-clear-grey">
            <?php echo $text_answer ?>
            </p>


        </article>

    </div>
</section>
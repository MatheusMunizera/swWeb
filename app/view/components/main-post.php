<div class="container">
    <div class="row m-2">
        <div class="col-4 p-0 col-sm-2 align-self-start text-center ">
            <i class="bi bi-person-circle" style="font-size: 50px; color:#ffc500;"></i>
            <h6 class="swText p-0 text-center text-break"> Username</h6>
            <form action="../../controller/questions.php" method="POST">
            <input id="id" name="id" type="number" class="d-none" hidden  value="<?php echo $_GET['id'] ?>" >
            <button type="submit" name="edit" class="d-none d-md-inline btn btn-outline-sw m-0">Editar</button>
            <button type="submit" name="delete" class="d-none d-md-inline btn  m-0 m-2 btn-danger">Excluir</button>

            </form>
    
        </div>
        <div class="col p-0 align-self-center text-start my-3">
            <h1 class=" swTitle post-title m-0  text-capitalize text-break "><?php echo $title ?></h1>

            <!-- <p class="post-date m-0 p-0">
                Data e hora do post
          
            </p> -->
            <form action="../../controller/questions.php" method="POST">
            <input id="id" name="id" type="number" class="d-none" hidden  value="<?php echo $_GET['id'] ?>" >
            <button type="submit" name="edit" class="btn btn-outline-sw float-end d-md-none">
            <i class="bi bi-pencil-square"></i>
            </button>
            <button type="submit" name="delete" class="btn btn-outline-sw float-end d-md-none mx-2">
            <i class="bi bi-trash"></i>
            </button>
            </form>
    

            <div class="p-2 img-anexada text-break d-none d-md-block swText bg-clear-grey">
            <?php echo $text ?>
            </div>
        </div>

        <div class="row">

            <div class="p-2 img-anexada text-break mx-3 d-md-none swText  bg-clear-grey">
                <?php echo $text ?>
    </div>
        </div>

    </div>

    <div class="container my-5">
        <form method="POST"  action="../../controller/answers.php">
            <label for="title" class=" d-block swFont text-left">Sua resposta
                <div>
                    <p class="swText text-muted">Aqui você contribui com o artigo dando sua resposta</p>
                </div>

            </label>
            <textarea id="text" name="text" type="text" class="form-control" rows="4" placeholder="Eg. Eu acho que o está correto, porém quando se trata de..." required></textarea>
            <input id="id" name="id_question" type="number" class="d-none" hidden  value="<?php echo $id ?>" >
            <button type="submit" name="create" class="btn btn-outline-sw float-end">Enviar</button>
        </form>
    </div>

  
        <h1 class="swFont text-center ">Respostas</h1>
  

</div>
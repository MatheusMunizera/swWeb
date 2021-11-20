


<div class="container">
    <div class="row m-2">
        <div class="col-4 p-0 col-sm-2 align-self-start text-center ">
            <i class="bi bi-person-circle" style="font-size: 50px; color:#ffc500;"></i>
            <h6 class="swText p-0 text-center"> Username</h6>
            <a href="../pages/edit-post.php?id=<?php echo $id ?>" class="d-none d-md-inline btn btn-outline-sw m-0">
             
        EDITAR
        
        </a>
        <a href="../../controller/_delete_post.php?id=<?php echo $id ?>" class="d-none d-md-inline btn  m-0 m-2 btn-danger">
             
             EXCLUIR
              
              </a>
        </div>
        <div class="col p-0 align-self-center text-start my-3">
            <h1 class=" swTitle post-title m-0  text-capitalize  "><?php echo $title ?></h1>
            
            <!-- <p class="post-date m-0 p-0">
                Data e hora do post
          
            </p> -->

            <a href="../pages/edit-post.php?id=<?php echo $id ?>" class="btn btn-outline-sw float-end d-md-none">
           
           <i class="bi bi-pencil-square"></i>
           </a>
           <a href="../pages/_delete_post.php?id=<?php echo $id ?>" class="btn btn-outline-sw float-end d-md-none mx-2">
           
           <i class="bi bi-trash"></i>
           </a>

            <p class="p-2  d-none d-md-flex swText text-capitalize text-uppercase bg-clear-grey">
                 <?php echo $text ?>
            </p>
        </div>

        <div class="row">
        
        <p class="p-2 mx-3 d-md-none swText text-capitalize text-uppercase bg-clear-grey">
              <?php echo $text ?>
            </p>
        </div>

    </div>

    <div class="container my-5">
        <form method="POST">
        <label for="title" class=" d-block swFont text-left" >Sua resposta
                   <div>
                        <p class="swText text-muted">Aqui você contribui com o artigo dando sua resposta</p>
                        </div>

                </label>
                <textarea id="text" name="text" type="text" class="form-control" rows="4" placeholder="Eg. Eu acho que o está correto, porém quando se trata de..." required></textarea>
                <button type="submit" class="btn btn-outline-sw">Enviar</button>
        </form>
    </div>

</div>



<nav class="navbar navbar-dark bg-black fixed-top d-block position-sticky text-center ">
    <div class="container-fluid">

        <button class="navbar-toggler navbar-toggler p-0 d-md-none " style="border-color: transparent;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="row">
            <div class="col">
                <a href="https://github.com/matheusMunizera" class="icon-grey">
                    <i class="bi bi-github p-0 d-none d-md-flex"></i>
                </a>

            </div>

            <div class="col">
                <a href="https://www.youtube.com/channel/UCih5H8dNtieYjGFSnYtgZzA/featured" class="icon-grey">
                    <i class="bi bi-youtube p-0 d-none d-md-flex"></i>
                </a>
            </div>

            <div class="col">
                <a href="https://discord.gg/hrFKyrrDRH" class="icon-grey">
                    <i class="bi bi-discord p-0 d-none d-md-flex"></i>
                </a>
            </div>



        </div>

        <a href="home.php" class="navbar-brand flex-grow-1 swFont" id="home">

            <h1>swweb</h1>

        </a>

        <?php 
        $isForum = str_contains($_SERVER['REQUEST_URI'], 'forum');
        $isDatabank = str_contains($_SERVER['REQUEST_URI'], 'databank');
        
        if($isForum || $isDatabank) {?>
            <a class="btn mx-0 px-2 d-md-none" data-bs-toggle="collapse" href="#search" role="button" aria-expanded="false" aria-controls="search">
            <i class="bi bi-search icon-grey" style="font-size: 25px;"></i>
        </a>
      <?php  } ?>
        
        
       

        <a class="btn mx-0 px-2 d-none d-md-flex" href="about.php">
            <i class="bi bi-info-circle-fill icon-grey"></i>
        </a>


        <div class="m-0">
            <?php
            if (empty($_SESSION['obj_user']) == 1) { ?>
                <a class="btn m-0 p-0 " data-bs-toggle="modal" href="#userModalToggle" role="button">
                    <i class="bi bi-person-fill icon-grey"></i>
                </a>

            <?php } else {
                $id_user = $_SESSION["obj_user"]->getIdUser();
                $username = $_SESSION["obj_user"]->getUsername();
                $email = $_SESSION["obj_user"]->getEmail();
                $password = $_SESSION["obj_user"]->getPassword();
            ?>
                <button class="btn m-0 swTitle text-uppercase" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <img style="width: 30px; height: 30px;" class="offcanvas-title" id="offcanvasNavbarLabel" src="../../assets/icons/homem.png" alt="">
                </button>



            <?php
            } ?>



        </div>



    </div>


    </div>

    <div class="row  d-none d-md-flex">

        <ul class="nav swTitle  bar  m-0 p-0 justify-content-center text-uppercase">

            <li class="nav-item   ">
                <a class="nav-link  text-reset" href="../pages/home.php">Home</a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link text-reset" href="../pages/quiz.php">Quiz</a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link  text-reset" href="../pages/databank.php?type=geral">Databank</a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link active text-reset" href="../pages/forum.php">Forum</a>
            </li>

        </ul>

    </div>


    <div class="offcanvas offcanvas-start bg-dark float-start d-md-none d-flex" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header row">
            <div class="col-12 text-center">
                <button type="button" class="btn-close btn-close-white text-reset float-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                <figure>
                    <img class="offcanvas-title" id="offcanvasNavbarLabel" src="../../assets/icons/homem.png" alt="">

                </figure>
                <h3 class="swFont" id="username"><?php echo $username ?></h3>
            </div>

        </div>



        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item   ">
                    <a class="nav-link-sm nav-link active-sm swTitle fs-2" href="../pages/home.php">Home</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link-sm nav-link swTitle fs-2" href="../pages/quiz.php">Quiz</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link-sm nav-link  swTitle fs-2" href="../pages/databank.php?type=geral">Databank</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link-sm nav-link  swTitle fs-2" href="../pages/forum.php">Forum</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link-sm nav-link  swTitle fs-2" href="../pages/about.php">Sobre nós</a>
                </li>
        </div>


        <div class="offcanvas-header row" id="aside-links">
            <div class="col text-center">
                <figure>
                    <img class="offcanvas-title" id="offcanvasNavbarLabel" src="../../assets/icons/dart.png" alt="">
                </figure>

            </div>

        </div>



        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item  nav-link-sm ">
                    <a href="https://github.com/matheusMunizera" class="icon-grey ">
                        <i class="bi bi-github swTitle nav-link fs-3"> GitHub</i>
                    </a>
                </li>
                <li class="nav-item  nav-link-sm   ">
                    <a href="https://www.youtube.com/channel/UCih5H8dNtieYjGFSnYtgZzA/featured" class="icon-grey">
                        <i class="bi bi-youtube swTitle nav-link fs-3"> Youtube</i>
                    </a>
                </li>
                <li class="nav-item nav-link-sm  ">
                    <a href="https://discord.gg/hrFKyrrDRH" class="icon-grey">
                        <i class="bi bi-discord swTitle nav-link fs-3"> Discord</i>
                    </a>
                </li>

        </div>




    </div>


</nav>

<div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-0 mb-0">
        <button type="button" style="transform: translate(20rem);" class="btn-close btn-close-white float-end " data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="text-center">
            <figure>
                <img class="offcanvas-title" id="offcanvasNavbarLabel" src="../../assets/icons/homem.png" alt="">
            </figure>
            <h3 class="swFont" style="color: #ffc500;" id="username"><?php echo $username ?></h3>
          <form action="../../controller/users.php" method="POST">
              <button class="swTitle btn " style="color: #ffc500;" name="logout">Logout</button>
          </form>
        </div>

        <div class="config">
            <p class="m-0 p-0 swTitle text-center ">CONFIGURÇÕES</p>
        </div>

        <div class="container">
            <form action="../../controller/users.php" method="POST" class="needs-validation" novalidate>

                <div class="form-group container row">
                    <label for="validationUsuario" class="form-label  swFont">Usuário</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="validationUsuario" style="border: 1px solid #ffc500;" name="username" value="<?php echo $username ?>" required>

                    </div>
                </div>
                <div class="form-group container row">
                    <label for="validationEmail" class="form-label  swFont">Email</label>
                    <div class="input-group has-validation">
                        <input type="email" class="form-control" id="validationEmail" style="border: 1px solid #ffc500;" name="email" value="<?php echo $email ?>" required>
                    </div>
                </div>
                <div class="form-group container row">
                    <label for="validationPassword" class="form-label  swFont">Password</label>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control" id="validationPassword" style="border: 1px solid #ffc500;" name="password" value="<?php echo $password ?>" required>
                    </div>
                </div>
                <input type="number" class="form-control d-none" hidden  name="id_user" value="<?php echo $id_user ?>" required>
                <button class="btn btn-outline-sw my-4 float-end" type="submit" name="edit">Alterar</button>
            </form>
        </div>
    </div>
</div>
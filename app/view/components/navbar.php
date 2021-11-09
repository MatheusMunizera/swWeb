<nav class="navbar navbar-dark bg-black fixed-top d-block position-sticky text-center ">
    <div class="container-fluid">

        <!-- <button type="button" class="navbar-toggler p-0 d-md-none " style="border-color: transparent;" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button> -->

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

        <a class="btn mx-0 px-2 d-md-none" data-bs-toggle="collapse" href="#search" role="button" aria-expanded="false" aria-controls="search">
            <i class="bi bi-search icon-grey" style="font-size: 25px;"></i>

        </a>

        <a class="btn mx-0 px-2 d-none d-md-flex" href="about.php">
            <i class="bi bi-info-circle-fill icon-grey"></i>
        </a>


        <div class="m-0">
            <button type="button" class="btn m-0 p-0 " data-bs-toggle="modal" data-bs-target="#userModal">
                <i class="bi bi-person-fill icon-grey"></i>
            </button>
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
                <a class="nav-link  text-reset" href="../pages/databank.php">Databank</a>
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
          <figure >
            <img class="offcanvas-title" id="offcanvasNavbarLabel" src="../../assets/icons/homem.png" alt="">

        </figure>
        <h3 class="swFont" id="username">Username</h3>
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
                <a class="nav-link-sm nav-link  swTitle fs-2" href="../pages/databank.php">Databank</a>
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
          <figure >
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
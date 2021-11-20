<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Meu CSS  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/search.css">
    <link rel="stylesheet" href="./css/navbar.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forum</title>
    <link rel="shortcut icon" href="swWEB.ico" type="image/x-icon">

</head>

<body>

    <!-- NAVBAR -->
    <?php require "components/navbar.php" ?>



    <div class="container ">
        <div class="jumbotron container-fluid m-3">
            <h1 class="swFont"> Crie um post publico</h1>
        </div>


        <form action="_post_forum.php" method="POST">
            <div class="form-group">
                <label for="title" class="swTitle d-block" style="color: #ffc500;">Titulo:
                    <div>
                        <p class="swText text-muted">Seja criativo, imagine que esteja perguntando algo a alguém</p>
                        </div>
                </label>
                <input id="title" name="title" type="text" class="form-control" placeholder="Exemplo: Como surgiu o nome han solo?" required>
                <div class="invalid-feedback"> </div>
            </div>
            <div class="form-group my-2">
                <label for="theme" class="swTitle" style="color: #ffc500;">Tema:</label>
                <select id="theme" name="theme" class="form-control" required>
                    <option>Geral</option>
                    <option>Personagens</option>
                    <option>Veículos</option>
                    <option>Planetas</option>
                    <option>Especies</option>
                    <option>Filmes</option>
                    <option>Series</option>
                </select>
            </div>

            <div class="form-group">
                <label for="text" class="swTitle d-block" style="color: #ffc500;">Descrição:
                   <div>
                        <p class="swText text-muted">Você pode detalhar melhor sua pergunta ou detalhar melhor sua teoria</p>
                        </div>

                </label>
                <textarea id="text" name="text" type="text" class="form-control" rows="8" placeholder="Han solo foi um apelidado com esse nome pois..." required></textarea>
            </div>

            <div class="modal-footer">
                <a href="./index.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                <button type="submit" class="btn btn-outline-sw">Enviar</button>

            </div>
        </form>
    </div>



    

    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>
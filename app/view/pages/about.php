<!DOCTYPE html>
<html lang="pt-br">

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/about.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/1688bd0752.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


  <title>SobreNós</title>
</head>

<!-- Nav-Bar -->

<body>
  <!-- NAVBAR -->
 
  <header class="jumbotron">

  <?php require "../components/navbar.php" ?>

    <section class="container-fluid">
      <h1 class="swFont flex-grow-1 text-center my-1 display-5">Sobre Nós</h1>
    </section>

  </header>

  <!-- Page content -->



  <main class="container">

    <figure class="banner">
      <img src="../../assets/images/swTeam-bw.png" class="imagem">
    </figure>

    <article>
      <p class="detail p-2">Mais que amigos, MACGANG!</p>

      <p class="card-text p-0">Contando um pouco sobre nós, somos a SwTeam, que é composta por
        5 membros oficiais e integra diversas outras pessoas a participar de seus projetos.
        Atualmente, dentre esses membros, temos:</p>

      <p class="card-text p-0"><a class="card-title">- Daniel Alves:</a> O membro mais experiente que da suporte a qualquer
        situação de risco do grupo. -
      <p class="detail p-0">- “É pau pra toda obra”.</p>
      </p>
      <p class="card-text p-0"><a class="card-title">- Henrique Mendes:</a> O cérebro do grupo, capaz de refazer todos os projetos
        do SwTeam em C# em apenas 2 minutos. .
      <p class="detail p-0">- “Me empresta 2s do seu tempo?”.</p>
      </p>
      <p class="card-text p-0"><a class="card-title">- Larrisa Carvalho:</a> Demonstrou bastante conhecimento durante o projeto.
        certamente é a unica integrante que gosta de StarWars.
      <p class="detail p-0">- “IBMista do coração“.</p>
      </p>
      <p class="card-text p-0"><a class="card-title">- Lucas Herranz:</a> Nosso rockstar, que sempre consegue transpor suas ideias aos
        projetos deixando-os com aquele toque artístico.
      <p class="detail p-0">- “Rolling do Rolling”.</p>
      </p>
      <p class="card-text p-0"><a class="card-title">- Matheus Muniz:</a> Nosso guardião do MACS, sempre disponível (porque será?) para
        organizar e sanar duvidas sobre o projeto.
      <p class="detail p-0">- “A culpa é minha e eu boto em quem eu quiser”.</p>
      </p>
      <p class="card-text p-0"><a class="card-title">- Pedro Polo:</a> Fundador da Praiso (parceira oficial do SwTeam), é responsável
        por toda questão de segurança dos projetos.
      <p class="detail p-0">- “Bota na amazon“.</p>
      </p>
    </article>



    <section class="container-fluid">

      <h3 class="swFont flex-grow-1 text-center my-1 display-5">Projetos</h3>
   

    <section class="card" style="">
      <img src="../../assets/images/Icon feather-smartphone.png" class="imgProjeto ">
      <article class="card-body">
        <h5 class="card-text p-0 text-center">SwApp</h5>
        <p class="card-text p-0 text-center">Nosso aplicativo mobile
          que entrega ao usuário
          informações sobre o mundo
          de StarWar acompanhado de
          algumas funcionalidade para
          o entretenimento.</p>
        <p class="card-text p-0 text-center">Este projeto utiliza as linguagens: Ionic/Angular</p>
      </article>
    </section>

    <section class="card" style="">
      <img src="../../assets/images/Icon material-computer.png" class="imgProjeto ">
      <article class="card-body">
        <h5 class="card-text p-0 text-center">SwApp</h5>
        <p class="card-text p-0 text-center">O melhor do SwApp agora
          na WEB, facilitando o
          acesso a informações
          e disponibilizando novos
          conteudos exclusivos.</p>
        <p class="card-text p-0 text-center">Este projeto utiliza as linguagens: HTML5/Javascript/CSS3/Bootstrap/JQuery/PHP/MySQL</p>
      </article>
    </section>

    <section class="card" style="">
      <img src="../../assets/images/Grupo 146.png" class="imgProjeto ">
      <article class="card-body">
        <h5 class="card-text p-0 text-center">SwApp</h5>
        <p class="card-text p-0 text-center">O nosso centro de informações,
          é aqui que retiramos todos os
          dados para a criação de
          qualquer projeto SW.</p>
        <p class="card-text p-0 text-center">Este projeto utiliza as linguagens: NodeJS/Javascript</p>
      </article>
    </section>

    <section class="card" style="">
      <img src="../../assets/images/Icon awesome-book.png" class="imgProjeto ">
      <article class="card-body">
        <h5 class="card-text p-0 text-center">SwApp</h5>
        <p class="card-text p-0 text-center">Nossa biblioteca que para
          nós, desenvolvedores,
          facilita a interação com
          a SwAPI</p>
        <p class="card-text p-0 text-center">Este projeto utiliza a linguagem: Javascript</p>
      </article>
    </section>

    <section class="card" style="">
      <img src="../../assets/images/Icon awesome-database.png" class="imgProjeto ">
      <article class="card-body">
        <h5 class="card-text p-0 text-center">SwApp</h5>
        <p class="card-text p-0 text-center">Nosso Banco de Dados,
          que armazena toda a questão
          de Login e Forum dos projetos
          e Dados sobre StarWars</p>
        <p class="card-text p-0 text-center">Este projeto utiliza as linguagens: MongoDB/MySQL</p>
      </article>
    </section>


    </section>
  </main>








  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <!-- Meu JS -->
  <link rel="script" href="main.js">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>

</html>
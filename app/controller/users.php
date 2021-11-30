
<?php
$isForum = str_contains($_SERVER['REQUEST_URI'], 'forum');
$isPosts = str_contains($_SERVER['REQUEST_URI'], 'posts');

if($isForum || $isPosts) {
  include_once("../../model/userDAO.php");
include_once("../../database/connection.php");
}else{
  include_once("../model/userDAO.php");
include_once("../database/connection.php");

}


$conexao = new Connection();
$conn = $conexao->connect();
$users = new UserDAO();

 if (isset($_POST['login'])) {
     $users->login($_POST['username'], $_POST['password'],$conn);
   }



if (isset($_POST['register'])) {
    $users->register($_POST['username'], $_POST['email'], $_POST['password'], $conn);
 
}

if (isset($_POST['logout'])) {
  $users->logout($conn);
}


if (isset($_POST['edit'])) {
  $users->edit($_POST['id_user'] , $_POST['username'], $_POST['email'], $_POST['password'], $conn);
  $users->logout($conn);
}
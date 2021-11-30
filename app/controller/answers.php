<?php
$isForum = str_contains($_SERVER['REQUEST_URI'], 'forum');
$isPosts = str_contains($_SERVER['REQUEST_URI'], 'posts');

if($isForum || $isPosts) {
  include_once("../../model/answerDAO.php");
include_once("../../database/connection.php");
}else{
  include_once("../model/answerDAO.php");
include_once("../database/connection.php");

}

$conexao = new Connection();
$conn = $conexao->connect();

$answers = new AnswerDAO();

if (isset($_POST["create"])) {
  $answers->insert($_POST["id_question"], $_POST['id_user'],$_POST["text"], $conn);
}

if ($isPosts) {
 
  $answers->showByQuestion($_GET['id'],  $conn);
}

if (isset($_POST["delete"])) {
  $answers->delete($_POST['id_answer'],$_POST['id_question'], $conn);
}

if (isset($_POST["edit"])) {
  $answers->edit($_POST['id_answer'], $conn);
}

 if (isset($_POST["save-edit"])) {
   $answers->saveEdit($_POST["id_answer"], $_POST["id_question"], $_POST["text"],$conn);

 }






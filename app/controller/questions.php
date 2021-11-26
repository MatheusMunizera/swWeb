<?php
$isForum = str_contains($_SERVER['REQUEST_URI'], 'forum');
$isPosts = str_contains($_SERVER['REQUEST_URI'], 'posts');

if($isForum || $isPosts) {
  include_once("../../model/questionDAO.php");
include_once("../../model/connection.php");
}else{
  include_once("../model/questionDAO.php");
include_once("../model/connection.php");

}

$conexao = new Connection();
$conn = $conexao->connect();

$questions = new QuestionDAO();

if (isset($_POST["create"])) {
  $questions->insert($_POST["title"], $_POST["theme"], $_POST["text"], $conn);
}

if ($isForum) {
  $questions->showByType($conn);
}

if ($isPosts) {
  $questions->showByID($_GET['id'], $conn);
}

if (isset($_POST["delete"])) {
  $questions->delete($_POST['id'], $conn);
}

if (isset($_POST["edit"])) {
  $questions->edit($_POST['id'], $conn);
}

 if (isset($_POST["save-edit"])) {
   $questions->saveEdit($_POST["id"], $_POST["title"], $_POST["theme"], $_POST["text"],$conn);

 }



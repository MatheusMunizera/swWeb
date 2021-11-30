<?php
$isForum = str_contains($_SERVER['REQUEST_URI'], 'forum');
$isPosts = str_contains($_SERVER['REQUEST_URI'], 'posts');

if($isForum || $isPosts) {
  include_once("../../model/questionDAO.php");
include_once("../../database/connection.php");
}else{
  include_once("../model/questionDAO.php");
include_once("../database/connection.php");

}

$conexao = new Connection();
$conn = $conexao->connect();

$questions = new QuestionDAO();

if (isset($_POST["create"])) {
  $questions->insert($_POST["title"], $_POST["theme"], $_POST["text"], $_POST["id_user"], $conn);
}

if ($isForum) {
  if(isset($_GET["query"]))
 {
   $query = $_GET["query"];
  $sql = "SELECT * FROM `questions` WHERE `title` like '%$query%' ";
 
 }

 $questions->show($conn, $sql);
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
   $questions->saveEdit($_POST["id_question"], $_POST["title"], $_POST["theme"], $_POST["id_user"], $_POST["text"],$conn);

 }




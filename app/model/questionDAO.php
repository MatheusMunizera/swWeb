<?php
class QuestionDAO
{
    function insert($title, $theme, $text, $id_user,  $conn)
    {
        try {
            $sql = "INSERT INTO questions(title, theme, text, id_user) VALUES (:title,:theme,:text, :id_user)";
            $stmt = $conn->prepare($sql);
            
             $stmt->execute(array(
                 ":title" => "$title", ":theme" => "$theme", ":text" => "$text", ":id_user" => " $id_user"
             ));
            echo "<script>
            alert('Sucesso ao postar =D');
            window.location='../view/pages/forum.php';
            </script>";
        } catch (PDOException $e) {
            echo "Erro ao inserir" . $e->getMessage();
        }
    }
   
    function show($conn, $sql)
    {
       if(empty($sql)){
        $sql = "SELECT * FROM `questions`  order by `id_question` DESC"; 

        if (!empty($_GET['theme']) ) {
            $type = $_GET['theme'];   
            $sql = "SELECT * FROM `questions`  WHERE theme = '$type' order by `id_question` DESC"; 
        }   
       }
       

      $consulta = $conn->query($sql);

      $registros=$consulta->rowCount();
       
      function findUsernameByID($id_user, $conn){
     
          $sql = "SELECT * FROM `users` WHERE `id_user` = $id_user";
          $consulta = $conn->query($sql);
          $linha = $consulta->fetch(PDO::FETCH_ASSOC);
          $username = $linha['username'];
          return $username;
      }

      if($registros){
       while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
          $id_question = $linha['id_question'];
          $title = $linha['title'];
          $theme = $linha['theme'];
          $text = $linha['text'];
          $id_user = $linha['id_user'];
          $username = findUsernameByID( $id_user, $conn);
          include '../components/previewposts.php';

       }
     
    }else{
        echo "
          <section class='container text-center'> 
        <h1 class='swFont'>Não há registros!</h1>
        </section>
        ";
        
    }


    }

    function showByID($id, $conn)
    {
       
        $id = $_GET['id'];
        $sql = "SELECT * FROM `questions` WHERE `id_question` = $id";
         
        $consulta = $conn->query($sql);

        $linha = $consulta->fetch(PDO::FETCH_ASSOC);
         $id_question = $linha['id_question'];
         $title = $linha['title'];
         $theme = $linha['theme'];
         $text = $linha['text'];
         $id_user = $linha['id_user'];

         $sql = "SELECT * FROM `users` WHERE `id_user` = $id_user";
         $consulta = $conn->query($sql);
         $linha = $consulta->fetch(PDO::FETCH_ASSOC);
         $username = $linha['username'];

        include '../components/main-post.php';

        
    }

    function delete($id, $conn){
        try{
            
 

            $sql = "DELETE FROM `questions` WHERE id_question = $id";
            $delete = $conn->prepare($sql);
            $delete->execute();

            $sql = "DELETE FROM `answers` WHERE id_question = $id";
            $delete = $conn->prepare($sql);
            $delete->execute();
            
            echo "<script>
            alert('Post deletado com sucesso');
            window.location='../view/pages/forum.php';
            </script>";

        }catch(PDOException $e){
            echo "Erro ao remover o post. <br>" . $e->getMessage();
        }
    }

    function edit($id, $conn)
    {
        try {

            $consulta = $conn->query("SELECT * FROM `questions` WHERE `id_question` = '$id'");

            if ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                session_start();
                include_once("../model/question.php");
                $question = new Question($linha["id_question"], $linha["title"], $linha["theme"], $linha['id_user'], $linha["text"]);
                $_SESSION["obj_question"] = $question;
                header("location:../view/pages/edit-post.php");
            }
        } catch (PDOException $e) {
            echo "Erro ao editar: " . $e->getMessage();
        }
    }
    
    function saveEdit($id_question, $title, $theme, $id_user, $text, $conn)
    {
        try {
            $edit = $conn->query("UPDATE `questions` SET `title`='$title',`theme`='$theme',`text`='$text' WHERE id_question = $id_question");
            $edit->execute();
            echo "<script>
            alert('Post alterado com sucesso');
            window.location='../view/pages/posts.php?id=".$id_question."';
            </script>";
        } catch (PDOException $e) {
            echo "Erro ao atualizar: " . $e->getMessage();
        }
    }

    

}
?>
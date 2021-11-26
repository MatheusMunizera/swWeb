<?php
class QuestionDAO
{
    function insert($title, $theme, $text,  $conn)
    {
        try {
            $sql = "INSERT INTO questions(title, theme, text) VALUES (:title,:theme,:text)";
            $stmt = $conn->prepare($sql);
            
             $stmt->execute(array(
                 ":title" => "$title", ":theme" => "$theme", ":text" => "$text"
             ));
            echo "<script>
            alert('Sucesso ao postar =D');
            window.location='../view/pages/forum.php';
            </script>";
        } catch (PDOException $e) {
            echo "Erro ao inserir" . $e->getMessage();
        }
    }

    function showByType($conn)
    {
       
        $sql = "SELECT * FROM `questions`  order by `id_question` DESC"; 

         if (!empty($_GET['theme']) ) {
             $type = $_GET['theme'];   
             $sql = "SELECT * FROM `questions`  WHERE theme = '$type' order by `id_question` DESC"; 
         } 

        $consulta = $conn->query($sql);

        $registros=$consulta->rowCount();
        

        if($registros){
         while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
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

        $post = $consulta->fetch(PDO::FETCH_ASSOC);
         $id_question = $post['id_question'];
         $title = $post['title'];
         $theme = $post['theme'];
         $text = $post['text'];
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
                $question = new Question($linha["id_question"], $linha["title"], $linha["theme"], $linha["text"]);
                $_SESSION["obj_question"] = $question;
                header("location:../view/pages/edit-post.php");
            }
        } catch (PDOException $e) {
            echo "Erro ao editar: " . $e->getMessage();
        }
    }
    
    function saveEdit($id, $title, $theme, $text, $conn)
    {
        try {
            $edit = $conn->query("UPDATE `questions` SET `title`='$title',`theme`='$theme',`text`='$text' WHERE id_question = $id");
            $edit->execute();
            echo "<script>
            alert('Post alterado com sucesso');
            window.location='../view/pages/posts.php?id=".$id."';
            </script>";
        } catch (PDOException $e) {
            echo "Erro ao atualizar: " . $e->getMessage();
        }
    }

}
?>
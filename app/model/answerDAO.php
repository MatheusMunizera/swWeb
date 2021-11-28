<?php
class AnswerDAO
{
    function insert($id_question, $id_user, $text, $conn)
    {
        try {
            $sql = "INSERT INTO answers(id_question, id_user, text) VALUES (:id_question,:id_user, :text)";
            $stmt = $conn->prepare($sql);

            $stmt->execute(array(
                ":id_question" => "$id_question", ":id_user" => "$id_user", ":text" => "$text"
            ));
            echo "<script>
            alert('Sucesso ao postar =D');
            window.location='../view/pages/posts.php?id=".$id_question."';
            </script>";
        } catch (PDOException $e) {
            echo "Erro ao inserir" . $e->getMessage();
        }
    }

    

    function showByQuestion($id_question,  $conn)
    {

        function findUsernameByID($id_user, $conn){
       
            $sql = "SELECT * FROM `users` WHERE `id_user` = $id_user";
            $consulta = $conn->query($sql);
            $linha = $consulta->fetch(PDO::FETCH_ASSOC);
            $username = $linha['username'];
            return $username;
        }

        $sql = "SELECT * FROM `answers` WHERE `id_question` = $id_question";


        $consulta = $conn->query($sql);
        $registros = $consulta->rowCount();


        if ($registros) {
            $cont = 2;
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $id_question = $linha['id_question'];
                $id_answer = $linha['id_answer'];
                $text = $linha['text'];
                $id_user =$linha['id_user'];
                $username = findUsernameByID( $id_user, $conn);
               
               
                 if ($cont % 2 == 0) {
                     include  '../components/answer-post.php';
                 } else {
                     include  '../components/reverse-answer-post.php';
                 }
                 $cont++;
            }
        } else {
            echo "
            <section class='container text-center'> 
          <h1 class='swFont'>Não há registros!</h1>
          </section>
          ";
        }
    }

    function delete($id_answer, $id_question, $conn)
    {
        try{
         
            $sql = "DELETE FROM `answers` WHERE id_answer = $id_answer";
            $delete = $conn->prepare($sql);
            $delete->execute();
            
            echo "<script>
            alert('Resposta deletada com sucesso');
            window.location='../view/pages/posts.php?id=".$id_question."';
            </script>";

        }catch(PDOException $e){
            echo "Erro ao remover o a resposta. <br>" . $e->getMessage();
        }
    }

    function edit($id_answer, $conn)
    {
        
        try {
       
            $consulta = $conn->query("SELECT * FROM `answers` WHERE `id_answer` = '$id_answer'");

            if ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                session_start();
                include_once("../model/answer.php");
                $answer = new Answer($linha["id_answer"], $linha["id_question"], $linha["text"]);
                $_SESSION["obj_answer"] = $answer;
                header("location:../view/pages/edit-answer.php");
            }
        } catch (PDOException $e) {
            echo "Erro ao editar: " . $e->getMessage();
        }
           
        
    }
    
    function saveEdit($id_answer, $id_question, $text, $conn)
    {
        try {
        
            $edit = $conn->query("UPDATE `answers` SET `text`='$text' WHERE id_answer = $id_answer");
            $edit->execute();
            echo "<script>
            alert('Resposta alterada com sucesso');
            window.location='../view/pages/posts.php?id=".$id_question."';
            </script>";
        } catch (PDOException $e) {
            echo "Erro ao atualizar: " . $e->getMessage();
        }
    }
}

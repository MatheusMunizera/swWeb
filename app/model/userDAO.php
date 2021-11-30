<?php
class UserDAO
{
    function register($username, $email, $password,  $conn)
    {
        try {
            $sql = "INSERT INTO users(username, email, password) VALUES (:username,:email,:password)";
            $stmt = $conn->prepare($sql);
            
             $stmt->execute(array(
                 ":username" => "$username", ":email" => "$email", ":password" => "$password"
             ));
            echo "<script>
            alert('Sucesso ao registrar =D');
            window.location='../view/pages/index.php';
            </script>";
        } catch (PDOException $e) {
            echo "Erro ao registrar" . $e->getMessage();
        }
    }

    function login($username, $password,  $conn)
    {
        try {
           
            $sql = "SELECT * FROM `users` where `username` = '$username' and `password` = '$password'"; 
            $consulta = $conn->query($sql);
            $registros=$consulta->rowCount();
            if($registros){
                if ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    session_start();
                    include_once("../model/user.php");
                    $user = new User($linha["id_user"], $linha["username"], $linha["email"], $linha["password"]);
                    $_SESSION["obj_user"] = $user;
    
                    header("location:../view/pages/index.php");
                }
            }else{
                echo "<script>
                alert('Usuario ou senha incorretos');
                window.location='../view/pages/index.php';
                </script>";
            }
           
        } catch (PDOException $e) {
            echo "Erro ao logar: " . $e->getMessage();
        }

      
    }

    function logout($conn)
    {
        try {
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }
            session_start();
            session_destroy();
            header("location:../view/pages/index.php");
           
        } catch (PDOException $e) {
            echo "Erro ao logar: " . $e->getMessage();
        }

      
    }

    function edit($id_user, $username, $email, $password, $conn){
        try {
            $edit = $conn->query("UPDATE `users` SET `username`='$username',`email`='$email',`password`='$password' WHERE `id_user` = '$id_user'");
            $edit->execute();
            echo "<script>
            alert('Seu usuario foi alterado');
            window.location='../view/pages/index.php';
            </script>";
        } catch (PDOException $e) {
            echo "Erro ao atualizar seu usuário: " . $e->getMessage();
        }
    }


}
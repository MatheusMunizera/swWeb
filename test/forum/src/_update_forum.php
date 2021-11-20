<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posting</title>
</head>
<body>
<?php 

include 'connection.php';

$id = $_POST['id_question'];
$title = $_POST['title'];
$text = $_POST['text'];
$theme = $_POST['theme'];


 $sql = "UPDATE `questions` SET `title`='$title',`theme`='$theme',`text`='$text' WHERE id_question = $id";
 $update = mysqli_query($connection, $sql);



?>


<script>
    alert('Atualizado com sucesso');
    window.location="./index.php";
</script>

</body>
</html>


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

$title = $_POST['title'];
$text= $_POST['text'];
$theme = $_POST['theme'];


$sql = "INSERT INTO `questions`(`title`, `theme`, `text`) VALUES ('$title','$theme','$text')";

$insert = mysqli_query($connection, $sql)




?>

<script>
    alert('Sucesso ao postar =D');
    window.location="./index.php";
</script>

</body>
</html>


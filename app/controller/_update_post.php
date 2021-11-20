<?php require "../view/components/head.php" ?>
<link rel="stylesheet" href="../styles/forum.css">
</head>

<body>

<?php 

include '../database/connection.php';

$id = $_POST['id_question'];
$title = $_POST['title'];
$text = $_POST['text'];
$theme = $_POST['theme'];


 $sql = "UPDATE `questions` SET `title`='$title',`theme`='$theme',`text`='$text' WHERE id_question = $id";
 $update = mysqli_query($connection, $sql);



?>


<script>
    alert('Atualizado com sucesso');
    window.location="../view/pages/forum.php";
</script>

</body>
</html>


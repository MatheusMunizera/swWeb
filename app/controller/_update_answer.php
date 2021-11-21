<?php require "../view/components/head.php" ?>
<link rel="stylesheet" href="../styles/forum.css">
</head>

<body>

<?php 

include '../database/connection.php';

$id = $_POST['id_answer'];
$text = $_POST['text'];



 $sql = "UPDATE `answers` SET `text`='$text' WHERE id_answer = $id";
 $update = mysqli_query($connection, $sql);



?>


<script>
    alert('Atualizado com sucesso');
    window.location="../view/pages/forum.php";
</script>

</body>
</html>


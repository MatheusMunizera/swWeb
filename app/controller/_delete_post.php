
<?php 

include '../database/connection.php';

$id = $_GET['id'];

$sql_post = "DELETE FROM `questions` WHERE id_question = $id";
$delete_post = mysqli_query($connection, $sql_post);

$sql_answer = "DELETE FROM `answers` WHERE id_question = $id";
$delete_answer = mysqli_query($connection, $sql_answer);

?>

<?php require "../view/components/head.php" ?>
<link rel="stylesheet" href="../styles/forum.css">
</head>

<body>
<script>
    alert('Seu post foi deletado');
    window.location="../view/pages/forum.php";
</script>

</body>
</html>
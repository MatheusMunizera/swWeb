
<?php 

include '../database/connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM `questions` WHERE id_question = $id";
$delete = mysqli_query($connection, $sql);

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
<?php require "../view/components/head.php" ?>
<link rel="stylesheet" href="../styles/forum.css">
</head>

<body>

<?php 

include '../database/connection.php';




$id_question = $_POST['id_question'];
$text= $_POST['text'];



$sql = "INSERT INTO `answers`( `id_question`, `text`) VALUES ('$id_question','$text')";

$insert = mysqli_query($connection, $sql)

?>

<script>
    alert('Sua resposta foi postada');
    window.location="../view/pages/forum.php";
</script>

</body>
</html>


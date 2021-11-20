<?php require "../view/components/head.php" ?>
<link rel="stylesheet" href="../styles/forum.css">
</head>

<body>

<?php 

include '../database/connection.php';

$title = $_POST['title'];
$text= $_POST['text'];
$theme = $_POST['theme'];


$sql = "INSERT INTO `questions`(`title`, `theme`, `text`) VALUES ('$title','$theme','$text')";

$insert = mysqli_query($connection, $sql)

?>

<script>
    alert('Sucesso ao postar =D');
    window.location="../view/pages/forum.php";
</script>

</body>
</html>


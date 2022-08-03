<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php if ($_SESSION['nome'] != "") { ?>
        <h1>OLÁ, <?php echo $_SESSION['nome'] ?>!!</h1>
        <h3><a href="listUsuario.php">lista de Usuários</a></h3>
        <h3><a href="logout.php">logout</a></h3>
    <?php } else { ?>
        <h1>Você não está logado!!</h1>
        <h3><a href="login.php">Login</a></h3>
    <?php } ?>
</body>

</html>
<?php
include "../include/mysql.php";

$nome = "";
$email = "";
$telefone = "";
$senha = "";

$nomeErro = "";
$emailErro = "";
$telefoneErro = "";
$senhaErro = "";
$msg = "";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) { //se isso for verdadeiro e isso prossiga
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare("INSERT INTO USUARIO(codigo, nome, email, telefone, senha) VALUES(null, ?, ?, ?, ?)");
    $sql->execute(array($nome, $email, $telefone, $senha));
}


?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Cadastro de Usuário</legend>
            Nome: <input type="text" name="nome">
            Email: <input type="text" name="email">
            Telefone: <input type="type" name="telefone">
            Senha: <input type="password" name="senha">

            <input type="submit" value="Salvar" name="submit">
        </fieldset>
    </form>
</body>

</html>
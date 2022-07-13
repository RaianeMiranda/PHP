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
$msgErro = "";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) { //se isso for verdadeiro e isso prossiga
    if (empty($_POST['nome']))
        $nomeErro = "Nome é obrigatório";
    else
        $nome = $_POST['nome'];

    if (empty($_POST['email']))
        $emailErro = "Email é obrigatório";
    else
        $email = $_POST['email'];

    if (empty($_POST['telefone']))
        $telefoneErro = "Telefone é obrigatório";
    else
        $telefone = $_POST['telefone'];
    if (empty($_POST['senha']))
        $senhaErro = "Senha é obrigatório";
    else
        $senha = $_POST['senha'];

    if ($email && $nome && $senha && $telefone) { //se o email e o nome e[...] não estiverem preenhidos ele não irá prosseguir e aparecera o erro do else
        // verificar se já existe o email
        $sql = $pdo->prepare("SELECT * FROM USUARIO WHERE email =?");
        if ($sql->execute(array($email))) {
            if ($sql->rowCount() <= 0) {
                $sql = $pdo->prepare("INSERT INTO USUARIO(codigo, nome, email, telefone, senha) VALUES(null, ?, ?, ?, ?)");

                if ($sql->execute(array($nome, $email, $telefone, md5($senha)))) {
                    $msgErro = "Dados cadastrados com sucesso!";
                    $nome = "";
                    $email = "";
                    $telefone = "";
                    $senha = ""; //isso serve para zerar as variáveis e não manter os dados no formulário
                } else {
                    $msgErro = "Dados não cadastrados!";
                }
            } else {
                $msgErro = "Email de usuário já cadastrado";
            }
        } else {
            $msgErro = "Erro no comando SELECT";
        }
    } else {
        $msgErro = "Dados não cadastrados!";
    }
}


?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Cadastro de Usuário</legend>
            Nome: <input type="text" name="nome" value="<?php echo $nome ?>">
            <span class="obrigatorio">*<?php echo $nomeErro ?></span>
            <br>
            Email: <input type="text" name="email" value="<?php echo $email ?>">
            <span class="obrigatorio">*<?php echo $emailErro ?></span>
            <br>
            Telefone: <input type="type" name="telefone" value="<?php echo $telefone ?>">
            <span class="obrigatorio">*<?php echo $telefoneErro ?></span>
            <br>
            Senha: <input type="password" name="senha" value="<?php echo $senha ?>">
            <span class="obrigatorio">*<?php echo $senhaErro ?></span>
            <br>

            <input type="submit" value="Salvar" name="submit">
        </fieldset>
    </form>
    <span><?php echo $msgErro ?></span>
</body>

</html>
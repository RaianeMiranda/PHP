<?php
include "../include/mysql.php";

$codigo = "";
$nome = "";
$email = "";
$telefone = "";
$senha = "";

$nomeErro = "";
$emailErro = "";
$telefoneErro = "";
$senhaErro = "";
$msgErro = "";

    if (isset($_GET['id'])){
        $codigo = $_GET['id'];
        $sql = $pdo->prepare("SELECT * FROM USUARIO WHERE codigo = ?");
        if ($sql->execute(array($codigo))){
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach($info as $key => $value){
                $codigo = $value['codigo'];
                $nome = $value['nome'];
                $email = $value['email'];
                $telefone = $value['telefone'];
                $senha = ''; //$value['senha];
            }
        }
    }

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
        $sql = $pdo->prepare("SELECT * FROM USUARIO WHERE email =? AND codigo <> ?");
        if ($sql->execute(array($email, $codigo))) {
            if ($sql->rowCount() <= 0) {
                $sql = $pdo->prepare("UPDATE USUARIO SET codigo = ?, nome = ?, email = ?, telefone = ?, senha = ? WHERE codigo = ?");

                if ($sql->execute(array( $codigo,$nome,$email,$telefone,md5($senha),$codigo))) {
                    $msgErro = "Dados alterados com sucesso!";
                    header('location:listUsuario.php'); //acima de header não pode ter echo de forma alguma
                } else {
                    $msgErro = "Dados não cadastrados!";
                }
            } else {
                $msgErro = "Email de usuário já cadastrado";
            }
        } else {
            $msgErro = "Erro no comando UPDATE";
        }
    } else {
        $msgErro = "Dados não alterados!";
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
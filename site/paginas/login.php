<?php
    include "../include/mysql.php";
    include "../include/functions.php";

    $email="";
    $senha="";
    $msgErro="";
    $emailErro = "";

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        if (empty($_POST['email'])){
            $emailErro = "Email é obrigatório";
        } else {
            $email = test_input($_POST['email']);
        }
        if (empty($_POST['senha'])){
            $senhaErro = "Senha é obrigatório";
        } else{
            $senha = test_input($_POST['senha']);
        }

        if ($email && $senha){
            $sql=$pdo->prepare("SELECT * FROM USUARIO WHERE email=? AND senha=?"); //email e a senha são validados com o banco de dados
            if ($sql->execute(array($email, MD5($senha)))){
                $info = $sql-> fetchAll(PDO::FETCH_ASSOC);
                if (count($info) > 0){
                    header('location:principal.php');
                } else{
                    $msgErro = "Usuário não cadastrado!";
                }
            } else {
                $msgErro = "Usuário não cadastrado!";
            }
        }
    }


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <fieldset>
            <legend>Login</legend>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" placeholder="Digite seu email" value="<?php echo $email?>">
            <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" value="<?php echo $senha ?>">
            <br>
            <input type="submit" name="login" id="login" value="Login">
        </fieldset>
    </form>
    <span><?php echo $msgErro?></span>
</body>

</html>
<?php
    include "../include/MySql.php";

    $sql = $pdo->prepare("SELECT * FROM USUARIO");
    if ($sql->execute()){
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($info as $key => $value){ //utilizado somente para buscar dados, não exige incremento. Ele repete as informações. ele para quando não há mais códigos para repetir. Geralmente utilizado quando não há certeza de quantos dados há no banco de dados
        echo "Código: ".$value['codigo']."<br>";
        echo "Nome: ".$value['nome']."<br>";
        echo "Email: ".$value['email']."<br>";
        echo "Telefone: ".$value['telefone']."<br>";
        echo "Senha: ".$value['senha']."<br>";
        echo "<hr>"; //só para separar as informações

        }
    }

?>
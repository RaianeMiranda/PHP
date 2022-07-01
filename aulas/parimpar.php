<?php
    $numero="";
    $mensagem="";
if (isset($_GET['numero'])){
    if (!empty($_GET['numero'])){
    $numero = $_GET['numero'];
        if ($numero % 2 == 0) {
        $mensagem= "<h4 style= 'color:red;'> Numero par</h4>";
        } else {
        $mensagem= "<h4 style= 'color:blue;'> Numero ímpar</h4>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>Descubra se o número é Par ou Ímpar</h1>

    <form action="" method="GET">
        <label for="numero">Número:</label>
        <input type="text" name="numero" value=<?php echo $numero?>>
        <input type="submit" value="verificar">
        <br>
        <span><h2><?php echo $mensagem?></h2></span>
    </form>
</body>

</html>
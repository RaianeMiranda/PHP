<?php
if (isset($_GET['avaliacao']))
    $avaliacao = $_GET['avaliacao'];
else
    $avaliacao = "Dados não informados";
if (isset($_GET['secao']))
    $secao = $_GET['secao'];
else
    $secao = "";
if (isset($_GET['outro'])) {
    $tratar = $_GET['outro'];
    $outro = htmlspecialchars($tratar); //serve para bloquear que os códigos html sejam 'pixados' com imagens que possam derrubar o site

} else
    $comentarios = "";
if (isset($_GET['comentarios']))
    $comentarios = $_GET['comentarios'];
else
    $comentarios = "";
if (isset($_GET['nome']))
    $nome = $_GET['nome'];
else
    $nome = "";
if (isset($_GET['email']))
    $email = $_GET['email'];
else
    $email = "";
if (isset($_GET['fone']))
    $fone = $_GET['fone'];
else
    $fone = "";
if (isset($_GET['novidades']))
    $novidades = $_GET['novidades'];
else
    $novidades = "";

echo "Avaliacão: $avaliacao <br>";
echo "Seção: $secao <br>";
echo "Outros: $outro <br>";
echo "Comentários: $comentarios <br>";
echo "Nome: $nome <br>";
echo "E-mail: $email <br>";
echo "Telefone: $fone <br>";
echo "Novidades: $novidades <br>";


$texto = $_GET['nome'];
$novo_texto = stripslashes($texto); //pode ocorrer um bug caso o navegador não trate, se em uma das respostas do fomulário tiver "" em alguma palavra todos os textos podem acabar com aspas se não utilizarmos essa função.
echo "Texto: $texto";
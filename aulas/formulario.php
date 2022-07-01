<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form action="receber.php" method="GET">
        <fieldset>
            <!-- É a borda em volta de toda a mensagem-->
            <legend>Cadastro</legend>
            <!--é a abertura onde fica o título-->
            <p>
                <strong>O que você achou do site?</strong>
                <dl>
                    <dd>
                        <input type="radio" name="avaliacao" value="muitobom">ÓTIMO
                        <!--input="radio" é pro botaõ ser se assinalar em forma de bolinha-->
                        <input type="radio" name="avaliacao" value="muitobom" checked>MUITO BOM
                        <!--checked serve para deixar essa opção marcada como padrão -->
                        <input type="radio" name="avaliacao" value="muitobom">BOM
                        <!--ao dar o mesmo nome para todas as opções ele permite que o usuário selecione apenas um dos botões-->
                        <input type="radio" name="avaliacao" value="muitobom">REGULAR
                    </dd> <!-- DD serve para abrir um parágrafo-->
                </dl> <!--DL serve para colocar um grupo na linha de baixo parecido com  um BR -->
            </p>
            <p>Qual a seção que você mais gostou?</p>
            <dl>
                <dd>
                    <select name="secao">
                        <option value="emcartaz">Em cartaz</option>
                        <option value="trilha sonora">Trilha Sonora</option>
                        <option value="fotos" selected>Bilheteria</option>
                        <!--o selected tem a mesma função do checked, mas é para a opção de select -->
                        <option value="outra">Outra</option>
                    </select>
                    outra:<input type="text" size="26"maxlength="256" name="outro">
                </dd>
            </dl>
            <p>
                <strong>Digite seus comentários no campo abaixo:</strong>
                <dl>
                    <dd>
                        <textarea name="comentarios" rows="5" cols="50" readonly>Olá voce esta em uma área não digitavel</textarea>
                        <!--textarea é uma área de texto adaptavel, o readonly proíbi o usuário de manipular a caixa de texto, ou seja o que o dev colocar o usuário não poderá alterar -->
                    </dd>
                </dl>
            </p>
            <p>
                <strong>Diga-nos como entrr em contato com você:</strong>
                <dl>
                    <dd>
                        <pre> <!--o pre serve para respeitar ao máximo a formatação na tela, assim ele obedece todos os elementos e espaços e eles são impressos na tela, e não mais ignorados-->
                            Nome: <input type="text" size="35" maxlength="256" name="nome">
                            Email:<input type="text" size="35" maxlength="256" name="email">
                            Fone: <input type="text" size="35" maxlength="256" name="fone">
                        </pre>
                    </dd>
                </dl>
            </p>
            <p>
                <dl>
                    <dd>
                        <input type="checkbox" name="novidades" value="nov">
                        Quero receber as novidades do site por email
                    </dd>
                </dl>
            </p>
            <p>
                <input type="submit" value="Enviar Dados" name="enviar">
                <input type="reset" value="Limpar Formulario" name="limpar">
            </p>
        </fieldset>



    </form>
</body>

</html>
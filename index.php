<?php
    session_start();
?>
<!--/**-->

<!--* Creted by PhpStorm-->
<!--* Author: Umbrellios-->
<!--* Date: 21/09/2021-->

<!--**/-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulário de Inscrição</title>
    <meta name="author" content="Umbrellios - Braulio Santos">
    <meta name="description" content="criando formulario para inscrição com php e post">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="php, formulario, Web, Desenvolvimento, mvc">
</head>

<body>

<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
<form action="script.php" method="POST">
    <?php
        $mensagemDeErro = obterMensagemErro();
        echo $mensagemDeErro;
        $mensagemDeSucesso = obterMensagemSucesso();
        echo $mensagemDeSucesso;
    ?>
    <p>Seu Nome: <input type="text" name="nome"/></p>
    <p>Sua Idade: <input type="text" name="idade"/></p>
    <p><br><input type="submit" value="Inscrever"/></p>
</form>

</body>

</html>
<?php
    session_start();
?>

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
        $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
        if(!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }

        $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
        if(!empty($mensagemDeSucesso))
        {
            echo $mensagemDeSucesso;
        }
    ?>
    <p>Seu Nome: <input type="text" name="nome"/></p>
    <p>Sua Idade: <input type="text" name="idade"/></p>
    <p><br><input type="submit" value="Inscrever"/></p>
</form>

</body>

</html>
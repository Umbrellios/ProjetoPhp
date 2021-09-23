<?php
/**
 * Creted by PhpStorm
 * Author: Umbrellios
 * Date: 21/09/2021
 */

session_start();

$categorias = ['infantil', 'adulto', 'adolescente' ];

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio. Preencha-o novamente.';
    header( 'location: index.php');
    return;
}
elseif(strlen($nome) <3)
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 3 caracteres';
    header( 'location: index.php');
    return;
}
elseif (strlen($nome) >40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 40 caracteres';
    header( 'location: index.php');
    return;
}

elseif (!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'A idade precisa ser um número';
    header( 'location: index.php');
    return;
}


//var_dump($nome);
//var_dump($idade);
if ($idade >= 0 && $idade <= 12)
{
    foreach ($categorias as $keys => $value)
    {
        if($value == 'infantil')
        {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' pertence a categoria '.$value;
            header( 'location: index.php');
            return;
        }
    }
}
elseif ($idade >= 13 && $idade <= 17)
{
    foreach ($categorias as $keys => $value)
    {
        if ($value == 'adolescente')
        {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' pertence a categoria '.$value;
            header( 'location: index.php');
            return;
        }
    }
}
else
{
    foreach ($categorias as $keys => $value)
    {
        if ($value == 'adulto')
        {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' pertence a categoria '.$value;
            header( 'location: index.php');
            return;
        }
    }
}

?>


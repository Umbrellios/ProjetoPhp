<?php

/**
 * Creted by PhpStorm
 * Author: Umbrellios
 * Date: 27/09/2021
 **/

//declare(strict_types=1);
function validaNome(string $nome) : bool
{
    if (empty($nome))
    {
        $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio. Preencha-o novamente.';
        return false;
    }
    elseif(strlen($nome) <3)
    {
        $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 3 caracteres';
        return false;
    }
    elseif (strlen($nome) >40)
    {
        $_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 40 caracteres';
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if(empty($idade))
    {
        $_SESSION['mensagem-de-erro'] = 'A idade não pode ser vazia';
        return false;
    }
    elseif (!is_numeric($idade))
    {
        $_SESSION['mensagem-de-erro'] = 'A idade precisa ser um número';
        return false;
    }
    return true;
}

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


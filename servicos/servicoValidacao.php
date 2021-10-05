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
        setarMensagemErro( 'O nome não pode ser vazio. Preencha-o novamente.');
        return false;
    }
    elseif(strlen($nome) <3)
    {
        setarMensagemErro('O nome não pode conter menos de 3 caracteres');
        return false;
    }
    elseif (strlen($nome) >40)
    {
        setarMensagemErro('O nome não pode conter mais de 40 caracteres');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if(empty($idade))
    {
        setarMensagemErro('A idade não pode ser vazia');
        return false;
    }
    elseif (!is_numeric($idade))
    {
        setarMensagemErro('A idade precisa ser um número');
        return false;
    }
    return true;
}




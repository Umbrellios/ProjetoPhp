<?php
/**
 *
 * Creted by PhpStorm
 * Author: Umbrellios
 * Date: 04/10/2021
 *
 **/



function defineCategoriaCompetidor(string $idade, string $nome) : ?string
{

    $categorias = ['infantil', 'adulto', 'adolescente' ];
    if (validaNome($nome) && validaIdade($idade))
    {
        if ($idade >= 0 && $idade <= 12)
        {
            foreach ($categorias as $keys => $value)
            {
                if($value == 'infantil')
                {
                    setarMensagemSucesso('O nadador '.$nome.' pertence a categoria '.$value);
                    return null;
                }
            }
        }
        elseif ($idade >= 13 && $idade <= 17)
        {
            foreach ($categorias as $keys => $value)
            {
                if ($value == 'adolescente')
                {
                    setarMensagemSucesso('O nadador '.$nome.' pertence a categoria '.$value);
                    return null;
                }
            }
        }
        else
        {
            foreach ($categorias as $keys => $value)
            {
                if ($value == 'adulto')
                {
                    setarMensagemSucesso('O nadador '.$nome.' pertence a categoria '.$value);
                    return null;
                }
            }
        }

    }
    else
    {
        return obterMensagemErro();
    }
return null;
}




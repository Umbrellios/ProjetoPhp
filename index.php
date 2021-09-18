<?php

$categorias = ['infantil', 'adulto', 'adolescente' ];

$nome = 'Braulio';
$idade = 1;

if ($idade >= 0 && $idade <= 12)
{
    foreach ($categorias as $keys => $value)
    {
        if($value == 'infantil')
        {
            echo ('O nadador '.$nome.' pertence a categoria '.$value);
        }
    }
}
elseif ($idade >= 13 && $idade <= 17)
{
    foreach ($categorias as $keys => $value)
    {
        if ($value == 'adolescente')
        {
            echo ('O nadador '.$nome. ' pertence a categoria '. $value);
        }
    }
}
else
{
    foreach ($categorias as $keys => $value)
    {
        if ($value == 'adulto')
        {
            echo ('O nadador '.$nome. ' pertence a categoria '.$value);
        }
    }
}



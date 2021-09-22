<?php

$categorias = ['infantil', 'adulto', 'adolescente' ];

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome))
{
    echo('O nome não pode ser vazio');
    return;
}
if(strlen($nome) <3)
{
    echo ('O nome deve conter mais que 3 caracteres');
    return;
}
if (strlen($nome) >40)
{
    echo ('O nome não deve conter mais que 40 caracteres');
    return;
}

if (!is_numeric($idade))
{
    echo "Informe um número para idade";
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

?>


<?php
/**
 *
 * Creted by PhpStorm
 * Author: Umbrellios
 * Date: 21/09/2021
 *
 **/

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');


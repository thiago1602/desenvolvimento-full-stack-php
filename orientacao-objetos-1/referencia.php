<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;
$prod1->titulo = "Coca-Cola";
$prod1->descricao = "Refrigerante";
$prod1->preco = 6.50;

$prod2 = $prod1;

$prod2->titulo = "Coca";
$prod2->preco = 5.50;


$prod2 = 10;

function alterarProduto($produto)
{
    $produto->titulo = "Dolly";
}

alterarProduto($prod1);

var_dump($prod1);
var_dump($prod2);


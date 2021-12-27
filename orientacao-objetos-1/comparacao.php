<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;
$prod1->titulo = "Coca-Cola";
$prod1->descricao = "Refrigerante";
$prod1->preco = 6.50;


$prod2 = new Produto;
$prod2->titulo = "Coca-Cola";
$prod2->descricao = "Refrigerante";
$prod2->preco = 6.50;

var_dump($prod1 == $prod2); //tipo e propriedades !=
var_dump($prod1 === $prod2); //referências !==

$prod4 = $prod1;

var_dump($prod1 === $prod4);



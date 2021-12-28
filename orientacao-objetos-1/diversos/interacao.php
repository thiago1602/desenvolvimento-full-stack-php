<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;
$prod1->titulo = "Coca-Cola ";
$prod1->descricao = "Refrigerante ";
$prod1->preco = 6.50;

foreach ($prod1 as $nome => $valor){
    echo "$nome: $valor";
}

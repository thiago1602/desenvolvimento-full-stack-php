<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;
$prod1->titulo = "Coca-Cola ";
$prod1->descricao = "Refrigerante ";
$prod1->preco = 6.50;
$prod1->desconto = 0.1;

$prod1->defineCodigoBarras('00012');

$prod1->acessaCodigoBarras();
var_dump($prod1);

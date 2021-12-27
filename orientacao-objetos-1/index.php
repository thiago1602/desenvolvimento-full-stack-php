<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";

$prod1 = new Produto;
$prod1->titulo = "Coca-Cola";
//$prod1->descricao = "Refrigerante";
$prod1->preco = 6.50;

$prod2 = new Produto;
$prod2->titulo = "Conquisa";
//$prod2->descricao = "Refrigerante";
$prod2->preco = 4.50;


var_dump($prod1);
var_dump($prod2);

$cli = new Cliente;
$cli->nome = "João";
$cli->idade = 40;
$cli->endereco = "São Paulo";
$cli->telefone = '(11) xxxx - xxxx';

$cli->comprar();

$nomeClasse = "Produto";

$instancia = new $nomeClasse;
var_dump($instancia);

$cli2 = new $cli;
$nomeClasse2 = get_class($cli);
$cli3 = new $nomeClasse2;

var_dump($cli);
var_dump($cli2);
var_dump($cli3);
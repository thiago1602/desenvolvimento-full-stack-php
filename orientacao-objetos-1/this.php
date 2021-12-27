<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";
;

$cli = new Cliente;
$cli->nome = "João";
$cli->idade = 40;
$cli->endereco = "São Paulo";
$cli->telefone = '(11) xxxx - xxxx';

$cli2 = new Cliente;
$cli2->definirNome("Maria");
$cli2->idade = 40;
$cli2->endereco = "São Paulo";
$cli2->telefone = '(11) xxxx - xxxx';

$cli2->comprar();

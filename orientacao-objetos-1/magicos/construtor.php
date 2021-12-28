<?php

require_once "../autoload/autoload-psr4.php";

$cli = new App\Classes\Cliente("Thiago", "998897799", 26);

$cli->cpf = "42276855859";
$cli->rg = "11.111.111-7";

echo $cli->cidade;

$cli->alterar("Thiago Fonseca", 99);

$cli(true);

$cliSerializado = serialize($cli);

echo "<br>" . $cliSerializado;

$cli2 = unserialize($cliSerializado);

var_dump($cli, $cli2);
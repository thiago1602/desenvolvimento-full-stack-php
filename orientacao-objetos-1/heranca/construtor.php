<?php

require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto("Coca-cola");
$prod->detalhes();

$gel = new App\Classes\Eletrodomesticos("Geladeira",110);
$gel->detalhes();

$micro = new App\Classes\Microondas("Microondas",110, 700);
$micro->detalhes();

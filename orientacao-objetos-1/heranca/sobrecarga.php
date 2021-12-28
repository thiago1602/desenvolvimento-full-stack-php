<?php

require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto;


$prod->titulo = "Coca";
$prod->preco = 3.00;
$prod->defineCodigoBarras('00111');

//$prod->detalhes();


$micro = new App\Classes\Microondas;


$micro->titulo = "x2000";
$micro->preco = 3000.00;
$micro->defineCodigoBarras('00113');
$micro->definirVoltagem(110);
$micro->definirPotencia(700);

$micro->detalhes();


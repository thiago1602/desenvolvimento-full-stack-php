<?php

require_once "../autoload/autoload-psr4.php";
use App\Classes\Vendedor;


echo Vendedor::comissao();

Vendedor::$bonus = 1.5;

echo Vendedor::calculaComissao(100_000);
var_dump(Vendedor::$bonus);
<?php

$valor = [
    "php" => 7.2,
    "Dart" => 2
];
var_dump(isset($valor['c#']));

if (isset($valor['c#']))
{
    echo $valor['c#'];
} else
{
    echo 'Curso de c# não encontrado';
}
<?php
$valor = [
    "php" => 7.2,
    "Dart" => 2
];


//if (isset($valor['c#']))
//{
//    echo $valor['c#'];
//} else
//{
//    echo 'Curso de c# não encontrado';
//}

$cSharp = isset($valor['C#']) ? $valor['c#'] : 'Curso de C# encontrado';

$cSharp = $valor['C#'] ?? 'Curso de C# não encontrado';
echo $cSharp;
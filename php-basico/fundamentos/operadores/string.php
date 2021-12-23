<?php


$escola = "TreinaWeb ";
$curso = ["PHP ", "C#", "JAVA"];

$frase ="Faça o curso de ". $curso . "Na escola" . $escola;

$string1 = "Faça o curso de {$curso[1]} na escola {$escola}";
$string2 = 'Meu valor';

echo $string1;
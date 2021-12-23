<?php

$numeros = [2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach($numeros as $key => $valor){
    echo "chave: $key valor: $valor <br>";
}
foreach($numeros as $valor){
    echo " valor: {$valor} <br>";
}
echo "<br>";

# array associativo

$cursos = [
    "php" =>[
        "nome_curso" => "Curso de PHP Fundamentos",
        "versao_ferramenta"=> 7.4,
        "carga_horaria" => 40,
        "status" => false
    ],
    "java" => [
        "nome_curso" => "Curso de JAVA Fundamentos",
        "versao_ferramenta"=> 7.4,
        "carga_horaria" => 100,
        "status" => true
    ],
    "c#" => [
        "nome_curso" => "Curso de C# Fundamentos",
        "versao_ferramenta"=> 7.4,
        "carga_horaria" => 60,
        "status" => true
    ],

];


foreach ($cursos as $curso){

//    if($curso['status'] == false){
//        continue;
//    }
  if($curso['status'] == false){
        break;
    }

    echo $curso['nome_curso'];
    echo "<br>";
    echo "Versão da ferramenta: " . $curso['versao_ferramenta'];
    echo "<br>";
    echo "Carga horária: " . $curso['carga_horaria'];
    echo "<br>";
    echo "Status: " . $curso['status'];
    echo "<br>";

}


$palavras = explode(' ', rtrim(fgets(STDIN)));

foreach ($palavras as $palavra)
{
    echo $palavra . PHP_EOL;
}

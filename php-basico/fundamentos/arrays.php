<?php

$linguagens = ["PHP", "C#", "JAVA"];

$linguagens[3] = "PYTHON";

var_dump($linguagens);

$linguagens2 = array("php", "c#", "java");


// arrays associativos
$curso = ["Curso de PHP Fundamentos", 7.4, 40, true];

$curso = [
    "nome_curso" => "Curso de PHP Fundamentos",
    "versao_ferramenta"=> 7.4,
    "carga_horaria" => 40,
    "status" => true
];

$curso["pre-requisito"] = "logica de progamacao";

var_dump($curso);

echo $curso["nome_curso"];
echo "<br>";
echo $curso["versao_ferramenta"];
echo "<br>";
echo $curso["carga_horaria"];
echo "<br>";
echo $curso["status"];
echo "<br>";


//arrays multidimensionais

$numeros = [
    [1, 2, 3, 4],
    [5, 6, 7, 8, 9],
    [10, 11, [12 ,13, 14]]
];

echo $numeros[0][2];
echo "<br>";
echo $numeros[2][1];
echo "<br>";
echo $numeros[2][2][2];

$cursos = [
    "php" =>[
        "nome_curso" => "Curso de PHP Fundamentos",
        "versao_ferramenta"=> 7.4,
        "carga_horaria" => 40,
        "status" => true
    ],
    "java" => [
        "nome_curso" => "Curso de JAVA Fundamentos",
        "versao_ferramenta"=> 7.4,
        "carga_horaria" => 40,
        "status" => true
    ]
];

$cursos["php"]["pre-requisito"] = "logica de progamacao"$;
echo "<br>";

echo $cursos["java"]["nome_curso"];
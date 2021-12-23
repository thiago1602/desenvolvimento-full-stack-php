<?php

for ($i=0; $i < 10; $i = $i + 3){
    echo "executou $i <br>";
}

# tabuada

$n = intval(rtrim(fgets(STDIN)));

for($i = 1; $i <= 10; $i++)
{
    echo "$n x $i = " . $n * $i . PHP_EOL;
}

//Supondo três inteiros: a, b e n, aplicados à seguinte fórmula:
//(a + 20 x b),(a + 20 x b + 21 x b), ... , (a + 20 x b + 21 x b + ... + 2n-1 x b)
//Onde serão informados q sequências de a, b e n. Para cada uma, informe no console a série correspondente dos valores em uma única linha, separados por espaço.


$t = intval(rtrim(fgets(STDIN)));
for($i = 0; $i < $t; $i++)
{
    [$a, $b, $n] = array_map('intval', explode(' ', rtrim(fgets(STDIN))));

    $result = [];

    for($j = 0; $j < $n; $j++)
    {
        $result[$j] = $a;
        for($k = 0; $k <= $j; $k++)
        {
            $exp = 2 ** $k;
            $result[$j] += $exp * $b;
        }
    }

    for($j = 0; $j < $n; $j++)
    {
        echo $result[$j] . " ";
    }

    echo PHP_EOL;

}
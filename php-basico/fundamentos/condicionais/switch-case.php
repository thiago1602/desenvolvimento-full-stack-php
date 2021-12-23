<?php

$a = 0;

switch ($a)
{
    case 0:
        echo "tenho o valor 0";
        break;
    case 1:
        echo "tenho o valor 1";
        break;
    case 2:
        echo "tenho o valor 2";
        break;
    case 3:
    case 4:
    case 5:
        echo "tenho um valor de 2 a 5";
        break;
    default:
        echo "tenho outro valor";
}

echo "<br>";
$curso = 'PHP';

switch ($curso){
    case 'PHP':
        echo "curso de PHP";
        break;
    case 'Java':
        echo  "curso de java";
        break;
}

$n = intval(rtrim(fgets(STDIN)));

if($n % 2 !== 0)
{
    echo "Estranho";
}
else
{
    if($n < 10)
    {
        echo "Não é estranho";
    }
    elseif($n >= 10 && $n <= 20)
    {
        echo "Estranho";
    }
    else
    {
        echo "Não é estranho";
    }
}
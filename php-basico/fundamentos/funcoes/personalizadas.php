<?php
function somar($valor1, $valor2)
{
    return $valor1 + $valor2;
}

$soma = somar(12, 10);

echo $soma;
echo "<br>";

$soma2 = somar(120, 10);
echo "<br>";

echo somar(13, 90);
echo "<br>";


//somar fatorial
function fatorial(int $n): int
{
    if($n === 0) {
        return 1;
    }
    else {
        return $n * fatorial($n - 1);
    }
}


$n = intval(rtrim(fgets(STDIN)));
print(fatorial($n));


//ano bissesto
function anoBissexto(int $ano): bool
{
    if ($ano % 4 == 0)
    {
        if ($ano % 100 == 0)
        {
            if ($ano % 400 == 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return true;
        }
    }
    return false;
}
<?php

error_reporting(E_ALL);

$divisor = 0;

try {
if ($divisor == 0){
    throw new Exception("Não é possivel dividir por 0", 1);
}

$valor = 100 / $divisor;
}catch (\Throwable $th){
    echo $th->getMessage();
}


$t = intval(rtrim(fgets(STDIN)));

for($i = 0; $i < $t; $i++)
{
    try
    {
        [$a, $b] = explode(' ', rtrim(fgets(STDIN)));

        if(!is_numeric($a))
            throw new Exception("Erro: Valor não pode ser convertido para inteiro: '$a'", 1);

        if(!is_numeric($b))
            throw new Exception("Erro: Valor não pode ser convertido para inteiro: '$b'", 1);

        print(intdiv(intval($a), intval($b)) . PHP_EOL);
    }
    catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }
    catch (DivisionByZeroError $th) {
        echo "Erro: Divisão por zero não permitida" . PHP_EOL;
    }
}
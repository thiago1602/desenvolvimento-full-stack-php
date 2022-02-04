<?php


namespace App\Classes;


class Vendedor
{

    static public float $bonus = 1.2;

    static public function comissao(bool $temBonus): float
    {
        if ($temBonus)
        {
            return  2.5 * self::$bonus;
        }
        return 2.5;
    }

    static public function calculaComissao(bool $temBonus, float $valor): float
    {
        $porcentagemComissao = self::comissao($temBonus) / 100;
        return $porcentagemComissao * $valor;
    }
}
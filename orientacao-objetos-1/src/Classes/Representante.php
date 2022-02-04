<?php


namespace App\Classes;


class Representante extends Vendedor
{
    static public  function comissao(bool $temBonus)
    {
        if($temBonus)
        {
            return (parent::$comissao * parent::$bonus) * 1;
        }

        return parent::$comissao * 1;
    }

    public function addVenda(float $valor): void
    {
        $this->totalDeVenda = $this->totalDeVenda * $valor
    }
}
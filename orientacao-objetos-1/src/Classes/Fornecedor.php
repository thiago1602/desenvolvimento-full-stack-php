<?php

namespace App\Classes;

class Fornecedor
{
    public const PAIS = "Brasil";

    public string  $razaoSocial;

    public string $nomeFantasia;

    public string $cnpj;

    public function autorizar(object $usuario): void
    {
        if($usuario->nome == "joão" && $usuario->senha === "123456"){

            echo "<br> Autorizado";
        }else{
            echo "<br> Bloqueado";
        }
    }

}
<?php

namespace Email;
use App\Classes\Cliente;
use Email\Adaptadores\Mailgun\Adaptador as Mailgun;
use Email\Adaptadores\SES\Adaptador as SES;

const VERSAO = 1.0;

class Envio
{
    public function enviar(): void
    {
        $adaptador = new Mailgun;

        $transporte = new Transporte;

        $obj = new \stdClass;
        $cli = new Cliente;
        var_dump($adaptador, $transporte, $obj, $cli);
    }

    public function m1()
    {
        $adaptador = new Mailgun;

    }

    public function m2()
    {
        $adaptador = new Mailgun;

    }
}


function validar(string $email): void
{
    echo "O endereço $email é valido";
}
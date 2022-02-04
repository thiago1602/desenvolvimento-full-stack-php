<?php

namespace App\Classes;
l;


class Produto
{
    public const NORMA = "1050";

    public string $titulo;

    public string $descricao = "Produtos em geral";

    public float $preco;

    private string $codigoBarras;

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function defineCodigoBarras(string $codigo): void
    {
        $this->codigoBarras = $codigo;
    }

    public function acessaCodigoBarras(): void
    {
        echo "<br>" . $this->codigoBarras;
    }

    public function detalhes(): void
    {
        echo "<br> Nome do produto: " . $this->titulo;

    }



}
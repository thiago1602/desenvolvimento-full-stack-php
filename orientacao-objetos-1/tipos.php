<?php


require_once "src/Classes/Fornecedor.php";

$fornecedor = new Fornecedor;

$fornecedor->cnpj = "06184012000184";
$fornecedor->nomeFantasia = "Meu Armazem";
$fornecedor->razaoSocial = "Meu Armazem LTDA";

$fornecedor->autorizar(new Class{
    public $nome;
    public $senha;
});

var_dump($fornecedor);
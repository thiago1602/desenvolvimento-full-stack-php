<?php

require_once "src/Classes/Fornecedor.php";

$fornecedor = new Fornecedor;

$fornecedor->autorizar(new Class{
    public $nome = "joão";
    public $senha = "123456";
});
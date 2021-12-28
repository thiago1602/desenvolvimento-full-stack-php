<?php

function carregar(string $nomeCompleto)
{
    $nsRaiz = "App\\";
    $diretorioBaes = __DIR__ . "/../src/";

    $tamanhoNsRaiz = strlen($nsRaiz);

    $nsRaizRecebido = substr($nomeCompleto, 0, $tamanhoNsRaiz);
    if($nsRaiz !== $nsRaizRecebido){
        return;
    }

    $caminhoRelativo = substr($nomeCompleto, $tamanhoNsRaiz);

    $caminhoArquivo = $diretorioBaes . str_replace('\\', '/',$caminhoRelativo . ".php");

    if(file_exists($caminhoArquivo)){
        require $caminhoArquivo;
    }
}

spl_autoload_register("carregar");
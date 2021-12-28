<?php

function carregar(string $nomeClasse)
{
    $caminhoCompleto = __DIR__ . "/../src/Classes/$nomeClasse.php";

    if(file_exists($caminhoCompleto)){
        require $caminhoCompleto;
    }

    var_dump($nomeClasse);
}

spl_autoload_register("carregar");

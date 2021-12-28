<?php

namespace App\Classes;
class Cliente
{
    //declaracoes da classe

    //propriedades
    public string $nome;

    public int $idade;

    public string $endereco;

    public string $telefone;


    public function __construct(string $nome, string $telefone, int $idade)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->idade = $idade;
    }

    public function __set(string $nomePropriedade, $valorPropriedade)
    {
        if ($nomePropriedade === 'cpf'){
            $this->cpf = \str_replace('.', '', $valorPropriedade);
        }else{
            $this->$nomePropriedade = $valorPropriedade;
        }
    }

    public function __get(string $nomePropriedade): string
    {
       return "A propriedade não existe";
    }

    public function __call(string $nomeMetodo, array $argumentoMetodo)
    {
        if ($nomeMetodo === 'alterar'){
            $this->nome = $argumentoMetodo[0];
            $this->idade = $argumentoMetodo[1];
        }
    }

    public function __invoke(bool $status): void
    {
        $this->status = $status;
    }

    public function __tostring(): string
    {
        return $this->nome . ", " . $this->idade;
    }
    public function __sleep() : array
    {
        return ["nome", "idade"];
    }

    public function __wakeup(): void
    {
        $this->tipo = "serializado";
    }
    public function comprar() : void
    {
        echo "O cliente {$this->nome} realizou uma compra ";
    }

    public function definirNome(string $nome) : void
    {
        $this->nome = $nome;

    }
    public function __destruct()
    {
        echo "o obj foi destruido";
    }


}
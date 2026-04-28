<?php

class Pessoa{
     public $nome;
    
    function falar(){
        return "Olá mundo!";
    }
}

$variavel1 = new Pessoa();

$variavel1->nome = "João";

echo $variavel1->nome;

echo "<br>";
echo $variavel1->falar();

<?php

Class Equipamento{
    public $nome;
    public $tipo;
    public $valor;

    function exibirDetalhes(){
        echo "Nome; $this->nome <br>";
        echo "Tipo; $this->tipo <br>";
        echo "Valor; $this->valor <br>";
    }
}

$equipamento1 = new Equipamento();
$equipamento1->nome = "Monitor DELL";
$equipamento1->tipo = "Full HD 24 polegadas 160Hz";
$equipamento1->valor = 1500.00;

$equipamento2 = new Equipamento();
$equipamento2->nome = "Teclado Mecânico";
$equipamento2->tipo = "RGB Switch Red - ABNT2 - USB - Preto - Redragon";
$equipamento2->valor = 300.00;

echo "Equipamento 1 <br>";
$equipamento1->exibirDetalhes();
echo "<br>Equipamento 2 <br>";
$equipamento2->exibirDetalhes();

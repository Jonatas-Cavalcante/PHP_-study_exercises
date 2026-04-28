<?php
class Estoque{
    public $item;
    public $quantidade;

    Function verificarestoque(){
        $quantidade = $this->quantidade;
        $item = $this->item;

        if($quantidade > 0)
            {
                return "O estoque de $item possui $quantidade unidades";
            }
            else{
                return "ALERTA: Estoque de $item esgotado ou inválido!";
            }
    }
}


$objeto1 = new Estoque();
$objeto1->item = "Pinho";
$objeto1->quantidade = 10;

$objeto2 = new Estoque();
$objeto2->item = "Cedro";
$objeto2->quantidade = -1;

echo $objeto1->verificarestoque();
echo "<br>";
echo $objeto2->verificarestoque();
?>
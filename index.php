<?php

function contador() {
    static $contandor = 0;
    $contandor++;
    return "Contador: $contandor <br>";
}


echo contador();
echo contador();
echo contador();
echo contador();
echo contador();
echo contador();
echo contador();
echo contador();
echo contador();
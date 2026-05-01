<?php

$imail = "test1@example.com";
$senha = 123456;


if ($imail == "test1@example.com.") {
    if ($senha == 123456) {
        echo "Login bem-sucedido!";
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Email não encontrado.";
}
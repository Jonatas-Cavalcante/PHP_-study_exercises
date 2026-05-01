<?php

$velocity = 120;

if ($velocity < 40){
    echo "The velocity is correct";
}
elseif ($velocity == 40){
    echo "The velocity is dangerous";
}
elseif ($velocity > 40){
    echo "you will receive a fine";
}

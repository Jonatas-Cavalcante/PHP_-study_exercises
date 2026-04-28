<?php

$people_caracteristics = [
    "color" => "white",
    "size" => "big",
    "years_old" => 30,
    "hight" => 1.80,
    "hair_color" => "black"
];

if ($people_caracteristics['years_old'] >= 18) {
    echo "You are an adult";
} else {
    echo "You are a minor";
}
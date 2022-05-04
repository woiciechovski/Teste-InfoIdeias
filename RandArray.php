<?php

function RandArray()
{
    //Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. Depois informe qual ou quais número(s) não se repetiram.
    $array = array();
    for ($i = 0; $i < 20; $i++) {
        $num = rand(1, 10);
        array_push($array, $num);
    }
    //echo "Array: ";
    //print_r($array);
    //echo "Frequencia: ";
    //print_r(array_count_values($array));
    
    //remove o valor com frequencia maior que 1.
    $array_count = array_count_values($array);
    foreach ($array_count as $key => $value) {
        if ($value > 1) {
            foreach ($array as $key2 => $value2) {
                if ($value2 == $key) {
                    unset($array[$key2]);
                }
            }
           
        }
    }

    return $array;
}

print_r(RandArray());
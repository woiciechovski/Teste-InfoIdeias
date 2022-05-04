<?php
//array de arrays
$TodosOsArray = [
    [1, 3, 2, 1],
    [1, 3, 2],
    [1, 2, 1, 2],
    [3, 6, 5, 8, 10, 20, 15],
    [1, 1, 2, 3, 4, 4],
    [1, 4, 10, 4, 2],
    [10, 1, 2, 3, 4, 5],
    [1, 1, 1, 2, 3],
    [0, -2, 5, 6],
    [1, 2, 3, 4, 5, 3, 5, 6],
    [40, 50, 60, 10, 20, 30],
    [1, 1],
    [1, 2, 5, 3, 5],
    [1, 2, 5, 5, 5],
    [10, 1, 2, 3, 4, 5, 6, 1],
    [1, 2, 3, 4, 3, 6],
    [1, 2, 3, 4, 99, 5, 6],
    [123, -17, -5, 1, 2, 3, 12, 43, 45],
    [3, 5, 67, 98, 3]
];

function crescente($var)
{
    //verifica se o array está ordenado crescente
    $cont = 0;

    for ($i = 0; $i < count($var) - 1; $i++) {
        if ($var[$i] < $var[$i + 1]) {
            $cont++;
        }
    }
    if ($cont == count($var) - 1) {
        return true;
    } else {
        return false;
    }
}

function SequenciaCrescente($array)
{
    //Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.
    $crescente = 'false';
    $cont = 0;
    foreach ($array as $key => $value) {
        $array_original = $array;
        unset($array_original[$key]);
        //refaz o array sem o elemento
        $array_original = array_values($array_original);
        if (crescente($array_original)) {
            $crescente = 'true';
            $cont++;
        }
    }

    return $crescente;
}

foreach ($TodosOsArray as $key => $value) {
    print_r(json_encode( $value) . " - " . SequenciaCrescente($value) . "\n");
}

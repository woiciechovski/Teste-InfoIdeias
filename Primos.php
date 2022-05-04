<?php 

function Primos($inicial, $Final){
//Crie uma função que receba como parâmetro 2 números  inteiros (inicial e final) 
// e retorne um array com os números primos estão compreendidos entre o valor inicial e o final,
// desprezando o número inicial e final recebidos como parâmetro. 

//O codigo abaixo ira executar como o exemplo abaixo:
//Se o usuário digitar o valor inicial 5 e o valor final 10, a função deve retornar os números primos entre 5 e 10, exceto 5 e 10.
//Se o usuário digitar o valor inicial 10 e o valor final 5, a função deve retornar os números primos entre 5 e 10, exceto 5 e 10.
//Se o usuário digitar o valor inicial 5 e o valor final 5, a função deve retornar um array vazio.
//Se o usuário digitar o valor inicial 10 e o valor final 10, a função deve retornar um array vazio.

    $array = array();
    $i = $inicial;
    $f = $Final;
    if($inicial > $Final){
        $i = $Final;
        $f = $inicial;
    }
    for($i; $i <= $f; $i++){
        $cont = 0;
        for($j = 1; $j <= $i; $j++){
            if($i % $j == 0){
                $cont++;
            }
        }
        if($cont == 2){
            array_push($array, $i);
        }
    }

    //remove o valor inicial e final
    if(in_array($inicial, $array)){
        $key = array_search($inicial, $array);
        unset($array[$key]);
    }
    if(in_array($Final, $array)){
        $key = array_search($Final, $array);
        unset($array[$key]);
    }
    return $array;
}

echo var_dump(Primos(10, 29));

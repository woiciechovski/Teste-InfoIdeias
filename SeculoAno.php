<?php

function SeculoAno($ano)
{
    $seculo = $ano / 100;

    if ($seculo > 0) {
        $seculo = ceil($seculo);
    } else {
        $seculo = floor($seculo);
    }
    return $seculo;
}

echo SeculoAno(1905);

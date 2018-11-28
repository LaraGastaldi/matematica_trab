<?php
//Tipo de função polinomial
$fun = 5;
$numeros = array();
for ($i = $fun; $i >= 0; $i--) {
    //aqui quando pede-se o a, ele não aceitará 0
    if ($i = $fun) {
        $numeros[] = 100;
    } else {
        $numeros[] = 22;
    }
}
//inverte-se o array apenas para usar um for positivo, se nao teriamos usado um for negativo
$numeros      = array_reverse($numeros);

for ($i = 0; $i <= 2; $i += 0.1) {
    $result1 = 0;
    $result2 = 0;
    //aqui vai ser encontrado o valor do y onde o x é igual ao $i, também onde o x é igual a $i + 1 para poder comparar os dois
    for ($j = 0; $j <= ($fun); $j++) {
        $result1 = $result1 + pow($i, $j) * $numeros[$j];
        $result2 = $result2 + pow(($i + 1), $j) * $numeros[$j];
    }
    //aqui ve se os dois valores tem troca de sinal, aí criasse um intervalo
    if (($result1 > -pow(10, -7) and $result2 < pow(10, -7)) or ($result1 < pow(10, -7) and $result2 > -pow(10, -7))) {
        $valores = array($i, $i + 1);
        $numeroraizes = true;
        break;
    }
}

if (!isset($numeroraizes)) {
    $raizes1 = false;
} else {
    $raizes1 = true;
}
//se tiver raíz(es), refinamos os intervalos
if ($raizes1 == true) {
    //esse for pula de dois em dois pois cada intervalo possui dois valores
    do {
        $sinal    = 0;
        $result1  = 0;
        $result2  = 0;
        $terceiro = ($valores[$i] + $valores[$i + 1]) / 2;
        for ($j = 0; $j <= ($fun); $j++) {
            $sinal   = $sinal + pow($terceiro, $j) * $numeros[$j];
            $result1 = $result1 + pow($valores[$i], $j) * $numeros[$j];
            $result2 = $result2 + pow($valores[$i + 1], $j) * $numeros[$j];
        }

        if (($result1 > -pow(10, -7) and $sinal > -pow(10, -7)) or $result1 < pow(10, -7) and $sinal < pow(10, -7)) {
            $valores[$i] = $terceiro;
        } elseif (($result2 > -pow(10, -7) and $sinal > -pow(10, -7)) or ($result2 < pow(10, -7) and $sinal < pow(10, -7))) {
            $valores[$i + 1] = $terceiro;
        }

        if (abs($valores[$i + 1] - $valores[$i]) < pow(10, -7)) {
            $tamanho        = true;
            $resultadofinal = ($valores[$i] + $valores[$i + 1]) / 2;
        } else {
            $tamanho = false;
        }
    } while ($tamanho == false);
}
?>

<?php
//**


echo "Condicionais - IF ELSE<hr>";
echo "<br> <br>";

if (true) {
    echo "Serei impresso?<br>";
}

if (false) {
    echo "Verdadeiro - Parte A<br> ";
    echo "Verdadeiro - Parte B<br> ";
} else {
    echo "Falso - Parte A<br> ";
    echo "Falso - Parte B<br> ";
}

if (false) {
    echo "Passo A <br> ";
} elseif (false) {
    echo "Passo B <br> ";
} elseif (false) {
    echo "Passo C <br> ";
} elseif (false){
    echo "Passo D <br> ";
} elseif (false) {
    echo "Passo E <br> ";
} else {
    echo "Ultimo Passo <br> ";
}

echo "<br> <br>";

$idade = 15;
if ($idade < 18) {
    echo "Menor de idade = $idade anos <br>";
} elseif ($idade <= 65) {
    echo "Adulto = $idade anos <br>";
} else {
    echo "Terceira idade = $idade anos!";
} 

echo "<br>";

$produto_em_estoque = false;

if (!$produto_em_estoque) {
    echo "Produto em falta no estoque! <br>";  //imprime esse por conta da negação
} else {
    echo "Produto disponivel no estoque! <br>";
}

echo "<br>";
echo "<br>";
echo "Equação do Segundo Grau: <hr>";
echo "<br>";
// delta maior que 0
$a = 1;
$b = 3;
$c = -4;
$delta = $b**2 - 4 * $a * $c; // b^2 - 4ac
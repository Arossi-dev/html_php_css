<?php



// tipos
echo "Numero inteiro <br>";
echo 1;
echo '<br>';
echo "<br> Numero decimal <br>";
echo 2.3;
echo '<br>';
echo "<br> String <br>";
echo "Essa é uma string";
echo '<br> <br>';
var_dump(value:1);
echo '<br>';
echo '<br>';
var_dump(value:1.5);
echo '<br> <br>';
var_dump(value: "texto");
echo '<br> <br>';
echo "Operações ARITIMÉTICAS <br>";
echo '<br>';
echo "<br> Primeiro Calculo <br>";
echo 1 + 3;
echo '<br>';
echo "<br> Segundo Calculo <br>";
echo 2 * 3.5;
echo '<br>';
echo "<br> Terceiro Calculo <br>";
echo 25/3;
echo '<br> <br>';
echo "Usando round: " .
round(1234567.89123, 2);
// Resultado: 1234567.89
echo '<br> <br>';
echo "number_format sem separadores: " .
number_format(num: 1234567.89123, decimals: 2);
//resultado: 1,234,567.89
echo '<br> <br>';
// Usando number_format com separadores de milhares
echo "number_format com separadores";
echo number_format(num: 1234567.89123, decimals: 2, decimal_separator: ',', thousands_separator: '.');
// Resultado: 1.234.567,89
echo '<br> <br>';

echo "Modulo - ou resto da divisão <br>";
echo 7 % 4; 
//Calculo (a / b) = resultado na calculadora Quociente
// 7 / 4   1,75     1  0,75     3= (0,75 * 4)
// 10 / 3  3,333... 3  0,333... 1 = (0,333... *3)
// 9 / 2   4,5      4  0,5      1 = (0,5 * 2)
// 8 / 2   4        4  0        0 = (0 * 2)
// 11 / 5  2,2      2  0,2      1 = (0,2 * 5)

echo "<br> VERIFICANDO SE É PAR";

if (8 / 2 == 0) {
    echo "O numero é par";
} else {
    echo "O numero é impar";
}
echo "<br> <br>";

echo "Expoente <br>";
echo 3 ** 2;
echo "<br> <br>";
echo "PRECEDÊNCIA <br>";
echo "( )  =>  **  =>  /  *  %  =>  + -";
echo "<br> <br>";
echo 2 + 3 * 4, "<br>";
echo (2 + 3) * 4, "<br>";
echo 2 + 3 * 4 ** 2, "<br>";
echo "<br> <br>";

echo "STRING <br>";
echo "Eu sou uma STRING <br>";
echo "<br>";
echo "Concatenação <br>";
echo "Vai" . "curintians <br>";
echo "Vai" . " curintians <br>";
echo "<br>";
echo "ASPAS <br>";
echo " 'simples' " , ' "dupla" ';
echo '\' simples simples \'' . "\" dupla dupla \" ";
echo '<br> <br>';
$nome = "Antonio";
echo "Olá \t $nome"; // saida: Olá Antonio
echo '<br> <br>';
echo "<pre>Olá \t $nome</pre>"; // saida: Olá       Antonio
echo "<br> <br>";
$nome = "Antonio";
echo 'Olá \t $nome'; // saida: Olá \t $nome
echo '<br> <br>';

echo "BOOLEANO <br>";
echo true;
echo "<br>";
echo false;
echo "<br>";
echo var_dump(value: true);
echo "<br>";
echo var_dump(value: false);
echo "<br>";
echo 'xxxx';
echo "<br>";
echo is_bool(value: false);
echo "<br>";
echo "rrrrrrr";
echo "<br>";
echo is_bool(value: "true");
echo "<br>";




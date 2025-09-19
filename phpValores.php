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
round(num: 1234567.89123. precision: 2);
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
// resultado: 3
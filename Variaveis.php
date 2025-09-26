<?php
// Declaração de variáveis
echo "Variáveis <br>";
$nome = "Antonio";    //variavel string
$idade = 41;          //variavel inteira (integer)
$altura = 1.85;       //variavel float
$casado = true;       //variavel booleana

echo "<br>";

// Exibindo o conteúdo das variáveis
echo "Nome: " . $nome . "<br>";
echo "Idade ". $idade ." anos<br>";
echo "Altura: " . $altura . " metros<br>";
//Condicional utilizando a variável booleana
if ($casado) {
    echo "Estado Civil: Casado<br>";
} else {
    echo "Estado Civil: Solteiro<br>";
}

echo "<br>";

// Nomes de variaveis validas
$var = 'valida';
$var2 = 'valida';
$var3 = 'valida';
$_var_4 = 'valida';
$var5 = 'valida'; // evitar!
// $6var = 'invalida'; // inválida, não pode começar com número
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo "Tipos de variaveis <br>";
echo "<br>";
var_dump(value: $nome);
echo "<br>";
var_dump(value: $idade);
echo "<br>";
var_dump(value: $altura);
echo "<br>";
var_dump(value: $casado);
echo "<br>";
echo "<br>";

// Operaçoes com variaveis
$idade_ano_que_vem = $idade + 1;
echo "Idade no próximo ano: " . $idade_ano_que_vem . " anos<br>";
echo "<br>";
// SOMA
echo "Soma: "
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;
echo "<br>";
// Concatenando Strings
echo "Concatenando Strings <br>"
$mensagem = "Olá, meu nome é " . $nome . " e eu tenho " . $idade . " anos.";
echo $mensagem;
echo "<br>";
echo "<br>";
echo "verifica se a variavel esta setada";
echo "<br>";
echo isset($somaDosNumeros); // verifica se a variavel esta setada

echo "numero 10 <br>";
$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 3;
echo "<br>" . $numero;
$numero = $numero + 1.5;
echo "<br>" . $numero;

echo "<br>";
$numero = 10;
echo "<br> . numero--: " . $numero--; // $numero = $numero - 1;
echo "<br>" . $numero;
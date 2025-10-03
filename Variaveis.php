<?php   
    // Declaracao de variaveis
    echo "Declaração de variaveis <br>";
    $nome = "João";
    $idade = 20;
    $altura = 1.75;
    $casado = true;
 
    echo "<br>";
 
    // Exibindo variaveis
    echo "Exibindo variaveis <br>";
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Altura: " . $altura . "<br>";
 
 
    //Condicional utilizando a variavel booleana
    if ($casado) {
        echo "Casado: Sim <br>";
    } else {
        echo "Casado: Não <br>";
    }
 
 
    //vardump para exibir detalhes da variavel
    echo "Tipos de dados de variaveis <br>";
    echo "<br>";
    var_dump($nome);
    echo "<br>";
    var_dump($idade);
    echo "<br>";
    var_dump($altura);
    echo "<br>";
    var_dump($casado);
    echo "<br>";
    echo "<br>";
 
    // Operacoes com variaveis
    $idade_ano_que_vem = $idade + 1;
    echo "Idade no proximo ano: " . $idade_ano_que_vem . " anos <br>";
    echo "<br>";
    // Soma
    echo "Soma: ";
    $a = 3;
    $b = 16;
    $somaDosNumeros = $a + $b;
    echo $a . " + " . $b . " = " . $somaDosNumeros . "<br>";
    // Concatenenado strings
    $mensagem = "Ola, meu nome é " . $nome . " e tenho " . $idade . " anos.";
    echo $mensagem;
    echo "<br>";
    echo "<br>";
    echo "Verifica se a variavel esta setada";
    echo "<br>";
    echo isset($somaDosNumeros); // vertifica se a variavel esta setada
 
    echo "Numero 10 <br>";
    echo $numero = 10; // atribui o valor 10 a variavel e exibe o valor
    echo '<br>' . $numero; // exibe o valor da variavel
    $numero -= 3; // subtrai 3 do valor da variavel
    echo '<br>' . $numero; // exibe o valor da variavel
    $numero += 1.5;
    echo '<br>' . $numero; // exibe o valor da variavel 
 
    echo "<br>";
    $numero = 10;
    echo "<br> numero--: " . $numero--; // exibe o valor da variavel e depois decrementa
 
    echo "<br>";
    $numero = 10;
    echo "<br> --numero: " . $numero--; // decrementa o valor da variavel e depois exibe
    echo "<br> numero--: " . $numero; // exibe o valor da variavel

    $numero = 10;
    echo "<br> numero++: " . $numero++;
     // exibe o valor da variavel e depois incrementa
     echo "<br>" . $numero;
     echo "<br>";
     $numero = 10;
     echo "<br> ++numero: " . ++$numero;
     // $numero = $numero + 1;
     echo "<br>" . $numero;
     echo "<br>"; echo "<br>";
     echo "numero 20 <br>";
    
     $numero = 20;
    echo '<br>' . $numero; // exibe o valor da variavel - 5
    $numero -= 5; // subtrai 3 do valor da variavel
    echo '<br>' . $numero; // exibe o valor da variavel +5
    $numero += 5; // soma 5 ao valor da variavel
    echo '<br>' . $numero; // exibe o valor da variavel
    $numero *= 10; // multiplica o valor da variavel por *10
    echo '<br>' . $numero; // exibe o valor da variavel
    $numero /= 20; // divide o valor da variavel por / 20 
    echo '<br>' . $numero; // exibe o valor da variavel
    $numero **= 2; // pega o resto da divisao do valor da variavel por **2
    echo '<br>' . $numero;
    $numero .= 4; // concatena o valor da variavel com 4 ou seja... 100 + 4 = 1004
    echo '<br>' . $numero;

    $texto = "Esse é um texto";
    echo "<br>" . $texto;
    $texto = $texto . ' qualquer';
    echo "<br>" . $texto;
    $texto .= ' de verdade';
    echo "<br>" . $texto;

    echo " Constantes";
    echo "<br>";
    define('TAXA_DE_JUROS', 5.9); // define uma constante
    echo "Taxa de juros: " . TAXA_DE_JUROS;

    const NOVA_TAXA = 2.5;
    echo "<br>" . NOVA_TAXA;

    $valorVariavel = 2.8; 
    define('NOVISSIMA_TAXA', $valorVariavel);
    echo "<br>" . NOVISSIMA_TAXA;
    echo "<br>";
   const NOVISSIMA_TAXA = 2.8 = 1.2;
     // Erro pois a constante ja foi definida
    echo "<br>" . NOVISSIMA_TAXA2;
    ?>
<?php include "cabecalho.php"; ?>

<div class="container">
  <h1>Variável</h1>
  <h3>Declaração de Variáveis</h3>
  <p>
  A declaração de variáveis em PHP é feita utilizando o símbolo de cifrão ($) antes do nome da variável. O nome da variável deve começar com uma letra ou um underscore (_), seguido por letras, números ou underscores. As variáveis em PHP são dinâmicas, ou seja, não é necessário declarar o tipo da variável antes de usá-la. O valor da variável pode ser alterado ao longo da execução do código.
  </p>
  Exemplo de declaração de variável:
 

  <pre>
      $nome = "Murillo";  // variável do tipo string
      $idade = 24;     // variável do tipo inteiro
      $altura = 1.75;   // variável do tipo float
  </pre>

  <?php 
    $nome = "Murillo";
    $idade = 24;
    $peso = 60.000;
    $altura = 1.69;

    $namorada = false;
    $salario = 5000.50;

    echo "<h1>$salario</h1>";

    $numeroTenis = "42";

    echo $idade + $peso;
  ?>

<h1>Constantes</h1>
<p>
Em PHP, constantes são valores fixos que não podem ser alterados durante a execução do programa. Elas são declaradas com a palavra-chave define() ou usando a palavra-chave const (para constantes definidas em classes ou escopos específicos).

A principal diferença entre constantes e variáveis é que, enquanto as variáveis podem ter seu valor alterado, as constantes mantêm o mesmo valor durante todo o script. Constantes podem ser usadas em qualquer lugar do código e não precisam do símbolo de cifrão ($).

<br />
Exemplo de declaração de constante:
</p>
 
    <pre>
 
     define("PI", 3.14);  // Usando define()
     echo PI;  // Imprime 3.14

     const URL = "https://www.exemplo.com";  // Usando const
     echo URL;  // Imprime https://www.exemplo.com

    </pre>
    <?php
    define("PI",3.14);
    echo PI;
    echo "<br>";

    const coordenador = "Faberson";
    echo "<br>";
    echo coordenador;

    ?>

<h1>Exercícios</h1>

<ol>
  <li>Crie 3 variaveis, atribua valor e some os valores.  Imprima na tela </li>
  <li>Crie 2 variaveis, atribua valor e multiplique os valores. Imprima na tela</li>
  <li>Crie 3 variáveis, uma para descrição de produto e outras duas para quantidade em estoque e valor de venda, 
    imprima na tela as informações cocatenadas.
  </li>
  <li>
    Crie uma variável boleana, atribua true ou false e imprima na tela
  </li>
  
</ol>


<h1>Primeiro</h1>
    <?php
        $primeiro = 5;
        $segundo = 3;
        $terceiro = 10;

        echo $primeiro + $segundo + $terceiro;
    ?>

<h1>Segundo</h1>

    <?php
        $negativo = 8;
        $neg = -9;
        echo $neg * $negativo;
    ?>

<h1>Terceiro</h1>

    <?php
        const produto = "ovo";
        echo produto;

        echo "<br>";

        $quantidade = 5;
        echo  $quantidade;

        echo "<br>";

        $valor = 22.10;
        echo $valor;
    ?>

<h1>Quarto</h1>
    <?php
        define ("namoro", false);
        echo namoro;
    ?>
</div> <!-- Fecha container bootstrap -->

<?php include "rodape.php"; ?>
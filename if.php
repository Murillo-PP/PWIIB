<?php include "cabecalho.php"; ?>

<div class="container">
  <h1>If</h1>
  <p>
  <h2>Estrutura de decisão</h2>
  A estrutura de decisão é composta por um teste booleano.
  Esse teste verifica uma confição se verdadeiro faça alguma ou se faça outra.
  <pre>
    if($numero == 1)
    {
      echo "Aqui significa $numero igual a 1";
    } else  {
      echo "Aqui significa $numero diferente de 1";
    }
  </pre>
  <?php
    $numero = 1;
    if($numero == 1)
    {
      echo "Aqui significa que $numero é igual a 1";
    }
    else 
    {
      echo "Aqui significa que $numero é diferente de 1";
    }
  ?>
  </p>
  <h2>Estrutura de decisão encadeada</h2>
  <p>
  São varios testes um seguido do outro até algum teste verdadeiro ser encontrado, 
  Caso não encontre nenhum positivo o else é executado.
  Ao encontrar um teste positivo todos os subsequentes não serão executados.
  <pre>
    $nome = "Murillo";
    if($nome == "João"){

    } else if ($nome == "Maria"){

    } else if ($nome == "Murillo"){
      echo "Achou o nome Murillo e encerra o IF";
    } else if ($nome == "Pedro"){

    } else {
      echo "Nenhum nome é igual ao conteudo da variavel";
    }
  </pre>
  <?php
    $nome = "Murillo";
    if($nome == "João"){

    } else if ($nome == "Maria"){

    } else if ($nome == "Murillo"){
      echo "Achou o nome Murillo e encerra o IF";
    } else if ($nome == "Pedro"){

    } else {
      echo "Nenhum nome é igual ao conteudo da variavel";
    }
  ?>
  </p>
  <h2>Varios testes em 1 if</h2>
  Em uma estrutura de decisão unica eu consigo realizar dois ou mais testes. Nesse caso eu preciso utulizar os conectivos AND ou OR (E ou OU).
  <h3>Conectivo E (And)</h3>
  No exemplo abaixo eu necessito que todas as condições resultem em verdadeiro
  <pre>
    $numero2 = 35;
    if($numero2 > 10 && $numero2 < 50)
    {
      echo "$numero2 está entre 10 e 50";
    }
    //     FALSE            TRUE
    if($numero2 > 36 && numero2 < 50)
    {
      //Esse código não será executado
    } else {
      echo "$numero2 não está entre 36 e 50";
    }
  </pre>
  <?php
    $numero2 = 35;
    //      TRUE     E       TRUE
    if($numero2 > 10 && $numero2 < 50)
    {
      echo "$numero2 está entre 10 e 50\n<br>";
    }
    //     FALSE            TRUE
    if($numero2 > 36 && numero2 < 50)
    {
      //Esse código não será executado
    } else {
      echo "$numero2 não está entre 36 e 50";
    }
  ?>
</div>
<?php include "rodape.php"; ?>
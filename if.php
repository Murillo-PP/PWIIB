<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Projeto PWII B</title>
     <link rel="stylesheet" href="bootstrap.min.css">

<style>
  
   .row{
     border: 2px solid red;
     padding: 5px:
   }

    .row > div {
      border: 2px solid yellow;
      padding: 50px 0;
      text-align: center
    }

</style>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/green.png" alt="Green Lantern" width="30" height="30">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PHP
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="variavel.php">Variavel</a></li>
            <li><a class="dropdown-item" href="if.php">if</a></li>
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">for</a></li>
            <li><a class="dropdown-item" href="array.php">array/vetor</a></li>
            <li><a class="dropdown-item" href="switch.php">switch</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

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
<script src="bootstrap.bundle.min.js" ></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII B</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="estilo.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="img/green.png" alt="Green Lantern" width="30" height="30">
    </a>
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
  <h1>While</h1>
  <p>
    While é uma estrutura de repetição. Existem 3 configurações para 
    a estrutura de repetição funcionar:
    <ol>
      <li>Variável de controle</li>
      <li>Condição de finalização</li>
      <li>Incremento da variavel de controle</li>
    </ol>
    <pre>
        $i = 0;
        while($i < 10)
        {
          echo "indice $i";
          $i = $i + 1;
        }
    </pre>
    <?php
      $i = 0;
      while($i < 10)
      {
        echo "while com indice $i <br>";
        $i = $i + 1;
      }
    ?>
  </p>
  <h2>Do While </h2>

  <p>
  A diferença do DO WHile para While é que no DO WHILE sempre vai haver pelo menos 
  uma execução do bloco de código.
  Você avalia a necessidade de qual estrutura de repetição é adequada.
    <pre>
        $i = 0;
        do{
          echo "while com indice $i <br>";
          $i = $i + 1;
        }while($i < 10)
    </pre>
  <?php

  $i = 0;
        do{
          echo "DO WHILE com indice $i <br>";
          $i = $i + 1;
        }while($i < 10)
  ?>
    </p>
</div>   
  <script src="bootstrap.bundle.min.js" ></script>
</body>
</html>
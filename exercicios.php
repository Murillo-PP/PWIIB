<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII B</title>
    <link href="bootstrap.min.css" rel="stylesheet">
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
      <div class="row">
      <div class="col-6 offset-3">
<ol class="list-group">
   <li class="list-group-item">
      1- Crie um formulário HTML que solicite o nome e a idade de um usuário.
      Ao enviar o formulário com o método GET, exiba o nome e a idade do usuário na página seguinte.

      <br />

   <form action="Exercicios.php" method="get">
         <div class="input-group mb-3">
               <span class="input-group-text">Nome</span>
               <input type="text" class="form-control" name="nome" >
         </div>
         <div class="input-group mb-3">
               <span class="input-group-text">Idade</span>
               <input type="number" class="form-control" name="idade"  >
         </div>
         <?php
            if(isset($_GET["idade"]) && empty($_GET["idade"]) )
            {
               echo "<div class='alert alert-danger'>";
               echo "   O campo idade não pode estar vazio";
               echo "</div>";
            }
         ?>
         <button type="submit" class="btn btn-primary">
            Enviar
         </button>
   </form>
   <br />
   <?php 
      if(isset($_GET["nome"]) && isset($_GET["idade"]) )
      {
   ?>      
        <div class="alert alert-success">
            Nome e idade: 
         <?php 
            echo $_GET["nome"];
          ?>
            <br/>
          <?php
            echo $_GET["idade"]; 
         ?>
   </div>
     
   <?php
      }
   ?>
  
</li>









<li class="list-group-item">
2-Crie um formulário HTML que receba dois números e, 
ao enviar com o método GET, exiba a soma desses dois números.
</li>
<li class="list-group-item">
3-Crie um formulário HTML que peça o nome do usuário. 
Quando o formulário for enviado com o método GET,
 exiba uma mensagem personalizada dizendo "Olá, [nome]".
</li>
<li class="list-group-item">
4-Crie um formulário de login que receba o nome de usuário e senha.
 Quando o formulário for enviado com o método POST,
  verifique se o nome de usuário e a senha são válidos
   (pode ser um simples exemplo de validação).
</li>
<li class="list-group-item">
5-Crie um formulário HTML que receba dois números e,
ao enviar com o método POST, exiba o produto desses números.
</li>
<li class="list-group-item">
6-Crie um formulário HTML que receba
 o nome e a mensagem de um usuário.
 Quando o formulário for enviado com o método POST,
  exiba a mensagem do usuário.

</li>









</div>
</div>
</div>

  <script src="bootstrap.bundle.min.js" ></script>
</body>
</html>
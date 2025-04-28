<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII B</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <style>
      #formulario {
            background-color: #FF9400;
            color: black;
            margin-top: 20px;
            padding: 30px;
            text-align: center;
            border-radius: 30px;
            max-width: 950px;
            margin-left: auto;
            margin-right: auto;
      }

      .btn-color {
              background-color: #0e1c36;
              color: #fff;
          }

      .profile-image-pic {
              height: 200px;
              width: 200px;
              object-fit: cover;
          }

      body {
              background-color: #F0F0F0;
          }

      .cardbody-color {
              /*background-color: #ebf2fa;*/
              background-color: #17458F;
          }

      a {
              text-decoration: none;
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="https://store.steampowered.com/" > Acesse a Steam por aqui </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PHP
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="professores.php">Professores</a></li>
            <li><a class="dropdown-item" href="if.php">if</a></li>
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">for</a></li>
            <li><a class="dropdown-item" href="array.php">array/vetor</a></li>
            <li><a class="dropdown-item" href="switch.php">switch</a></li>
            <li><a class="dropdown-item" href="login.php">Login</a></li>
          </ul>
        </li><!--Fim do menu dropdonw -->
        <li class="nav-item">
            <a class="nav-link" href="instalar.php" > 
              Instalar o banco 
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="usuarios.php" > 
              Usuarios
            </a>
        </li>
      </ul><!--Fim do menu  -->
    </div>
  </div>
</nav>
<div class="container">
  
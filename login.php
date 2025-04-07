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
      img {
          max-width: 100%;
          height: auto;
          margin-bottom: 20px;
      }

      button {
          width: 100%;
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


    <div id ="formulario" class="container">
      <div class="row">
      <div class="col-4 offset-4">
    <img src="img/def_civil.png" alt="Defesa Civil" width="450" height="300">
    <form action="verificar_login.php" method="post">
        <br />Digite o login:
        <input type="text" class="form-control" name="login" />
        <br />Digite a senha:
        <input type="password" class="form-control" name="senha" />
        <?php 
        if (isset($_GET["erro"]) && empty($_GET["erro"])){
            echo $_GET['erro'];
        }
        ?>
        <br />
        <div class="col-4 offset-4">
        <button type="submit">
            Logar
        </button>
        </div>
    </form>
</div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
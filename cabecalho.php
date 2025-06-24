<script src="bootstrap.bundle.min.js"></script>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<script src="bootstrap.bundle.min.js"></script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Página inicial do site</title>
  <link href="bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<script src="bootstrap.bundle.min.js"></script>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aula PWII</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Página Inicial</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logoff.php">Logoff</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Paginas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="if.php">If</a></li>
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><a class="dropdown-item" href="array.php">Array</a></li>
            <li><a class="dropdown-item" href="variavel.php">Variavel</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="disciplina.php">Disciplinas</a></li>
            <li><a class="dropdown-item" href="referencias.php">Referencias</a></li>
            <li><a class="dropdown-item" href="Usuarios.php">Usuarios</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="conexao.php">Criar Banco</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search" action="#" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q" />
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<script src="bootstrap.bundle.min.js"></script>
</body>
</html>

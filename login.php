<?php include "cabecalho.php"; ?>
    <div id ="formulario" class="container">
      <div class="row">
      <div class="col-6 offset-3">
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
<?php include "rodape.php"; ?>
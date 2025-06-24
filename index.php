<?php session_start();
if($_SESSION["Logado"]==false)
{
    header("Location: login.php?erro=Você precisa estar logado");
}


?>
<?php include "cabecalho.php"; ?>

 <h1>Página inicial do site</h1>

 <?php include "rodape.php"; ?>
 
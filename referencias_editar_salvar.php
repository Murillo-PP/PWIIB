<?php
include "conexao.php";
require_once "referenciasRepository.php";

if (isset($_POST['editar_referencia']) && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $repo = new ReferenciasRepository($conexao);
    $repo->editar($nome, $id);
    header("location: referencias.php");
} else {
    header("location: referencias.php");
}
?>

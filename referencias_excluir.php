<?php
include "conexao.php";
require_once "referenciasRepository.php";

if (isset($_GET['id'])) {
    $repo = new ReferenciasRepository($conexao);
    $repo->excluir($_GET['id']);
}

header("location: referencias.php");
?>

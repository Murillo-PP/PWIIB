<?php
include "conexao.php";
require_once "disciplinaRepository.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $repo = new DisciplinaRepository($conexao);
    $repo->excluir($_GET['id']);
}

header("location: disciplinas.php");
exit;
?>

<?php
include "conexao.php";
require_once "disciplinaRepository.php";

if (isset($_POST['editar_disciplina']) && isset($_POST['id'])) {
    $id = $_POST['id'];
    $disciplina = $_POST['disciplina'];
    $repo = new DisciplinaRepository($conexao);
    $repo->editar($disciplina, $id);
    header("location: disciplinas.php");
} else {
    header("location: disciplinas.php");
}
?>

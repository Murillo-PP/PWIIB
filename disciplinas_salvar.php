<?php
include "conexao.php";
require_once "disciplinaRepository.php";

if (isset($_POST['salvar_disciplina'])) {
    $disciplina = $_POST['disciplina'];
    $repo = new DisciplinaRepository($conexao);
    $repo->inserir($disciplina);
    header("location: disciplinas.php");
} else {
    echo "Você não veio pelo formulário";
}
?>

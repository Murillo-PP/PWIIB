<?php
include "conexao.php";
require_once "disciplinaRepository.php";

if (isset($_POST['salvar_disciplina'])) {
    $disciplina = trim($_POST['disciplina']);
    if ($disciplina === '') {
        echo "Disciplina não pode estar vazia.";
        exit;
    }
    $repo = new DisciplinaRepository($conexao);
    $repo->inserir($disciplina);
    header("location: disciplinas.php");
    exit;
} else {
    echo "Você não veio pelo formulário";
}
?>

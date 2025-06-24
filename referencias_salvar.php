<?php
include "conexao.php";
require_once "referenciasRepository.php";

if (isset($_POST['salvar_referencia'])) {
    $nome = $_POST['nome'];
    $repo = new ReferenciasRepository($conexao);
    $repo->inserir($nome);
    header("location: referencias.php");
} else {
    echo "Você não veio pelo formulário";
}
?>

<?php

include "conexao.php";
require_once "UsuarioRepository.php";
$repo = new UsuarioRepository($conexao);

if (isset($_POST["ID"]) && isset($_POST['LOGIN'])) {
    $repo->Editar($_POST['LOGIN'], $_POST['ID'], isset($_POST['ATIVO']) ? 1 : 0);
    header('location: Usuarios.php');
} else {
    header('location: Usuarios.php');
}
?>

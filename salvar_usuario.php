<?php

include "conexao.php";
require_once "UsuarioRepository.php";
$repo = new UsuarioRepository($conexao);

if( isset($_POST["salvar_usuario"]) )
{
    $ativo = isset($_POST['ativo']) ? $_POST['ativo'] : false;
    $repo->inserir($_POST['login'],$_POST['senha'],$ativo);
    header('location: Usuarios.php');
}
else
{
    echo "Você não veio pelo formulario";
}

?>
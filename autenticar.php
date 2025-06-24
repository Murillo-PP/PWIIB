<?php 
session_start();
include "conexao.php";

if( (isset($_POST["login"]) && !empty($_POST["login"])) 
    && (isset($_POST["senha"]) && !empty($_POST["senha"])) ){

    $login = $conexao->real_escape_string($_POST["login"]);
    $senha = $conexao->real_escape_string($_POST["senha"]);

    $sql = "SELECT Id FROM Usuarios WHERE Login = '$login' AND Senha = '$senha'";

    $resultado = $conexao->query($sql);

    if(!$resultado){
        die("Erro na consulta SQL: " . $conexao->error);
    }

    if($resultado->num_rows > 0){
        $usuario = $resultado->fetch_assoc();
        $idUsuario = $usuario['Id'];

        $_SESSION["UsuarioLogado"] = $login;
        $_SESSION["Logado"] = true;
        $_SESSION["CAD_NOVO_PROD"] = true;
        $_SESSION["Permissoes"] = [];

        $sql_permissoes = "SELECT Role FROM USUARIOS_PERMISSOES 
                          INNER JOIN Permissoes ON Permissoes.Id = USUARIOS_PERMISSOES.Permissao_Id
                          WHERE Usuario_Id = $idUsuario";

        $resultado_permissoes = $conexao->query($sql_permissoes);

        if(!$resultado_permissoes){
            die("Erro ao buscar permissões: " . $conexao->error);
        }

        while ($permissao = $resultado_permissoes->fetch_assoc()) {
            array_push($_SESSION["Permissoes"], $permissao["Role"]);
        }

        header("Location: index.php");
        exit();
    }
    else{
        header("Location: login.php?erro=login e senha incorreto");
        exit();
    }
}
?>

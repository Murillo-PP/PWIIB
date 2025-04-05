<?php
if(isset($_POST["login"]) && empty($_POST["login"]) == false){
    echo "O login é:".$_POST["login"];
}else{
    echo "Email não existe";
}

if(isset($_POST["senha"]) && empty($_POST["senha"]) == false){
    echo "A senha é: ".$_POST["senha"];
}else{
    header('location: login.php?erro=Senha não pode estar em branco');
}
?>
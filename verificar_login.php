<?php
if(isset($_POST["email"]) && empty($_POST["email"]) == false){
    echo "O email é:".$_POST["email"];
}else{
    echo "Email não existe";
}

if(isset($_POST["senha"]) && empty($_POST["senha"]) == false){
    echo "A senha é: ".$_POST["senha"];
}else{
    header('location: login.php?erro=Senha não pode estar em branco');
}
?>
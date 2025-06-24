<?php 
session_start();
$_SESSION["Logado"] = false;
session_destroy();
header("Location: login.php?erro=Você saiu do sistema");
exit;
?>

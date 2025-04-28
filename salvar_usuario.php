<?php

include "conexao.php";

if( isset($_POST["salvar_usuario"]) )
{
    echo "Aqui vai a logica de salvar no banco";
}
else
{
    echo "Você não veio pelo formulario";
}

?>
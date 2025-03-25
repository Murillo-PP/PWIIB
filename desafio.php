<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Davi</title>
</head>
<body>
<?php 
if(  isset($_POST["nome"])  )
{
    echo "<h1>Existe o post $_POST[nome]</h1>";
}
?>
<form action="desafio.php" method="post">
<label>Meu nome:</label>
<input name="nome" />
<button type="submit">
    Enviar
</button>
</form>

</body>
</html>
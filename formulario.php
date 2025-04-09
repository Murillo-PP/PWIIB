<?php include "cabecalho.php"; ?>

<div class="container">
<h1>Cadastro de Usuário</h1>

<form action="salvar_dados.php" method="post">
    <label>Email</label>
    <input name="login" type="email" value="">
    <br />
    <label>Senha</label>
    <input name="senha" type="password" value="">
    <br/>
    <button type="submit">
        Logar
    </button>
</form>

</div>

<?php include "rodape.php"; ?>
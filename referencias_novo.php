<?php
include "cabecalho.php";
?>

<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Nova Referência</div>
            <div class="card-body">
                <form action="referencias_salvar.php" method="post">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" required />
                    <br />
                    <button type="submit" class="btn btn-primary" name="salvar_referencia">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "rodape.php"; ?>

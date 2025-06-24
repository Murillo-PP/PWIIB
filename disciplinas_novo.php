<?php
include "cabecalho.php";
?>

<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Nova Disciplina</div>
            <div class="card-body">
                <form action="disciplinas_salvar.php" method="post">
                    <label>Disciplina</label>
                    <input type="text" name="disciplina" class="form-control" required />
                    <br />
                    <button type="submit" class="btn btn-primary" name="salvar_disciplina">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "rodape.php"; ?>

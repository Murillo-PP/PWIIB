<?php
include "cabecalho.php";
include "conexao.php";
require_once "disciplinaRepository.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $repo = new DisciplinaRepository($conexao);
    $disciplina = $repo->buscarPorId($_GET['id']);
} else {
    header("location: disciplinas.php");
}
?>

<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar Disciplina</div>
            <div class="card-body">
                <form action="disciplinas_editar_salvar.php" method="post">
                    <label>ID</label>
                    <input type="text" name="id" value="<?php echo $disciplina['ID']; ?>" class="form-control" readonly />
                    <br />
                    <label>Disciplina</label>
                    <input type="text" name="disciplina" value="<?php echo $disciplina['DISCIPLINA']; ?>" class="form-control" required />
                    <br />
                    <button type="submit" class="btn btn-primary" name="editar_disciplina">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "rodape.php"; ?>

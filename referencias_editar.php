<?php
include "cabecalho.php";
include "conexao.php";
require_once "referenciasRepository.php";

if (!isset($_GET['id'])) {
    header("location: referencias.php");
    exit;
}

$repo = new ReferenciasRepository($conexao);
$referencia = $repo->buscarPorId($_GET['id']);
?>

<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar Referência</div>
            <div class="card-body">
                <form action="referencias_editar_salvar.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $referencia['ID']; ?>" />
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="<?php echo $referencia['NOME']; ?>" required />
                    <br />
                    <button type="submit" class="btn btn-primary" name="editar_referencia">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "rodape.php"; ?>

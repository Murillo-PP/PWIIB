<?php
include "cabecalho.php";
include "conexao.php";
require_once "referenciasRepository.php";

$repo = new ReferenciasRepository($conexao);
$referencias = $repo->buscarTodos();
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header"><b>Lista de Referências</b></div>
            <div class="card-body">
                <a href="referencias_novo.php" class="btn btn-success mb-2">Nova Referência</a>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($referencias as $r): ?>
                        <tr>
                            <td><?php echo $r['ID']; ?></td>
                            <td><?php echo $r['NOME']; ?></td>
                            <td>
                                <a href="referencias_editar.php?id=<?php echo $r['ID']; ?>" class="btn btn-warning">Editar</a>
                                <a href="referencias_excluir.php?id=<?php echo $r['ID']; ?>" class="btn btn-danger" onclick="return confirm('Deseja excluir esta referência?')">Excluir</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include "rodape.php"; ?>

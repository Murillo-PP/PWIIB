<?php
include "cabecalho.php";
include "conexao.php";
require_once "disciplinaRepository.php";

$repo = new DisciplinaRepository($conexao);
$disciplinas = $repo->buscarTodos();
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header"><b>Lista de Disciplinas</b></div>
            <div class="card-body">
                <a href="disciplinas_novo.php" class="btn btn-success mb-2">Nova Disciplina</a>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Disciplina</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($disciplinas as $d): ?>
                        <tr>
                            <td><?php echo $d['ID']; ?></td>
                            <td><?php echo $d['DISCIPLINA']; ?></td>
                            <td>
                                <a href="disciplinas_editar.php?id=<?php echo $d['ID']; ?>" class="btn btn-warning">Editar</a>
                                <a href="disciplinas_excluir.php?id=<?php echo $d['ID']; ?>" class="btn btn-danger" onclick="return confirm('Deseja excluir esta disciplina?')">Excluir</a>
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

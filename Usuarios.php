<?php 
    include "cabecalho.php";
    include "conexao.php";

    require_once "UsuarioRepository.php";

    $repo = new UsuarioRepository($conexao);

    if(isset($_GET['busca']) && !empty($_GET['busca'])){
        $usuarios = $repo->Pesquisar($_GET['busca']);
    }else{
        $usuarios = $repo->buscarTodos();
    }
    
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <br>
            <div class="card-header">
                <b>Lista de usuários</b>
            </div>
            <div class="card-body">
                <form action="Usuarios.php" method="get">
                    <div class="row">
                        <div class="col-4">
                            <a href="novo_usuario.php" class="btn btn-success">
                                Novo usuário
                            </a>
                        </div>
                        <div class="col-4">
                            <input name="busca" class="form-control"/>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">
                                Pesquisar
                            </button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Login</th>
                                <th>Ativo</th>
                                <th>
                                    <?php
                                        //Foreach serve para ler todos os usuários
                                        //vindos do banco em formato de array chave valor
                                        foreach($usuarios as $item){
                                            echo "<tr>
                                                    <td>".$item['ID']."</td>
                                                    <td>".$item['LOGIN']."</td>
                                                    <td>".$item['ATIVO']."</td>
                                                    <td>
                                                        <a class='btn btn-danger' href='excluir_usuario.php?id=".$item['ID']."'>Excluir</a>
                                                        <a class='btn btn-warning' href='editar_usuario.php?id=".$item['ID']."'>Editar</a>
                                                    </td>
                                                </tr>";
                                            }
                                    ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "rodape.php";
?>
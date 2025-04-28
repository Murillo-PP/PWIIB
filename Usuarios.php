<?php 
    include "cabecalho.php";
    include "conexao.php";

    //Inclui o arquivo da classe Repository do usuário
    require_once "UsuarioRepository.php";

    //Crio um objeto do tipo UsuarioRepository chamado repo
    //E recebe a conexão como parametro
    $repo = new UsuarioRepository($conexao);

    //Chamei o metodo BuscarTodos para puxar
    //todos os usuários do banco de dados
    $usuarios = $repo->buscarTodos();
    
?>

<div class="row">
    <div classe="col-12">
        <div class="card">
            <br>
            <div class="card-header">
                <b>Lista de usuários</b>
            </div>
            <div class="card-body">
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
                <div class="row">
                    <table class="table table-striped">
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
                                                        <td>$item[ID]</td>
                                                        <td>$item[LOGIN]</td>
                                                        <td>$item[ATIVO]</td>
                                                        <td></td>
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
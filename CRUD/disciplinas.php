<?php
include "cabecalho.php";
include "conexao.php";

//Inclui o arquivo da classe Repository do usuário
require_once "disciplinaRepository.php";

//Crio um objeto do tipo UsuarioRepository chamado repo
//E recebe a conexão como parametro
$repo = new disciplinaRepository($conexao);

if(isset($_GET['busca']) && !empty($_GET['busca'])){
    $disciplinas = $repo->Pesquisar($_GET['busca']);
}else{
    //Chamei o metodo BuscarTodos para puxar
    //todos as disciplinas do banco de dados
    $disciplinas = $repo->buscarTodos();
}
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <br>
            <div class="card text-center">
                <b>Lista de disciplinas</b>
            </div>
            <div class="card-body">
                <form action="disciplinas.php" method="get">
                    <div class="row">
                        <div class="col-4">
                            <a href="diciplinas_novo.php" class="btn btn-sucess">
                                Nova disciplina
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <input name="busca"type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "rodape.php"
?>
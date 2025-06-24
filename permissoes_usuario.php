<?php 
include "cabecalho.php";
include "conexao.php";

$id_usuario = $_GET["id_usuario"]; // pega direto do GET, igual você fez

if (isset($_GET["Adicionar"]) && !empty($_GET["Adicionar"])) {
    $sql_salvar = "insert into usuarios_permissoes (USUARIO_ID, PERMISSAO_ID)
                    Values($id_usuario, $_GET[Adicionar])
    ";
    $resultado = $conexao->query($sql_salvar);
}

if (isset($_GET["excluir"]) && !empty($_GET["excluir"])) {
    $sql_excluir = "delete from usuarios_permissoes where id = $_GET[excluir]";
    $resultado = $conexao->query($sql_excluir);
}

$sql = "
    SELECT 
        p.id AS permissao_id,
        p.descricao AS descricao,
        up.Id,
        CASE 
            WHEN up.usuario_id IS NOT NULL
                THEN 1 
            ELSE 0 
            END AS acao
    FROM 
        permissoes p
    LEFT JOIN 
        usuarios_permissoes up 
    ON 
        p.id = up.permissao_id AND up.usuario_id = $id_usuario
";

$result = $conexao->query($sql);

echo "<table class='table table-bordered table-hover table-striped'>";
echo "<thead><tr><th>Ação</th><th>Descrição</th></tr></thead><tbody>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>"; 
        if ($row["acao"] == 1) {
            echo "<a href='permissoes_usuario.php?id_usuario=$id_usuario&excluir=$row[Id]' class='btn btn-danger'>Excluir Permissão</a>"; 
        } else {
            echo "<a href='permissoes_usuario.php?id_usuario=$id_usuario&Adicionar=$row[permissao_id]' class='btn btn-success'>Adicionar Permissão</a>";
        }
        echo "</td>";
        echo "<td>$row[descricao]</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='2'>Nenhuma permissão encontrada.</td></tr>";
}

echo "</tbody></table>";

$conexao->close();

?>

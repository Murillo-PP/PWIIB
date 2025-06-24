<?php
class DisciplinaRepository {
    private $conexao;

    public function __construct(mysqli $conexao) {
        $this->conexao = $conexao;
    }

    public function buscarTodos() {
        $result = $this->conexao->query("SELECT * FROM DISCIPLINAS");
        $disciplinas = [];
        while ($row = $result->fetch_assoc()) {
            array_push($disciplinas, $row);
        }
        return $disciplinas;
    }

    public function buscarPorId($id) {
        $stmt = $this->conexao->prepare("SELECT * FROM DISCIPLINAS WHERE ID = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function inserir($disciplina) {
        $sql = "INSERT INTO DISCIPLINAS (DISCIPLINA) VALUES (?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("s", $disciplina);
        $stmt->execute();
    }

    public function editar($disciplina, $id) {
        $sql = "UPDATE DISCIPLINAS SET DISCIPLINA = ? WHERE ID = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("si", $disciplina, $id);
        $stmt->execute();
    }

    public function excluir($id) {
        $sql = "DELETE FROM DISCIPLINAS WHERE ID = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
?>

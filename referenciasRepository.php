<?php

class ReferenciasRepository {
    private $conexao;

    public function __construct(mysqli $conexao) {
        $this->conexao = $conexao;
    }

    public function buscarTodos() {
        $result = $this->conexao->query("SELECT * FROM REFERENCIAS");
        $referencias = [];
        while ($row = $result->fetch_assoc()) {
            array_push($referencias, $row);
        }
        return $referencias;
    }

    public function buscarPorId($id) {
        $stmt = $this->conexao->prepare("SELECT * FROM REFERENCIAS WHERE ID = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function inserir($nome) {
        $sql = "INSERT INTO REFERENCIAS (NOME) VALUES (?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("s", $nome);
        $stmt->execute();
    }

    public function editar($nome, $id) {
        $sql = "UPDATE REFERENCIAS SET NOME = ? WHERE ID = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("si", $nome, $id);
        $stmt->execute();
    }

    public function excluir($id) {
        $sql = "DELETE FROM REFERENCIAS WHERE ID = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
?>

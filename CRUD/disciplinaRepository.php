<?php
class diciplinaRepository{
    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }
}
?>
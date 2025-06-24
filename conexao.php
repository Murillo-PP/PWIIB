<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "PW_BD";

$conexao = new mysqli($servidor, $usuario, $senha);
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $banco CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
if (!$conexao->query($sql)) {
    die("Erro ao criar banco: " . $conexao->error);
}

$conexao->select_db($banco);

$script = "

CREATE TABLE IF NOT EXISTS CATEGORIAS (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS PRODUTOS (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    DESCRICAO VARCHAR(150) NOT NULL,
    CODIGO_BARRAS VARCHAR(25) NOT NULL,
    VALOR DECIMAL(10,2) NOT NULL,
    IMAGEM VARCHAR(50),
    ATIVO BIT NOT NULL,
    CATEGORIA_ID INT,
    CONSTRAINT FK_PRODUTOS_CATEGORIAS FOREIGN KEY (CATEGORIA_ID) REFERENCES CATEGORIAS(ID)
);

CREATE TABLE IF NOT EXISTS USUARIOS (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    LOGIN VARCHAR(50) NOT NULL,
    SENHA VARCHAR(80) NOT NULL,
    ATIVO BIT DEFAULT 1
);

CREATE TABLE IF NOT EXISTS PERMISSOES (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    DESCRICAO VARCHAR(150) NOT NULL,
    ROLE VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS USUARIOS_PERMISSOES (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    USUARIO_ID INT NOT NULL,
    PERMISSAO_ID INT NOT NULL,
    CONSTRAINT FK_USUARIO FOREIGN KEY (USUARIO_ID) REFERENCES USUARIOS(ID) ON DELETE CASCADE,
    CONSTRAINT FK_PERMISSAO FOREIGN KEY (PERMISSAO_ID) REFERENCES PERMISSOES(ID) ON DELETE CASCADE
);

-- Dados CATEGORIAS
INSERT IGNORE INTO CATEGORIAS (NOME) VALUES
('Eletrônicos'),
('Vestuário'),
('Alimentos'),
('Utilidades Domésticas'),
('Gamer');

-- Dados PRODUTOS
INSERT IGNORE INTO PRODUTOS (DESCRICAO, CODIGO_BARRAS, VALOR, ATIVO, CATEGORIA_ID) VALUES
('Amendoin Verde', '7898728640096', 5.50, 1, 3),
('Goiabinha Saborosa', '7898045700725', 1.50, 1, 3),
('Camiseta Estampada - 100% Algodão', '1234567890123', 49.90, 1, 2),
('Tênis Esportivo - Conforto e Estilo', '1234567890124', 299.90, 1, 2),
('Smartphone XPro - 128GB, Câmera 48MP', '1234567890125', 1999.00, 1, 1),
('Caderno Universitário - 200 Folhas', '1234567890126', 29.90, 1, 4),
('Mochila de Couro - Elegante e Espaçosa', '1234567890127', 249.90, 1, 2),
('Fone de Ouvido Bluetooth - Cancelamento de Ruído', '1234567890128', 149.90, 1, 1),
('Relógio Digital - À Prova D\'água', '1234567890129', 199.90, 1, 1),
('Lavadora de Roupas - 10Kg', '1234567890130', 1599.00, 1, 4),
('Batedeira Elétrica - 5 Velocidades', '1234567890131', 399.90, 1, 4),
('Kit de Maquiagem - 12 Peças', '1234567890132', 89.90, 1, 2),
('Cafeteira Elétrica - 12 Xícaras', '1234567890133', 299.90, 1, 4),
('Conjunto de Panelas - Antiaderente', '1234567890134', 349.90, 1, 4),
('TV LED 50\" - Full HD', '1234567890135', 2499.00, 1, 1),
('Geladeira Inverse - 450 Litros', '1234567890136', 3499.00, 1, 4),
('Assento de Carro - Conforto e Segurança', '1234567890137', 199.90, 1, 4),
('Conjunto de Facas de Cozinha - 6 Peças', '1234567890138', 129.90, 1, 4),
('Roupão de Banho - Microfibra', '1234567890139', 89.90, 1, 4),
('Aspirador de Pó - Sem Fio', '1234567890140', 599.90, 1, 4),
('Secador de Cabelo - 2200W', '1234567890141', 199.90, 1, 4),
('Jogo de Lençóis - 150 Fios', '1234567890142', 159.90, 1, 4);

-- Dados USUARIOS
INSERT IGNORE INTO USUARIOS (LOGIN, SENHA, ATIVO) VALUES
('ADMIN', '123', 1),
('FELIPE MATHEUS YOSHIDA LAZARI', '123senha', 1),
('LEONEL FRANCISCO DAMIAO', '123senha', 1),
('LUCAS MATHEUS DE SOUZA DOS SANTOS', '123senha', 1),
('LUÍS FELIPE GAZIRO GOMES', '123senha', 1),
('MARLI EVANGELISTA', '123senha', 1),
('MATHEUS DA CRUZ SAITU HIGA', '123senha', 1),
('MATHEUS LUNA CAMARGO', '123senha', 1),
('MATHEUS SELEGHIN ALEXANDRE', '123senha', 1),
('MURILLO DE PAULA PEREIRA', '123senha', 1),
('RYAN ROBIN VELOSO DE MATOS', '123senha', 1),
('VITORIA FERNANDA FERRARI DA SILVA', '123senha', 1),
('YURI RAFAEL DA SILVA SANTO', '123senha', 1);

-- Você pode inserir permissões e relacionamentos aqui se quiser

";

if (!$conexao->multi_query($script)) {
    die("Erro ao executar script: " . $conexao->error);
}

do {
    // esvaziar os resultados para poder executar múltiplas queries
    if ($res = $conexao->store_result()) {
        $res->free();
    }
} while ($conexao->more_results() && $conexao->next_result());

echo "Banco, tabelas e dados criados com sucesso!";
?>

CREATE DATABASE IF NOT EXISTS db_produtos;

USE db_produtos;

CREATE TABLE IF NOT EXISTS tbl_produto (
  id_produto INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome_produto VARCHAR(100) NOT NULL,
  unidade VARCHAR(20) NOT NULL,
  quantidade_estoque INT NOT NULL,
  preco DECIMAL(10, 2) NOT NULL,
  codigo_fornecedor VARCHAR(50) NOT NULL,
  data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  data_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO
  tbl_produto (nome_produto, unidade, quantidade_estoque, preco, codigo_fornecedor)
VALUES
  (
    'Celular',
    'un',
    50,
    1200.00,
    'F12345'
  ),
  (
    'Notebook',
    'un',
    20,
    2500.00,
    'F54321'
  ),
  (
    'Camiseta',
    'pç',
    100,
    50.00,
    'F98765'
  );

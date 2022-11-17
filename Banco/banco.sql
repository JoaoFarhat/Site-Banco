CREATE DATABASE banco_cadastro;

USE banco_cadastro;

CREATE TABLE `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CPF` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `senha` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`,`CPF`),
  UNIQUE KEY `CPF_UNIQUE` (`CPF`),
  UNIQUE KEY `senha_UNIQUE` (`senha`)
);

CREATE TABLE `transferencia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `qnt` decimal(10,2) NOT NULL,
  `tipo_transf` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_cpf_dest` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_cpf_remet` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cpf_dest` (`fk_cpf_dest`),
  KEY `fk_cpf_remet` (`fk_cpf_remet`),
  CONSTRAINT `transferencia_ibfk_1` FOREIGN KEY (`fk_cpf_dest`) REFERENCES `clientes` (`CPF`),
  CONSTRAINT `transferencia_ibfk_2` FOREIGN KEY (`fk_cpf_remet`) REFERENCES `clientes` (`CPF`)
)
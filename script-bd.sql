CREATE DATABASE IF NOT EXISTS game_journey_bd;

USE game_journey_bd;

CREATE TABLE IF NOT EXISTS usuario (
    id_usuario INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome_usuario VARCHAR(100),
    email VARCHAR(100),
    login VARCHAR(45),
    senha VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS registro (
    id_registro INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome_registro VARCHAR(100),
    plataforma VARCHAR(45),
    ano_lancamento VARCHAR(4),
    genero VARCHAR(20),
    tempo_jogado SMALLINT(4)
);

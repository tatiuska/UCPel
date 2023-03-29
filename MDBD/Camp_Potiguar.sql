-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- --------------------------------------------------
-- Schema Campeonato
-- --------------------------------------------------
-- Exercício prático do vídeo Aprendendo a criar Banco de Dados no Workbench, do canal André Quintiliano, no YouTube.
-----------------------------------------------------

CREATE SCHEMA IF NOT EXISTS 'Campeonato';
USE 'Campeonato';

-- --------------------------------------------------
-- Table 'Campeonato'.'Equipe'
-- --------------------------------------------------
CREATE TABLE IF NOT EXISTS 'Campeonato'.'Equipe' (
    'idEquipe' INT NOT NULL AUTO_INCREMENT,
    'nome' VARCHAR(45) NOT NULL,
)
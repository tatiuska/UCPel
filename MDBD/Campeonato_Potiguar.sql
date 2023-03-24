-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Campeonato
-- -----------------------------------------------------
-- Exercício prático do vídeo Aprendendo a criar Banco de Dados no Workbench, do canal André Quintiliano, no YouTube.

-- -----------------------------------------------------
-- Schema Campeonato
--
-- Exercício prático do vídeo Aprendendo a criar Banco de Dados no Workbench, do canal André Quintiliano, no YouTube.
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS 'Campeonato';
USE 'Campeonato';

-- -----------------------------------------------------
-- Table 'Campeonato'.'Equipe'
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS 'Campeonato'.'Equipe' (
  'idEquipe' INT NOT NULL AUTO_INCREMENT,
  'nome' VARCHAR(45) NOT NULL,
  'presidente' VARCHAR(45) NOT NULL,
  'contato' INT NOT NULL,
  PRIMARY KEY ('idEquipe'),
  UNIQUE INDEX 'nome_UNIQUE' ('nome' ASC) VISIBLE,
  UNIQUE INDEX 'presidente_UNIQUE' ('presidente' ASC) VISIBLE,
  UNIQUE INDEX 'contato_UNIQUE' ('contato' ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table 'Campeonato'.'Jogador'
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS 'Campeonato'.'Jogador' (
  'idJogador' INT NOT NULL AUTO_INCREMENT,
  'nome' VARCHAR(45) NOT NULL,
  'idade' INT NOT NULL,
  'Equipe_idEquipe' INT NOT NULL,
  PRIMARY KEY ('idJogador'),
  INDEX 'fk_Jogador_Equipe_idx' ('Equipe_idEquipe' ASC) VISIBLE,
  CONSTRAINT 'fk_Jogador_Equipe'
    FOREIGN KEY ('Equipe_idEquipe')
    REFERENCES 'Campeonato'.'Equipe' ('idEquipe')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table 'Campeonato'.'Partida'
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS 'Campeonato'.'Partida' (
  'idPartida' INT NOT NULL AUTO_INCREMENT,
  'golsCasa' INT NULL DEFAULT 0,
  'golsFora' INT NULL DEFAULT 0,
  'idEquipeFK1' VARCHAR(45) NOT NULL,
  'idEquipeFK2' VARCHAR(45) NOT NULL,
  PRIMARY KEY ('idPartida'),
  INDEX 'fk_Partida_Equipe1_idx' ('idEquipeFK1' ASC) VISIBLE,
  INDEX 'fk_Partida_Equipe2_idx' ('idEquipeFK2' ASC) VISIBLE,
  CONSTRAINT 'fk_Partida_Equipe1'
    FOREIGN KEY ('idEquipeFK1')
    REFERENCES 'Campeonato'.'Equipe' ('idEquipe')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT 'fk_Partida_Equipe2'
    FOREIGN KEY ('idEquipeFK2')
    REFERENCES 'Campeonato'.'Equipe' ('idEquipe')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table 'Campeonato'.'Info'
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS 'Campeonato'.'Info' (
  'idInfo' INT NOT NULL AUTO_INCREMENT,
  'Jogador_idJogador' INT NOT NULL,
  'Partida_idPartida' INT NOT NULL,
  'faltasSofridas' INT NOT NULL DEFAULT 0,
  'faltasCometidas' INT NOT NULL DEFAULT 0,
  'cartaoAmarelo' INT NOT NULL DEFAULT 0,
  'cartaoVermelho' INT NOT NULL DEFAULT 0,
  PRIMARY KEY ('idInfo'),
  INDEX 'fk_Info_Jogador1_idx' ('Jogador_idJogador' ASC) VISIBLE,
  INDEX 'fk_Info_Partida1_idx' ('Partida_idPartida' ASC) VISIBLE,
  CONSTRAINT 'fk_Info_Jogador1'
    FOREIGN KEY ('Jogador_idJogador')
    REFERENCES 'Campeonato'.'Jogador' ('idJogador')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT 'fk_Info_Partida1'
    FOREIGN KEY ('Partida_idPartida')
    REFERENCES 'Campeonato'.'Partida' ('idPartida')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

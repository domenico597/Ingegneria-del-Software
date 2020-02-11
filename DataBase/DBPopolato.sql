-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 11, 2020 at 09:40 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IngegneriaDelSoftware`
--
CREATE DATABASE IF NOT EXISTS `IngegneriaDelSoftware` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `IngegneriaDelSoftware`;

-- --------------------------------------------------------

--
-- Table structure for table `Aula`
--

CREATE TABLE IF NOT EXISTS `Aula` (
  `ID_Aula` int(11) NOT NULL AUTO_INCREMENT,
  `Codice_Aula` varchar(50) NOT NULL,
  `Descrizione` text NOT NULL,
  `Indirizzo` text NOT NULL,
  `Edificio` text NOT NULL,
  `Piano` text NOT NULL,
  `Foto` text NOT NULL,
  `Riservato_stud` tinyint(1) NOT NULL DEFAULT '0',
  `Numero_posti` int(11) NOT NULL,
  `Dipartimento` int(5) NOT NULL,
  PRIMARY KEY (`ID_Aula`),
  KEY `Dipartimento` (`Dipartimento`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Aula`
--

INSERT INTO `Aula` (`ID_Aula`, `Codice_Aula`, `Descrizione`, `Indirizzo`, `Edificio`, `Piano`, `Foto`, `Riservato_stud`, `Numero_posti`, `Dipartimento`) VALUES
(1, 'C1.10', 'Aula ', 'Via Vetoio, 67100, L\'Aquila AQ', 'Coppito 2', 'Piano Terra', 'http://disim.univaq.it', 0, 150, 1),
(2, 'A1.6', 'Edificio nel blocco 0 (quello giallo)', 'Via Vetoio, 67100, Coppito L\'Aquila', 'Blocco 0', 'Primo Piano', 'https://www.disim.univaq.it', 0, 70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Dipartimento`
--

CREATE TABLE IF NOT EXISTS `Dipartimento` (
  `Dipartimento` int(5) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(70) NOT NULL,
  `Numero_aule` int(11) NOT NULL,
  `Universita` int(5) NOT NULL,
  PRIMARY KEY (`Dipartimento`),
  KEY `Universita` (`Universita`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Dipartimento`
--

INSERT INTO `Dipartimento` (`Dipartimento`, `Nome`, `Numero_aule`, `Universita`) VALUES
(1, 'DISIM', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Docente`
--

CREATE TABLE IF NOT EXISTS `Docente` (
  `ID_Docente` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(25) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Telefono` varchar(13) NOT NULL,
  `Password` varchar(32) NOT NULL,
  PRIMARY KEY (`ID_Docente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Docente`
--

INSERT INTO `Docente` (`ID_Docente`, `Nome`, `Cognome`, `Email`, `Telefono`, `Password`) VALUES
(1, 'Henry', 'Muccini', 'henry.muccini@univaq.it', '3336662012', 'cfbdd20a3b54872b8212b2cbdc972f76');

-- --------------------------------------------------------

--
-- Table structure for table `Insegnare`
--

CREATE TABLE IF NOT EXISTS `Insegnare` (
  `ID_Insegnamento` int(11) NOT NULL AUTO_INCREMENT,
  `Materia` int(11) NOT NULL,
  `Docente` int(11) NOT NULL,
  PRIMARY KEY (`ID_Insegnamento`),
  KEY `Docente` (`Docente`),
  KEY `Materia` (`Materia`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Insegnare`
--

INSERT INTO `Insegnare` (`ID_Insegnamento`, `Materia`, `Docente`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Iscrizione`
--

CREATE TABLE IF NOT EXISTS `Iscrizione` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Materia` int(11) NOT NULL,
  `Studente` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Materia` (`Materia`),
  KEY `Studente` (`Studente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Materia`
--

CREATE TABLE IF NOT EXISTS `Materia` (
  `ID_Materia` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Semestre` int(11) NOT NULL DEFAULT '1',
  `Obbligatoria` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_Materia`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Materia`
--

INSERT INTO `Materia` (`ID_Materia`, `Nome`, `Semestre`, `Obbligatoria`) VALUES
(1, 'Ingegneria del software', 1, 0),
(3, 'Fondamenti di programmazione', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Posto`
--

CREATE TABLE IF NOT EXISTS `Posto` (
  `ID_Posto` int(5) NOT NULL AUTO_INCREMENT,
  `Numero_posto` int(11) NOT NULL,
  `ID_Aula` int(5) NOT NULL,
  PRIMARY KEY (`ID_Posto`),
  KEY `ID_Aula` (`ID_Aula`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Posto`
--

INSERT INTO `Posto` (`ID_Posto`, `Numero_posto`, `ID_Aula`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 22, 2),
(4, 3, 2),
(5, 4, 2),
(6, 5, 2),
(7, 6, 2),
(8, 7, 2),
(9, 8, 2),
(10, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Prenotazione_Docente`
--

CREATE TABLE IF NOT EXISTS `Prenotazione_Docente` (
  `ID_Prenotazione_Lezione` int(11) NOT NULL AUTO_INCREMENT,
  `Docente` int(11) NOT NULL,
  `Aula` int(11) NOT NULL,
  `Materia` int(11) NOT NULL,
  `Data_prenotazione` date NOT NULL,
  `Orario_prenotato` time NOT NULL,
  PRIMARY KEY (`ID_Prenotazione_Lezione`),
  UNIQUE KEY `Docente` (`Docente`,`Data_prenotazione`,`Orario_prenotato`),
  KEY `Aula` (`Aula`),
  KEY `Materia` (`Materia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Prenotazione_studente`
--

CREATE TABLE IF NOT EXISTS `Prenotazione_studente` (
  `ID_Prenotazione` int(5) NOT NULL AUTO_INCREMENT,
  `Posto` int(11) NOT NULL,
  `Studente` int(11) NOT NULL,
  `Data_Ora` datetime NOT NULL,
  `Data_prenotata` date NOT NULL,
  `Orario_prenotato` time NOT NULL,
  PRIMARY KEY (`ID_Prenotazione`),
  UNIQUE KEY `Studente` (`Studente`,`Data_prenotata`,`Orario_prenotato`),
  KEY `Posto` (`Posto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Presenza`
--

CREATE TABLE IF NOT EXISTS `Presenza` (
  `ID_Presenza` int(5) NOT NULL AUTO_INCREMENT,
  `ID_Studente` int(11) NOT NULL,
  `ID_Prenotazione_Lezione` int(11) NOT NULL,
  PRIMARY KEY (`ID_Presenza`),
  KEY `ID_Studente` (`ID_Studente`),
  KEY `ID_Prenotazione_Lezione` (`ID_Prenotazione_Lezione`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Segnalazioni`
--

CREATE TABLE IF NOT EXISTS `Segnalazioni` (
  `ID_Segnalazione` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Utente` int(11) NOT NULL,
  `ID_Aula` int(11) NOT NULL,
  `Tipologia_Utente` varchar(10) NOT NULL,
  `Descrizione` text NOT NULL,
  PRIMARY KEY (`ID_Segnalazione`),
  UNIQUE KEY `ID_Segnalazione` (`ID_Segnalazione`),
  KEY `ID_Aula` (`ID_Aula`),
  KEY `ID_Utente` (`ID_Utente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Studente`
--

CREATE TABLE IF NOT EXISTS `Studente` (
  `ID_Studente` int(11) NOT NULL AUTO_INCREMENT,
  `Matricola` int(11) NOT NULL,
  `Nome` varchar(25) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Corso` varchar(50) NOT NULL,
  `Password` varchar(32) NOT NULL,
  PRIMARY KEY (`ID_Studente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Studente`
--

INSERT INTO `Studente` (`ID_Studente`, `Matricola`, `Nome`, `Cognome`, `Email`, `Corso`, `Password`) VALUES
(1, 251850, 'Daniele', 'Di Desidero', 'daniele.didesidero@student.univaq.it', 'Informatica', '05347a077c468163cbdd9cdf8d18dbea'),
(2, 254063, 'Domenico', 'Bonali', 'domenico.bonali@student.univaq.it', 'Informatica', '40a55e8d8e476dfc6ac6623131657ab0');

-- --------------------------------------------------------

--
-- Table structure for table `Universita`
--

CREATE TABLE IF NOT EXISTS `Universita` (
  `ID_uni` int(5) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Indirizzo` text NOT NULL,
  `Numero_dipartimenti` int(11) NOT NULL,
  PRIMARY KEY (`ID_uni`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Universita`
--

INSERT INTO `Universita` (`ID_uni`, `Nome`, `Indirizzo`, `Numero_dipartimenti`) VALUES
(1, 'UNIVAQ', 'Via Camponeschi 19, 67100, L\'Aquila, Italia', 7);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Aula`
--
ALTER TABLE `Aula`
  ADD CONSTRAINT `aula_ibfk_1` FOREIGN KEY (`Dipartimento`) REFERENCES `Dipartimento` (`Dipartimento`);

--
-- Constraints for table `Dipartimento`
--
ALTER TABLE `Dipartimento`
  ADD CONSTRAINT `dipartimento_ibfk_1` FOREIGN KEY (`Universita`) REFERENCES `Universita` (`ID_uni`);

--
-- Constraints for table `Insegnare`
--
ALTER TABLE `Insegnare`
  ADD CONSTRAINT `insegnare_ibfk_1` FOREIGN KEY (`Docente`) REFERENCES `Docente` (`ID_Docente`),
  ADD CONSTRAINT `insegnare_ibfk_2` FOREIGN KEY (`Materia`) REFERENCES `Materia` (`ID_Materia`);

--
-- Constraints for table `Iscrizione`
--
ALTER TABLE `Iscrizione`
  ADD CONSTRAINT `iscrizione_ibfk_1` FOREIGN KEY (`Materia`) REFERENCES `Materia` (`ID_Materia`),
  ADD CONSTRAINT `iscrizione_ibfk_2` FOREIGN KEY (`Studente`) REFERENCES `Studente` (`ID_Studente`);

--
-- Constraints for table `Posto`
--
ALTER TABLE `Posto`
  ADD CONSTRAINT `posto_ibfk_1` FOREIGN KEY (`ID_Aula`) REFERENCES `Aula` (`ID_Aula`);

--
-- Constraints for table `Prenotazione_Docente`
--
ALTER TABLE `Prenotazione_Docente`
  ADD CONSTRAINT `prenotazione_docente_ibfk_1` FOREIGN KEY (`Docente`) REFERENCES `Docente` (`ID_Docente`),
  ADD CONSTRAINT `prenotazione_docente_ibfk_2` FOREIGN KEY (`Aula`) REFERENCES `Aula` (`ID_Aula`),
  ADD CONSTRAINT `prenotazione_docente_ibfk_3` FOREIGN KEY (`Materia`) REFERENCES `Materia` (`ID_Materia`);

--
-- Constraints for table `Prenotazione_studente`
--
ALTER TABLE `Prenotazione_studente`
  ADD CONSTRAINT `prenotazione_studente_ibfk_1` FOREIGN KEY (`Studente`) REFERENCES `Studente` (`ID_Studente`),
  ADD CONSTRAINT `prenotazione_studente_ibfk_2` FOREIGN KEY (`Posto`) REFERENCES `Posto` (`ID_Posto`);

--
-- Constraints for table `Presenza`
--
ALTER TABLE `Presenza`
  ADD CONSTRAINT `presenza_ibfk_1` FOREIGN KEY (`ID_Studente`) REFERENCES `Studente` (`ID_Studente`),
  ADD CONSTRAINT `presenza_ibfk_2` FOREIGN KEY (`ID_Prenotazione_Lezione`) REFERENCES `Prenotazione_Docente` (`ID_Prenotazione_Lezione`);

--
-- Constraints for table `Segnalazioni`
--
ALTER TABLE `Segnalazioni`
  ADD CONSTRAINT `segnalazioni_ibfk_1` FOREIGN KEY (`ID_Aula`) REFERENCES `Aula` (`ID_Aula`),
  ADD CONSTRAINT `segnalazioni_ibfk_2` FOREIGN KEY (`ID_Utente`) REFERENCES `Studente` (`ID_Studente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

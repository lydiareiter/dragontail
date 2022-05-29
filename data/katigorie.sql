-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Mai 2022 um 09:00
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `dragontail`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `katigorie`
--

CREATE TABLE `katigorie` (
  `katigorieid` int(11) NOT NULL,
  `bezeichnung` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `katigorie`
--
ALTER TABLE `katigorie`
  ADD PRIMARY KEY (`katigorieid`),
  ADD UNIQUE KEY `bezeichnung` (`bezeichnung`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `katigorie`
--
ALTER TABLE `katigorie`
  MODIFY `katigorieid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;


--
-- Daten für Tabelle `katigorie`
--

INSERT INTO `katigorie` (`katigorieid`, `bezeichnung`) VALUES
(1, 'buch'),
(2, 'pflanze'),
(3, 'zauberstab');
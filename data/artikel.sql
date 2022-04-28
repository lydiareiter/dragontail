-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 28. Apr 2022 um 09:43
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
-- Tabellenstruktur für Tabelle `artikel`
--

CREATE TABLE `artikel` (
  `artikelnr` int(11) NOT NULL,
  `titel` varchar(30) NOT NULL,
  `img` varchar(80) NOT NULL,
  `preis` double NOT NULL,
  `katigorie` varchar(30) NOT NULL,
  `Beschreibung` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `artikel`
--

INSERT INTO `artikel` (`artikelnr`, `titel`, `img`, `preis`, `katigorie`, `Beschreibung`) VALUES
(1, '225', '225.jpg', 15, 'buch', ''),
(2, '226', '226.jpg', 15, 'buch', ''),
(3, '457', '457.jpg', 15, 'buch', ''),
(4, 'Book_Cover_Mockup', 'Book_Cover_Mockup.jpg', 15, 'buch', ''),
(5, 'PSDnonB_Feb228', 'PSDnonB_Feb228.jpg', 15, 'buch', ''),
(6, 'PSDnonB_Feb242', 'PSDnonB_Feb242.jpg', 15, 'buch', ''),
(7, 'palmowska-631909', 'pexels-agnieszka-palmowska-631909.jpg', 15, 'pflanze', ''),
(8, 'iriser-1005715', 'pexels-irina-iriser-1005715.jpg', 15, 'pflanze', ''),
(9, 'iriser-1090972', 'pexels-irina-iriser-1090972.jpg', 15, 'pflanze', ''),
(10, 'kuzenkov-1974508', 'pexels-julia-kuzenkov-1974508.jpg', 15, 'pflanze', ''),
(11, 'kelley-2090641', 'pexels-leah-kelley-2090641.jpg', 15, 'pflanze', ''),
(12, 'maeder-142497', 'pexels-mali-maeder-142497.jpg', 15, 'pflanze', ''),
(13, 'us-1477166', 'pexels-visually-us-1477166.jpg', 15, 'pflanze', ''),
(14, 'koppens-776656', 'pexels-ylanite-koppens-776656.jpg', 15, 'pflanze', ''),
(15, 'cottonbro-6191134', 'pexels-cottonbro-6191134.jpg', 15, 'zauberstab', ''),
(16, 'monstera-7139456', 'pexels-monstera-7139456.jpg', 15, 'zauberstab', ''),
(17, 'productions-7978250', 'pexels-rodnae-productions-7978250.jpg', 15, 'zauberstab', ''),
(18, 'productions-7978252', 'pexels-rodnae-productions-7978252.jpg', 15, 'zauberstab', ''),
(19, 'productions-7979091', 'pexels-rodnae-productions-7979091.jpg', 15, 'zauberstab', ''),
(20, 'productions-7979097', 'pexels-rodnae-productions-7979097.jpg', 15, 'zauberstab', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikelnr`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikelnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

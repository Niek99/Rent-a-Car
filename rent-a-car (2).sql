-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 jan 2018 om 11:36
-- Serverversie: 10.1.13-MariaDB
-- PHP-versie: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent-a-car`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `auto`
--

CREATE TABLE `auto` (
  `Kenteken` varchar(8) NOT NULL,
  `Merk` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Prijs_per_dag` varchar(10) NOT NULL,
  `Soort` varchar(20) NOT NULL,
  `Omschrijving` varchar(20) NOT NULL,
  `GPS` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `auto`
--

INSERT INTO `auto` (`Kenteken`, `Merk`, `Type`, `Prijs_per_dag`, `Soort`, `Omschrijving`, `GPS`) VALUES
('05-HJ-UF', 'BMW', '323 (benzine)', '85', 'Sportwagen', '2 personen', 'Nee'),
('11-PO-TT', 'BMW', '730 (diesel v12)', '85', 'Standaard', '5 personen', 'Ja'),
('18-YY-GG', 'BMW', '323 (benzine)', '85', 'Sportwagen', '2 personen', 'Nee'),
('23-67-RW', 'BMW', '525 (turbodiesel)', '100', 'Stationwagen', '4 personen', 'Ja'),
('32-67-RW', 'Mercedes', 'CLK (benzine)', '120', 'Cabriolet', '2 personen', 'Ja'),
('45-RR-76', 'Rolls-Royce', 'Silver Shadow', '185', 'Standaard', '5 personen', 'Ja'),
('89-PE-TT', 'Porsche', '911s', '130', 'Cabriolet', '2 personen', 'Nee');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `behandelaar`
--

CREATE TABLE `behandelaar` (
  `Behandelaar_nummer` varchar(10) NOT NULL,
  `Naam_behandelaar` varchar(60) NOT NULL,
  `Login_naam` varchar(50) NOT NULL,
  `Wachtwoord` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `behandelaar`
--

INSERT INTO `behandelaar` (`Behandelaar_nummer`, `Naam_behandelaar`, `Login_naam`, `Wachtwoord`) VALUES
('12345', 'Niek Heethaar', 'niek.heethaar', 'niekniek');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `factuur`
--

CREATE TABLE `factuur` (
  `Factuurnummer` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `Klant_nummer` int(10) NOT NULL,
  `Behandelaar_nummer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `factuur`
--

INSERT INTO `factuur` (`Factuurnummer`, `Datum`, `Klant_nummer`, `Behandelaar_nummer`) VALUES
(27, '2018-01-26', 4, '12345'),
(28, '2018-01-26', 4, '12345'),
(29, '2018-01-26', 4, '12345'),
(30, '2018-01-26', 4, '12345'),
(31, '2018-01-26', 4, '12345'),
(32, '2018-01-26', 4, '12345'),
(33, '2018-01-26', 4, '12345'),
(34, '2018-01-26', 4, '12345'),
(35, '2018-01-26', 4, '12345'),
(36, '2018-01-26', 4, '12345'),
(37, '2018-01-26', 4, '12345'),
(38, '2018-01-26', 4, '12345'),
(39, '2018-01-26', 4, '12345'),
(40, '2018-01-26', 16, '12345'),
(41, '2018-01-26', 18, '12345'),
(42, '2018-01-26', 20, '12345'),
(43, '2018-01-26', 20, '12345');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE `klant` (
  `Klant_nummer` int(10) NOT NULL,
  `Naam` varchar(60) NOT NULL,
  `Adres` varchar(60) NOT NULL,
  `Postcode` varchar(7) NOT NULL,
  `Woonplaats` varchar(30) NOT NULL,
  `Email_adres` varchar(60) NOT NULL,
  `Telefoon_nummer` varchar(11) NOT NULL,
  `Wachtwoord` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `klant`
--

INSERT INTO `klant` (`Klant_nummer`, `Naam`, `Adres`, `Postcode`, `Woonplaats`, `Email_adres`, `Telefoon_nummer`, `Wachtwoord`) VALUES
(2, 'efwefefs', '80', '7331 ZV', 'Apeldoorn', 'elskraay@live.nl', '0629767501', 'grgrs'),
(3, 'Niek heethaar', 'Het Kasteel 14', '7325 PP', 'beemte-broekland', 'niek@ghaut.nl', '0629767501', 'hallo'),
(4, 'Niek heethaar', 'Het Kasteel 14', '7325 PP', 'Apeldoorn', 'niek@ghaut.nl', '0629767501', 'werdenwij'),
(5, 'Niek heethaar', '80', '7341 SH', 'Apeldoorn', 'niek@ghaut.nl', '0614860875', 'grerw'),
(6, 'Niek heethaar', '80', '7341 SH', 'Apeldoorn', 'niek@ghaut.nl', '0614860875', 'grerw'),
(7, 'rggrsg', 'grssgr', 'grsgsgr', 'grssgrgrs', 'elskraay@live.nl', 'grsgrsgrs', 'grsgrsgrs'),
(8, 'm', '', '', '', '', '', ''),
(9, 'milantenhave', 'lochemseweg128b', '7217rk', 'harfsen', 'hallo@hallo.nl', '1234567890', 'hallo'),
(10, 'Robbin Kraay', 'Het Kasteel 14', '7341 SH', 'beemte-broekland', 'elskraay@live.nl', '0614860875', 'niekie'),
(11, 'Robbin Kraay', 'eeegw 80', '7341 SH', 'beemte-broekland', 'elskraay@live.nl', '0614860875', 'halloditbenik'),
(12, 'Niek_99', 'Het Kasteel 13', '7325 PP', 'Apeldoorn', 'niek991@hotmail.com', '0629767501', 'niekniek'),
(13, 'ef', '', '', '', '', '', ''),
(14, 'Niek Heethaar', '140', '7325 PP', 'Apeldoorn', 'niek123@ghaut.nl', '0553603121', 'halloikbenniek'),
(15, 'Niek Heethaar', '140', '7325 PP', 'Apeldoorn', 'niek123@ghaut.nl', '0553603121', 'halloikbenniek'),
(16, 'milan ten have', 'sdfdfh', 'hdfshfh', 'hfdsfh', 'hallo@hallo1', '1234567890', 'test123'),
(17, 'Robbin Kraay', 'eeegw 80', '7341 SH', 'beemte-broekland', 'elskraay@live.nl', '0614860875', 'halloditisniek'),
(18, 'fadkjl', '`kldsj', 'kldfask', 'kljdsfkl', 'kjdsfkl@dfklj', 'kljdfsk', 'dsfsdfs'),
(19, 'Niek Heethaar', 'Het Kasteel, 140', '7325 PP', 'Apeldoorn', 'niek@ghaut.nl', '0629767501', 'qwerty'),
(20, 'Niek Heethaar', 'Het Kasteel, 140', '7325 PP', 'Apeldoorn', 'niek@ghaut.nl', '0629767501', '12345'),
(21, 'Niek Heethaar', 'Het Kasteel, 140', '7325 PP', 'Apeldoorn', 'niek@ghaut.nl', '0629767501', 'wt43'),
(22, 'Niek Heethaar', 'Het Kasteel, 140', '7325 PP', 'Apeldoorn', 'niek@ghaut.nl', '0629767501', 'qw3r');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservering`
--

CREATE TABLE `reservering` (
  `Factuurnummer` varchar(11) NOT NULL,
  `Kenteken` varchar(8) NOT NULL,
  `Vanaf_datum` date NOT NULL,
  `Eind_datum` date NOT NULL,
  `Totaal_prijs` varchar(10) NOT NULL,
  `Betaald` varchar(3) NOT NULL DEFAULT 'Nee'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reservering`
--

INSERT INTO `reservering` (`Factuurnummer`, `Kenteken`, `Vanaf_datum`, `Eind_datum`, `Totaal_prijs`, `Betaald`) VALUES
('', '18-YY-GG', '2018-01-12', '2018-01-31', '1700', 'Nee'),
('32', '45-RR-76', '2018-01-26', '2018-01-31', '1110', 'Ja'),
('33', '89-PE-TT', '2018-01-27', '2018-01-28', '260', 'Ja'),
('34', '45-RR-76', '2018-01-26', '2018-01-27', '370', 'Ja'),
('35', '18-YY-GG', '2018-01-19', '2018-01-27', '765', 'Ja'),
('36', '18-YY-GG', '2018-01-04', '2018-01-28', '2125', 'Ja'),
('37', '18-YY-GG', '2018-01-05', '2018-01-28', '2040', 'Ja'),
('38', '18-YY-GG', '2018-01-05', '2018-01-26', '1870', 'Ja'),
('39', '05-HJ-UF', '2018-01-19', '2018-01-20', '170', 'Ja'),
('40', '11-PO-TT', '2018-01-27', '2018-01-28', '170', 'Ja'),
('41', '18-YY-GG', '2018-01-10', '2018-01-27', '1530', 'Nee'),
('42', '18-YY-GG', '2018-01-18', '2018-01-28', '935', 'Ja'),
('43', '05-HJ-UF', '0000-00-00', '0000-00-00', '85', 'Nee');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`Kenteken`);

--
-- Indexen voor tabel `behandelaar`
--
ALTER TABLE `behandelaar`
  ADD PRIMARY KEY (`Behandelaar_nummer`);

--
-- Indexen voor tabel `factuur`
--
ALTER TABLE `factuur`
  ADD PRIMARY KEY (`Factuurnummer`),
  ADD KEY `Klant nummer` (`Klant_nummer`),
  ADD KEY `Behandelaar nummer` (`Behandelaar_nummer`);

--
-- Indexen voor tabel `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`Klant_nummer`);

--
-- Indexen voor tabel `reservering`
--
ALTER TABLE `reservering`
  ADD PRIMARY KEY (`Factuurnummer`,`Kenteken`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `factuur`
--
ALTER TABLE `factuur`
  MODIFY `Factuurnummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT voor een tabel `klant`
--
ALTER TABLE `klant`
  MODIFY `Klant_nummer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

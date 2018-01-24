
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



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
  `Prijs per dag` varchar(10) NOT NULL,
  `Soort` varchar(20) NOT NULL,
  `Omschrijving` varchar(20) NOT NULL,
  `GPS` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `behandelaar`
--

CREATE TABLE `behandelaar` (
  `Behandelaar nummer` varchar(10) NOT NULL,
  `Naam behandelaar` varchar(60) NOT NULL,
  `Login naam` varchar(50) NOT NULL,
  `Wachtwoord` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `factuur`
--

CREATE TABLE `factuur` (
  `Factuurnummer` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `Klant nummer` varchar(10) NOT NULL,
  `Behandelaar nummer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE `klant` (
  `Klant nummer` varchar(10) NOT NULL,
  `Naam` varchar(60) NOT NULL,
  `Adres` varchar(60) NOT NULL,
  `Postcode` varchar(7) NOT NULL,
  `Woonplaats` varchar(30) NOT NULL,
  `Email adres` varchar(60) NOT NULL,
  `Telefoon nummer` varchar(11) NOT NULL,
  `Wachtwoord` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservering`
--

CREATE TABLE `reservering` (
  `Factuurnummer` int(11) NOT NULL,
  `Kenteken` varchar(8) NOT NULL,
  `Vanaf datum` date NOT NULL,
  `Eind datum` date NOT NULL,
  `Totaal prijs` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`Behandelaar nummer`);

--
-- Indexen voor tabel `factuur`
--
ALTER TABLE `factuur`
  ADD PRIMARY KEY (`Factuurnummer`),
  ADD KEY `Klant nummer` (`Klant nummer`),
  ADD KEY `Behandelaar nummer` (`Behandelaar nummer`);

--
-- Indexen voor tabel `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`Klant nummer`);

--
-- Indexen voor tabel `reservering`
--
ALTER TABLE `reservering`
  ADD PRIMARY KEY (`Factuurnummer`,`Kenteken`);
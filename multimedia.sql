-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 31 mrt 2022 om 10:08
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multimedia`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `media_type`
--

CREATE TABLE `media_type` (
  `id` int(11) NOT NULL,
  `media_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `media_type`
--

INSERT INTO `media_type` (`id`, `media_type`) VALUES
(1, 'Books'),
(2, 'Songs'),
(3, 'Films');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `watchlist`
--

CREATE TABLE `watchlist` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `maker` varchar(255) NOT NULL,
  `media_type` int(11) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `watched` tinyint(1) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `watchlist`
--

INSERT INTO `watchlist` (`id`, `title`, `maker`, `media_type`, `platform`, `watched`, `photo`, `link`, `review`) VALUES
(1, 'Phanta', 'Le tigre', 2, 'Spotify', 0, 'phanta.png', 'https://www.youtube.com/watch?v=C89oHnkS0ts', 'Ik vond dit een leuk liedje.'),
(2, 'Dune', 'Frank Herbert', 1, 'Google Books', 1, 'dune.png', 'https://en.wikipedia.org/wiki/Dune_(novel)', 'Ik vond dit een slecht boek.'),
(3, 'Twilight', 'Stephenie Meyer', 3, 'Netflix', 0, 'twilight.png', '', 'Ik vond dit een oke film.'),
(4, 'You\'re Dead', 'Norma Tanega', 2, 'Spotify', 1, 'youredead.png', '', 'Ik vond dit een leuk liedje.'),
(5, 'That Man', 'Caro Emerald', 2, 'Spotify', 0, 'thatman.png', '', 'Ik vond dit een goed liedje.'),
(6, 'Waste My Time', 'Findlay', 2, 'Spotify', 0, 'wastemytime.png', '', 'Ik vond dit een super goed liedje.'),
(7, 'Juliet', 'Cavetown', 2, 'Spotify', 0, 'juliet.png', '', 'Ik vond dit een heel leuk geweldig cool liedje. Ik zou het wel opnieuw willen luisteren.'),
(8, 'Gotham', 'Bruno Heller', 3, 'Netflix', 1, 'gotham.png', '', 'Ik vond dit een oké serie.'),
(9, 'The Boys', 'Eric Kripke', 3, 'Prime Video', 1, 'theboys.png', '', 'Ik vond dit een super duper leuke serie. Ik wil hem graag opnieuw kijken.'),
(10, 'Atlanta', 'Donald Glover', 3, 'Disney+', 1, 'atlanta.png', '', ''),
(11, 'The Wolf Of Wall Street', 'Martin Scorsese', 3, 'Apple TV', 0, 'wolfofwallstreet.png', '', 'Ik vond dit een leuke film.'),
(12, 'De Moordclub', 'Richard Osman', 1, 'Google books', 0, 'moordclub.png', '', 'Ik vond dit een leuk boek.'),
(13, 'The Alchemist', 'Paulo Coelho', 1, 'Google Books', 0, 'alchemist.png', '', 'Ik vond dit een goed boek.'),
(14, 'Dragon World', 'Geraldine Allie', 1, 'Google Books', 0, 'dragonworld.png', '', 'Ik vond dit een leuk boek.'),
(15, 'Citizen Emperor', 'Philip Dwyer', 1, 'Google Books', 0, 'emporer.png', '', 'Ik vond dit een oke boek.');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `media_type`
--
ALTER TABLE `media_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `media_type`
--
ALTER TABLE `media_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 21, 2024 at 09:08 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoologiczny`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przysmaki`
--

CREATE TABLE `przysmaki` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_roman_ci NOT NULL,
  `cena` float NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `przysmaki`
--

INSERT INTO `przysmaki` (`id`, `nazwa`, `cena`, `ilosc`) VALUES
(4, 'Przysmak dla chomikÃ³w', 10, 455),
(5, 'Przysmak dla psÃ³w', 11, 12),
(6, 'Przysmak dla Nimf', 12, 13),
(7, 'Przysmak dla Qw', 13, 12),
(9, 'Przysmak dla sinusoidy', 3, 12),
(11, 'Przysmak dla krÃ³likÃ³w', 11, 13);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `skrzynkitowarow`
--

CREATE TABLE `skrzynkitowarow` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `cena` float NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `skrzynkitowarow`
--

INSERT INTO `skrzynkitowarow` (`id`, `nazwa`, `cena`, `ilosc`) VALUES
(4, 'Karma YX dla psÃ³w', 22, 2244),
(5, 'Karma PP dla chomikÃ³w', 2, 11),
(8, 'Karma', 23, 34);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `pu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `pu`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `przysmaki`
--
ALTER TABLE `przysmaki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `skrzynkitowarow`
--
ALTER TABLE `skrzynkitowarow`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `przysmaki`
--
ALTER TABLE `przysmaki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `skrzynkitowarow`
--
ALTER TABLE `skrzynkitowarow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

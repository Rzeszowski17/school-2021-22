-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Lis 2021, 10:24
-- Wersja serwera: 10.1.8-MariaDB
-- Wersja PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `egzamin1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kadra`
--

CREATE TABLE `kadra` (
  `id` int(11) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `stanowisko` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kadra`
--

INSERT INTO `kadra` (`id`, `imie`, `nazwisko`, `stanowisko`) VALUES
(1, 'Anna', 'Karenina', 'fryzjerka'),
(2, 'Kasia', 'Figura', 'kosmetyczka'),
(3, 'Zosia', 'Kowalska', 'kosmetyczka'),
(4, 'Misia', 'Kosińska', 'fryzjerka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi`
--

CREATE TABLE `uslugi` (
  `id` int(11) NOT NULL,
  `kadra_id` int(11) NOT NULL,
  `rodzaj` int(11) NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uslugi`
--

INSERT INTO `uslugi` (`id`, `kadra_id`, `rodzaj`, `nazwa`, `cena`) VALUES
(1, 1, 1, 'Usluga kosmetyczna za 20zl', 20),
(2, 1, 2, 'Usluga fryzjerska za 30zl', 30),
(3, 1, 3, 'Usluga inna za 15 zl', 15),
(4, 1, 1, 'Usluga kosmetyczna za 60 zl', 60);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `kadra`
--
ALTER TABLE `kadra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kadra`
--
ALTER TABLE `kadra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

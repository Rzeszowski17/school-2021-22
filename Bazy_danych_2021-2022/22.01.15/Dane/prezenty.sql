-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Gru 2020, 19:47
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `prezenty`
--

CREATE TABLE `prezenty` (
  `ID` int(11) NOT NULL,
  `NAZWA` varchar(100) DEFAULT NULL,
  `CENA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `prezenty`
--

INSERT INTO `prezenty` (`ID`, `NAZWA`, `CENA`) VALUES
(1, 'Gra komputerowa', 100),
(2, 'Słuchawki', 160),
(3, 'Pierniczki', 15),
(4, 'Skarpetki', 18);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `prezenty`
--
ALTER TABLE `prezenty`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

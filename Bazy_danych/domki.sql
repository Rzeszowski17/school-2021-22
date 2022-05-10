-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Lis 2021, 22:30
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `domki`
--
CREATE DATABASE IF NOT EXISTS `domki` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `domki`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `domki`
--

CREATE TABLE `domki` (
  `nrdomku` int(11) NOT NULL,
  `liczbapokoi` int(11) NOT NULL,
  `garaz` enum('Tak','Nie') COLLATE utf8_polish_ci NOT NULL,
  `cenazadobe` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `domki`
--

INSERT INTO `domki` (`nrdomku`, `liczbapokoi`, `garaz`, `cenazadobe`) VALUES
(1, 4, 'Tak', 200),
(2, 4, 'Nie', 160),
(3, 2, 'Tak', 120),
(4, 2, 'Nie', 100),
(5, 3, 'Tak', 170),
(6, 3, 'Nie', 140),
(7, 5, 'Tak', 250),
(8, 5, 'Nie', 200),
(9, 6, 'Tak', 300);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `idpracownika` int(2) NOT NULL,
  `nazwisko` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `imie` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `cena` varchar(10) COLLATE utf8_polish_ci DEFAULT NULL,
  `pesel` char(11) COLLATE utf8_polish_ci DEFAULT NULL,
  `stanowisko` varchar(15) COLLATE utf8_polish_ci DEFAULT 'dyrektor',
  `pensja` decimal(5,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`idpracownika`, `nazwisko`, `imie`, `cena`, `pesel`, `stanowisko`, `pensja`) VALUES
(1, 'Wroblewski', 'Janusz', '100', NULL, NULL, NULL),
(2, 'Wiecek', 'Jaremi', '100', NULL, NULL, NULL),
(3, 'Zawada', 'Witold', '100', NULL, NULL, NULL),
(4, 'Ulatowski', 'Edwin', '100', NULL, NULL, NULL),
(5, 'Adamski', 'Adam', '100', NULL, NULL, NULL),
(9, 'Mikolajczyk', 'Aldona', '100', NULL, NULL, NULL),
(10, 'Rokicka', 'Aleksandra', '100', NULL, NULL, NULL),
(11, 'lis', 'Andrzej', '100', NULL, NULL, NULL),
(12, 'Opielski', 'Andrzej', '100', NULL, NULL, NULL),
(13, 'Sadej', 'Andrzej', '100', NULL, NULL, NULL),
(14, 'Zajdowicz', 'Arleta', '100', NULL, NULL, NULL),
(15, 'Kuryllo', 'Artur', '100', NULL, NULL, NULL),
(16, 'Ratajczyk', 'Artur', '100', NULL, NULL, NULL),
(17, 'Kujawa', 'Bogdan', '100', NULL, NULL, NULL),
(18, 'Prokopowicz', 'Bogdan', '100', NULL, NULL, NULL),
(19, 'Hamerak', 'Blazej', '100', NULL, NULL, NULL),
(20, 'Antasowski', 'Dariusz', '100', NULL, NULL, NULL),
(21, 'Zielinska', 'Dariusz', '100', NULL, NULL, NULL),
(22, 'Walkusz', 'Elzbieta', '100', NULL, NULL, NULL),
(23, 'Wrobl', 'Elzbieta', '100', NULL, NULL, NULL),
(24, 'Garbatowska', 'Ewa', '100', NULL, NULL, NULL),
(25, 'lazowski', 'Ewa', '100', NULL, NULL, NULL),
(26, 'Bardzewska', 'Grazyna', '100', NULL, NULL, NULL),
(27, 'Radziemski', 'Grzegorz', '100', NULL, NULL, NULL),
(28, 'Rak', 'Grzegorz', '100', NULL, NULL, NULL),
(29, 'Iwanowska', 'Hanka', '100', NULL, NULL, NULL),
(30, 'Rajkowski', 'Hieronim', '100', NULL, NULL, NULL),
(31, 'Gorna', 'Ilona', '100', NULL, NULL, NULL),
(32, 'Magdzinska', 'Irena', '100', NULL, NULL, NULL),
(33, 'Wojtasiak', 'Jacek', '100', NULL, NULL, NULL),
(34, 'Radke', 'Janusz', '100', NULL, NULL, NULL),
(35, 'Baran', 'Janusz', '100', NULL, NULL, NULL),
(36, 'Fratczak', 'Janusz', '100', NULL, NULL, NULL),
(37, 'Hadynski', 'Jaroslaw', '100', NULL, NULL, NULL),
(38, 'Mikulajewski', 'Jerzy', '100', NULL, NULL, NULL),
(39, 'Wilkowska', 'Kamila', '100', NULL, NULL, NULL),
(40, 'lisiecki', 'Karol', '100', NULL, NULL, NULL),
(41, 'Stachowiak', 'Katarzyna', '100', NULL, NULL, NULL),
(42, 'Sikorska', 'Kinga', '100', NULL, NULL, NULL),
(43, 'Wawrzyniak', 'Krzysztofa', '100', NULL, NULL, NULL),
(44, 'laczkowski', 'leszek', '100', NULL, NULL, NULL),
(45, 'Seidel', 'lidia', '100', NULL, NULL, NULL),
(46, 'Strozycka', 'lorena', '100', NULL, NULL, NULL),
(47, 'Hamerak', 'Magdalena', '100', NULL, NULL, NULL),
(48, 'Kozikiewicz', 'Magdalena', '100', NULL, NULL, NULL),
(49, 'Jelonek', 'Marcin', '100', NULL, NULL, NULL),
(50, 'Finkel', 'Marek', '100', NULL, NULL, NULL),
(51, 'Haberko', 'Marek', '100', NULL, NULL, NULL),
(52, 'Wawrzynowski', 'Marek', '100', NULL, NULL, NULL),
(53, 'Golawska', 'Maria', '100', NULL, NULL, NULL),
(54, 'Wrobl', 'Maria', '100', NULL, NULL, NULL),
(55, 'Konieczny', 'Marian', '100', NULL, NULL, NULL),
(56, 'lencki', 'Marian', '100', NULL, NULL, NULL),
(57, 'Finkel', 'Mariola', '100', NULL, NULL, NULL),
(58, 'Beskowicz', 'Mariusz', '100', NULL, NULL, NULL),
(59, 'Koralewski', 'Mariusz', '100', NULL, NULL, NULL),
(60, 'Prozalska', 'Malgorzata', '100', NULL, NULL, NULL),
(61, 'Goralczyk', 'Michal', '100', NULL, NULL, NULL),
(62, 'Misiewicz', 'Michal', '100', NULL, NULL, NULL),
(63, 'Tomiczek', 'Michal', '100', NULL, NULL, NULL),
(64, 'Jedrzejczak', 'Mieczyslaw', '100', NULL, NULL, NULL),
(65, 'Jarzembowski', 'Miroslaw', '100', NULL, NULL, NULL),
(66, 'Szajda', 'Miroslawa', '100', NULL, NULL, NULL),
(67, 'Wojtasiak', 'Monika', '100', NULL, NULL, NULL),
(68, 'Zapotoczny', 'Norbert', '100', NULL, NULL, NULL),
(69, 'Piekarzewski', 'Pawel', '100', NULL, NULL, NULL),
(70, 'Nawrocki', 'Piotr', '100', NULL, NULL, NULL),
(71, 'Ritter', 'Piotr', '100', NULL, NULL, NULL),
(72, 'Czarnecki', 'Przemyslaw', '100', NULL, NULL, NULL),
(73, 'Zetlerowicz', 'Radoslaw', '100', NULL, NULL, NULL),
(74, 'Dubielski', 'Robert', '100', NULL, NULL, NULL),
(75, 'Piekarzewski', 'Robert', '100', NULL, NULL, NULL),
(76, 'Kazmierczak', 'Roman', '100', NULL, NULL, NULL),
(77, 'Mlodozeniec', 'Roman', '100', NULL, NULL, NULL),
(78, 'Gasiorowski', 'Ryszard', '100', NULL, NULL, NULL),
(79, 'Kowalski', 'Sebastian', '100', NULL, NULL, NULL),
(80, 'Szelagowski', 'Sebastian', '100', NULL, NULL, NULL),
(81, 'Mikulajewski', 'Stanislaw', '100', NULL, NULL, NULL),
(82, 'Prozalski', 'Stanislaw', '100', NULL, NULL, NULL),
(83, 'Slawinski', 'Szymon', '100', NULL, NULL, NULL),
(84, 'Iwaszkiewicz', 'Slawomir', '100', NULL, NULL, NULL),
(85, 'Fickowski', 'Tadeusz', '100', NULL, NULL, NULL),
(86, 'Kwiatkowski', 'Tadeusz', '100', NULL, NULL, NULL),
(87, 'Spychala', 'Tadeusz', '100', NULL, NULL, NULL),
(88, 'Kozikiewicz', 'Tomasz', '100', NULL, NULL, NULL),
(89, 'Olejniczak', 'Tomasz', '100', NULL, NULL, NULL),
(90, 'Stefankiewicz', 'Tomasz', '100', NULL, NULL, NULL),
(91, 'Strozycki', 'Tomasz', '100', NULL, NULL, NULL),
(92, 'Tonak', 'Tomasz', '100', NULL, NULL, NULL),
(93, 'Krugiolka', 'Tomasz', '100', NULL, NULL, NULL),
(94, 'Strozycki', 'Wojciech', '100', NULL, NULL, NULL),
(95, 'Piasecki', 'Zbigniew', '100', NULL, NULL, NULL),
(96, 'Lehmann', 'Zdzislaw', '100', NULL, NULL, NULL),
(97, 'Kasprzak', 'Zofia', '100', NULL, NULL, NULL),
(98, 'Matysiak', 'Mateusz', '100', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacje`
--

CREATE TABLE `rezerwacje` (
  `nrrezerwacji` int(11) NOT NULL,
  `idpracownika` int(11) DEFAULT NULL,
  `nrdomku` int(11) DEFAULT NULL,
  `liczbadni` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rezerwacje`
--

INSERT INTO `rezerwacje` (`nrrezerwacji`, `idpracownika`, `nrdomku`, `liczbadni`) VALUES
(1, 5, 2, 2),
(2, 20, 5, 2),
(3, 35, 6, 3),
(4, 26, 2, 2),
(5, 58, 3, 4),
(6, 72, 6, 2),
(7, 74, 8, 4),
(8, 85, 7, 10),
(9, 57, 6, 4),
(10, 50, 9, 2),
(11, 36, 5, 4),
(12, 24, 4, 1),
(13, 78, 3, 7),
(14, 53, 4, 2),
(15, 6, 6, 2),
(16, 61, 5, 7),
(17, 31, 3, 6),
(18, 51, 2, 3),
(19, 37, 8, 5),
(20, 47, 1, 5),
(21, 19, 2, 2),
(22, 29, 4, 4),
(23, 84, 2, 10),
(24, 65, 5, 2),
(25, 49, 6, 1),
(26, 64, 3, 7),
(27, 97, 2, 8),
(28, 76, 7, 2),
(29, 55, 5, 3),
(30, 59, 3, 4),
(31, 79, 2, 7),
(32, 88, 7, 4),
(33, 48, 5, 1),
(34, 93, 9, 4),
(35, 17, 9, 5),
(36, 15, 9, 3),
(37, 86, 8, 10),
(38, 25, 5, 2),
(39, 44, 3, 2),
(40, 96, 2, 3),
(41, 56, 4, 2),
(42, 11, 6, 3),
(43, 40, 8, 2),
(44, 7, 4, 2),
(45, 32, 2, 3),
(46, 9, 1, 2),
(47, 38, 5, 4),
(48, 81, 7, 7),
(49, 62, 8, 7),
(50, 77, 4, 2),
(51, 70, 6, 4),
(52, 89, 9, 2),
(53, 12, 8, 4),
(54, 8, 7, 2),
(55, 95, 2, 2),
(56, 69, 2, 4),
(57, 75, 3, 2),
(58, 18, 7, 6),
(59, 60, 6, 2),
(60, 82, 4, 8),
(61, 34, 7, 3),
(62, 27, 5, 2),
(63, 30, 4, 5),
(64, 28, 7, 3),
(65, 16, 8, 4),
(66, 71, 6, 3),
(67, 10, 4, 2),
(68, 13, 2, 5),
(69, 45, 1, 3),
(70, 42, 1, 2),
(71, 83, 1, 8),
(72, 87, 1, 2),
(73, 41, 5, 3),
(74, 90, 7, 5),
(75, 46, 5, 4),
(76, 91, 3, 7),
(77, 94, 8, 3),
(78, 66, 6, 3),
(79, 80, 8, 7),
(80, 63, 9, 7),
(81, 92, 6, 5),
(82, 4, 6, 3),
(83, 22, 8, 2),
(84, 43, 3, 2),
(85, 52, 2, 2),
(86, 39, 3, 2),
(87, 67, 1, 4),
(88, 33, 1, 3),
(89, 54, 9, 2),
(90, 23, 7, 2),
(91, 1, 5, 5),
(92, 14, 4, 4),
(93, 2, 3, 5),
(94, 68, 4, 5),
(95, 3, 2, 5),
(96, 73, 3, 3),
(97, 21, 4, 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `domki`
--
ALTER TABLE `domki`
  ADD PRIMARY KEY (`nrdomku`);

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`idpracownika`),
  ADD UNIQUE KEY `pesel` (`pesel`);

--
-- Indeksy dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD PRIMARY KEY (`nrrezerwacji`),
  ADD KEY `idpracownika` (`idpracownika`),
  ADD KEY `nrdomku` (`nrdomku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Mar 2022, 21:50
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
-- Baza danych: `wypozyczalnia`
--
CREATE DATABASE IF NOT EXISTS `wypozyczalnia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wypozyczalnia`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dane_osobowe`
--

CREATE TABLE `dane_osobowe` (
  `ID` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `ID_pra` int(11) NOT NULL,
  `Imie` varchar(100) NOT NULL,
  `Nazwisko` varchar(100) NOT NULL,
  `PESEL` char(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Data_urodzenia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `dane_osobowe`
--

INSERT INTO `dane_osobowe` (`ID`, `ID_user`, `ID_pra`, `Imie`, `Nazwisko`, `PESEL`, `email`, `Data_urodzenia`) VALUES
(1, 1, 0, 'Jan', 'Kowalski', '11111111111', 'jankowalski@gmail.com', '2000-03-14'),
(2, 4, 0, 'asd', 'sad', '12345678901', 'kacperr846@gmail.com', '0000-00-00'),
(3, 5, 0, 'asd', 'sad', '12345678901', 'kacperr846@gmail.com', '0000-00-00'),
(4, 6, 0, 'asd', 'sad', '12345678901', 'kacperr846@gmail.com', '0000-00-00'),
(5, 7, 0, 'asd', 'sad', '12345678901', 'kacperr846@gmail.com', '0000-00-00'),
(6, 8, 0, 'asd', 'sad', '12345678901', 'kacperr846@gmail.com', '3221-03-12'),
(7, 9, 0, 'asd', 'sad', '12345678901', 'kacperr846@gmail.com', '3221-03-12'),
(8, 10, 0, 'asd', 'sad', '12345678901', 'kacperr846@gmail.com', '3221-03-12'),
(9, 11, 0, 'asd', 'sad', '12345678901', 'kacperr846@gmail.com', '2112-03-12'),
(10, 12, 0, 'asd', 'sad', '12345678901', 'kacperr846@gmail.com', '2112-03-12'),
(11, 13, 0, 'dsad', 's1321', '12345678901', 'kacperr846@gmail.com', '1213-03-12'),
(12, 14, 0, 'asd', 's1321', '12345678901', 'kacperr846@gmail.com', '1211-03-12'),
(13, 15, 0, 'asd', 's1321', '12345678901', 'kacperr846@gmail.com', '1211-03-12'),
(14, 16, 0, 'asd', 'sad', '12345678901', 'kacperr846@gmail.com', '1221-03-12'),
(15, 17, 0, 'asd', 'sad', '12345678901', 'kacperr846@gmail.com', '1221-03-12'),
(16, 18, 0, 'asd', 'sad', '12345678901', 'kacperr846@gmail.com', '1231-03-12'),
(17, 19, 0, 'asd', 'sad', '12345678901', 'kacperr846@gmail.com', '1231-03-12'),
(18, 20, 0, 'asd', 'sad', '12345678901', 'kacperr846@gmail.com', '1121-03-12');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pojazdy`
--

CREATE TABLE `pojazdy` (
  `ID_pojazdu` int(11) NOT NULL,
  `Rejestracja` varchar(10) NOT NULL,
  `Marka` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Opis` varchar(200) NOT NULL,
  `Cena` float NOT NULL,
  `Typ` varchar(50) NOT NULL,
  `Ilosc miejsc` int(11) NOT NULL,
  `Zdjecie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pojazdy`
--

INSERT INTO `pojazdy` (`ID_pojazdu`, `Rejestracja`, `Marka`, `Model`, `Opis`, `Cena`, `Typ`, `Ilosc miejsc`, `Zdjecie`) VALUES
(1, 'PO 135PZ', 'Ford', 'Focus 2022', 'Silnik 1498cm3 150 KM, Benzyna, Automatyczna skrzynia biegów, Napęd na przód', 300, 'Osobowy', 5, 'Ford1.jpg'),
(2, 'WA 246WW', 'Renault', 'Clio 2020', 'Silnik 898cm3 90 KM, Benzyna, Manualna skrzynia biegów, Napęd na przód', 190, 'Osobowy', 5, 'Renault1.jpg'),
(3, 'DW WR543', 'Mercedes-Benz', 'Sprinter', 'Silnik 2987cm3 190 KM, Diesel, Automatyczna skrzynia biegów', 750, 'Dostawczy', 3, 'Mercedes1.jpg'),
(4, 'DW 135WR', 'Toyota', 'Yaris 2020', 'Silnik 1496 cm3, Benzyna, Automatyczna skrzynia biegów, Napęd na przód', 180, 'Osobowy', 5, 'Toyota1.jpg'),
(5, 'CIN 17BYD', 'Opel', 'Corsa 2020', 'Silnik 1199 cm3, Benzyna, Manualna skrzynia biegów, Napęd na przód', 200, 'Osobowy', 5, 'Opel1.jpg'),
(6, 'PL  45L61', 'Mercedes-Benz', 'A35 2019', 'Silnik 1991 cm3, Benzyna, Automatyczna skrzynia biegów, Napęd na 4x4', 340, 'Osobowy', 5, 'Mercedes2.jpg'),
(7, 'PO 5LW45', 'Honda', 'Civic 2019\r\n', 'Silnik 1996 cm3, Benzyna, Manualna skrzynia biegów, Napęd na przód ', 250, 'Osobowy', 4, 'Honda1.jpg'),
(8, 'KR 56G2R', 'Hyundai', 'i20 2019', 'Silnik 1248 cm3, Benzyna, Manualna skrzynia biegów, Napęd na przód\r\n', 210, 'Osobowy', 5, 'Hyundai1.jpg'),
(9, 'PO 14F5T', 'Ford\r\n', 'Mustang 2015', 'Silnik 3731 cm3, Benzyna, Automatyczna skrzynia biegów, Napęd na tył', 500, 'Osobowy', 4, 'Ford2.jpg'),
(10, 'WL 68P12', 'Renault', 'Master L2H2 2017', 'Silnik 2300 cm3, Diesel, Manualna skrzynia biegów, Napęd na przód\r\n', 540, 'Dostawczy', 3, 'Renault2.jpg'),
(11, 'WE 469WV', 'Peugeot\r\n', 'Partner 2019\r\n', 'Silnik 1499 cm3, Diesel, Manualna skrzynia biegów, Napęd na przód ', 450, 'Dostawczy', 3, 'Peugeot1.jpg'),
(12, 'WZ 53AS2', 'Ford', 'Transit 2020', 'Silnik 1996 cm3, Diesel, Manualna skrzynia biegów, Napęd na przód', 460, 'Dostawczy', 3, 'Ford3.jpg'),
(14, 'WU 14802', 'Volkswagen\r\n', 'Transporter T2 1979\r\n', 'Silnik 1573 cm3, Benzyna, Manualna skrzynia biegów, Napęd na tył', 470, 'Bus', 9, 'Volkswagen1.jpg'),
(15, 'PO 64Rl5', 'Mercedes-Benz\r\n', 'Sprinter 2007', 'Silnik 2148 cm3, Diesel, Manualna skrzynia biegów, Napęd na tył', 540, 'Bus', 9, 'Mercedes3.jpg'),
(16, 'CNA 7W12', 'Renault\r\n', 'Trafic II 2003', 'Silnik 1870 cm3, Diesel, Manualna skrzynia biegów, Napęd na przód', 410, 'Bus', 9, 'Renault4.jpg'),
(17, 'GW KE 910', 'Volkswagen\r\n', 'Caravelle 2013', 'Silnik 1968 cm3, Diesel, Manualna skrzynia biegów, Napęd na przód', 390, 'Bus', 9, 'Volkswagen2.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `prawo_jazdy`
--

CREATE TABLE `prawo_jazdy` (
  `ID_osoby` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `Kategoria` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `prawo_jazdy`
--

INSERT INTO `prawo_jazdy` (`ID_osoby`, `ID`, `Kategoria`) VALUES
(1, 2, 'A'),
(2, 3, 'A'),
(17, 9, 'A'),
(18, 10, 'A');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacje`
--

CREATE TABLE `rezerwacje` (
  `ID_rezerwacjii` int(11) NOT NULL,
  `ID_osoby` int(11) NOT NULL,
  `ID_pojazdu` int(11) NOT NULL,
  `Poczatek rezerwacji` datetime NOT NULL,
  `Koniec rezerwacji` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `rezerwacje`
--

INSERT INTO `rezerwacje` (`ID_rezerwacjii`, `ID_osoby`, `ID_pojazdu`, `Poczatek rezerwacji`, `Koniec rezerwacji`) VALUES
(14, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `ID` int(11) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Haslo` varchar(100) NOT NULL,
  `Uprawnienia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`ID`, `Login`, `Haslo`, `Uprawnienia`) VALUES
(1, 'j_kowalski', 'kowal', 2),
(2, 'admin', 'admin', 1),
(3, 'user', 'user', 2),
(4, 'kacper', '123', 2),
(5, 'krzeszowski', '123', 2),
(6, 'krzeszowski', '123', 2),
(7, 'krzeszowski', '123', 2),
(8, 'krzeszowski', '123', 2),
(9, 'krzeszowski', '123', 2),
(10, 'krzeszowski', '123', 2),
(11, 'krzeszowski', '123', 2),
(12, 'krzeszowski', '123', 2),
(13, 'user1', '123', 2),
(14, 'krzeszowski', '123', 2),
(15, 'krzeszowski', '123', 2),
(16, 'krzeszowski', '123', 2),
(17, 'krzeszowski', '123', 2),
(18, 'krzeszowski', '123', 2),
(19, 'krzeszowski', '123', 2),
(20, 'krzeszowski', '123', 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dane_osobowe`
--
ALTER TABLE `dane_osobowe`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_user` (`ID_user`);

--
-- Indeksy dla tabeli `pojazdy`
--
ALTER TABLE `pojazdy`
  ADD PRIMARY KEY (`ID_pojazdu`);

--
-- Indeksy dla tabeli `prawo_jazdy`
--
ALTER TABLE `prawo_jazdy`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_osoby` (`ID_osoby`);

--
-- Indeksy dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD PRIMARY KEY (`ID_rezerwacjii`),
  ADD KEY `ID_osoby` (`ID_osoby`),
  ADD KEY `ID_pojazdu` (`ID_pojazdu`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `dane_osobowe`
--
ALTER TABLE `dane_osobowe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `pojazdy`
--
ALTER TABLE `pojazdy`
  MODIFY `ID_pojazdu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `prawo_jazdy`
--
ALTER TABLE `prawo_jazdy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  MODIFY `ID_rezerwacjii` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `dane_osobowe`
--
ALTER TABLE `dane_osobowe`
  ADD CONSTRAINT `dane_osobowe_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `uzytkownicy` (`ID`);

--
-- Ograniczenia dla tabeli `prawo_jazdy`
--
ALTER TABLE `prawo_jazdy`
  ADD CONSTRAINT `prawo_jazdy_ibfk_1` FOREIGN KEY (`ID_osoby`) REFERENCES `dane_osobowe` (`ID`);

--
-- Ograniczenia dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD CONSTRAINT `rezerwacje_ibfk_1` FOREIGN KEY (`ID_osoby`) REFERENCES `dane_osobowe` (`ID`),
  ADD CONSTRAINT `rezerwacje_ibfk_2` FOREIGN KEY (`ID_pojazdu`) REFERENCES `pojazdy` (`ID_pojazdu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

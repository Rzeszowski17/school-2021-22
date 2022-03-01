-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Lut 2022, 11:57
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dane_osobowe`
--

CREATE TABLE `dane_osobowe` (
  `ID` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `Imie` varchar(100) NOT NULL,
  `Nazwisko` varchar(100) NOT NULL,
  `PESEL` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Cena/dzień` float NOT NULL,
  `Typ` varchar(50) NOT NULL,
  `Ilosc miejsc` int(11) NOT NULL,
  `Zdjecie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pojazdy`
--

INSERT INTO `pojazdy` (`ID_pojazdu`, `Rejestracja`, `Marka`, `Model`, `Opis`, `Cena/dzień`, `Typ`, `Ilosc miejsc`, `Zdjecie`) VALUES
(1, 'PO 135PZ', 'Ford', 'Focus 2022', 'Silnik 1498cm3 150 KM, Benzyna, Automatyczna skrzynia biegów, Napęd na przód', 300, 'Osobowy', 5, 'Ford1.jpg'),
(2, 'WA 246WW', 'Renault', 'Clio 2020', 'Silnik 898cm3 90 KM, Benzyna, Manualna skrzynia biegów, Napęd na przód', 190, 'Osobowy', 5, 'Renault1.jpg'),
(3, 'DW WR543', 'Mercedes-Benz', 'Sprinter', 'Silnik 2987cm3 190 KM, Diesel, Automatyczna skrzynia biegów', 750, 'Dostawczy', 3, 'Mercedes1.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `prawo_jazdy`
--

CREATE TABLE `prawo_jazdy` (
  `ID_osoby` int(11) NOT NULL,
  `Kategoria` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacje`
--

CREATE TABLE `rezerwacje` (
  `ID_rezerwacjii` int(11) NOT NULL,
  `ID_osoby` int(11) NOT NULL,
  `ID_pojazdu` int(11) NOT NULL,
  `Poczatek rezerwacji` date NOT NULL,
  `Koniec rezerwacji` date NOT NULL,
  `Wplata` enum('tak','nie','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `pojazdy`
--
ALTER TABLE `pojazdy`
  MODIFY `ID_pojazdu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  MODIFY `ID_rezerwacjii` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

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

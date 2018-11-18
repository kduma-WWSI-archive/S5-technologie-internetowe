-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Lis 2018, 19:18
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sosna`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pojazdy`
--

CREATE TABLE `pojazdy` (
  `id` int(11) NOT NULL,
  `klasa` enum('Basic','Pro','Premium') COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `rodzaj` enum('Limuzyna','Kamper') COLLATE utf8mb4_polish_ci NOT NULL,
  `numer_pojazdu` int(11) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `producent` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `rocznik` int(11) NOT NULL,
  `zdjecie` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `dane` text COLLATE utf8mb4_polish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `pojazdy`
--

INSERT INTO `pojazdy` (`id`, `klasa`, `rodzaj`, `numer_pojazdu`, `cena`, `model`, `producent`, `rocznik`, `zdjecie`, `dane`) VALUES
(1, 'Basic', 'Limuzyna', 12, '1500.00', '120\'', 'Lincoln', 2016, 'lincoln120.jpg', 'a:5:{s:16:\"Kierowca w cenie\";s:3:\"TAK\";i:0;s:10:\"10 osobowy\";i:1;s:21:\"dÅ‚ugoÅ›Ä‡: 9 metrÃ³w\";i:2;s:26:\"1 bar, skÃ³rzana tapicerka\";s:14:\"Kaucja zwrotna\";s:8:\"5000 PLN\";}'),
(2, 'Pro', 'Limuzyna', 4, '1800.00', 'Retro', 'Excalibur', 1969, 'excalibur.jpg', 'a:5:{s:16:\"Kierowca w cenie\";s:3:\"TAK\";i:0;s:9:\"6 osobowy\";i:1;s:21:\"dÅ‚ugoÅ›Ä‡: 8 metrÃ³w\";i:2;s:26:\"1 bar, skÃ³rzana tapicerka\";s:14:\"Kaucja zwrotna\";s:8:\"5000 PLN\";}'),
(3, 'Premium', 'Limuzyna', 5, '3000.00', 'H2', 'Hammer', 2018, 'HammerH2.jpg', 'a:5:{s:16:\"Kierowca w cenie\";s:3:\"TAK\";i:0;s:10:\"20 osobowy\";i:1;s:22:\"dÅ‚ugoÅ›Ä‡: 13 metrÃ³w\";i:2;s:19:\"3 bary, stroboskopy\";s:14:\"Kaucja zwrotna\";s:8:\"5000 PLN\";}'),
(4, NULL, 'Limuzyna', 1, '1800.00', 'Replika', 'Rolls Royce', 2015, 'RR3.jpg', 'a:5:{s:16:\"Kierowca w cenie\";s:3:\"TAK\";i:0;s:10:\"10 osobowy\";i:1;s:21:\"dÅ‚ugoÅ›Ä‡: 9 metrÃ³w\";i:2;s:26:\"1 bar, skÃ³rzana tapicerka\";s:14:\"Kaucja zwrotna\";s:8:\"5000 PLN\";}'),
(5, NULL, 'Limuzyna', 3, '2000.00', '300C', 'Chrysler', 2017, 'chrysler300Ca.jpg', 'a:5:{s:16:\"Kierowca w cenie\";s:3:\"TAK\";i:0;s:10:\"10 osobowy\";i:1;s:23:\"dÅ‚ugoÅ›Ä‡: 8.7 metrÃ³w\";i:2;s:26:\"1 bar, skÃ³rzana tapicerka\";s:14:\"Kaucja zwrotna\";s:8:\"5000 PLN\";}'),
(6, NULL, 'Limuzyna', 2, '1300.00', '70', 'Lincoln', 2010, 'lincoln70.jpg', 'a:5:{s:16:\"Kierowca w cenie\";s:3:\"NIE\";i:0;s:9:\"6 osobowy\";i:1;s:21:\"dÅ‚ugoÅ›Ä‡: 8 metrÃ³w\";i:2;s:26:\"1 bar, skÃ³rzana tapicerka\";s:14:\"Kaucja zwrotna\";s:8:\"5000 PLN\";}'),
(7, 'Basic', 'Kamper', 3, '450.00', 'CARA COMPACT 600 MEG', 'KNAUS WEINSBERG PEPPER', 2017, 'camper3.jpg', 'a:8:{i:0;s:35:\"\"CaÅ‚oroczny\"  + bagaÅ¼nik rowerowy\";s:22:\"Klimatyzacja postojowa\";s:3:\"NIE\";i:1;s:23:\"Kat. \"B\",   DMC 3500 kg\";i:2;s:11:\"3/4 osobowy\";i:3;s:27:\"Manualna 6 biegowa skrzynia\";i:4;s:36:\"674/220/276 cm dÅ‚./szer./wys. zewn.\";s:14:\"Kaucja zwrotna\";s:8:\"5000 PLN\";s:17:\"OpÅ‚ata serwisowa\";s:7:\"350 PLN\";}'),
(8, 'Pro', 'Kamper', 2, '500.00', 'Globe-Traveller', 'Active ZS / PEUGEOT 2, 0 / 163 KM', 2018, 'camper2.jpg', 'a:8:{i:0;s:11:\"CaÅ‚oroczny\";s:22:\"Klimatyzacja postojowa\";s:3:\"NIE\";i:1;s:23:\"Kat. \"B\",   DMC 3500 kg\";i:2;s:11:\"3/4 osobowy\";i:3;s:27:\"Manualna 6 biegowa skrzynia\";i:4;s:36:\"599/206/256 cm dÅ‚./szer./wys. zewn.\";s:14:\"Kaucja zwrotna\";s:8:\"5000 PLN\";s:17:\"OpÅ‚ata serwisowa\";s:7:\"350 PLN\";}'),
(9, 'Premium', 'Kamper', 1, '950.00', 'Aristeo 694', 'BENIMAR / FIAT DUCATO INTEGRA', 2017, 'camper1.jpg', 'a:8:{i:0;s:11:\"CaÅ‚oroczny\";s:22:\"Klimatyzacja postojowa\";s:3:\"TAK\";i:1;s:23:\"Kat. \"B\",   DMC 3500 kg\";i:2;s:9:\"4 osobowy\";i:3;s:29:\"Automatyczna skrzynia biegÃ³w\";i:4;s:37:\"738/234/289 cm dÅ‚./szer./wys. zewn..\";s:14:\"Kaucja zwrotna\";s:8:\"5000 PLN\";s:17:\"OpÅ‚ata serwisowa\";s:7:\"350 PLN\";}'),
(10, NULL, 'Kamper', 8, '900.00', 'K-YACHT MH89TL', 'MOBILVETTA / FIAT DUCATO INTEGRA', 2016, 'camper8.jpg', 'a:8:{i:0;s:11:\"CaÅ‚oroczny\";s:22:\"Klimatyzacja postojowa\";s:3:\"TAK\";i:1;s:23:\"Kat. \"B\",   DMC 3500 kg\";i:2;s:9:\"4 osobowy\";i:3;s:27:\"Manualna 6 biegowa skrzynia\";i:4;s:36:\"738/232/289 cm dÅ‚./szer./wys. zewn.\";s:14:\"Kaucja zwrotna\";s:8:\"5000 PLN\";s:17:\"OpÅ‚ata serwisowa\";s:7:\"350 PLN\";}'),
(11, NULL, 'Kamper', 5, '500.00', 'SKY TRAVELLER 600 DKG', 'KNAUS / FIAT DUCATO ALCOVA', 2016, 'camper5.jpg', 'a:8:{i:0;s:11:\"CaÅ‚oroczny\";s:22:\"Klimatyzacja postojowa\";s:3:\"TAK\";i:1;s:23:\"Kat. \"B\",   DMC 3500 kg\";i:2;s:9:\"6 osobowy\";i:3;s:27:\"Manualna 6 biegowa skrzynia\";i:4;s:36:\"649/234/319 cm dÅ‚./szer./wys. zewn.\";s:14:\"Kaucja zwrotna\";s:8:\"5000 PLN\";s:17:\"OpÅ‚ata serwisowa\";s:7:\"350 PLN\";}'),
(12, NULL, 'Kamper', 11, '550.00', 'Trend T 7057 EB', 'DETHLEFFS / Citroen 2, 0 / 130KM', 2018, 'camper11.jpg', 'a:8:{i:0;s:11:\"CaÅ‚oroczny\";s:22:\"Klimatyzacja postojowa\";s:3:\"NIE\";i:1;s:23:\"Kat. \"B\",   DMC 3499 kg\";i:2;s:9:\"5 osobowy\";i:3;s:27:\"6 biegowa skrzynia manualna\";i:4;s:36:\"233/290/741 cm dÅ‚./szer./wys. zewn.\";s:14:\"Kaucja zwrotna\";s:8:\"5000 PLN\";s:17:\"OpÅ‚ata serwisowa\";s:7:\"350 PLN\";}');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenia`
--

CREATE TABLE `wypozyczenia` (
  `id` int(11) NOT NULL,
  `pojazd_id` int(11) NOT NULL,
  `imie` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL,
  `nazwisko` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `telefon` varchar(9) COLLATE utf8mb4_polish_ci NOT NULL,
  `od` date NOT NULL,
  `do` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `wypozyczenia`
--

INSERT INTO `wypozyczenia` (`id`, `pojazd_id`, `imie`, `nazwisko`, `telefon`, `od`, `do`) VALUES
(1, 9, 'Adam', 'Psikuta', '525874125', '2018-11-18', '2018-11-26'),
(2, 1, 'Ania ', 'Majewska', '874521469', '2018-11-22', '2018-11-30'),
(4, 6, 'PaweÅ‚', 'Kowalski', '111258472', '2018-12-09', '2018-12-16');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pojazdy`
--
ALTER TABLE `pojazdy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pojazd_wypozyczenie` (`pojazd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pojazdy`
--
ALTER TABLE `pojazdy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD CONSTRAINT `pojazd_wypozyczenie` FOREIGN KEY (`pojazd_id`) REFERENCES `pojazdy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

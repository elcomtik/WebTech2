-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Hostiteľ: localhost
-- Čas generovania: Po 22.Máj 2017, 20:08
-- Verzia serveru: 5.7.18-0ubuntu0.16.04.1
-- Verzia PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `wt2projekt`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `intranet_user`
--

CREATE TABLE `intranet_user` (
  `name` varchar(9) DEFAULT NULL,
  `surname` varchar(11) DEFAULT NULL,
  `title1` varchar(10) DEFAULT NULL,
  `title2` varchar(6) DEFAULT NULL,
  `ldapLogin` varchar(20) DEFAULT NULL,
  `photo` varchar(13) DEFAULT NULL,
  `room` varchar(5) DEFAULT NULL,
  `phone` varchar(3) DEFAULT NULL,
  `department` varchar(5) DEFAULT NULL,
  `staffRole` varchar(10) DEFAULT NULL,
  `function` varchar(78) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `intranet_user`
--

INSERT INTO `intranet_user` (`name`, `surname`, `title1`, `title2`, `ldapLogin`, `photo`, `room`, `phone`, `department`, `staffRole`, `function`) VALUES
('Vladislav', 'Bača', 'Ing.', '', '', 'baca.jpg', 'T005', '264', 'OEMP', 'doktorand', ''),
('Peter', 'Balko', 'Ing.', '', '', '', 'D 102', '395', 'OIKR', 'doktorand', ''),
('Richard', 'Balogh', 'Ing.', ' PhD.', '', 'balogh.jpg', 'D 110', '411', 'OEMP', 'teacher', 'zástupca vedúceho oddelenia'),
('Igor', 'Bélai', 'Ing.', ' PhD.', '', '', 'D 126', '478', 'OEMP', 'teacher', ''),
('Katarína', 'Beringerová', '', '', '', '', 'A 705', '672', 'AHU', 'teacher', ''),
('Pavol', 'Bisták', 'Ing.', ' PhD.', 'bistak', 'bistak.jpg', 'D 120', '695', 'OEAP', 'teacher', ''),
('Dmitrii', 'Borkin', 'Ing.', '', '', '', 'D 102', '395', 'OIKR', 'doktorand', ''),
('Martin', 'Bugár', 'Ing.', ' PhD.', '', '', 'A 708', '579', 'OEAP', 'teacher', ''),
('Ján', 'Cigánek', 'Ing.', ' PhD.', '', '', 'D 104', '686', 'OIKR', 'teacher', ''),
('Peter', 'Drahoš', 'doc. Ing.', ' PhD.', '', '', 'D 118', '669', 'OEMP', 'teacher', ''),
('František', 'Erdödy', '', '', '', 'erdody.jpg', 'A S39', '818', 'AHU', 'teacher', ''),
('Viktor', 'Ferencey', 'prof. Ing.', ' PhD.', '', 'ferencey.jpg', 'A 802', '438', 'OEAP', 'teacher', 'zástupca vedúceho oddelenia'),
('Peter', 'Fuchs', 'doc. Ing.', ' PhD.', '', '', 'B S05', '826', 'OEMP', 'researcher', ''),
('Gabriel', 'Gálik', 'Ing.', '', '', '', 'A 706', '559', 'OAMM', 'researcher', ''),
('Vladimír', 'Goga', 'doc. Ing.', ' PhD.', '', '', 'A 702', '687', 'OAMM', 'teacher', ''),
('Miroslav', 'Gula', 'Ing.', '', 'xgulam', 'gula.jpg', 'D 103', '628', 'OIKR', 'doktorand', ''),
('Oto', 'Haffner', 'Ing.', ' PhD.', '', 'haffner.jpg', 'D 125', '315', 'OIKR ', 'teacher', ''),
('Juraj', 'Hrabovský', 'Ing.', ' PhD.', '', '', 'A 706', '559', 'OAMM', 'teacher', ''),
('Mikuláš', 'Huba', 'prof. Ing.', ' PhD.', '', 'huba.jpg', 'D 112', '771', 'OEAP', 'teacher', 'riaditeľ ústavu; vedúci oddelenia'),
('Mária', 'Hypiusová', 'Ing.', ' PhD.', '', '', 'D 122', '193', 'OIKR', 'teacher', ''),
('Štefan', 'Chamraz', 'Ing.', ' PhD.', '', '', 'D 107', '848', 'OEMP', 'teacher', ''),
('Jakub', 'Jakubec', 'Ing.', ' PhD.', '', '', 'A 707', '452', 'OAMM ', 'researcher', ''),
('Igor', 'Jakubička', 'Ing.', '', '', 'jakubicka.jpg', 'T005', '264', 'OEMP', 'doktorand', ''),
('Katarína', 'Kermietová', '', '', '', '', 'D 116', '598', 'AHU', 'teacher', 'zástupca vedúceho oddelenia'),
('Ivan', 'Klimo', 'Ing.', '', '', '', 'D 101', '509', 'OEMP', 'doktorand', ''),
('Michal', 'Kocúr', 'Ing.', ' PhD.', 'xkocurm2', 'kocur.jpg', 'D 104', '686', 'OIKR ', 'teacher', ''),
('Štefan', 'Kozák', 'prof. Ing.', ' PhD.', '', 'kozak.jpg', 'D 115', '281', 'OEMP', 'teacher', 'zástupca riaditeľa ústavu pre rozvoj ústavu; vedúci oddelenia'),
('Alena', 'Kozáková', 'doc. Ing.', ' PhD.', '', '', 'D 111', '563', 'OIKR', 'teacher', ''),
('Erik', 'Kučera', 'Ing.', ' PhD.', '', '', 'D 125', '315', 'OIKR ', 'teacher', ''),
('Vladimír', 'Kutiš', 'doc. Ing.', ' PhD.', '', 'kutis.jpg', 'A 701', '562', 'OAMM ', 'teacher', 'zástupca vedúceho oddelenia'),
('Alek', 'Lichtman', 'Ing.', '', '', '', 'D 101', '509', 'OEMP', 'doktorand', ''),
('Justín', 'Murín', 'prof. Ing.', ' DrSc.', '', 'murin.jpg', 'A 704', '611', 'OAMM', 'teacher', 'zástupca riaditeľa ústavu pre vedeckú činnosť; vedúci oddelenia'),
('Jakub', 'Osuský', 'Ing.', ' PhD.', '', 'osusky.jpg', 'D 123', '356', 'OIKR ', 'teacher', ''),
('Tomáš', 'Paciga', 'Ing.', '', '', '', 'A 707', '452', 'OAMM', 'doktorand', ''),
('Juraj', 'Paulech', 'Ing.', ' PhD.', '', 'paulech.jpg', 'A 701', '562', 'OAMM', 'teacher', ''),
('Matej', 'Rábek', 'Ing.', '', 'xrabek', 'rabek.jpg', 'D 103', '628', 'OIKR', 'doktorand', ''),
('Danica', 'Rosinová', 'doc. Ing.', ' PhD.', '', 'rosinova.jpg', 'D 111', '563', 'OIKR', 'teacher', 'vedúci oddelenia'),
('Tibor', 'Sedlár', 'Ing. ', '', '', '', 'A 803', '399', 'OAMM', 'teacher', ''),
('Erich', 'Stark', 'Ing.', '', '', 'stark.jpg', 'C 014', '', 'OIKR', 'doktorand', ''),
('Peter', 'Ťapák', 'Ing.', ' PhD.', '', '', 'D 121', '569', 'OEAP', 'teacher', ''),
('Katarína', 'Žáková', 'doc. Ing.', ' PhD.', 'zakova', 'zakova.jpg', 'D 119', '742', 'OIKR', 'teacher', 'zástupca riaditeľa ústavu pre pedagogickú činnosť; zástupca vedúceho oddelenia'),
('Erik', 'Pribula', NULL, NULL, 'xpribula', NULL, NULL, NULL, NULL, NULL, NULL),
('Adam', 'Podhradský', NULL, NULL, 'xpodhradskya', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `video_list`
--

CREATE TABLE `video_list` (
  `id` int(5) NOT NULL,
  `name_sk` varchar(100) CHARACTER SET latin1 NOT NULL,
  `name_en` varchar(100) CHARACTER SET latin1 NOT NULL,
  `url` varchar(60) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `video_list`
--

INSERT INTO `video_list` (`id`, `name_sk`, `name_en`, `url`) VALUES
(1, 'Ústav automobilovej mechatroniky FEI STU', '', 'IiNXYgbOKxw'),
(2, 'Našou prioritou sú úspešní študenti - Automobilová mechatronika FEI STU', '', 'XTjNQoEZmbk'),
(3, 'Kam na vysokú školu ?', '', 'lFaF0hKrFaM'),
(4, 'Exkurzia - Microstep (Bratislava)', '', 'K3i9DgrK4Ro'),
(5, 'ELO SYS 2014 - elektrická motokára, elektromobilita', '', '0qnpBOZY3Ys'),
(6, 'Aplikovaná Mechatronika- Meranie akupunktúrnych bodov\r\n', '', '3E4PJI08_2Q');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `video_list`
--
ALTER TABLE `video_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `video_list`
--
ALTER TABLE `video_list`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 22 nov 2013 om 10:01
-- Serverversie: 5.6.12-log
-- PHP-versie: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `am1b-fotosjaak`
--
CREATE DATABASE IF NOT EXISTS `am1b-fotosjaak` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1b-fotosjaak`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question_english` text NOT NULL,
  `question_dutch` text NOT NULL,
  `answer_english` text NOT NULL,
  `answer_dutch` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Gegevens worden uitgevoerd voor tabel `faq`
--

INSERT INTO `faq` (`id`, `question_english`, `question_dutch`, `answer_english`, `answer_dutch`) VALUES
(1, 'When is the game finished', 'Wanneer is het spel afgelopen', 'When the score is less then 0 point', 'Wanneer de score lager is dan 0 punten'),
(2, 'Is this game hard to play', 'Is het een moeilijk spel', 'Yes, this game is very hard to master', 'Ja, dit is een zeer complex spel'),
(3, 'can you loose', 'kun je verliesen', 'Yes by reaching a score beneath 0', 'ja als je score beneden de 0 is verlies je'),
(4, 'Will the game recieve constant updates', 'Komen er constant updates uit voor het spel', 'Yes the game will be updated constantly', 'ja het spel zal constant worden geupdate'),
(5, 'The animation sometimes bugs out', 'De animatie doet het soms niet', 'that happens sometimes, its only in the aplha phase', 'dat gebeurt soms, het spel is nog in de aplha fase'),
(6, 'Is Marijn the wizard', 'Is Marijn de tovenaar', 'yes', 'ja'),
(7, 'I dont know more questions', 'Ik weet niet meer vragen', 'OK', 'OK'),
(8, 'How do i move my character', 'Hoe beweeg ik mijn character', 'By pressing and holding the A or D key', 'Door A of D ingedrukt te hebben'),
(9, 'How do i win', 'hoe win ik', 'If you reach a score of 1000 or above you win', 'Als je 1000 punten of meer hebt win je het spal'),
(10, 'How much does the game cost', 'hoe duur is het spel', 'the game is free', 'het spel is gratis');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `infix` varchar(20) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `city` varchar(163) NOT NULL,
  `zip_code` varchar(6) NOT NULL,
  `street` varchar(163) NOT NULL,
  `house_number` int(4) NOT NULL,
  `birthday` date NOT NULL,
  `sex` enum('male','female') NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `game_type` enum('no_choice','fps','strategy','adventure','rpg','horror','retro','sport','puzzle','party','casual','education') NOT NULL,
  `favo_game` varchar(300) NOT NULL,
  `userrole` enum('customer','admin','root') NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `infix`, `surname`, `city`, `zip_code`, `street`, `house_number`, `birthday`, `sex`, `email`, `password`, `game_type`, `favo_game`, `userrole`) VALUES
(35, 'customer', 'de', 'customer', 'CustomerStad', '1901CB', 'customerstraat', 17, '1901-01-01', 'male', 'customer@gmail.com', 'geheim', 'casual', 'IloMilo', 'customer'),
(36, 'Admin', 'de', 'Admin', 'Adminstad', '1901CB', 'Adminstraat', 17, '1990-01-01', 'male', 'admin@gmail.com', 'geheim', 'puzzle', 'Tomb Raider', 'admin'),
(37, 'Root', 'de', 'Root', 'Rootstad', '1901CB', 'Rootstraat', 12, '1990-01-01', 'male', 'root@gmail.com', 'geheim', 'retro', 'IloMilo', 'root'),
(39, 'wqer', 'de', 'weijer', 'wkerlwqhr', 'ertewr', 'jhawehrji', 123, '1997-02-03', 'male', 'kjell_weijer@hotmail.com', 'weijrwaer', 'education', 'wret', 'customer'),
(40, 'kjell', 'de', 'weijer', 'amersfoort', '3814', 'liendertsedreef ', 13, '1997-04-09', 'male', 'kjell_derp@hotmail.com', 'wachtwoord', 'rpg', 'skyrim', 'customer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

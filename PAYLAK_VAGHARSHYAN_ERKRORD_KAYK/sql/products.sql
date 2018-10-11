-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 03 2017 г., 19:59
-- Версия сервера: 5.6.13
-- Версия PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `products`
--
CREATE DATABASE IF NOT EXISTS `products` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `products`;

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img_src` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `select` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=83 ;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`id`, `name`, `price`, `img_src`, `description`, `select`) VALUES
(76, 'TV', 1000, 'tv1.png', 'Sa shat lav herustacuyc e', 1),
(77, 'SMART WOTCH', 500, 'smart.jpg', 'Sa jamanakakic texnikae vorov duk dzes kzgak aveli harmaravet', 1),
(78, 'ARDUK', 200, 'arduk.jpg', 'Ays arduk@ derki hamar harmaravet e', 1),
(79, 'FEN', 100, 'fen.png', 'ays fen@ uni nor hnaravorutyunner', 1),
(82, 'EREXAI HAGUST', 50, 'hagust.jpg', 'AYS hagusti mej dzer erexan iren kzga aveli harmaravet ev taquk', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

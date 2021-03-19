-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 19 2021 г., 21:25
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test-task-for-work`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `reportSubject` text NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `aboutMe` text DEFAULT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'profile.png'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `birthdate`, `reportSubject`, `country`, `phone`, `email`, `company`, `position`, `aboutMe`, `photo`) VALUES
(1, 'Максим', 'Литвинов', '03/08/2021', 'фыпфывп', 'UA', '+1 (098) 837-6563', 'daiman52464597@gmail.com', '', '', '', 'profile.png'),
(316, 'Максим', 'Литвинов', '03/09/2021', 'фыпфывпфывпфывпфывпфывпфыв', 'UA', '+1 (098) 837-6563', 'daiman52464597@gmail.com', '', '', '', 'profile.png'),
(327, 'Максим', 'Литвинов', '03/11/2021', 'asdfasdf', 'UA', '+1 (098) 837-6563', 'daiman52464597@gmail.com', '', '', '', 'profile.png'),
(328, 'Максим', 'Литвинов', '03/08/2021', 'asdfsdf', 'UA', '+1 (098) 837-6563', 'daiman52464597@gmail.com', NULL, NULL, NULL, 'profile.png'),
(329, 'Максим', 'Литвинов', '03/26/2021', 'asdfasdf', 'UA', '+1 (098) 837-6563', 'daiman52464597@gmail.com', NULL, NULL, NULL, 'profile.png'),
(330, 'Максим', 'Литвинов', '03/09/2021', 'asdfasfd', 'UA', '+1 (098) 837-6563', 'daiman52464597@gmail.com', NULL, NULL, NULL, 'profile.png'),
(331, 'Максим', 'Литвинов', '03/26/2021', 'adsasdgasd', 'UA', '+1 (098) 837-6563', 'daiman52464597@gmail.com', NULL, NULL, NULL, 'profile.png'),
(332, 'Максим', 'Литвинов', '03/16/2021', 'asdfasdf', 'UA', '+1 (098) 837-6563', 'daiman52464597@gmail.com', NULL, NULL, NULL, 'profile.png'),
(333, 'Максим', 'Литвинов', '03/16/2021', 'asdfasdf', 'UA', '+1 (098) 837-6563', 'daiman52464597@gmail.com', NULL, NULL, NULL, 'profile.png'),
(334, 'Максим', 'Литвинов', '03/02/2021', 'asdfsadf', 'UA', '+1 (098) 837-6563', 'daiman52464597@gmail.com', NULL, NULL, NULL, 'profile.png'),
(335, 'Максим', 'Литвинов', '03/08/2021', 'asdfasd', 'UA', '+1 (098) 837-6563', 'daiman52464597@gmail.com', NULL, NULL, NULL, 'profile.png'),
(336, 'Максим', 'Литвинов', '03/26/2021', 'asdfasdfsdf', 'UA', '+1 (098) 837-6563', 'daiman52464597@gmail.com', NULL, NULL, NULL, 'profile.png'),
(337, 'Максим', 'Литвинов', '03/10/2021', 'asdfasdfsaf', 'UA', '+1 (098) 837-6563', 'daiman52464597@gmail.com', NULL, NULL, NULL, 'profile.png'),
(350, 'Максим', 'Литвинов', '03/15/2021', 'asdfasdf', 'UA', '+1 (098) 837-6563', 'daiman52464597@gmail.com', NULL, NULL, NULL, 'profile.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

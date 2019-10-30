-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 31 2019 г., 01:15
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cinema_fin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `hall`
--

CREATE TABLE `hall` (
  `id` int(11) NOT NULL,
  `row` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `cathegory` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `hall`
--

INSERT INTO `hall` (`id`, `row`, `number`, `cathegory`, `price`) VALUES
(83, 1, 1, 1, '10'),
(84, 1, 2, 1, '10'),
(85, 1, 3, 1, '10'),
(86, 1, 4, 1, '10'),
(87, 1, 5, 1, '10'),
(88, 1, 6, 1, '10'),
(89, 1, 7, 1, '10'),
(90, 1, 8, 1, '10'),
(91, 1, 9, 1, '10'),
(92, 1, 10, 1, '10'),
(93, 2, 1, 1, '10'),
(94, 2, 2, 1, '10'),
(95, 2, 3, 1, '10'),
(96, 2, 4, 1, '10'),
(97, 2, 5, 1, '10'),
(98, 2, 6, 1, '10'),
(99, 2, 7, 1, '10'),
(100, 2, 8, 1, '10'),
(101, 2, 9, 1, '10'),
(102, 2, 10, 1, '10'),
(103, 3, 1, 1, '10'),
(104, 3, 2, 1, '10'),
(105, 3, 3, 1, '10'),
(106, 3, 4, 1, '10'),
(107, 3, 5, 1, '10'),
(108, 3, 6, 1, '10'),
(109, 3, 7, 1, '10'),
(110, 3, 8, 1, '10'),
(111, 3, 9, 1, '10'),
(112, 3, 10, 1, '10'),
(113, 1, 1, 2, '13'),
(114, 1, 2, 2, '13'),
(115, 1, 3, 2, '13'),
(116, 1, 4, 2, '13'),
(117, 1, 5, 2, '13'),
(118, 1, 6, 2, '13'),
(119, 1, 7, 2, '13'),
(120, 1, 8, 2, '13'),
(121, 1, 9, 2, '13'),
(122, 1, 10, 2, '13'),
(123, 2, 1, 2, '13'),
(124, 2, 2, 2, '13'),
(125, 2, 3, 2, '13'),
(126, 2, 4, 2, '13'),
(127, 2, 5, 2, '13'),
(128, 2, 6, 2, '13'),
(129, 2, 7, 2, '13'),
(130, 2, 8, 2, '13'),
(131, 2, 9, 2, '13'),
(132, 2, 10, 2, '13'),
(133, 3, 1, 2, '13'),
(134, 3, 2, 2, '13'),
(135, 3, 3, 2, '13'),
(136, 3, 4, 2, '13'),
(137, 3, 5, 2, '13'),
(138, 3, 6, 2, '13'),
(139, 3, 7, 2, '13'),
(140, 3, 8, 2, '13'),
(141, 3, 9, 2, '13'),
(142, 3, 10, 2, '13'),
(143, 1, 1, 3, '15'),
(144, 1, 2, 3, '15'),
(145, 1, 3, 3, '15'),
(146, 1, 4, 3, '15'),
(147, 1, 5, 3, '15'),
(148, 1, 6, 3, '15'),
(149, 1, 7, 3, '15'),
(150, 1, 8, 3, '15'),
(151, 1, 9, 3, '15'),
(152, 1, 10, 3, '15'),
(153, 2, 1, 3, '15'),
(154, 2, 2, 3, '15'),
(155, 2, 3, 3, '15'),
(156, 2, 4, 3, '15'),
(157, 2, 5, 3, '15'),
(158, 2, 6, 3, '15'),
(159, 2, 7, 3, '15'),
(160, 2, 8, 3, '15'),
(161, 2, 9, 3, '15'),
(162, 2, 10, 3, '15'),
(163, 3, 1, 3, '15'),
(164, 3, 2, 3, '15'),
(165, 3, 3, 3, '15'),
(166, 3, 4, 3, '15'),
(167, 3, 5, 3, '15'),
(168, 3, 6, 3, '15'),
(169, 3, 7, 3, '15'),
(170, 3, 8, 3, '15'),
(171, 3, 9, 3, '15'),
(172, 3, 10, 3, '15');

-- --------------------------------------------------------

--
-- Структура таблицы `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20191021195810', '2019-10-21 19:58:27'),
('20191021203511', '2019-10-21 20:36:03');

-- --------------------------------------------------------

--
-- Структура таблицы `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`) VALUES
(1, 'Joker', 'In Gotham City, mentally-troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: \"The Joker\".'),
(2, 'The Lion King', 'After the murder of his father, a young lion prince flees his kingdom only to learn the true meaning of responsibility and bravery.'),
(3, 'Gisaengchung', 'All unemployed, Ki-taek\'s family takes peculiar interest in the wealthy and glamorous Parks for their livelihood until they get entangled in an unexpected incident.'),
(4, 'Terminator: Dark Fate', 'Sarah Connor and a hybrid cyborg human must protect a young girl from a newly modified liquid Terminator from the future.');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `seanse_id` int(11) NOT NULL,
  `total_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `seanse`
--

CREATE TABLE `seanse` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `name`, `nickname`) VALUES
(10, 'admin@admin', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$UGQ1TEtDZ0FLUE1xb0V1SQ$MXXNWw+UsNmfnaHrfVmtd24txaAj3sRrGerNC7nzMlA', 'admin', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `seanse`
--
ALTER TABLE `seanse`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `hall`
--
ALTER TABLE `hall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT для таблицы `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `seanse`
--
ALTER TABLE `seanse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

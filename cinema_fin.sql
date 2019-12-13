-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 13 2019 г., 17:33
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

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
('20191021203511', '2019-10-21 20:36:03'),
('20191124125458', '2019-11-24 12:55:06'),
('20191124131832', '2019-11-24 16:39:15'),
('20191124185235', '2019-11-24 18:52:44'),
('20191124185626', '2019-11-24 18:56:50'),
('20191124190729', '2019-11-24 19:07:42'),
('20191124203309', '2019-11-24 20:33:31'),
('20191124203642', '2019-11-24 20:36:53'),
('20191124203820', '2019-11-24 20:52:29'),
('20191124204102', '2019-11-24 20:52:29'),
('20191124210433', '2019-11-24 21:04:40'),
('20191124211726', '2019-11-24 21:18:05'),
('20191127094703', '2019-11-27 09:57:17'),
('20191211185421', '2019-12-11 18:55:14'),
('20191213084349', '2019-12-13 08:44:17');

-- --------------------------------------------------------

--
-- Структура таблицы `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `img`) VALUES
(1, 'Terminator: Dark Fate', 'An augmented human and Sarah Connor must stop an advanced liquid Terminator, from hunting down a young girl, who\'s fate is critical to the human race.', 'terminator.jpg'),
(5, 'Joker', 'In Gotham City, mentally-troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: \"The Joker\".', 'Joker.jpg'),
(6, 'The Lion King', 'After the murder of his father, a young lion prince flees his kingdom only to learn the true meaning of responsibility and bravery.', 'The_Lion_King.jpg'),
(7, 'Parasite', 'All unemployed, Ki-taek and his family take peculiar interest in the wealthy and glamorous Parks, as they ingratiate themselves into their lives and get entangled in an unexpected incident.', 'Parasite.jpeg'),
(8, 'Us', 'A family\'s serene beach vacation turns to chaos when their doppelgängers appear and begin to terrorize them.', 'us-5df17d1c5d1e8.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `seanses_id` int(11) DEFAULT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `hall_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `seanses_id`, `total_price`, `hall_id`) VALUES
(1, 10, 1, '20', 83),
(2, 12, 1, '20', 84);

-- --------------------------------------------------------

--
-- Структура таблицы `seanse`
--

CREATE TABLE `seanse` (
  `id` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `movie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `seanse`
--

INSERT INTO `seanse` (`id`, `time`, `date`, `price`, `movie_id`) VALUES
(1, '18:00:00', '2019-12-13', '10', 1),
(2, '19:00:00', '2019-12-13', '15', 5),
(3, '17:00:00', '2019-12-13', '15', 5),
(4, '14:00:00', '2019-12-14', '10', 5),
(5, '12:00:00', '2019-12-13', '10', 6),
(6, '17:00:00', '2019-12-13', '10', 6),
(7, '19:00:00', '2019-12-14', '10', 6),
(8, '21:00:00', '2019-12-14', '10', 6),
(9, '20:00:00', '2019-12-14', '15', 1),
(10, '01:00:00', '2019-12-14', '10', 7);

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
(10, 'admin@admin', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$UGQ1TEtDZ0FLUE1xb0V1SQ$MXXNWw+UsNmfnaHrfVmtd24txaAj3sRrGerNC7nzMlA', 'admin', 'admin'),
(12, 'user@mail', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$dW5LblBMN3RLaEoySnZudQ$1E7IFPcxq0N92oYtmvwabxt5sqjWL3gfQb73TNwBBuQ', 'Максим', 'Coala');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E52FFDEEA76ED395` (`user_id`),
  ADD KEY `IDX_E52FFDEE13269199` (`seanses_id`),
  ADD KEY `IDX_E52FFDEE52AFCFD6` (`hall_id`);

--
-- Индексы таблицы `seanse`
--
ALTER TABLE `seanse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_95BFEF5F8F93B6FC` (`movie_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `seanse`
--
ALTER TABLE `seanse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_E52FFDEE13269199` FOREIGN KEY (`seanses_id`) REFERENCES `seanse` (`id`),
  ADD CONSTRAINT `FK_E52FFDEE52AFCFD6` FOREIGN KEY (`hall_id`) REFERENCES `hall` (`id`),
  ADD CONSTRAINT `FK_E52FFDEEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `seanse`
--
ALTER TABLE `seanse`
  ADD CONSTRAINT `FK_95BFEF5F8F93B6FC` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

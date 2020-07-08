-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 08 2020 г., 11:02
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `faculty_active`
--

-- --------------------------------------------------------

--
-- Структура таблицы `course1`
--

CREATE TABLE `course1` (
  `id_group_of_member` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `course1`
--

INSERT INTO `course1` (`id_group_of_member`, `name`) VALUES
(1, 'ИСТ-311'),
(2, 'ПРИ-311'),
(3, 'ПМИ-311'),
(4, 'ИБ-311'),
(5, 'ИБ-312'),
(6, 'ПИ-311');

-- --------------------------------------------------------

--
-- Структура таблицы `course2`
--

CREATE TABLE `course2` (
  `id_group_of_member` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `course2`
--

INSERT INTO `course2` (`id_group_of_member`, `name`) VALUES
(1, 'ИСТ-321'),
(2, 'ПРИ-321'),
(3, 'ПМИ-321'),
(4, 'ИБ-321'),
(5, 'ИБ-322'),
(6, 'ПИ-321');

-- --------------------------------------------------------

--
-- Структура таблицы `course3`
--

CREATE TABLE `course3` (
  `id_group_of_member` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `course3`
--

INSERT INTO `course3` (`id_group_of_member`, `name`) VALUES
(1, 'ИСТ-321'),
(2, 'ПРИ-321'),
(3, 'ПМИ-321'),
(4, 'ИБ-321'),
(5, 'ИБ-322'),
(6, 'ПИ-321');

-- --------------------------------------------------------

--
-- Структура таблицы `course4`
--

CREATE TABLE `course4` (
  `id_group_of_member` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `course4`
--

INSERT INTO `course4` (`id_group_of_member`, `name`) VALUES
(1, 'ИСТ-341'),
(2, 'ПРИ-341'),
(3, 'ПМИ-341'),
(4, 'ИБ-341'),
(5, 'ИБ-342'),
(6, 'ПИ-341');

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `points` float NOT NULL,
  `event_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id_event`, `header`, `description`, `points`, `event_date`) VALUES
(1, 'fdsagasdhfa', 'FAG', 20, '13 июля 2019'),
(2, 'fdsagasdhfa', 'vfbzx', 20, '13 июля 2019'),
(3, 'fdsagasdhfa', 'vfbzx', 20, '13 июля 2019'),
(4, 'fdsagasdhfa', 'fsasg', 20, '13 июля 2019');

-- --------------------------------------------------------

--
-- Структура таблицы `members`
--

CREATE TABLE `members` (
  `id_members` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name1` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `name3` varchar(255) NOT NULL,
  `count_events` int(11) DEFAULT NULL,
  `points` float DEFAULT NULL,
  `sex` tinyint(1) NOT NULL,
  `group_of_member` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `members`
--

INSERT INTO `members` (`id_members`, `login`, `password`, `name1`, `name2`, `name3`, `count_events`, `points`, `sex`, `group_of_member`, `phone`, `email`, `pin`) VALUES
(1, 'egor', '$2y$10$GnHEVI0f9jXHSAdMca03jOeG4lTqK8Fufe0SbAfQbHYWbosbDJ/am', 'Петренко', 'Егор', 'Александрович', NULL, NULL, 1, 'ИСТ-311', '+79282122045', 'Shevchenkin83@mail.ru', NULL),
(2, 'egor', '$2y$10$u25Z6FW1saJiwWnLZp2VHODwTOsCXVgWxFHQZ7HR8N7HgL1WSPcGa', 'Петренко', 'Егор', 'Александрович', NULL, NULL, 1, 'ПРИ-311', '+79282122045', 'Shevchenkin83@mail.ru', NULL),
(3, 'egor', 'test', 'Петренко', 'Егор', 'Александрович', NULL, NULL, 1, 'ПРИ-311', '+79282122045', 'Shevchenkin83@mail.ru', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `course1`
--
ALTER TABLE `course1`
  ADD PRIMARY KEY (`id_group_of_member`);

--
-- Индексы таблицы `course2`
--
ALTER TABLE `course2`
  ADD PRIMARY KEY (`id_group_of_member`);

--
-- Индексы таблицы `course3`
--
ALTER TABLE `course3`
  ADD PRIMARY KEY (`id_group_of_member`);

--
-- Индексы таблицы `course4`
--
ALTER TABLE `course4`
  ADD PRIMARY KEY (`id_group_of_member`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Индексы таблицы `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id_members`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `course1`
--
ALTER TABLE `course1`
  MODIFY `id_group_of_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `course2`
--
ALTER TABLE `course2`
  MODIFY `id_group_of_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `course3`
--
ALTER TABLE `course3`
  MODIFY `id_group_of_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `course4`
--
ALTER TABLE `course4`
  MODIFY `id_group_of_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `members`
--
ALTER TABLE `members`
  MODIFY `id_members` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

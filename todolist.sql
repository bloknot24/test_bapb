-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 05 2022 г., 01:37
-- Версия сервера: 5.7.33-log
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `todolist`
--

-- --------------------------------------------------------

--
-- Структура таблицы `_importance`
--

CREATE TABLE `_importance` (
  `id_importance` tinyint(1) NOT NULL,
  `name_importance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `_importance`
--

INSERT INTO `_importance` (`id_importance`, `name_importance`) VALUES
(1, 'критично'),
(2, 'важно'),
(3, 'нормально'),
(4, 'не важно');

-- --------------------------------------------------------

--
-- Структура таблицы `_statuses`
--

CREATE TABLE `_statuses` (
  `id_status` tinyint(1) NOT NULL,
  `name_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `_statuses`
--

INSERT INTO `_statuses` (`id_status`, `name_status`) VALUES
(1, 'не исполнено'),
(2, 'исполнено'),
(3, 'отменено');

-- --------------------------------------------------------

--
-- Структура таблицы `_tasks`
--

CREATE TABLE `_tasks` (
  `id_task` int(11) UNSIGNED NOT NULL,
  `name_task` varchar(155) NOT NULL,
  `description_task` text NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `importance_task` tinyint(1) NOT NULL,
  `status_task` tinyint(1) NOT NULL,
  `date_edit` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `_importance`
--
ALTER TABLE `_importance`
  ADD PRIMARY KEY (`id_importance`);

--
-- Индексы таблицы `_statuses`
--
ALTER TABLE `_statuses`
  ADD PRIMARY KEY (`id_status`);

--
-- Индексы таблицы `_tasks`
--
ALTER TABLE `_tasks`
  ADD PRIMARY KEY (`id_task`),
  ADD KEY `importance` (`importance_task`),
  ADD KEY `status` (`status_task`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `_importance`
--
ALTER TABLE `_importance`
  MODIFY `id_importance` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `_statuses`
--
ALTER TABLE `_statuses`
  MODIFY `id_status` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `_tasks`
--
ALTER TABLE `_tasks`
  MODIFY `id_task` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

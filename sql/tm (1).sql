-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 26 2024 г., 15:26
-- Версия сервера: 8.0.36-0ubuntu0.22.04.1
-- Версия PHP: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tm_project`
--

CREATE TABLE `tm_project` (
  `id` bigint NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tm_project`
--

INSERT INTO `tm_project` (`id`, `name`, `description`) VALUES
(55, 'test', 'test'),
(56, '123', ''),
(57, 'New Project', ''),
(58, 'New Project', '');

-- --------------------------------------------------------

--
-- Структура таблицы `tm_task`
--

CREATE TABLE `tm_task` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tm_task`
--

INSERT INTO `tm_task` (`id`, `name`, `description`) VALUES
(34, 'test', 'test');

-- --------------------------------------------------------

--
-- Структура таблицы `tm_user`
--

CREATE TABLE `tm_user` (
  `id` bigint NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `passwordHash` text NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `lastName` text NOT NULL,
  `firstName` text NOT NULL,
  `middleName` text NOT NULL,
  `nickName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tm_user`
--

INSERT INTO `tm_user` (`id`, `username`, `passwordHash`, `email`, `lastName`, `firstName`, `middleName`, `nickName`) VALUES
(13, 'test', 'e03afdd1337f50fd7a2e1138de46a30d', 'test@tm', '', '', '', ''),
(15, 'vasya', 'b25b896deda7b3f43082fedfb05a2c90', 'vasya@test', '12', '131', '14', '15'),
(16, 'kolya', 'd7ef4796c8b82b66b921ea2267b00291', 'kolya@kolya', '12', '17', '15', '14'),
(17, 'admin', '2f70ef2fdbf089a8678af90ac08de922', 'q', 'w', 'e', 'r', 't');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tm_project`
--
ALTER TABLE `tm_project`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tm_task`
--
ALTER TABLE `tm_task`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tm_user`
--
ALTER TABLE `tm_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tm_project`
--
ALTER TABLE `tm_project`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT для таблицы `tm_task`
--
ALTER TABLE `tm_task`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `tm_user`
--
ALTER TABLE `tm_user`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 11 2018 г., 13:04
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `intom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `address`
--

INSERT INTO `address` (`id`, `address`) VALUES
(1, 'Зеленая 13'),
(2, 'Чкалова 18'),
(3, 'Ленина 40'),
(4, 'Ясная 8');

-- --------------------------------------------------------

--
-- Структура таблицы `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(70) NOT NULL,
  `house` varchar(255) NOT NULL,
  `apartment` varchar(10) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `done` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `applications`
--

INSERT INTO `applications` (`id`, `name`, `number`, `email`, `address`, `house`, `apartment`, `rate`, `done`) VALUES
(76, 'Афыв', '5646', 'Aleksy@mail.ru', 'asdasdasd', '564', '456', 'Включайся', 0),
(90, 'Афыв', '5646', 'Aleksy@mail.ru', 'asdasdasd', '564', '456', 'Включайся', 1),
(94, 'Афыв', '5646', 'Aleksy@mail.ru', 'asdasdasd', '564', '456', 'Включайся', 0),
(95, 'Афыв', '5646', 'Aleksy@mail.ru', 'asdasdasd', '564', '456', 'Включайся', 1),
(96, 'Афыв', '5646', 'Aleksy@mail.ru', 'asdasdasd', '564', '456', 'Включайся', 0),
(97, 'Афыв', '5646', 'Aleksy@mail.ru', 'asdasdasd', '564', '456', 'Включайся', 1),
(98, 'Афыв', '5646', 'Aleksy@mail.ru', 'asdasdasd', '564', '456', 'Включайся', 1),
(99, 'Афыв', '5646', 'Aleksy@mail.ru', 'asdasdasd', '564', '456', 'Включайся', 1),
(100, 'Афыв', '5646', 'Aleksy@mail.ru', 'asdasdasd', '564', '456', 'Включайся', 1),
(101, 'Афыв', '5646', 'Aleksy@mail.ru', 'asdasdasd', '564', '456', 'Включайся', 1),
(102, 'Афыв', '5646', 'Aleksy@mail.ru', 'asdasdasd', '564', '456', 'Включайся', 1),
(103, 'Афыв', '5646', 'Aleksy@mail.ru', 'asdasdasd', '564', '456', 'Включайся', 1),
(104, 'Афыв', '5646', 'Aleksy@mail.ru', 'asdasdasd', '564', '456', 'Включайся', 1),
(105, 'Венберг Алексей Алексеевич', '8 923 437-77', 'Aleksey_97@inbox.ru', 'Чкалова', '18', '75', 'Включайся', 0),
(106, 'Венберг Алексей Алексеевич', '89994995869', 'Aleksey_97@inbox.ru', 'Чкаловаff', '45', '85', 'ТВ стартовый+Включайся', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `call back`
--

CREATE TABLE `call back` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `call back`
--

INSERT INTO `call back` (`id`, `name`, `phone`) VALUES
(1, 'Алена', ''),
(2, 'Алексей', '+7(924)3667050'),
(3, 'sdfds', '4645'),
(4, 'Fsdf', '468486');

-- --------------------------------------------------------

--
-- Структура таблицы `crutch`
--

CREATE TABLE `crutch` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `crutch`
--

INSERT INTO `crutch` (`id`, `name`, `price`) VALUES
(1, 'asdasda', 15546);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(15) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `password` varchar(15) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `admin`) VALUES
(1, 'adminka', '123', 1),
(2, 'asd', 'asd', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `call back`
--
ALTER TABLE `call back`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `crutch`
--
ALTER TABLE `crutch`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT для таблицы `call back`
--
ALTER TABLE `call back`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `crutch`
--
ALTER TABLE `crutch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

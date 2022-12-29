-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 15 2021 г., 09:26
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson19`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `text` varchar(1500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `text`) VALUES
(1, 'В Якутии вводят систему QR-кодов для пропуска в кафе, рестораны, кинотеатры и спортзалы.\r\n\r\nQR-коды будут выдаваться тем, кто привит от коронавируса или переболел ковидом. Эту метку можно получить на портале госуслуг.'),
(2, 'Движение по реке Лене продолжают 12 паромов, обстановка на реке спокойная. Об этом News.Ykt.Ru сообщил генеральный директор управляющей компании «Паромы Якутии» Николай Ефимов.'),
(3, 'В сентябре на улице Петра Алексеева партнеры «Синет Спарк» высадили растения по различным аграрным технологиям. Через три года технология, показавшая себя как наиболее эффективная и доступная для городского бюджета, будет предложена окружной администрации Якутска для дальнейшего внедрения. Проект полностью профинансирован фондом «Синет Спарк».\r\n\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

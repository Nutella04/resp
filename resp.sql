-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 23 2022 г., 04:45
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `resp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(100) NOT NULL,
  `creator` varchar(100) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `img` varchar(100) NOT NULL,
  `kr_text` varchar(500) NOT NULL,
  `poln_text` varchar(4000) NOT NULL,
  `time` varchar(10) NOT NULL,
  `need_sum` bigint(10) NOT NULL,
  `have_sum` bigint(10) DEFAULT NULL,
  `vol_yes_no` varchar(10) NOT NULL,
  `max_vol` varchar(10) NOT NULL,
  `vol_text` varchar(200) NOT NULL,
  `likes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `creator`, `phone`, `email`, `name`, `img`, `kr_text`, `poln_text`, `time`, `need_sum`, `have_sum`, `vol_yes_no`, `max_vol`, `vol_text`, `likes`) VALUES
(4, '6', '+7(924) 169-66-76', 'arostik3@gmail.com', 'Чистый пляж', '../img/AbVV4oWeU6sHDelmT0SW0trH7_AC9bZqwUGTTrqg0QtJn6GrXW8A6sGwTvNvXa8PDHiFxYsLab61oljelZDhFRY9.jpg', 'Наша команда создала проект по очистке городского пляжа на 202 микрорайоне и для этого нам необходим', 'Мы рады приветствовать вас на странице нашего проекта по очистке городского пляжа расположенного на 202 микрорайоне.\r\nЕсли вы ходили или ходите на городской пляж, то должны знать, что ему требуется очистка. Именно это мы и хотим сделать. В наших планах очистка пляжа от мусора, установка рядом с пляжем мусорных урн.\r\nДля этого нам необходимы добровольцы в виде волонтёров и первоначальные вложения.', '10 дней', 5000, 4821, 'Да', '6', 'Будьте крутыми', 312),
(6, '4', '12345678', 'lenaefimova007@mail.ru', 'Посадка деревьев', '../img/1.jpg', 'Мы хотим посадить больше деревьев на улице Ярославского', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '10 дней', 6000, 2300, 'Да', '3', 'Для таскания тяжестей', 23),
(7, '4', '12345678', 'lenaefimova007@mail.ru', 'Чистый пляж', '../img/sd.jpg', 'Мы уберемся на пляже скиньте деньги пж', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2 дня', 2000, 100, 'Да', '12', 'Помогите пж', 5),
(9, '7', '12345678', '', 'Спаси Льва', '../img/SPECIAL_LEV.png', 'Наша команда создала проект по перебазировке Льва в подходящее для него в данный момент времени место и для этого нам нужно собрать сумму в размере 200000 рублей.', 'В этом проекте наша команда решилась помочь Льву собрать необходимую сумму для того, чтобы перебазировать его на специальной технике в более подходящее для его жизни место. Для реализации данного проекта нам нужно собрать сумму в размере 200000 рублей. Вся эта сумма уйдёт на оплату услуг перевозки.', '1 часов', 200000, 200, '', '', '', 22);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `phone`, `password`, `img`, `email`, `name`, `surname`) VALUES
(4, 'lena', '12345678', '12345', '../img/logo.png', '', 'Елена', 'Ефимова'),
(5, 'ayan', '12345678', '12345', '../img/8.jpg', '', '', ''),
(6, 'rostik', '+7(924) 169-66-76', '12345', '', 'arostik3@gmail.com', '', ''),
(7, 'ezhiki', '12345678', '12345', '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

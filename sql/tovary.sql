
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



-- --------------------------------------------------------

--
-- Структура таблицы `tovary`
--

CREATE TABLE `tovary` (
  `id` int(15) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovary`
--

INSERT INTO `tovary` (`id`, `name`) VALUES
(1, 'смартфон'),
(2, 'часы'),
(3, 'зарядка'),
(4, 'наушники'),
(5, 'очки'),
(6, 'пк мышка'),
(7, 'браслет'),
(8, 'кошелёк'),
(9, 'usb шнур'),
(10, 'влешка'),
(11, 'карта памяти'),
(12, 'батарейка'),
(13, 'книга');


--
-- Индексы таблицы `tovary`
--
ALTER TABLE `tovary`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT для таблицы `tovary`
--
ALTER TABLE `tovary`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;



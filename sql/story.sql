
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Структура таблицы `story`
--

CREATE TABLE `story` (
  `id` int(15) NOT NULL,
  `name_client` varchar(150) NOT NULL,
  `name_tovar` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `story`
--

INSERT INTO `story` (`id`, `name_client`, `name_tovar`) VALUES
(1, 'Миша', 1),
(2, 'Витя', 4),
(3, 'Сергей', 3),
(4, 'Ваня', 1),
(5, 'Женя', 1),
(6, 'Саша', 1),
(7, 'Олег', 1),
(8, 'Миша', 2),
(9, 'Миша', 3),
(10, 'Миша', 1),
(11, 'Витя', 5),
(12, 'Витя', 6),
(13, 'Витя', 7),
(14, 'Витя', 8),
(15, 'Женя', 5),
(16, 'Миша', 10),
(17, 'Олег', 11),
(18, 'Олег', 3);


--
-- Индексы таблицы `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для таблицы `story`
--
ALTER TABLE `story`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

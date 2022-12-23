-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 24 2022 г., 00:20
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `beauty-market`
--
CREATE DATABASE IF NOT EXISTS `beauty-market` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `beauty-market`;

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `producer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `cost`, `img`, `about`, `keywords`, `producer`) VALUES
(1, 'Power of Seduction', 1690, 'uploads/catalog-img/Power-of-seduction.jpg', 'Взрывной парфюмерный коктейль 2018 года Power of Seduction олицетворяет новую грань Антонио Бандераса, авантюрного искателя приключений. Бодрящий, чувственный и очень мужественный аромат зовет Вас рискнуть и победить, проявить решительность и покорить любые вершины.\r\nСила притяжения распускается свежими, фруктовыми аккордами бергамота в аппетитном дуэте с яблоком, которое прокладывает путь душистому сердцу. Здесь, молодой, яркий и стильный букет играет мощью лаванды и полыни. Роскошное, мужественное и благородное завершение пленяет чувственным дыханием восточных мелодий, гармонично дополненных прохладой мха. Инновационный, органичный и энергичный парфюмерный коктейль сделает Вас победителем в игре соблазнения.', 'perfume, man', 'Antonio Banderas'),
(2, 'MATRIX total results high amplify shine rinse lamellar treatment', 1120, 'uploads/catalog-img/matrix-shine-rinse.jpg', 'Ламеллярная вода High Amplify Shine Rinse придает сияния вашим волосам. Эта передовая, похожая на воду, невесомая формула распутывает пряди и придает им блеск всего за 8 секунд. Может использоваться в качестве замены кондиционера для тонких волос. Невесомые кондиционирующие молекулы, активированные в воде, обволакивают каждую прядь, мгновенно разделяя, добавляя сияния и мягкости. При нанесении ламеллярной воды на влажные волосы вы можете почувствовать согревающий эффект. Это реакция, разработанная для распределения легких кондиционирующих ингредиентов по волосам. Обратите внимание, что эффект может не чувствоваться, если используется горячая вода.', 'ламеллярная вода', 'MATRIX'),
(3, 'Витэкс FRUIT Therapy Питательная Крем-пенка для умывания Банан 2', 225, 'uploads/catalog-img/viteks-fruit.jpg', 'Матирующий уход 3в1 насыщен специальными натуральными компонентами с доказанной эффективностью, которые обеспечивают коже глубокое увлажнение, выравнивание цвета лица, сужение пор, устранение жирного блеска и длительное матирование.\r\nСок киви, произведенный из отборных спелых плодов, насыщает клетки витаминами и антиоксидантами, помогает быстро избавиться от следов усталости и стресса, придает свежесть и яркость.\r\nПревосходный результат: идеально ровная, гладкая, бархатистая кожа, которая длительное время сохраняет свою свежесть и матовость.\r\nПодходит в качестве базы под макияж.', 'пенка', 'Вiтекс');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

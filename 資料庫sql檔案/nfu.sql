-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `nfu`
--

-- --------------------------------------------------------

--
-- 資料表結構 `books`
--

CREATE TABLE `books` (
  `bookid` int(200) NOT NULL,
  `booktitle` varchar(200) NOT NULL,
  `bookauthor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `books`
--

INSERT INTO `books` (`bookid`, `booktitle`, `bookauthor`) VALUES
(1, 'youtube', 'https://www.youtube.'),
(2, '奇摩雅虎', 'http://yahoo.com.tw'),
(3, 'Google', 'http://google.com'),
(4, '4Game', 'https://www.4gamers.'),
(5, 'BiliBili', 'https://www.bilibili'),
(6, 'csie', 'http://www.csie.nfu.'),
(7, 'nfu', 'http://www.nfu.edu.t'),
(8, 'taiwan', 'http://Taiwan.tw'),
(9, '奇豐的最愛', 'http://kk.com'),
(10, '123', '321'),
(11, '321', '123'),
(12, '564', '564');

-- --------------------------------------------------------

--
-- 資料表結構 `myimg`
--

CREATE TABLE `myimg` (
  `img_id` int(11) NOT NULL,
  `img_src` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `myimg`
--

INSERT INTO `myimg` (`img_id`, `img_src`) VALUES
(1, 'https://b.ecimg.tw/img/activity/campaign/v2/layout/C9740/C974060247/20191220114527_b2-2-932x480.jpg'),
(2, 'https://b.ecimg.tw/img/activity/campaign/v2/layout/C2431/C243101251/20191223143157_b147-2-932x480.jpg'),
(5, 'https://zbfghk.org/wp-content/uploads/2018/12/weather_a.jpg'),
(6, 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/cov1-1568725643.jpg?crop=1.00xw:1.00xh;0,0&resize=980:*'),
(7, 'https://dwxsbm63mo41z.cloudfront.net/files/entry_img/main_L/7596_1571798677.jpg'),
(8, 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAFGUDj.img?h=630&w=1119&m=6&q=60&o=f&l=f'),
(9, 'https://e.ecimg.tw/img/ecshop/v1/layout/index/1/20200103173610_b165-3-920x330.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `phone`
--

CREATE TABLE `phone` (
  `phone_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `money` int(11) NOT NULL,
  `picURL` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sourceURL` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `phone`
--

INSERT INTO `phone` (`phone_id`, `name`, `money`, `picURL`, `sourceURL`) VALUES
(0, 'ASUS ZenFone 5Z ZS620KL (6G/128G)', 11990, 'https://f.ecimg.tw/items/DGCC8NA900AAKD3/000001_1577671283.jpg', 'https://24h.pchome.com.tw/prod/DGCC8N-A900AAKD3?fq=/S/DGCC8N'),
(1, 'ASUS ZenFone 6 ZS630KL (6G/128G)-迷霧黑', 17990, 'https://e.ecimg.tw/items/DGCC8X1900ACWXZ/000001_1578276325.jpg', 'https://24h.pchome.com.tw/prod/DGCC8X-1900ACWXZ?fq=/S/DGCC8X'),
(2, 'ASUS ZenFone 4 Pro ZS551KL 6G/64G 5.5吋智慧手機', 5290, 'https://d.ecimg.tw/items/DGCC7ZA9009S9S2/000001_1548998905.jpg', 'https://24h.pchome.com.tw/prod/DGCC7Z-A9009S9S2?fq=/S/DGCC7Y'),
(3, 'HTC U11+ (6G/128G)', 8490, 'https://d.ecimg.tw/items/DGBMH2A900A73U8/000001_1565594931.jpg', 'https://24h.pchome.com.tw/prod/DGBMH2-A900A73U8?fq=/S/DGBMH2'),
(4, 'HTC U19e (6G/128G)', 10490, 'https://d.ecimg.tw/items/DGBMH6A900A2KQX/000001_1560167483.jpg', 'https://24h.pchome.com.tw/prod/DGBMH6-A900A2KQX?fq=/S/DGBMH6'),
(5, 'HTC Desire 19+ (6G/128G)', 8990, 'https://d.ecimg.tw/items/DGBMGYA900A46EU/000001_1561876750.jpg', 'https://24h.pchome.com.tw/prod/DGBMGY-A900A46EU?fq=/S/DGBMH7'),
(6, 'Apple iPhone 8 (64G)', 14400, 'https://d.ecimg.tw/items/DYAJ9YA9009N8SO/000001_1578018996.jpg', 'https://24h.pchome.com.tw/prod/DYAJ9Y-A9009N8SO?fq=/S/DYAJ9Y'),
(7, 'Apple iPhone Xs (64G)-金色', 26288, 'https://c.ecimg.tw/items/DYAJDF19009G2AI/000001_1578018722.jpg', 'https://24h.pchome.com.tw/prod/DYAJDF-19009G2AI?fq=/S/DYAJDF'),
(8, 'Apple iPhone 11 Pro (64G)-太空灰', 33688, 'https://f.ecimg.tw/items/DYAJFQA900A9CFO/000001_1578019151.jpg', 'https://24h.pchome.com.tw/prod/DYAJFQ-A900A9CFO?fq=/S/DYAJFQ');

-- --------------------------------------------------------

--
-- 資料表結構 `station`
--

CREATE TABLE `station` (
  `stationId` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `gust` int(4) NOT NULL,
  `average_ gust` int(3) NOT NULL,
  `average_ gust2` int(3) NOT NULL,
  `wind_direction` int(8) NOT NULL,
  `atmospheric` int(4) NOT NULL,
  `hai_wen` int(4) NOT NULL,
  `nakago` int(4) NOT NULL,
  `cycle` int(4) NOT NULL,
  `wave_direction` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `station`
--

INSERT INTO `station` (`stationId`, `gust`, `average_ gust`, `average_ gust2`, `wind_direction`, `atmospheric`, `hai_wen`, `nakago`, `cycle`, `wave_direction`) VALUES
('C6AH2', 119, 85, 58, 10225, 164, 177, 118, 47, 11),
('46708A', 76, 53, 54, 12, 10216, 242, 115, 54, 45),
('BH65F', 80, 55, 55, 10666, 152, 32, 82, 96, 10),
('HF58C', 145, 95, 95, 9562, 144, 123, 156, 15, 21),
('F9E32', 110, 80, 66, 10663, 150, 188, 169, 60, 13),
('D89C6', 125, 70, 57, 10632, 162, 151, 119, 42, 16),
('U8D9C', 100, 84, 54, 10236, 164, 158, 140, 30, 15),
('TH69D', 100, 55, 89, 15598, 156, 147, 111, 35, 10),
('Q8G52', 120, 89, 79, 10402, 154, 195, 162, 50, 20),
('GF29Q', 116, 90, 53, 102645, 184, 116, 485, 60, 30),
('G8C6D', 120, 116, 158, 10552, 164, 117, 119, 50, 13),
('G5F9D', 165, 95, 57, 10554, 168, 220, 154, 90, 30),
('T69Z4', 120, 95, 59, 10658, 165, 157, 169, 50, 24),
('L8UD6', 147, 54, 65, 10410, 158, 116, 148, 40, 12);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- 資料表索引 `myimg`
--
ALTER TABLE `myimg`
  ADD PRIMARY KEY (`img_id`);

--
-- 資料表索引 `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`phone_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `myimg`
--
ALTER TABLE `myimg`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

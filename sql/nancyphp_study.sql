-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `nancyphp_study`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account_book`
--

CREATE TABLE `account_book` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `adress_at` varchar(255) NOT NULL,
  `creat_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `account_book`
--

INSERT INTO `account_book` (`sid`, `name`, `mobile`, `mail`, `birthday`, `adress_at`, `creat_date`) VALUES
(1, '慕蓉欣', '0977-777-777', 'MOMOM@gmail.com', '2020-12-12', '台北市', '2020-04-07 02:32:42'),
(2, '王悅閱', '0912-345-678', 'OUN@gmail.com', '2020-04-08', '花蓮市', '2020-04-07 02:25:56'),
(3, '陳興星', '0999-999-999', 'GHEN@gmail.com', '2020-04-09', '台中市', '2020-04-06 00:35:47'),
(4, '劉旺旺', '0911-111-111', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-07 02:25:13'),
(6, '朱茉莉', '0977-777-777', 'MOMOM@gmail.com', '2020-04-07', '台北市', '2020-04-05 16:35:47'),
(7, '林咚咚', '0988-888-888', 'OUN@gmail.com', '2020-04-08', '花蓮市', '2020-04-05 16:35:47'),
(8, '黃小星', '0999-999-999', 'GHEN@gmail.com', '2020-04-09', '台中市', '2020-04-05 16:35:47'),
(9, '劉靜宜', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-05 16:35:47'),
(10, '陳柏芸', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-05 16:35:47'),
(11, '林詩婷', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-05 16:35:47'),
(12, '陳志軒', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-05 16:35:47'),
(13, '吳世紹', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-05 16:35:47'),
(14, '梁惠雯', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-05 16:35:47'),
(15, '黃哲友', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-05 16:35:47'),
(16, '賴靜如', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-05 16:35:47'),
(17, '陳逸華', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-05 16:35:47'),
(18, '阮碧睿', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-05 16:35:47'),
(19, '林秀玲', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-05 16:35:47'),
(20, '林書勇', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-07 08:41:56'),
(21, '蔡美坤', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-07 08:42:01'),
(22, '夏佩怡', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-07 08:42:05'),
(23, '吳博雪', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-07 08:42:09'),
(24, '游雅婷', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-07 08:42:14'),
(26, '錢淑真', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-07 08:42:22'),
(27, '楊其利', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-07 08:42:31'),
(28, '胡蘭汝', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-07 08:42:53'),
(29, '邱台智', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-07 08:42:55'),
(30, '錢元凱', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-07 08:43:00'),
(31, '賴建民', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-07 08:43:04'),
(32, '黃明杰', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-07 08:43:07'),
(33, '邱雨鈺', '0900-000-000', 'LU@gmail.com', '2020-04-10', '新竹市', '2020-04-07 08:43:14');

-- --------------------------------------------------------

--
-- 資料表結構 `categories`
--

CREATE TABLE `categories` (
  `sid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `parent_sid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `categories`
--

INSERT INTO `categories` (`sid`, `name`, `parent_sid`) VALUES
(1, '程式設計', 0),
(2, '繪圖軟體', 0),
(3, '網際網路應用', 0),
(4, 'PHP', 1),
(5, 'JavaScript', 1),
(7, 'PS', 2),
(8, 'Chrome', 3),
(9, '騙錢的', 3),
(10, 'C++', 1),
(16, '椅拉', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `try`
--

CREATE TABLE `try` (
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `try`
--

INSERT INTO `try` (`name`, `age`, `address`) VALUES
('李小明', 25, '台北市'),
('陳小華', 28, '高雄市'),
('吳大同', 24, '宜蘭縣');

-- --------------------------------------------------------

--
-- 資料表結構 `try02`
--

CREATE TABLE `try02` (
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `try02`
--

INSERT INTO `try02` (`name`, `age`, `address`) VALUES
('慕蓉欣', 11, '台北市'),
('王悅閱', 12, '花蓮市'),
('陳興星', 13, '台中市');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account_book`
--
ALTER TABLE `account_book`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `account_book`
--
ALTER TABLE `account_book`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `categories`
--
ALTER TABLE `categories`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

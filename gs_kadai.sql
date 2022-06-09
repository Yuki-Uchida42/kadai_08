-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 6 月 09 日 17:56
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_kadai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(30) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `sex` varchar(12) NOT NULL,
  `birth` varchar(12) NOT NULL,
  `email` varchar(128) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `sex`, `birth`, `email`, `date`) VALUES
(1, 'fdfd', 'fgdg', 'fee', 'yuki.uchida@mitsubishicorp.com', '2022-05-29 19:10:17.000000'),
(2, 'fdfdrgrgっrfrw', 'fgdgrgrgwfっr', 'feeれgrwっf', 'yuki.uchida@mitsubishicorp.com', '2022-06-10 02:41:44.000000'),
(3, 'fefef', 'efefe', 'fewfe', 'fewfe', '2022-05-29 19:25:43.000000'),
(4, 'fdfd', 'fgdg', '1996/05/14', 'yuki.uchida@mitsubishicorp.com', '2022-06-03 00:19:57.000000'),
(5, 'cdvdvd', 'vfcbvff', '1999/5/14', 'fsvfbv fbvfvfds fvd fcs', '2022-06-03 00:20:24.000000'),
(6, '内田', '男　', '1996・', '', '2022-06-03 00:20:54.000000'),
(7, '内田', '男の子', '19960514', 'yuki21514-m@i.softbank.jp', '2022-06-10 02:40:54.000000'),
(9, 'hrgg', 'btbt', 'bgtbt', 'nbtgbt', '2022-06-09 23:33:45.000000'),
(12, 'vdev更新　', '更新', 'vrdfvrd', 'vrdfvrd', '2022-06-10 02:41:19.000000');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

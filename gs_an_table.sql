-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 1 朁E27 日 07:39
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE IF NOT EXISTS `gs_an_table` (
`id` int(12) NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `book_URL` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `title`, `book_URL`, `comment`, `time`) VALUES
(1, 'あああ', 'www.yahoo.co.jp', '素晴らしいです', '2018-01-21 18:42:38'),
(2, 'サラバ', 'https://www.saraba.co.jp/', 'エジプト、イラン、日本を舞台に一人の青年の成長を追ったヒューマン・ドラマ。3冊にわたる大作。', '2018-01-21 18:54:51'),
(3, '三四郎', 'https://www.google.co.jp/searc', '良かった。', '2018-01-21 20:23:10'),
(4, '三四郎', 'https://images-na.ssl-images-a', 'よかった。', '2018-01-21 20:26:55'),
(6, '吾輩は猫である', 'www.wagahai.neco.jp', '教科書で読みました！', '2018-01-21 22:00:02'),
(7, 'バッテリー', 'https://www.yahoo.co.jp/', 'めちゃ良かったです。子供が夢中になって読んでいました。', '2018-01-22 21:27:28'),
(8, 'ノルウェイの森', 'www.norway.com', '昔に読みました。映画もありましたね。', '2018-01-24 22:53:44'),
(9, '', '', '', '2018-01-24 22:53:52'),
(10, 'バッテリー', 'www.battery.com', 'よかった！', '2018-01-24 23:07:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

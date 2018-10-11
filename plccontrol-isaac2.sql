-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2018 年 10 月 11 日 12:15
-- 伺服器版本: 10.1.34-MariaDB
-- PHP 版本： 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `plccontrol-isaac2`
--

-- --------------------------------------------------------

--
-- 資料表結構 `alarm_codes`
--

CREATE TABLE `alarm_codes` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` int(10) UNSIGNED NOT NULL,
  `content` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `alarm_codes`
--

INSERT INTO `alarm_codes` (`id`, `code`, `content`) VALUES
(1, 0, 'No Error'),
(2, 1, 'Emergency Error'),
(3, 2, 'Main Air Error'),
(4, 3, 'NC Unit Error'),
(5, 4, 'D/A Unit Error'),
(6, 5, 'A/D Unit Error'),
(7, 6, 'Table NC Error'),
(8, 7, 'SQ/FB Stroke NC Error'),
(9, 8, 'Peel-Off Up/Down NC Error'),
(10, 9, 'Screen Cleaner NC Error'),
(11, 10, 'Vacuum Pump Error'),
(12, 11, 'Table SVR Error'),
(13, 12, 'SQ/FB Stroke SVR Error'),
(14, 13, 'Peel-Off Up/Down SVR Error'),
(15, 14, 'Rear Peel-off Up/Down SVR Error'),
(16, 15, 'Table OT Error'),
(17, 16, 'SQ/FB Stroke OT Error'),
(18, 17, 'Peel-Off Up/Down OT Error'),
(19, 18, 'Screen Cleaner SVR Error'),
(20, 19, 'Screen Cleaner OT Error'),
(21, 20, 'FB Stroke Stop Position Error'),
(23, 25, 'Table Vacuum Error'),
(24, 26, 'Alignment Error'),
(25, 27, 'Inspection Error'),
(26, 29, 'Table Z-Lock Error'),
(27, 30, 'Table Lock Error'),
(28, 32, 'SQ Head Error'),
(29, 33, 'Lift Pin Up/Down Error'),
(30, 34, 'Guide Pin Up/Down Error'),
(31, 35, 'Chuck Error'),
(32, 36, 'Cleaning Roller Up/Down Error'),
(33, 37, 'Chuck Over Error'),
(34, 38, 'Chuck Up/Down Error'),
(35, 40, 'Paper unwind NC Error'),
(36, 41, 'Paper rewind NC Error'),
(37, 42, 'Paper unwind SVR Error'),
(38, 43, 'Paper rewind SVR Error'),
(39, 44, 'Paper Error'),
(40, 50, 'Cleaning Roller Up/Down Error'),
(41, 51, 'No Cleaning Paper'),
(42, 90, 'Beam Sensor Error'),
(43, 91, 'Safety Door Error'),
(44, 92, 'Squeegee Safety Error'),
(45, 96, 'Too long?push the Start switch'),
(46, 97, 'Mecha origin search time over Error'),
(47, 98, 'Pulse origin search time over Error'),
(48, 100, 'Alignment Retry Error'),
(49, 101, 'Alignment Imaging Error'),
(50, 102, 'Calibration Count Error'),
(51, 103, 'Calibration Imaging Error'),
(52, 104, 'XG is not enable start state'),
(53, 106, 'Alignment Stop'),
(54, 107, 'X-Axis NC Error'),
(55, 108, 'X-Axis OT Error'),
(56, 109, 'X-Axis Software limit Error'),
(57, 110, 'Y-Axis NC Error'),
(58, 111, 'Y-Axis OT Error'),
(59, 112, 'Y-Axis Software limit Error'),
(60, 113, 'T-Axis NC Error'),
(61, 114, 'T-Axis OT Error'),
(62, 115, 'T-Axis Software limit Error'),
(63, 200, 'Time to clean up the screen'),
(64, 201, 'Time to supply paste'),
(65, 60, 'Drive Power Supply Cutoff');

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_10_10_131325_create_alarm_codes_table', 1),
(5, '2018_10_10_131334_create_recipes_table', 1),
(6, '2018_10_10_131344_create_statuses_table', 1),
(7, '2018_10_10_131353_create_tools_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `recipes`
--

CREATE TABLE `recipes` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `WorkThickness` decimal(8,2) NOT NULL,
  `SnapOff` decimal(8,2) NOT NULL,
  `PrintTimes` decimal(8,2) NOT NULL,
  `LowSpeedDownHeight` decimal(8,2) NOT NULL,
  `LowSpeedDownSpeed` decimal(8,2) NOT NULL,
  `SQStrokeDelay` decimal(8,2) NOT NULL,
  `SQUpDelay` decimal(8,2) NOT NULL,
  `TableDownDelay` decimal(8,2) NOT NULL,
  `CleaningTimes` decimal(8,2) NOT NULL,
  `ChucksTimes` decimal(8,2) NOT NULL,
  `ScreenSize` decimal(8,2) NOT NULL,
  `SQStartPosition` decimal(8,2) NOT NULL,
  `SQEndPosition` decimal(8,2) NOT NULL,
  `FBStartPosition` decimal(8,2) NOT NULL,
  `FBEndPosition` decimal(8,2) NOT NULL,
  `SQStrokeSpeed` decimal(8,2) NOT NULL,
  `FBStrokeSpeed` decimal(8,2) NOT NULL,
  `SQDownPressure` decimal(8,2) NOT NULL,
  `FBDownPressure` decimal(8,2) NOT NULL,
  `SQFBUpPressure` decimal(8,2) NOT NULL,
  `ScreenID` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `InkID` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `AlignmentPatternNumber` decimal(8,2) NOT NULL,
  `CreateTime` datetime NOT NULL,
  `ModifyTime` datetime NOT NULL,
  `tool_id` int(11) NOT NULL,
  `AlignmentPatternName` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `recipes`
--

INSERT INTO `recipes` (`id`, `Name`, `WorkThickness`, `SnapOff`, `PrintTimes`, `LowSpeedDownHeight`, `LowSpeedDownSpeed`, `SQStrokeDelay`, `SQUpDelay`, `TableDownDelay`, `CleaningTimes`, `ChucksTimes`, `ScreenSize`, `SQStartPosition`, `SQEndPosition`, `FBStartPosition`, `FBEndPosition`, `SQStrokeSpeed`, `FBStrokeSpeed`, `SQDownPressure`, `FBDownPressure`, `SQFBUpPressure`, `ScreenID`, `InkID`, `AlignmentPatternNumber`, `CreateTime`, `ModifyTime`, `tool_id`, `AlignmentPatternName`) VALUES
(1, 'JackTest', '0.02', '0.04', '0.30', '0.10', '0.80', '5.00', '4.00', '4.00', '3.00', '2.00', '1.00', '0.00', '0.07', '10.23', '15.89', '123.45', '12.35', '0.30', '0.50', '0.70', 'abc123', 'def456', '80.00', '2018-03-05 01:10:32', '2018-03-16 18:37:21', 1, ''),
(2, 'mtRecipe02', '71.00', '2.00', '3.00', '45.00', '6.00', '7.00', '8.00', '9.00', '0.00', '1.00', '2.00', '3.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4', '4', '4.00', '2018-03-06 21:41:34', '2018-03-16 18:37:21', 1, '4'),
(3, 'TEST655', '0.30', '2.00', '1.00', '1.00', '0.10', '0.10', '0.20', '0.20', '0.00', '1.00', '2.00', '160.00', '380.00', '380.00', '160.00', '200.00', '200.00', '0.00', '0.00', '0.00', '0', '0', '1.00', '2018-03-08 17:31:56', '2018-03-08 19:04:10', 1, ''),
(9, '543245', '11.00', '12.00', '0.00', '210.00', '254.00', '2524.00', '25.00', '452.00', '420.00', '220.00', '240.00', '240.00', '0.00', '20.00', '20.00', '20.00', '20.00', '450.00', '30.00', '30.00', '3', '33', '30.00', '2018-03-15 15:35:53', '2018-03-15 15:35:53', 2, '3');

-- --------------------------------------------------------

--
-- 資料表結構 `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `CreateTime` datetime NOT NULL,
  `State` int(11) NOT NULL,
  `WorkThickness` decimal(8,2) NOT NULL,
  `SnapOff` decimal(8,2) NOT NULL,
  `PrintTimes` decimal(8,2) NOT NULL,
  `LowSpeedDownHeight` decimal(8,2) NOT NULL,
  `LowSpeedDownSpeed` decimal(8,2) NOT NULL,
  `SQStrokeDelay` decimal(8,2) NOT NULL,
  `SQUpDelay` decimal(8,2) NOT NULL,
  `TableDownDelay` decimal(8,2) NOT NULL,
  `CleaningTimes` decimal(8,2) NOT NULL,
  `ChucksTimes` decimal(8,2) NOT NULL,
  `ScreenSize` decimal(8,2) NOT NULL,
  `SQStartPosition` decimal(8,2) NOT NULL,
  `SQEndPosition` decimal(8,2) NOT NULL,
  `FBStartPosition` decimal(8,2) NOT NULL,
  `FBEndPosition` decimal(8,2) NOT NULL,
  `SQStrokeSpeed` decimal(8,2) NOT NULL,
  `FBStrokeSpeed` decimal(8,2) NOT NULL,
  `SQDownPressure` decimal(8,2) NOT NULL,
  `FBDownPressure` decimal(8,2) NOT NULL,
  `SQFBUpPressure` decimal(8,2) NOT NULL,
  `Screenid` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Inkid` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `AlignmentPatternNumber` decimal(8,2) NOT NULL,
  `AlignmentPatternName` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ModifyTime` datetime NOT NULL,
  `tool_id` int(11) NOT NULL,
  `Alarm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `statuses`
--

INSERT INTO `statuses` (`id`, `recipe_id`, `Quantity`, `CreateTime`, `State`, `WorkThickness`, `SnapOff`, `PrintTimes`, `LowSpeedDownHeight`, `LowSpeedDownSpeed`, `SQStrokeDelay`, `SQUpDelay`, `TableDownDelay`, `CleaningTimes`, `ChucksTimes`, `ScreenSize`, `SQStartPosition`, `SQEndPosition`, `FBStartPosition`, `FBEndPosition`, `SQStrokeSpeed`, `FBStrokeSpeed`, `SQDownPressure`, `FBDownPressure`, `SQFBUpPressure`, `Screenid`, `Inkid`, `AlignmentPatternNumber`, `AlignmentPatternName`, `ModifyTime`, `tool_id`, `Alarm`) VALUES
(1, 2, 71, '2018-03-06 21:47:02', 0, '3.00', '45.00', '6.00', '7.00', '8.00', '9.00', '0.00', '1.00', '2.00', '3.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4', '4', '4.00', '3', '2018-03-15 14:44:02', 2, 0),
(2, 2, 771, '2018-03-06 21:48:13', 0, '0.30', '0.45', '6.00', '7.00', '8.00', '9.00', '0.00', '1.00', '2.00', '3.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4', '4', '4.00', '3', '2018-03-16 19:15:52', 2, 0),
(3, 3, 28930, '2018-03-08 19:30:55', 2, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '0.00', '', '2018-03-08 20:07:50', 1, 3);

-- --------------------------------------------------------

--
-- 資料表結構 `tools`
--

CREATE TABLE `tools` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ip` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `tools`
--

INSERT INTO `tools` (`id`, `Name`, `Ip`) VALUES
(1, 'DEMO1', NULL),
(2, 'DEMO2', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `alarm_codes`
--
ALTER TABLE `alarm_codes`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- 資料表索引 `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `alarm_codes`
--
ALTER TABLE `alarm_codes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- 使用資料表 AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表 AUTO_INCREMENT `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表 AUTO_INCREMENT `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表 AUTO_INCREMENT `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

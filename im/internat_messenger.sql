-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- 主機: localhost:3306
-- 產生時間： 2018 年 03 月 28 日 15:54
-- 伺服器版本: 5.6.39-cll-lve
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `internat_messenger`
--

-- --------------------------------------------------------

--
-- 資料表結構 `moneyhistory`
--

CREATE TABLE `moneyhistory` (
  `id` int(255) NOT NULL,
  `userid` text COLLATE utf8_unicode_ci NOT NULL,
  `howtouse` text COLLATE utf8_unicode_ci,
  `subuse` text COLLATE utf8_unicode_ci,
  `inorout` text COLLATE utf8_unicode_ci NOT NULL,
  `money` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `record` text COLLATE utf8_unicode_ci,
  `year` text COLLATE utf8_unicode_ci NOT NULL,
  `month` text COLLATE utf8_unicode_ci NOT NULL,
  `day` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `moneyhistory`
--

INSERT INTO `moneyhistory` (`id`, `userid`, `howtouse`, `subuse`, `inorout`, `money`, `description`, `record`, `year`, `month`, `day`) VALUES
(29, 'Ua26fb8ffde57c999926d03b22f8b7434', NULL, NULL, 'in', NULL, NULL, 'cab704ba75', '2018', '2', '17'),
(28, 'Ua26fb8ffde57c999926d03b22f8b7434', NULL, NULL, 'in', NULL, NULL, 'b6fca51a6c', '2018', '2', '17'),
(98, 'U078c4858e8456e3e52e1f4fc90254e70', '其他收入', NULL, 'in', '632', NULL, 'b6cba80207', '2018', '2', '26'),
(26, 'U2f9a518831f3cad25d9d912564547ecb', NULL, NULL, 'in', NULL, NULL, '7cf4177e40', '2018', '2', '17'),
(27, 'U2e2700b5c586ae27b7904802bd6c5b8c', '其他收入', NULL, 'in', NULL, NULL, '7fc04e79a8', '2018', '2', '17'),
(25, 'U9e9ee16886c74444fafe2660b520668c', NULL, NULL, 'in', NULL, NULL, 'cfaf730b80', '2018', '2', '17'),
(23, 'U9e9ee16886c74444fafe2660b520668c', '食品酒水支出', NULL, 'out', '200', NULL, '0f58da731e', '2018', '2', '17'),
(53, 'U1a14d3d120eb1348b3eb7c3a5a71e0d5', '其他收入', NULL, 'in', NULL, NULL, '59f33c7d68', '2018', '2', '19'),
(21, 'U9e9ee16886c74444fafe2660b520668c', NULL, NULL, 'in', NULL, NULL, 'f8fa3adbf6', '2018', '2', '17'),
(30, 'Ua26fb8ffde57c999926d03b22f8b7434', NULL, NULL, 'in', NULL, NULL, 'dffd35cca5', '2018', '2', '17'),
(31, 'Ua26fb8ffde57c999926d03b22f8b7434', '工作收入', NULL, 'out', '1000', NULL, '3bed8c96c5', '2018', '2', '17'),
(32, 'U0975e518c713b9a66831ab7496670eba', '工作收入', NULL, 'in', NULL, NULL, 'e1c8cea52a', '2018', '2', '17'),
(33, 'U0975e518c713b9a66831ab7496670eba', '工作收入', NULL, 'in', '5000', NULL, 'c306727e41', '2018', '2', '17'),
(34, 'U0975e518c713b9a66831ab7496670eba', NULL, NULL, 'out', NULL, NULL, '0d8e26c1c4', '2018', '2', '17'),
(51, 'Ue2c16050aac96b870eecc7a8891039b8', '其他收入', NULL, 'in', '1500', NULL, '0b9d4554f2', '2018', '2', '18'),
(36, 'U078c4858e8456e3e52e1f4fc90254e70', '其他收入', NULL, 'in', '3000', NULL, '2fcb3f6527', '2018', '2', '18'),
(37, 'Ua53ad9c3efc2828ec1f649b64dc2ea6b', NULL, NULL, 'in', NULL, NULL, '01da71ca8c', '2018', '2', '18'),
(38, 'Ua53ad9c3efc2828ec1f649b64dc2ea6b', '工作收入', NULL, 'out', NULL, NULL, 'f8c91ed16c', '2018', '2', '18'),
(39, 'Ud2b5f36322b7583e3ea292bb72c9a012', '食品酒水支出', NULL, 'out', NULL, NULL, '4bfb316fa4', '2018', '2', '18'),
(40, 'U1134bd0925fa2f2af2305de8fe3973e8', NULL, NULL, 'in', NULL, NULL, 'a457373fab', '2018', '2', '18'),
(41, 'U1134bd0925fa2f2af2305de8fe3973e8', '食品酒水支出', NULL, 'out', NULL, NULL, 'aeb64a5cbf', '2018', '2', '18'),
(42, 'U1134bd0925fa2f2af2305de8fe3973e8', '食品酒水支出', NULL, 'out', '300', NULL, 'c5e294b48a', '2018', '2', '18'),
(43, 'U1134bd0925fa2f2af2305de8fe3973e8', NULL, NULL, 'in', NULL, NULL, '8693ad0126', '2018', '2', '18'),
(44, 'U1134bd0925fa2f2af2305de8fe3973e8', NULL, NULL, 'in', NULL, NULL, '72eb64fcfc', '2018', '2', '18'),
(52, 'Ue2c16050aac96b870eecc7a8891039b8', '行車交通支出', NULL, 'out', '200', NULL, 'ed5283c0f7', '2018', '2', '18'),
(46, 'U253330e077ac44a65b2f020385d44dcc', '休閒娛樂支出', NULL, 'out', '920', NULL, 'def5dba2d8', '2018', '2', '18'),
(47, 'U97a361d3b3a3b88396eeaf140f558f20', '工作收入', NULL, 'in', NULL, NULL, '62f2426bc8', '2018', '2', '18'),
(48, 'Ub3064a0ca186df76488e3808e3f462ae', '工作收入', NULL, 'in', '1000', NULL, 'e87214457a', '2018', '2', '18'),
(49, 'Ub3064a0ca186df76488e3808e3f462ae', '其他支出', '咖啡', 'out', '50', NULL, '36425c6138', '2018', '2', '18'),
(50, 'U9e9ee16886c74444fafe2660b520668c', '食品酒水支出', NULL, 'out', '120', NULL, '796fa2d4dd', '2018', '2', '18'),
(54, 'U1a14d3d120eb1348b3eb7c3a5a71e0d5', NULL, NULL, 'out', '[now]', NULL, 'e33d0e1f08', '2018', '2', '19'),
(83, 'Ueed65fdbd6c510b759c03299581716ac', '食品酒水支出', NULL, 'out', '274', NULL, 'cb76ca208f', '2018', '2', '23'),
(56, 'U9e9ee16886c74444fafe2660b520668c', '食品酒水支出', NULL, 'out', '110', NULL, '19a0aa0083', '2018', '2', '19'),
(57, 'U9e9ee16886c74444fafe2660b520668c', NULL, NULL, 'in', NULL, NULL, '555b395024', '2018', '2', '19'),
(58, 'U9e9ee16886c74444fafe2660b520668c', '休閒娛樂支出', NULL, 'out', '1150', NULL, '785bcf2c42', '2018', '2', '19'),
(59, 'U253330e077ac44a65b2f020385d44dcc', '食品酒水支出', NULL, 'out', '咖啡 45', NULL, '06e0710428', '2018', '2', '19'),
(60, 'U253330e077ac44a65b2f020385d44dcc', '其他支出', '誠品買書 信用卡 1451', 'out', '1451', NULL, '6729a4e9fc', '2018', '2', '19'),
(61, 'U70d3edd1c5d47691decc4a9bda0e7624', '工作收入', NULL, 'in', '10000', NULL, '33d79aca20', '2018', '2', '20'),
(62, 'U70d3edd1c5d47691decc4a9bda0e7624', '工作收入', NULL, 'in', 'Dgud do', NULL, 'e26ab9dadf', '2018', '2', '20'),
(63, 'U70d3edd1c5d47691decc4a9bda0e7624', '食品酒水支出', NULL, 'out', '922337203685477580789999999999999999999', NULL, '38044b59fe', '2018', '2', '20'),
(64, 'U70d3edd1c5d47691decc4a9bda0e7624', '其他支出', NULL, 'out', NULL, NULL, '5589fdf2db', '2018', '2', '20'),
(65, 'U253330e077ac44a65b2f020385d44dcc', '其他支出', '喬治傑生名片夾', 'out', '999', NULL, '31faa33241', '2018', '2', '20'),
(66, 'U253330e077ac44a65b2f020385d44dcc', '食品酒水支出', NULL, 'out', '125', NULL, '8e8c71661a', '2018', '2', '20'),
(67, 'U253330e077ac44a65b2f020385d44dcc', '食品酒水支出', NULL, 'out', '220', NULL, 'c34708eba2', '2018', '2', '20'),
(68, 'U253330e077ac44a65b2f020385d44dcc', '休閒娛樂支出', NULL, 'out', NULL, NULL, 'a821a13891', '2018', '2', '20'),
(69, 'U6b723b60f925c31c8545abcbcb1a7bc7', '工作收入', NULL, 'in', '0', NULL, 'a6614a447a', '2018', '2', '20'),
(70, 'U4bbe0987e3771116ac5455618644cbb5', NULL, NULL, 'in', NULL, NULL, '3a0982fede', '2018', '2', '21'),
(71, 'U4bbe0987e3771116ac5455618644cbb5', '食品酒水支出', NULL, 'out', '98', NULL, 'aecf4ff2fc', '2018', '2', '21'),
(72, 'U4e62144690220252b8d2eb8730ab1313', '其他收入', NULL, 'in', '30100', NULL, 'c0828205f7', '2018', '2', '21'),
(73, 'U4e62144690220252b8d2eb8730ab1313', '食品酒水支出', NULL, 'out', '230', NULL, '041a2ba21a', '2018', '2', '21'),
(74, 'U4e62144690220252b8d2eb8730ab1313', '其他支出', '10000', 'out', '10000', NULL, '7770de94d5', '2018', '2', '21'),
(82, 'Ueed65fdbd6c510b759c03299581716ac', NULL, NULL, 'in', NULL, NULL, '9de5365118', '2018', '2', '23'),
(76, 'U4e62144690220252b8d2eb8730ab1313', '休閒娛樂支出', NULL, 'out', '400', NULL, 'ca2e56a193', '2018', '2', '21'),
(77, 'U4e62144690220252b8d2eb8730ab1313', '其他支出', '11300', 'out', '11300', NULL, '5b50ae836d', '2018', '2', '22'),
(78, 'U9e9ee16886c74444fafe2660b520668c', '食品酒水支出', NULL, 'out', '110', NULL, 'ca000d7697', '2018', '2', '22'),
(79, 'U9e9ee16886c74444fafe2660b520668c', '其他收入', NULL, 'in', '1000', NULL, '5bea3bea51', '2018', '2', '22'),
(80, 'U4e62144690220252b8d2eb8730ab1313', '食品酒水支出', NULL, 'out', '130', NULL, 'eae6e5b04a', '2018', '2', '22'),
(81, 'U4e62144690220252b8d2eb8730ab1313', '食品酒水支出', NULL, 'out', '15', NULL, '6e7f3c7452', '2018', '2', '22'),
(84, 'U4e62144690220252b8d2eb8730ab1313', '食品酒水支出', NULL, 'out', '55', NULL, 'e66c442049', '2018', '2', '23'),
(85, 'U601ce7a16a8d052738bd6ccbe5628add', '食品酒水支出', NULL, 'out', '90', NULL, '08fa122050', '2018', '2', '23'),
(86, 'U601ce7a16a8d052738bd6ccbe5628add', NULL, NULL, 'out', NULL, NULL, 'deaa2567fb', '2018', '2', '23'),
(87, 'U9a9f12f26c7805e953c52b20602ae2ec', '食品酒水支出', NULL, 'out', '95', NULL, 'f4cf1f47df', '2018', '2', '23'),
(88, 'U4e62144690220252b8d2eb8730ab1313', '其他收入', NULL, 'in', '700', NULL, 'c82f3573dd', '2018', '2', '23'),
(89, 'U9e9ee16886c74444fafe2660b520668c', '食品酒水支出', NULL, 'out', '90', NULL, 'b76a4a9835', '2018', '2', '23'),
(90, 'Ufe9d2d04be1ab4aa06f21a5f143c0fd3', '工作收入', NULL, 'in', '999999', NULL, '270c31408a', '2018', '2', '23'),
(91, 'U4e62144690220252b8d2eb8730ab1313', '食品酒水支出', NULL, 'out', '535', NULL, '7721fdfd69', '2018', '2', '23'),
(92, 'U4e62144690220252b8d2eb8730ab1313', NULL, NULL, 'in', NULL, NULL, 'c503fa7fbe', '2018', '2', '24'),
(93, 'U4e62144690220252b8d2eb8730ab1313', NULL, NULL, 'out', NULL, NULL, '7d2ef64b85', '2018', '2', '24'),
(94, 'U4e62144690220252b8d2eb8730ab1313', '食品酒水支出', NULL, 'out', '105', NULL, '8f6323e326', '2018', '2', '24'),
(95, 'U4e62144690220252b8d2eb8730ab1313', '食品酒水支出', NULL, 'out', '180', NULL, '5b77e0b50c', '2018', '2', '24'),
(96, 'Ufebfb69d632f5c05c1f298d89c29fe36', '其他收入', NULL, 'in', '615', NULL, '2452b2faff', '2018', '2', '26'),
(97, 'Ufebfb69d632f5c05c1f298d89c29fe36', '食品酒水支出', NULL, 'out', '50', NULL, 'c75bd77f09', '2018', '2', '26'),
(99, 'U078c4858e8456e3e52e1f4fc90254e70', '食品酒水支出', NULL, 'out', '50', NULL, '27e13f2c83', '2018', '2', '26'),
(100, 'U078c4858e8456e3e52e1f4fc90254e70', '其他支出', '學校用途', 'out', '12', NULL, 'c1700f0d3a', '2018', '2', '26'),
(101, 'U9e9ee16886c74444fafe2660b520668c', '食品酒水支出', NULL, 'out', '40', NULL, '831ffa1a54', '2018', '2', '26'),
(102, 'U4e62144690220252b8d2eb8730ab1313', '食品酒水支出', NULL, 'out', '185', NULL, '5f69924212', '2018', '2', '26'),
(103, 'Ufebfb69d632f5c05c1f298d89c29fe36', '行車交通支出', NULL, 'out', '100', NULL, 'afa1101c56', '2018', '2', '26'),
(104, 'U4e62144690220252b8d2eb8730ab1313', '食品酒水支出', NULL, 'out', '135', NULL, '19365bbdf3', '2018', '2', '26'),
(105, 'U078c4858e8456e3e52e1f4fc90254e70', '食品酒水支出', NULL, 'out', '15', NULL, '7f457954d3', '2018', '2', '27'),
(106, 'U078c4858e8456e3e52e1f4fc90254e70', '食品酒水支出', NULL, 'out', '20', NULL, 'e6af1c00a7', '2018', '2', '27'),
(107, 'Ufebfb69d632f5c05c1f298d89c29fe36', '食品酒水支出', NULL, 'out', '50', NULL, 'dc8d563de1', '2018', '2', '27'),
(108, 'U4e62144690220252b8d2eb8730ab1313', '食品酒水支出', NULL, 'out', '0', NULL, '3e2a4f8d86', '2018', '2', '27'),
(109, 'U4e62144690220252b8d2eb8730ab1313', '其他支出', '學雜', 'out', '560', NULL, '39de4e906b', '2018', '2', '27'),
(110, 'U4e62144690220252b8d2eb8730ab1313', '其他支出', '信用卡', 'out', '5200', NULL, '779cf81854', '2018', '2', '27'),
(111, 'U078c4858e8456e3e52e1f4fc90254e70', '其他收入', NULL, 'in', '100', NULL, '98b15d2832', '2018', '2', '27'),
(112, 'U078c4858e8456e3e52e1f4fc90254e70', NULL, NULL, 'out', NULL, NULL, 'b3408b83cb', '2018', '2', '27'),
(113, 'U078c4858e8456e3e52e1f4fc90254e70', '食品酒水支出', NULL, 'out', '50', NULL, '52ec79edec', '2018', '2', '27'),
(114, 'U078c4858e8456e3e52e1f4fc90254e70', '行車交通支出', NULL, 'out', '60', NULL, '9ea3aade16', '2018', '2', '27'),
(115, 'U4e62144690220252b8d2eb8730ab1313', '食品酒水支出', NULL, 'out', '145', NULL, '9735d4d98b', '2018', '2', '27'),
(116, 'U90c2a73b78eab2f364ebecd59ac4609b', '其他收入', NULL, 'in', '10000', NULL, 'f89a29a264', '2018', '2', '28'),
(117, 'U90c2a73b78eab2f364ebecd59ac4609b', '食品酒水支出', NULL, 'out', '65', NULL, 'd5c85bf994', '2018', '2', '28'),
(118, 'U9aef6dd46ae75549c4322c577b67c2f9', NULL, NULL, 'in', NULL, NULL, 'ecae0f287c', '2018', '2', '28'),
(119, 'U9aef6dd46ae75549c4322c577b67c2f9', NULL, NULL, 'out', NULL, NULL, '2087236a8c', '2018', '2', '28'),
(120, 'U078c4858e8456e3e52e1f4fc90254e70', '其他支出', '多餘', 'out', '206', NULL, 'd14215b8ff', '2018', '2', '28'),
(121, 'U078c4858e8456e3e52e1f4fc90254e70', '其他收入', NULL, 'in', '200', NULL, '295668588c', '2018', '2', '28'),
(122, 'U078c4858e8456e3e52e1f4fc90254e70', '行車交通支出', NULL, 'out', '100', NULL, 'a852aec75f', '2018', '3', '1'),
(123, 'U078c4858e8456e3e52e1f4fc90254e70', '食品酒水支出', NULL, 'out', '50', NULL, '01ccd24b61', '2018', '3', '1'),
(124, 'U078c4858e8456e3e52e1f4fc90254e70', '食品酒水支出', NULL, 'out', '30', NULL, 'c13170efa1', '2018', '3', '1'),
(125, 'U4e62144690220252b8d2eb8730ab1313', '食品酒水支出', NULL, 'out', '165', NULL, '82bc067306', '2018', '3', '1'),
(126, 'U078c4858e8456e3e52e1f4fc90254e70', '食品酒水支出', NULL, 'out', '12', NULL, 'afce2e718b', '2018', '3', '1'),
(127, 'U078c4858e8456e3e52e1f4fc90254e70', '食品酒水支出', NULL, 'out', '111', NULL, 'edd2ab905f', '2018', '3', '2'),
(128, 'U078c4858e8456e3e52e1f4fc90254e70', '其他支出', '借媽媽', 'out', '100', NULL, '2a1126e36c', '2018', '3', '2'),
(129, 'U078c4858e8456e3e52e1f4fc90254e70', '行車交通支出', NULL, 'out', '100', NULL, '6ad5ac66c6', '2018', '3', '2'),
(130, 'U078c4858e8456e3e52e1f4fc90254e70', '其他收入', NULL, 'in', '100', NULL, 'dfc2a45026', '2018', '3', '2'),
(131, 'Ufebfb69d632f5c05c1f298d89c29fe36', '其他收入', NULL, 'in', '200', NULL, '7a612d404c', '2018', '3', '2'),
(132, 'Ufebfb69d632f5c05c1f298d89c29fe36', '食品酒水支出', NULL, 'out', '39', NULL, '655ce89ee6', '2018', '3', '2'),
(133, 'Ufebfb69d632f5c05c1f298d89c29fe36', '行車交通支出', NULL, 'out', '100', NULL, '0d242da97c', '2018', '3', '2'),
(134, 'Ufebfb69d632f5c05c1f298d89c29fe36', '食品酒水支出', NULL, 'out', '28', NULL, '975e917364', '2018', '3', '2'),
(135, 'U078c4858e8456e3e52e1f4fc90254e70', '其他支出', '員生社', 'out', '100', NULL, 'ece83892be', '2018', '3', '2'),
(136, 'U078c4858e8456e3e52e1f4fc90254e70', '食品酒水支出', NULL, 'out', '65', NULL, '84505f0be0', '2018', '3', '3'),
(137, 'U078c4858e8456e3e52e1f4fc90254e70', '其他收入', NULL, 'in', '332', NULL, '154b86860d', '2018', '3', '3'),
(138, 'U078c4858e8456e3e52e1f4fc90254e70', '其他收入', NULL, 'in', '10', NULL, 'e8f29f2eed', '2018', '3', '3'),
(139, 'Ufebfb69d632f5c05c1f298d89c29fe36', '其他收入', NULL, 'in', '200', NULL, '73b2c1fd75', '2018', '3', '5'),
(140, 'Ufebfb69d632f5c05c1f298d89c29fe36', '食品酒水支出', NULL, 'out', '30', NULL, 'fbb1e33624', '2018', '3', '5'),
(141, 'Uf945114efe46de5263e70bd36ea84e3c', '其他收入', NULL, 'in', '[now]', NULL, '099fed4ee9', '2018', '3', '15'),
(142, 'U95828cdba19b2f9394f1e9b11f9438d5', '工作收入', NULL, 'in', NULL, NULL, '45887eb78f', '2018', '3', '15'),
(143, 'Ud8c16a5c85693acbae1d58fead3dcea1', '工作收入', NULL, 'in', NULL, NULL, 'fb2c63e6c2', '2018', '3', '15'),
(144, 'U387e447c67d1d55c381136e78e7fcc03', '工作收入', NULL, 'in', NULL, NULL, '42b0b07f29', '2018', '3', '15'),
(145, 'Uf12ca427cb41b099d3c0c332bd306bff', NULL, NULL, 'in', NULL, NULL, 'c7029ba69f', '2018', '3', '15'),
(146, 'U95828cdba19b2f9394f1e9b11f9438d5', NULL, NULL, 'in', NULL, NULL, '24a63816b7', '2018', '3', '15'),
(147, 'Uf12ca427cb41b099d3c0c332bd306bff', '工作收入', NULL, 'in', '5000', NULL, 'fda48f43b0', '2018', '3', '15'),
(148, 'U5ce44f82d2b8be9eea7e327777149b2e', '工作收入', NULL, 'in', NULL, NULL, 'a0cdb16f21', '2018', '3', '15'),
(149, 'U677ea9cbb1fba5459fe5e699e72c54de', NULL, NULL, 'in', NULL, NULL, '1fdc929218', '2018', '3', '15'),
(150, 'U677ea9cbb1fba5459fe5e699e72c54de', '行車交通支出', NULL, 'out', '[now]', NULL, '9dfec032f6', '2018', '3', '15'),
(151, 'U677ea9cbb1fba5459fe5e699e72c54de', NULL, NULL, 'in', NULL, NULL, '00ace34d55', '2018', '3', '16');

-- --------------------------------------------------------

--
-- 資料表結構 `moneyuser`
--

CREATE TABLE `moneyuser` (
  `id` int(255) NOT NULL,
  `userid` text COLLATE utf8_unicode_ci NOT NULL,
  `nickname` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `sex` text COLLATE utf8_unicode_ci NOT NULL,
  `nowmoney` text COLLATE utf8_unicode_ci NOT NULL,
  `record` text COLLATE utf8_unicode_ci,
  `mode` text COLLATE utf8_unicode_ci,
  `invite` text COLLATE utf8_unicode_ci,
  `inviter` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `moneyuser`
--

INSERT INTO `moneyuser` (`id`, `userid`, `nickname`, `email`, `sex`, `nowmoney`, `record`, `mode`, `invite`, `inviter`) VALUES
(3, 'U078c4858e8456e3e52e1f4fc90254e7', 'Stan', 'lol97554@gmail.com', '男', '3293', NULL, NULL, '26fe4', 'sdnk'),
(4, 'U9e9ee16886c74444fafe2660b520668c', 'SA', 'jeremychang919@gmail.com', '男', '-11280', NULL, '', NULL, NULL),
(5, 'U2f9a518831f3cad25d9d912564547ecb', 'Ski', 'Ski@socialweb.com.tw', '男', '0', '7cf4177e40', NULL, NULL, NULL),
(6, 'U2e2700b5c586ae27b7904802bd6c5b8c', '晴晴', 'saseminy@gmail.com', '女', '0', '7fc04e79a8', NULL, NULL, NULL),
(7, 'Ua26fb8ffde57c999926d03b22f8b7434', '蘿拉', 'skypiea2010@gmail.com', '女', '0', NULL, '', NULL, NULL),
(11, 'U4e62144690220252b8d2eb8730ab1313', 'DK', 'a0975725639@gmail.com', '男', '1460', NULL, '', NULL, NULL),
(9, 'U0975e518c713b9a66831ab7496670eba', 'May', 'ar841011@yahoo.com.tw', '女', '5000', '0d8e26c1c4', '', NULL, NULL),
(10, 'U72c3a6447ace48825d93c2eab70981ea', '納豆吳', 'dht141414@gmail.com', '男', '0', NULL, NULL, NULL, NULL),
(12, 'Ua53ad9c3efc2828ec1f649b64dc2ea6b', '都市野人', 'mineral0629@gmail.com', '男', '0', 'f8c91ed16c', NULL, NULL, NULL),
(13, 'Ud2b5f36322b7583e3ea292bb72c9a012', '娟', 'yahorng@hotmail.com', '女', '0', '4bfb316fa4', NULL, NULL, NULL),
(14, 'U1134bd0925fa2f2af2305de8fe3973e8', 'kevinaalin', 'kevinaa@seed.net.tw', '男', '1000', NULL, NULL, NULL, NULL),
(15, 'U253330e077ac44a65b2f020385d44dcc', '維也納奇異果', 'xavierkiwi@gmail.com', '男', '-3715', 'a821a13891', NULL, NULL, NULL),
(16, 'U97a361d3b3a3b88396eeaf140f558f20', 'Carol', 'spp3990@gmail.com', '女', '0', '62f2426bc8', NULL, NULL, NULL),
(17, 'Ub3064a0ca186df76488e3808e3f462ae', 'Amanda ', 'skylightshop321@gmail.com', '女', '950', NULL, '', NULL, NULL),
(18, 'Ue2c16050aac96b870eecc7a8891039b8', 'Ethan', 'ethanlee1101@gmail.com', '男', '1300', NULL, '', NULL, NULL),
(19, 'U1a14d3d120eb1348b3eb7c3a5a71e0d5', 'Andy', 'lfu0327@gmail.com', '男', '0', NULL, '', NULL, NULL),
(20, 'U1be84467bdbfb20c7aa6d8a73020e50c', 'Khsu', 'Kh@cloudmii.com', '男', '0', NULL, NULL, NULL, NULL),
(21, 'U70d3edd1c5d47691decc4a9bda0e7624', 'F', 'Qq@qq.com', '男', '-9.2233720368548E+38', '5589fdf2db', NULL, NULL, NULL),
(22, 'U6b723b60f925c31c8545abcbcb1a7bc7', '眼睛', 'crab992010@gmail.com', '男', '0', NULL, '', NULL, NULL),
(23, 'U4bbe0987e3771116ac5455618644cbb5', '公主', 'Eyes1117@hotmail.com', '女', '-98', NULL, '', NULL, NULL),
(24, 'Ueed65fdbd6c510b759c03299581716ac', 'Gina', 'wg98212@yahoo.com.tw', '女', '-274', NULL, '', NULL, NULL),
(25, 'U601ce7a16a8d052738bd6ccbe5628add', 'Axtol', 'Annieya814@gmail.com', '女', '-180', 'deaa2567fb', '', NULL, NULL),
(26, 'U9a9f12f26c7805e953c52b20602ae2ec', 'shiung', 'annie-shiung@yahoo.com.tw', '女', '-95', NULL, '', NULL, NULL),
(27, 'Ufe9d2d04be1ab4aa06f21a5f143c0fd3', 'Rick', 'Aaa@aaa.me', '男', '999999', NULL, '', NULL, NULL),
(28, 'U3b46a4acedc6d8b0414f3e5db123b4f6', 'Vera', 'veralimlim@gmail.com', '女', '0', NULL, NULL, NULL, NULL),
(29, 'Ufebfb69d632f5c05c1f298d89c29fe36', '賴昱辰', 'demo@127.0.0.1', '女', '618', NULL, '', NULL, NULL),
(30, 'U90c2a73b78eab2f364ebecd59ac4609b', '球球', 'ballball0612@yahoo.com.tw', '女', '9875', NULL, '', NULL, NULL),
(31, 'U9aef6dd46ae75549c4322c577b67c2f9', '阿德', 'faxx5168@gmail.com', '男', '0', NULL, NULL, NULL, NULL),
(32, 'U9aef6dd46ae75549c4322c577b67c2f9', '阿德', 'faxx5168@gmail.com', '男', '0', '2087236a8c', NULL, NULL, NULL),
(33, 'Uf945114efe46de5263e70bd36ea84e3c', '胡力仁', 'larry840506@gmail.com', '男', '0', NULL, '', NULL, NULL),
(34, 'U5ce44f82d2b8be9eea7e327777149b2e', 'Test123', 'Test123', '女', '0', 'a0cdb16f21', 'updatemoney', NULL, NULL),
(35, 'Uf12ca427cb41b099d3c0c332bd306bff', 'Jackal', 'jackalma630821@gmail.com', '男', '5000', NULL, '', NULL, NULL),
(36, 'U95828cdba19b2f9394f1e9b11f9438d5', 'Jojo', 'Jojo831001@gmail.com', '女', '0', '24a63816b7', '', NULL, NULL),
(37, 'Ud8c16a5c85693acbae1d58fead3dcea1', '小高', 'mathew@materialworld.com.tw', '男', '0', NULL, NULL, NULL, NULL),
(38, 'Ud8c16a5c85693acbae1d58fead3dcea1', '小高', 'mathew@materialworld.com.tw', '男', '0', 'fb2c63e6c2', 'updatemoney', NULL, NULL),
(39, 'U387e447c67d1d55c381136e78e7fcc03', '上珍', 'a82862332@yahoo.com.tw', '女', '0', '42b0b07f29', 'updatemoney', NULL, NULL),
(40, 'U677ea9cbb1fba5459fe5e699e72c54de', '囂張', 'osca1689@yahoo.com.tw', '男', '0', '00ace34d55', '', NULL, NULL),
(41, 'U078c4858e8456e3e52e1f4fc90254e70', 'Stan', 'Tesr', '男', '0', NULL, NULL, NULL, NULL);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `moneyhistory`
--
ALTER TABLE `moneyhistory`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `moneyuser`
--
ALTER TABLE `moneyuser`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `moneyhistory`
--
ALTER TABLE `moneyhistory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- 使用資料表 AUTO_INCREMENT `moneyuser`
--
ALTER TABLE `moneyuser`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2013 at 02:59 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spaceapps`

-- CREATE DATABASE `spaceapps` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
-- USE `spaceapps`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `finding_id` int(20) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `finding_id`, `comment`, `user_id`, `date`) VALUES
(1, 1, 'ksjldkjslkjflkjf', 1, '2013-08-23'),
(2, 1, 'oiusohuhfsuhfi', 1, '2013-08-23'),
(5, 1, 'lkmdfkljdklnkl', 1, '2013-04-18 01:55:43'),
(4, 1, 'lkmdfkljdklnkl', 1, '2013-04-18 12:03:08'),
(6, 1, 'Bla bla bla', 1, '2013-04-18 02:05:45'),
(7, 1, 'jldfhkjdhkj', 1, '2013-04-18 02:20:01'),
(8, 1, 'jehfhdjhfdkj', 1, '2013-04-18 02:20:29'),
(9, 1, 'lshjkhdkj', 1, '2013-04-18 02:21:58'),
(10, 1, 'jkdhfd', 1, '2013-04-18 02:22:27'),
(11, 1, 'jkdhfd', 1, '2013-04-18 02:26:52'),
(12, 1, 'jkdhfd', 1, '2013-04-18 02:26:55'),
(13, 1, 'jkdhfd', 1, '2013-04-18 02:26:57'),
(14, 1, 'jkdhfd', 1, '2013-04-18 02:26:57'),
(15, 1, 'jkdhfd', 1, '2013-04-18 02:27:13'),
(16, 1, 'jkdhfd', 1, '2013-04-18 02:27:16'),
(17, 1, 'jdkhkjdhjkd', 1, '2013-04-18 02:28:10'),
(18, 1, 'test test test', 1, '2013-04-18 02:29:04'),
(19, 2, 'Blah blah 9898', 1, '2013-04-19 05:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `code` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=251 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `country`) VALUES
(2, 'AF', 'AFGHANISTAN'),
(3, 'AX', 'Ã…LAND ISLANDS'),
(4, 'AL', 'ALBANIA'),
(5, 'DZ', 'ALGERIA'),
(6, 'AS', 'AMERICAN SAMOA'),
(7, 'AD', 'ANDORRA'),
(8, 'AO', 'ANGOLA'),
(9, 'AI', 'ANGUILLA'),
(10, 'AQ', 'ANTARCTICA'),
(11, 'AG', 'ANTIGUA AND BARBUDA'),
(12, 'AR', 'ARGENTINA'),
(13, 'AM', 'ARMENIA'),
(14, 'AW', 'ARUBA'),
(15, 'AU', 'AUSTRALIA'),
(16, 'AT', 'AUSTRIA'),
(17, 'AZ', 'AZERBAIJAN'),
(18, 'BS', 'BAHAMAS'),
(19, 'BH', 'BAHRAIN'),
(20, 'BD', 'BANGLADESH'),
(21, 'BB', 'BARBADOS'),
(22, 'BY', 'BELARUS'),
(23, 'BE', 'BELGIUM'),
(24, 'BZ', 'BELIZE'),
(25, 'BJ', 'BENIN'),
(26, 'BM', 'BERMUDA'),
(27, 'BT', 'BHUTAN'),
(28, 'BO', 'BOLIVIA, PLURINATIONAL STATE OF'),
(29, 'BQ', 'BONAIRE, SINT EUSTATIUS AND SABA'),
(30, 'BA', 'BOSNIA AND HERZEGOVINA'),
(31, 'BW', 'BOTSWANA'),
(32, 'BV', 'BOUVET ISLAND'),
(33, 'BR', 'BRAZIL'),
(34, 'IO', 'BRITISH INDIAN OCEAN TERRITORY'),
(35, 'BN', 'BRUNEI DARUSSALAM'),
(36, 'BG', 'BULGARIA'),
(37, 'BF', 'BURKINA FASO'),
(38, 'BI', 'BURUNDI'),
(39, 'KH', 'CAMBODIA'),
(40, 'CM', 'CAMEROON'),
(41, 'CA', 'CANADA'),
(42, 'CV', 'CAPE VERDE'),
(43, 'KY', 'CAYMAN ISLANDS'),
(44, 'CF', 'CENTRAL AFRICAN REPUBLIC'),
(45, 'TD', 'CHAD'),
(46, 'CL', 'CHILE'),
(47, 'CN', 'CHINA'),
(48, 'CX', 'CHRISTMAS ISLAND'),
(49, 'CC', 'COCOS (KEELING) ISLANDS'),
(50, 'CO', 'COLOMBIA'),
(51, 'KM', 'COMOROS'),
(52, 'CG', 'CONGO'),
(53, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE'),
(54, 'CK', 'COOK ISLANDS'),
(55, 'CR', 'COSTA RICA'),
(56, 'CI', 'CÃ”TE D''IVOIRE'),
(57, 'HR', 'CROATIA'),
(58, 'CU', 'CUBA'),
(59, 'CW', 'CURAÃ‡AO'),
(60, 'CY', 'CYPRUS'),
(61, 'CZ', 'CZECH REPUBLIC'),
(62, 'DK', 'DENMARK'),
(63, 'DJ', 'DJIBOUTI'),
(64, 'DM', 'DOMINICA'),
(65, 'DO', 'DOMINICAN REPUBLIC'),
(66, 'EC', 'ECUADOR'),
(67, 'EG', 'EGYPT'),
(68, 'SV', 'EL SALVADOR'),
(69, 'GQ', 'EQUATORIAL GUINEA'),
(70, 'ER', 'ERITREA'),
(71, 'EE', 'ESTONIA'),
(72, 'ET', 'ETHIOPIA'),
(73, 'FK', 'FALKLAND ISLANDS (MALVINAS)'),
(74, 'FO', 'FAROE ISLANDS'),
(75, 'FJ', 'FIJI'),
(76, 'FI', 'FINLAND'),
(77, 'FR', 'FRANCE'),
(78, 'GF', 'FRENCH GUIANA'),
(79, 'PF', 'FRENCH POLYNESIA'),
(80, 'TF', 'FRENCH SOUTHERN TERRITORIES'),
(81, 'GA', 'GABON'),
(82, 'GM', 'GAMBIA'),
(83, 'GE', 'GEORGIA'),
(84, 'DE', 'GERMANY'),
(85, 'GH', 'GHANA'),
(86, 'GI', 'GIBRALTAR'),
(87, 'GR', 'GREECE'),
(88, 'GL', 'GREENLAND'),
(89, 'GD', 'GRENADA'),
(90, 'GP', 'GUADELOUPE'),
(91, 'GU', 'GUAM'),
(92, 'GT', 'GUATEMALA'),
(93, 'GG', 'GUERNSEY'),
(94, 'GN', 'GUINEA'),
(95, 'GW', 'GUINEA-BISSAU'),
(96, 'GY', 'GUYANA'),
(97, 'HT', 'HAITI'),
(98, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS'),
(99, 'VA', 'HOLY SEE (VATICAN CITY STATE)'),
(100, 'HN', 'HONDURAS'),
(101, 'HK', 'HONG KONG'),
(102, 'HU', 'HUNGARY'),
(103, 'IS', 'ICELAND'),
(104, 'IN', 'INDIA'),
(105, 'ID', 'INDONESIA'),
(106, 'IR', 'IRAN, ISLAMIC REPUBLIC OF'),
(107, 'IQ', 'IRAQ'),
(108, 'IE', 'IRELAND'),
(109, 'IM', 'ISLE OF MAN'),
(110, 'IL', 'ISRAEL'),
(111, 'IT', 'ITALY'),
(112, 'JM', 'JAMAICA'),
(113, 'JP', 'JAPAN'),
(114, 'JE', 'JERSEY'),
(115, 'JO', 'JORDAN'),
(116, 'KZ', 'KAZAKHSTAN'),
(117, 'KE', 'KENYA'),
(118, 'KI', 'KIRIBATI'),
(119, 'KP', 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF'),
(120, 'KR', 'KOREA, REPUBLIC OF'),
(121, 'KW', 'KUWAIT'),
(122, 'KG', 'KYRGYZSTAN'),
(123, 'LA', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC'),
(124, 'LV', 'LATVIA'),
(125, 'LB', 'LEBANON'),
(126, 'LS', 'LESOTHO'),
(127, 'LR', 'LIBERIA'),
(128, 'LY', 'LIBYA'),
(129, 'LI', 'LIECHTENSTEIN'),
(130, 'LT', 'LITHUANIA'),
(131, 'LU', 'LUXEMBOURG'),
(132, 'MO', 'MACAO'),
(133, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF'),
(134, 'MG', 'MADAGASCAR'),
(135, 'MW', 'MALAWI'),
(136, 'MY', 'MALAYSIA'),
(137, 'MV', 'MALDIVES'),
(138, 'ML', 'MALI'),
(139, 'MT', 'MALTA'),
(140, 'MH', 'MARSHALL ISLANDS'),
(141, 'MQ', 'MARTINIQUE'),
(142, 'MR', 'MAURITANIA'),
(143, 'MU', 'MAURITIUS'),
(144, 'YT', 'MAYOTTE'),
(145, 'MX', 'MEXICO'),
(146, 'FM', 'MICRONESIA, FEDERATED STATES OF'),
(147, 'MD', 'MOLDOVA, REPUBLIC OF'),
(148, 'MC', 'MONACO'),
(149, 'MN', 'MONGOLIA'),
(150, 'ME', 'MONTENEGRO'),
(151, 'MS', 'MONTSERRAT'),
(152, 'MA', 'MOROCCO'),
(153, 'MZ', 'MOZAMBIQUE'),
(154, 'MM', 'MYANMAR'),
(155, 'NA', 'NAMIBIA'),
(156, 'NR', 'NAURU'),
(157, 'NP', 'NEPAL'),
(158, 'NL', 'NETHERLANDS'),
(159, 'NC', 'NEW CALEDONIA'),
(160, 'NZ', 'NEW ZEALAND'),
(161, 'NI', 'NICARAGUA'),
(162, 'NE', 'NIGER'),
(163, 'NG', 'NIGERIA'),
(164, 'NU', 'NIUE'),
(165, 'NF', 'NORFOLK ISLAND'),
(166, 'MP', 'NORTHERN MARIANA ISLANDS'),
(167, 'NO', 'NORWAY'),
(168, 'OM', 'OMAN'),
(169, 'PK', 'PAKISTAN'),
(170, 'PW', 'PALAU'),
(171, 'PS', 'PALESTINE, STATE OF'),
(172, 'PA', 'PANAMA'),
(173, 'PG', 'PAPUA NEW GUINEA'),
(174, 'PY', 'PARAGUAY'),
(175, 'PE', 'PERU'),
(176, 'PH', 'PHILIPPINES'),
(177, 'PN', 'PITCAIRN'),
(178, 'PL', 'POLAND'),
(179, 'PT', 'PORTUGAL'),
(180, 'PR', 'PUERTO RICO'),
(181, 'QA', 'QATAR'),
(182, 'RE', 'RÃ‰UNION'),
(183, 'RO', 'ROMANIA'),
(184, 'RU', 'RUSSIAN FEDERATION'),
(185, 'RW', 'RWANDA'),
(186, 'BL', 'SAINT BARTHÃ‰LEMY'),
(187, 'SH', 'SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA'),
(188, 'KN', 'SAINT KITTS AND NEVIS'),
(189, 'LC', 'SAINT LUCIA'),
(190, 'MF', 'SAINT MARTIN (FRENCH PART)'),
(191, 'PM', 'SAINT PIERRE AND MIQUELON'),
(192, 'VC', 'SAINT VINCENT AND THE GRENADINES'),
(193, 'WS', 'SAMOA'),
(194, 'SM', 'SAN MARINO'),
(195, 'ST', 'SAO TOME AND PRINCIPE'),
(196, 'SA', 'SAUDI ARABIA'),
(197, 'SN', 'SENEGAL'),
(198, 'RS', 'SERBIA'),
(199, 'SC', 'SEYCHELLES'),
(200, 'SL', 'SIERRA LEONE'),
(201, 'SG', 'SINGAPORE'),
(202, 'SX', 'SINT MAARTEN (DUTCH PART)'),
(203, 'SK', 'SLOVAKIA'),
(204, 'SI', 'SLOVENIA'),
(205, 'SB', 'SOLOMON ISLANDS'),
(206, 'SO', 'SOMALIA'),
(207, 'ZA', 'SOUTH AFRICA'),
(208, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS'),
(209, 'SS', 'SOUTH SUDAN'),
(210, 'ES', 'SPAIN'),
(211, 'LK', 'SRI LANKA'),
(212, 'SD', 'SUDAN'),
(213, 'SR', 'SURINAME'),
(214, 'SJ', 'SVALBARD AND JAN MAYEN'),
(215, 'SZ', 'SWAZILAND'),
(216, 'SE', 'SWEDEN'),
(217, 'CH', 'SWITZERLAND'),
(218, 'SY', 'SYRIAN ARAB REPUBLIC'),
(219, 'TW', 'TAIWAN, PROVINCE OF CHINA'),
(220, 'TJ', 'TAJIKISTAN'),
(221, 'TZ', 'TANZANIA, UNITED REPUBLIC OF'),
(222, 'TH', 'THAILAND'),
(223, 'TL', 'TIMOR-LESTE'),
(224, 'TG', 'TOGO'),
(225, 'TK', 'TOKELAU'),
(226, 'TO', 'TONGA'),
(227, 'TT', 'TRINIDAD AND TOBAGO'),
(228, 'TN', 'TUNISIA'),
(229, 'TR', 'TURKEY'),
(230, 'TM', 'TURKMENISTAN'),
(231, 'TC', 'TURKS AND CAICOS ISLANDS'),
(232, 'TV', 'TUVALU'),
(233, 'UG', 'UGANDA'),
(234, 'UA', 'UKRAINE'),
(235, 'AE', 'UNITED ARAB EMIRATES'),
(236, 'GB', 'UNITED KINGDOM'),
(237, 'US', 'UNITED STATES'),
(238, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS'),
(239, 'UY', 'URUGUAY'),
(240, 'UZ', 'UZBEKISTAN'),
(241, 'VU', 'VANUATU'),
(242, 'VE', 'VENEZUELA, BOLIVARIAN REPUBLIC OF'),
(243, 'VN', 'VIET NAM'),
(244, 'VG', 'VIRGIN ISLANDS, BRITISH'),
(245, 'VI', 'VIRGIN ISLANDS, U.S.'),
(246, 'WF', 'WALLIS AND FUTUNA'),
(247, 'EH', 'WESTERN SAHARA'),
(248, 'YE', 'YEMEN'),
(249, 'ZM', 'ZAMBIA'),
(250, 'ZW', 'ZIMBABWE');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

DROP TABLE IF EXISTS `favourites`;
CREATE TABLE IF NOT EXISTS `favourites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `finding_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `finding_id`, `user_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `findings`
--

DROP TABLE IF EXISTS `findings`;
CREATE TABLE IF NOT EXISTS `findings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `designation` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `creator` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `neo_score` int(5) NOT NULL,
  `discovery_date` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `ra` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `declination` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `v` float NOT NULL,
  `date_updated` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `nob` int(11) NOT NULL,
  `arc` int(11) NOT NULL,
  `h` int(11) NOT NULL,
  `viewpoint_type` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `ephemeris_interval` int(2) NOT NULL,
  `start_ephemerides` int(6) NOT NULL,
  `display_positions` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `display_motions` int(6) NOT NULL,
  `motion` enum('total','ra_decl','ra_sky') COLLATE utf8_unicode_ci NOT NULL,
  `output` enum('full','brief') COLLATE utf8_unicode_ci NOT NULL,
  `suppress_output` enum('never','sunrise_sunset','civil_tiwlight','nautical_twilight','astronomical_twilight') COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `findings`
--

INSERT INTO `findings` (`id`, `user_id`, `designation`, `creator`, `neo_score`, `discovery_date`, `ra`, `declination`, `v`, `date_updated`, `note`, `nob`, `arc`, `h`, `viewpoint_type`, `ephemeris_interval`, `start_ephemerides`, `display_positions`, `display_motions`, `motion`, `output`, `suppress_output`, `image`) VALUES
(1, 1, '{dkjflkjdflkdlkjf}', 'bojan', 0, '2013-04-17', '12', '22', 0, '2013-04-17', 'skldslkjdkls', 0, 0, 0, 'geocentric', 60, 0, 'sec', 0, 'total', 'full', 'never', ''),
(2, 2, '{87687687678687687}', '', 0, '0', '', '', 0, '0', '', 0, 0, 0, 'Geocentric', 0, 0, '0', 0, 'total', 'full', 'never', ''),
(4, 4, 'Bla112', 'bobi', 80, '2013-04-21', '12', '11', 12, '2013-04-21', 'Something I saw ', 5, 88, 78, 'observatory-300', 60, 0, 'min', 11, 'total', 'full', 'never', ''),
(5, 4, 'jhkjhkj', 'bobi', 87, '2013-04-21', '78', '787', 78, '2013-04-21', '97879', 6, 76, 7, 'geocentric', 60, 7, 'sec', 77, '', 'full', 'never', ''),
(6, 4, 'jhkjhkj', 'bobi', 87, '2013-04-21', '78', '787', 78, '2013-04-21', '97879', 6, 76, 7, 'geocentric', 60, 7, 'sec', 77, '', 'full', 'never', ''),
(7, 4, 'jhkjhkj', 'bobi', 87, '2013-04-21', '78', '787', 78, '2013-04-21', '97879', 6, 76, 7, 'geocentric', 60, 7, 'sec', 77, '', 'full', 'never', ''),
(8, 4, 'jhkjhkj', 'bobi', 87, '2013-04-21', '78', '787', 78, '2013-04-21', '97879', 6, 76, 7, 'geocentric', 60, 7, 'sec', 77, '', 'full', 'never', ''),
(9, 4, 'jhkjhkj', 'bobi', 87, '2013-04-21', '78', '787', 78, '2013-04-21', '97879', 6, 76, 7, 'geocentric', 60, 7, 'sec', 77, '', 'full', 'never', ''),
(10, 4, 'jhkjhkj', 'bobi', 87, '2013-04-21', '78', '787', 78, '2013-04-21', '97879', 6, 76, 7, 'geocentric', 60, 7, 'sec', 77, '', 'full', 'never', ''),
(11, 4, 'jhkjhkj', 'bobi', 77, '2013-04-21', '77', '78', 8, '2013-04-21', 'kjhkhkh', 7, 77, 7, 'geocentric', 60, 0, 'sec', 6, '', 'full', 'never', ''),
(12, 4, 'kjhkjh', 'bobi', 88, '2013-04-21', '78', '78', 77, '2013-04-21', 'hghgjgj', 7, 7, 88, 'geocentric', 60, 0, 'sec', 6, '', 'full', 'never', 'card.jpg'),
(13, 4, 'kjhkjh', 'bobi', 88, '2013-04-21', '78', '78', 77, '2013-04-21', 'hghgjgj', 7, 7, 88, 'geocentric', 60, 0, 'sec', 6, '', 'full', 'never', 'card.jpg'),
(14, 4, 'kjhkjh', 'bobi', 88, '2013-04-21', '78', '78', 77, '2013-04-21', 'hghgjgj', 7, 7, 88, 'geocentric', 60, 0, 'sec', 6, '', 'full', 'never', 'card.jpg'),
(15, 4, 'kjhkjh', 'bobi', 88, '2013-04-21', '78', '78', 77, '2013-04-21', 'hghgjgj', 7, 7, 88, 'geocentric', 60, 0, 'sec', 6, '', 'full', 'never', 'card.jpg'),
(19, 6, '6587687687', 'bhbh', 88, '2013-04-21', '98', '98', 98, '2013-04-21', 'hhbbjb', 3, 67, 6767, 'geocentric', 60, 0, 'sec', 78, '', 'full', 'never', 'card.jpg'),
(18, 6, '6587687687', 'bhbh', 88, '2013-04-21', '98', '98', 98, '2013-04-21', 'hhbbjb', 3, 67, 6767, 'geocentric', 60, 0, 'sec', 78, '', 'full', 'never', 'card.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rankings`
--

DROP TABLE IF EXISTS `rankings`;
CREATE TABLE IF NOT EXISTS `rankings` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `finding_id` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `rankings`
--

INSERT INTO `rankings` (`id`, `user_id`, `finding_id`) VALUES
(18, 6, 19),
(17, 4, 1),
(16, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `fname`, `lname`, `password`, `username`, `country`, `twitter`) VALUES
(1, 'druid0101@gmail.com', 'Bojan', 'Seirovski', '123456', 'bojan', 'DE', 'bojanseirovski'),
(2, 'admin@admin.com', 'Admin', 'Admin', '123456', 'admin', 'CA', ''),
(3, 'bbb@ggg.com', 'BBB', 'GGGG', '123456', 'bbbggg', 'MK', ''),
(4, 'bojanseirovski@gmail.com', 'Bobi', 'Seirovski', '123456', 'bobi', 'BT', 'bseirovski'),
(6, 'b_seirovski@yahoo.com', 'bihbib', 'bjbobj', '123456', 'bhbh', 'DE', 'hjbhjghjg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

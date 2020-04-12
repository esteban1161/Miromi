-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-04-2020 a las 16:38:01
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miromi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

-- CREATE TABLE `pais` (
  -- `id` bigint(20) UNSIGNED NOT NULL,
  -- `nombrePais` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  -- `indicativo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pais`
--
Truncate table pais;
INSERT INTO `pais` (`id`, `nombrePais`, `indicativo`) VALUES
(4, 'Afghanistan', '93'),
(248, 'Aland Islands', ''),
(8, 'Albania', '355'),
(12, 'Algeria', '213'),
(16, 'American Samoa', '1'),
(20, 'Andorra', '376'),
(24, 'Angola', '244'),
(660, 'Anguilla', '1'),
(10, 'Antarctica', ''),
(28, 'Antigua and Barbuda', '1'),
(32, 'Argentina', '54'),
(51, 'Armenia', '374'),
(533, 'Aruba', '297'),
(36, 'Australia', '61'),
(40, 'Austria', '43'),
(31, 'Azerbaijan', '994'),
(44, 'Bahamas', '1'),
(48, 'Bahrain', '973'),
(50, 'Bangladesh', '880'),
(52, 'Barbados', '1'),
(112, 'Belarus', '375'),
(56, 'Belgium', '32'),
(84, 'Belize', '501'),
(204, 'Benin', '229'),
(60, 'Bermuda', '1'),
(64, 'Bhutan', '975'),
(68, 'Bolivia', '591'),
(70, 'Bosnia and Herzegovina', '387'),
(72, 'Botswana', '267'),
(74, 'Bouvet Island', ''),
(76, 'Brazil', '55'),
(92, 'British Virgin Islands', ''),
(86, 'British Indian Ocean Territory', ''),
(96, 'Brunei Darussalam', '673'),
(100, 'Bulgaria', '359'),
(854, 'Burkina Faso', '226'),
(108, 'Burundi', '257'),
(116, 'Cambodia', '855'),
(120, 'Cameroon', '237'),
(124, 'Canada', '1'),
(132, 'Cape Verde', '238'),
(136, 'Cayman Islands', '1'),
(140, 'Central African Republic', '236'),
(148, 'Chad', '235'),
(152, 'Chile', '56'),
(156, 'China', '86'),
(344, 'Hong Kong, SAR China', ''),
(446, 'Macao, SAR China', ''),
(162, 'Christmas Island', '61'),
(166, 'Cocos (Keeling) Islands', '61'),
(170, 'Colombia', '57'),
(174, 'Comoros', '269'),
(178, 'Congo (Brazzaville)', '242'),
(180, 'Congo, (Kinshasa)', '243'),
(184, 'Cook Islands', '682'),
(188, 'Costa Rica', '506'),
(384, 'Côte d Ivoire', '225'),
(191, 'Croatia', '385'),
(192, 'Cuba', '53'),
(196, 'Cyprus', '357'),
(203, 'Czech Republic', '420'),
(208, 'Denmark', '45'),
(262, 'Djibouti', '253'),
(212, 'Dominica', '1'),
(214, 'Dominican Republic', '1'),
(218, 'Ecuador', '593'),
(818, 'Egypt', '20'),
(222, 'El Salvador', '503'),
(226, 'Equatorial Guinea', '240'),
(232, 'Eritrea', '291'),
(233, 'Estonia', '372'),
(231, 'Ethiopia', '251'),
(238, 'Falkland Islands (Malvinas)', '500'),
(234, 'Faroe Islands', '298'),
(242, 'Fiji', '679'),
(246, 'Finland', '358'),
(250, 'France', '33'),
(254, 'French Guiana', '594'),
(258, 'French Polynesia', '689'),
(260, 'French Southern Territories', ''),
(266, 'Gabon', '241'),
(270, 'Gambia', '220'),
(268, 'Georgia', '995'),
(276, 'Germany', '49'),
(288, 'Ghana', '233'),
(292, 'Gibraltar', '350'),
(300, 'Greece', '30'),
(304, 'Greenland', '299'),
(308, 'Grenada', '1'),
(312, 'Guadeloupe', '590'),
(316, 'Guam', '1'),
(320, 'Guatemala', '502'),
(831, 'Guernsey', ''),
(324, 'Guinea', '224'),
(624, 'Guinea-Bissau', '245'),
(328, 'Guyana', '592'),
(332, 'Haiti', '509'),
(334, 'Heard and Mcdonald Islands', ''),
(336, 'Holy See (Vatican City State)', '379'),
(340, 'Honduras', '504'),
(348, 'Hungary', '36'),
(352, 'Iceland', '354'),
(356, 'India', '91'),
(360, 'Indonesia', '62'),
(364, 'Iran, Islamic Republic of', '98'),
(368, 'Iraq', '964'),
(372, 'Ireland', '353'),
(833, 'Isle of Man', ''),
(376, 'Israel', '972'),
(380, 'Italy', '39'),
(388, 'Jamaica', '1'),
(392, 'Japan', '81'),
(832, 'Jersey', ''),
(400, 'Jordan', '962'),
(398, 'Kazakhstan', '7'),
(404, 'Kenya', '254'),
(296, 'Kiribati', '686'),
(408, 'Korea (North)', '850'),
(410, 'Korea (South)', '82'),
(414, 'Kuwait', '965'),
(417, 'Kyrgyzstan', '996'),
(418, 'Lao PDR', '856'),
(428, 'Latvia', '371'),
(422, 'Lebanon', '961'),
(426, 'Lesotho', '266'),
(430, 'Liberia', '231'),
(434, 'Libya', '218'),
(438, 'Liechtenstein', '423'),
(440, 'Lithuania', '370'),
(442, 'Luxembourg', '352'),
(807, 'Macedonia, Republic of', '389'),
(450, 'Madagascar', '261'),
(454, 'Malawi', '265'),
(458, 'Malaysia', '60'),
(462, 'Maldives', '960'),
(466, 'Mali', '223'),
(470, 'Malta', '356'),
(584, 'Marshall Islands', '692'),
(474, 'Martinique', '596'),
(478, 'Mauritania', '222'),
(480, 'Mauritius', '230'),
(175, 'Mayotte', '262'),
(484, 'Mexico', '52'),
(583, 'Micronesia, Federated States of', '691'),
(498, 'Moldova', '373'),
(492, 'Monaco', '377'),
(496, 'Mongolia', '976'),
(499, 'Montenegro', '382'),
(500, 'Montserrat', '1'),
(504, 'Morocco', '212'),
(508, 'Mozambique', '258'),
(104, 'Myanmar', '95'),
(516, 'Namibia', '264'),
(520, 'Nauru', '674'),
(524, 'Nepal', '977'),
(528, 'Netherlands', '31'),
(530, 'Netherlands Antilles', '599'),
(540, 'New Caledonia', '687'),
(554, 'New Zealand', '64'),
(558, 'Nicaragua', '505'),
(562, 'Niger', '227'),
(566, 'Nigeria', '234'),
(570, 'Niue', '683'),
(574, 'Norfolk Island', '672'),
(580, 'Northern Mariana Islands', '1'),
(578, 'Norway', '47'),
(512, 'Oman', '968'),
(586, 'Pakistan', '92'),
(585, 'Palau', '680'),
(275, 'Palestinian Territory', '970'),
(591, 'Panama', '507'),
(598, 'Papua New Guinea', '675'),
(600, 'Paraguay', '595'),
(604, 'Peru', '51'),
(608, 'Philippines', '63'),
(612, 'Pitcairn', '870'),
(616, 'Poland', '48'),
(620, 'Portugal', '351'),
(630, 'Puerto Rico', '1'),
(634, 'Qatar', '974'),
(638, 'Réunion', '262'),
(642, 'Romania', '40'),
(643, 'Russian Federation', '7'),
(646, 'Rwanda', '250'),
(652, 'Saint-Barthélemy', ''),
(654, 'Saint Helena', '290'),
(659, 'Saint Kitts and Nevis', '1'),
(662, 'Saint Lucia', '1'),
(663, 'Saint-Martin (French part)', ''),
(666, 'Saint Pierre and Miquelon', '508'),
(670, 'Saint Vincent and Grenadines', '1'),
(882, 'Samoa', '685'),
(674, 'San Marino', '378'),
(678, 'Sao Tome and Principe', '239'),
(682, 'Saudi Arabia', '966'),
(686, 'Senegal', '221'),
(688, 'Serbia', '381'),
(690, 'Seychelles', '248'),
(694, 'Sierra Leone', '232'),
(702, 'Singapore', '65'),
(703, 'Slovakia', '421'),
(705, 'Slovenia', '386'),
(90, 'Solomon Islands', '677'),
(706, 'Somalia', '252'),
(710, 'South Africa', '27'),
(239, 'South Georgia and the South Sandwich Islands', ''),
(728, 'South Sudan', ''),
(724, 'Spain', '34'),
(144, 'Sri Lanka', '94'),
(736, 'Sudan', '249'),
(740, 'Suriname', '597'),
(744, 'Svalbard and Jan Mayen Islands', '47'),
(748, 'Swaziland', '268'),
(752, 'Sweden', '46'),
(756, 'Switzerland', '41'),
(760, 'Syrian Arab Republic (Syria)', '963'),
(158, 'Taiwan, Republic of China', '886'),
(762, 'Tajikistan', '992'),
(834, 'Tanzania, United Republic of', '255'),
(764, 'Thailand', '66'),
(626, 'Timor-Leste', '670'),
(768, 'Togo', '228'),
(772, 'Tokelau', '690'),
(776, 'Tonga', '676'),
(780, 'Trinidad and Tobago', '1'),
(788, 'Tunisia', '216'),
(792, 'Turkey', '90'),
(795, 'Turkmenistan', '993'),
(796, 'Turks and Caicos Islands', '1'),
(798, 'Tuvalu', '688'),
(800, 'Uganda', '256'),
(804, 'Ukraine', '380'),
(784, 'United Arab Emirates', '971'),
(826, 'United Kingdom', '44'),
(840, 'United States of America', '1'),
(581, 'US Minor Outlying Islands', ''),
(858, 'Uruguay', '598'),
(860, 'Uzbekistan', '998'),
(548, 'Vanuatu', '678'),
(862, 'Venezuela (Bolivarian Republic)', '58'),
(704, 'Viet Nam', '84'),
(850, 'Virgin Islands, US', '1'),
(876, 'Wallis and Futuna Islands', '681'),
(732, 'Western Sahara', ''),
(887, 'Yemen', '967'),
(894, 'Zambia', '260'),
(716, 'Zimbabwe', '263');
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pais`
--
-- ALTER TABLE `pais`
  -- ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pais`
--
-- ALTER TABLE `pais`
  -- MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2019 a las 08:04:28
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbgym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL,
  `login_id` varchar(20) NOT NULL,
  `pass_key` varchar(30) NOT NULL,
  `security` varchar(50) NOT NULL,
  `level` int(2) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `auth_user`
--

INSERT INTO `auth_user` (`id`, `login_id`, `pass_key`, `security`, `level`, `sex`, `name`) VALUES
(1, 'admin', 'admin', 'admin', 5, 'male', 'Mr.Admin'),
(2, 'cajero', 'cajero', 'cajero', 4, 'male', 'cashier');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `healthstatus`
--

CREATE TABLE `healthstatus` (
  `hs_id` int(20) NOT NULL,
  `id` int(7) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date1` datetime NOT NULL,
  `bodyfat` varchar(25) NOT NULL,
  `water` varchar(30) NOT NULL,
  `muscle` varchar(30) NOT NULL,
  `calorie` varchar(30) NOT NULL,
  `bone` varchar(30) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `healthstatus`
--

INSERT INTO `healthstatus` (`hs_id`, `id`, `name`, `date1`, `bodyfat`, `water`, `muscle`, `calorie`, `bone`, `remarks`) VALUES
(0, 15, '15', '2016-02-14 00:00:00', 'Body Fatwr', 'Waterwr', 'Musclewr', 'Caloriewr', 'Bonewr', 'Remarkswr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mem_types`
--

CREATE TABLE `mem_types` (
  `id` int(11) NOT NULL,
  `mem_type_id` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `days` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mem_types`
--

INSERT INTO `mem_types` (`id`, `mem_type_id`, `name`, `days`, `rate`, `details`) VALUES
(2, 'XKCLTDSJ', 'Monthly', 30, 1000, 'Monthly'),
(4, 'CEJHUNAD', 'test', 30, 300, 'test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subsciption`
--

CREATE TABLE `subsciption` (
  `id` int(7) NOT NULL,
  `mem_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sub_type` varchar(100) NOT NULL,
  `paid_date` date NOT NULL,
  `expiry` date NOT NULL,
  `total` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `sub_type_name` text NOT NULL,
  `bal` int(11) NOT NULL,
  `exp_time` bigint(20) NOT NULL,
  `renewal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subsciption`
--

INSERT INTO `subsciption` (`id`, `mem_id`, `name`, `sub_type`, `paid_date`, `expiry`, `total`, `paid`, `invoice`, `sub_type_name`, `bal`, `exp_time`, `renewal`) VALUES
(20, 1560748995, 'Jefferson', 'CEJHUNAD', '2019-06-17', '2019-07-17', 300, 200, '60749075ecr', 'test', 100, 1563314400, 'yes'),
(21, 1560749464, 'Edwin', 'XKCLTDSJ', '2019-06-17', '2019-07-17', 1000, 559, '60749558vpg', 'Monthly', 441, 1563314400, 'yes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `time_table`
--

CREATE TABLE `time_table` (
  `id` int(11) NOT NULL,
  `mem_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_data`
--

CREATE TABLE `user_data` (
  `id` int(7) NOT NULL,
  `wait` varchar(10) NOT NULL,
  `newid` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `zipcode` bigint(20) NOT NULL,
  `birthdate` date NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pic_add` text NOT NULL,
  `height` float NOT NULL,
  `weight` int(11) NOT NULL,
  `nationality` text NOT NULL,
  `facebookaccount` text NOT NULL,
  `twitteraccount` text NOT NULL,
  `contactperson` text NOT NULL,
  `previousgym` text NOT NULL,
  `yearstraining` text NOT NULL,
  `joining` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `proof` text NOT NULL,
  `other_proof` text NOT NULL,
  `apellido1_cli` varchar(20) NOT NULL,
  `apellido2_cli` varchar(20) DEFAULT NULL,
  `cedula_cli` varchar(15) NOT NULL,
  `observacion_cli` text,
  `nombreuser` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_data`
--

INSERT INTO `user_data` (`id`, `wait`, `newid`, `name`, `address`, `zipcode`, `birthdate`, `contact`, `email`, `pic_add`, `height`, `weight`, `nationality`, `facebookaccount`, `twitteraccount`, `contactperson`, `previousgym`, `yearstraining`, `joining`, `age`, `sex`, `proof`, `other_proof`, `apellido1_cli`, `apellido2_cli`, `cedula_cli`, `observacion_cli`, `nombreuser`, `password`) VALUES
(26, 'no', 1560748995, 'Jefferson', '', 0, '0000-00-00', 987654321, 'jeffersontutillo@gmail.com', '../images/1560748995.jpg', 0, 0, '', '', '', '', '', '', '2019-06-17', 0, '', '', '', 'Tutillo', 'Melendez', '0503818304', 'ninguna', '0503818304', '0503818304'),
(27, 'no', 1560749464, 'Edwin', '', 0, '0000-00-00', 958439495, 'tgdedwin@gmail.com', '../images/1560749464.jpg', 0, 0, '', '', '', '', '', '', '2019-06-17', 0, '', '', '', 'Toapanta', 'Guanoluiza', '1223456789', 'Agarrado', '1223456789', '1223456789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `healthstatus`
--
ALTER TABLE `healthstatus`
  ADD PRIMARY KEY (`hs_id`);

--
-- Indices de la tabla `mem_types`
--
ALTER TABLE `mem_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subsciption`
--
ALTER TABLE `subsciption`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mem_types`
--
ALTER TABLE `mem_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `subsciption`
--
ALTER TABLE `subsciption`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

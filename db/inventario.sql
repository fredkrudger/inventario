-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
<<<<<<< HEAD
-- Tiempo de generación: 15-11-2016 a las 05:06:03
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23
=======
-- Tiempo de generación: 30-06-2016 a las 00:46:47
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.4
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `detalles` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id_ciudad` int(11) NOT NULL,
  `id_ubicacion` int(11) NOT NULL,
  `ciudad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id_ciudad`, `id_ubicacion`, `ciudad`) VALUES
(1, 1, 'Maroa'),
(2, 1, 'Puerto Ayacucho'),
(3, 1, 'San Fernando de Atabapo'),
(4, 2, 'Anaco'),
(5, 2, 'Aragua de Barcelona'),
(6, 2, 'Barcelona'),
(7, 2, 'Boca de Uchire'),
(8, 2, 'Cantaura'),
(9, 2, 'Clarines'),
(10, 2, 'El Chaparro'),
(11, 2, 'El Pao Anzoátegui'),
(12, 2, 'El Tigre'),
(13, 2, 'El Tigrito'),
(14, 2, 'Guanape'),
(15, 2, 'Guanta'),
(16, 2, 'Lechería'),
(17, 2, 'Onoto'),
(18, 2, 'Pariaguán'),
(19, 2, 'Píritu'),
(20, 2, 'Puerto La Cruz'),
(21, 2, 'Puerto Píritu'),
(22, 2, 'Sabana de Uchire'),
(23, 2, 'San Mateo Anzoátegui'),
(24, 2, 'San Pablo Anzoátegui'),
(25, 2, 'San Tomé'),
(26, 2, 'Santa Ana de Anzoátegui'),
(27, 2, 'Santa Fe Anzoátegui'),
(28, 2, 'Santa Rosa'),
(29, 2, 'Soledad'),
(30, 2, 'Urica'),
(31, 2, 'Valle de Guanape'),
(43, 3, 'Achaguas'),
(44, 3, 'Biruaca'),
(45, 3, 'Bruzual'),
(46, 3, 'El Amparo'),
(47, 3, 'El Nula'),
(48, 3, 'Elorza'),
(49, 3, 'Guasdualito'),
(50, 3, 'Mantecal'),
(51, 3, 'Puerto Páez'),
(52, 3, 'San Fernando de Apure'),
(53, 3, 'San Juan de Payara'),
(54, 4, 'Barbacoas'),
(55, 4, 'Cagua'),
(56, 4, 'Camatagua'),
(58, 4, 'Choroní'),
(59, 4, 'Colonia Tovar'),
(60, 4, 'El Consejo'),
(61, 4, 'La Victoria'),
(62, 4, 'Las Tejerías'),
(63, 4, 'Magdaleno'),
(64, 4, 'Maracay'),
(65, 4, 'Ocumare de La Costa'),
(66, 4, 'Palo Negro'),
(67, 4, 'San Casimiro'),
(68, 4, 'San Mateo'),
(69, 4, 'San Sebastián'),
(70, 4, 'Santa Cruz de Aragua'),
(71, 4, 'Tocorón'),
(72, 4, 'Turmero'),
(73, 4, 'Villa de Cura'),
(74, 4, 'Zuata'),
(75, 5, 'Barinas'),
(76, 5, 'Barinitas'),
(77, 5, 'Barrancas'),
(78, 5, 'Calderas'),
(79, 5, 'Capitanejo'),
(80, 5, 'Ciudad Bolivia'),
(81, 5, 'El Cantón'),
(82, 5, 'Las Veguitas'),
(83, 5, 'Libertad de Barinas'),
(84, 5, 'Sabaneta'),
(85, 5, 'Santa Bárbara de Barinas'),
(86, 5, 'Socopó'),
(87, 6, 'Caicara del Orinoco'),
(88, 6, 'Canaima'),
(89, 6, 'Ciudad Bolívar'),
(90, 6, 'Ciudad Piar'),
(91, 6, 'El Callao'),
(92, 6, 'El Dorado'),
(93, 6, 'El Manteco'),
(94, 6, 'El Palmar'),
(95, 6, 'El Pao'),
(96, 6, 'Guasipati'),
(97, 6, 'Guri'),
(98, 6, 'La Paragua'),
(99, 6, 'Matanzas'),
(100, 6, 'Puerto Ordaz'),
(101, 6, 'San Félix'),
(102, 6, 'Santa Elena de Uairén'),
(103, 6, 'Tumeremo'),
(104, 6, 'Unare'),
(105, 6, 'Upata'),
(106, 7, 'Bejuma'),
(107, 7, 'Belén'),
(108, 7, 'Campo de Carabobo'),
(109, 7, 'Canoabo'),
(110, 7, 'Central Tacarigua'),
(111, 7, 'Chirgua'),
(112, 7, 'Ciudad Alianza'),
(113, 7, 'El Palito'),
(114, 7, 'Guacara'),
(115, 7, 'Guigue'),
(116, 7, 'Las Trincheras'),
(117, 7, 'Los Guayos'),
(118, 7, 'Mariara'),
(119, 7, 'Miranda'),
(120, 7, 'Montalbán'),
(121, 7, 'Morón'),
(122, 7, 'Naguanagua'),
(123, 7, 'Puerto Cabello'),
(124, 7, 'San Joaquín'),
(125, 7, 'Tocuyito'),
(126, 7, 'Urama'),
(127, 7, 'Valencia'),
(128, 7, 'Vigirimita'),
(129, 8, 'Aguirre'),
(130, 8, 'Apartaderos Cojedes'),
(131, 8, 'Arismendi'),
(132, 8, 'Camuriquito'),
(133, 8, 'El Baúl'),
(134, 8, 'El Limón'),
(135, 8, 'El Pao Cojedes'),
(136, 8, 'El Socorro'),
(137, 8, 'La Aguadita'),
(138, 8, 'Las Vegas'),
(139, 8, 'Libertad de Cojedes'),
(140, 8, 'Mapuey'),
(141, 8, 'Piñedo'),
(142, 8, 'Samancito'),
(143, 8, 'San Carlos'),
(144, 8, 'Sucre'),
(145, 8, 'Tinaco'),
(146, 8, 'Tinaquillo'),
(147, 8, 'Vallecito'),
(148, 9, 'Tucupita'),
(149, 24, 'Caracas'),
(150, 24, 'El Junquito'),
(151, 10, 'Adícora'),
(152, 10, 'Boca de Aroa'),
(153, 10, 'Cabure'),
(154, 10, 'Capadare'),
(155, 10, 'Capatárida'),
(156, 10, 'Chichiriviche'),
(157, 10, 'Churuguara'),
(158, 10, 'Coro'),
(159, 10, 'Cumarebo'),
(160, 10, 'Dabajuro'),
(161, 10, 'Judibana'),
(162, 10, 'La Cruz de Taratara'),
(163, 10, 'La Vela de Coro'),
(164, 10, 'Los Taques'),
(165, 10, 'Maparari'),
(166, 10, 'Mene de Mauroa'),
(167, 10, 'Mirimire'),
(168, 10, 'Pedregal'),
(169, 10, 'Píritu Falcón'),
(170, 10, 'Pueblo Nuevo Falcón'),
(171, 10, 'Puerto Cumarebo'),
(172, 10, 'Punta Cardón'),
(173, 10, 'Punto Fijo'),
(174, 10, 'San Juan de Los Cayos'),
(175, 10, 'San Luis'),
(176, 10, 'Santa Ana Falcón'),
(177, 10, 'Santa Cruz De Bucaral'),
(178, 10, 'Tocopero'),
(179, 10, 'Tocuyo de La Costa'),
(180, 10, 'Tucacas'),
(181, 10, 'Yaracal'),
(182, 11, 'Altagracia de Orituco'),
(183, 11, 'Cabruta'),
(184, 11, 'Calabozo'),
(185, 11, 'Camaguán'),
(196, 11, 'Chaguaramas Guárico'),
(197, 11, 'El Socorro'),
(198, 11, 'El Sombrero'),
(199, 11, 'Las Mercedes de Los Llanos'),
(200, 11, 'Lezama'),
(201, 11, 'Onoto'),
(202, 11, 'Ortíz'),
(203, 11, 'San José de Guaribe'),
(204, 11, 'San Juan de Los Morros'),
(205, 11, 'San Rafael de Laya'),
(206, 11, 'Santa María de Ipire'),
(207, 11, 'Tucupido'),
(208, 11, 'Valle de La Pascua'),
(209, 11, 'Zaraza'),
(210, 12, 'Aguada Grande'),
(211, 12, 'Atarigua'),
(212, 12, 'Barquisimeto'),
(213, 12, 'Bobare'),
(214, 12, 'Cabudare'),
(215, 12, 'Carora'),
(216, 12, 'Cubiro'),
(217, 12, 'Cují'),
(218, 12, 'Duaca'),
(219, 12, 'El Manzano'),
(220, 12, 'El Tocuyo'),
(221, 12, 'Guaríco'),
(222, 12, 'Humocaro Alto'),
(223, 12, 'Humocaro Bajo'),
(224, 12, 'La Miel'),
(225, 12, 'Moroturo'),
(226, 12, 'Quíbor'),
(227, 12, 'Río Claro'),
(228, 12, 'Sanare'),
(229, 12, 'Santa Inés'),
(230, 12, 'Sarare'),
(231, 12, 'Siquisique'),
(232, 12, 'Tintorero'),
(233, 13, 'Apartaderos Mérida'),
(234, 13, 'Arapuey'),
(235, 13, 'Bailadores'),
(236, 13, 'Caja Seca'),
(237, 13, 'Canaguá'),
(238, 13, 'Chachopo'),
(239, 13, 'Chiguara'),
(240, 13, 'Ejido'),
(241, 13, 'El Vigía'),
(242, 13, 'La Azulita'),
(243, 13, 'La Playa'),
(244, 13, 'Lagunillas Mérida'),
(245, 13, 'Mérida'),
(246, 13, 'Mesa de Bolívar'),
(247, 13, 'Mucuchíes'),
(248, 13, 'Mucujepe'),
(249, 13, 'Mucuruba'),
(250, 13, 'Nueva Bolivia'),
(251, 13, 'Palmarito'),
(252, 13, 'Pueblo Llano'),
(253, 13, 'Santa Cruz de Mora'),
(254, 13, 'Santa Elena de Arenales'),
(255, 13, 'Santo Domingo'),
(256, 13, 'Tabáy'),
(257, 13, 'Timotes'),
(258, 13, 'Torondoy'),
(259, 13, 'Tovar'),
(260, 13, 'Tucani'),
(261, 13, 'Zea'),
(262, 14, 'Araguita'),
(263, 14, 'Carrizal'),
(264, 14, 'Caucagua'),
(265, 14, 'Chaguaramas Miranda'),
(266, 14, 'Charallave'),
(267, 14, 'Chirimena'),
(268, 14, 'Chuspa'),
(269, 14, 'Cúa'),
(270, 14, 'Cupira'),
(271, 14, 'Curiepe'),
(272, 14, 'El Guapo'),
(273, 14, 'El Jarillo'),
(274, 14, 'Filas de Mariche'),
(275, 14, 'Guarenas'),
(276, 14, 'Guatire'),
(277, 14, 'Higuerote'),
(278, 14, 'Los Anaucos'),
(279, 14, 'Los Teques'),
(280, 14, 'Ocumare del Tuy'),
(281, 14, 'Panaquire'),
(282, 14, 'Paracotos'),
(283, 14, 'Río Chico'),
(284, 14, 'San Antonio de Los Altos'),
(285, 14, 'San Diego de Los Altos'),
(286, 14, 'San Fernando del Guapo'),
(287, 14, 'San Francisco de Yare'),
(288, 14, 'San José de Los Altos'),
(289, 14, 'San José de Río Chico'),
(290, 14, 'San Pedro de Los Altos'),
(291, 14, 'Santa Lucía'),
(292, 14, 'Santa Teresa'),
(293, 14, 'Tacarigua de La Laguna'),
(294, 14, 'Tacarigua de Mamporal'),
(295, 14, 'Tácata'),
(296, 14, 'Turumo'),
(297, 15, 'Aguasay'),
(298, 15, 'Aragua de Maturín'),
(299, 15, 'Barrancas del Orinoco'),
(300, 15, 'Caicara de Maturín'),
(301, 15, 'Caripe'),
(302, 15, 'Caripito'),
(303, 15, 'Chaguaramal'),
(305, 15, 'Chaguaramas Monagas'),
(307, 15, 'El Furrial'),
(308, 15, 'El Tejero'),
(309, 15, 'Jusepín'),
(310, 15, 'La Toscana'),
(311, 15, 'Maturín'),
(312, 15, 'Miraflores'),
(313, 15, 'Punta de Mata'),
(314, 15, 'Quiriquire'),
(315, 15, 'San Antonio de Maturín'),
(316, 15, 'San Vicente Monagas'),
(317, 15, 'Santa Bárbara'),
(318, 15, 'Temblador'),
(319, 15, 'Teresen'),
(320, 15, 'Uracoa'),
(321, 16, 'Altagracia'),
(322, 16, 'Boca de Pozo'),
(323, 16, 'Boca de Río'),
(324, 16, 'El Espinal'),
(325, 16, 'El Valle del Espíritu Santo'),
(326, 16, 'El Yaque'),
(327, 16, 'Juangriego'),
(328, 16, 'La Asunción'),
(329, 16, 'La Guardia'),
(330, 16, 'Pampatar'),
(331, 16, 'Porlamar'),
(332, 16, 'Puerto Fermín'),
(333, 16, 'Punta de Piedras'),
(334, 16, 'San Francisco de Macanao'),
(335, 16, 'San Juan Bautista'),
(336, 16, 'San Pedro de Coche'),
(337, 16, 'Santa Ana de Nueva Esparta'),
(338, 16, 'Villa Rosa'),
(339, 17, 'Acarigua'),
(340, 17, 'Agua Blanca'),
(341, 17, 'Araure'),
(342, 17, 'Biscucuy'),
(343, 17, 'Boconoito'),
(344, 17, 'Campo Elías'),
(345, 17, 'Chabasquén'),
(346, 17, 'Guanare'),
(347, 17, 'Guanarito'),
(348, 17, 'La Aparición'),
(349, 17, 'La Misión'),
(350, 17, 'Mesa de Cavacas'),
(351, 17, 'Ospino'),
(352, 17, 'Papelón'),
(353, 17, 'Payara'),
(354, 17, 'Pimpinela'),
(355, 17, 'Píritu de Portuguesa'),
(356, 17, 'San Rafael de Onoto'),
(357, 17, 'Santa Rosalía'),
(358, 17, 'Turén'),
(359, 18, 'Altos de Sucre'),
(360, 18, 'Araya'),
(361, 18, 'Cariaco'),
(362, 18, 'Carúpano'),
(363, 18, 'Casanay'),
(364, 18, 'Cumaná'),
(365, 18, 'Cumanacoa'),
(366, 18, 'El Morro Puerto Santo'),
(367, 18, 'El Pilar'),
(368, 18, 'El Poblado'),
(369, 18, 'Guaca'),
(370, 18, 'Guiria'),
(371, 18, 'Irapa'),
(372, 18, 'Manicuare'),
(373, 18, 'Mariguitar'),
(374, 18, 'Río Caribe'),
(375, 18, 'San Antonio del Golfo'),
(376, 18, 'San José de Aerocuar'),
(377, 18, 'San Vicente de Sucre'),
(378, 18, 'Santa Fe de Sucre'),
(379, 18, 'Tunapuy'),
(380, 18, 'Yaguaraparo'),
(381, 18, 'Yoco'),
(382, 19, 'Abejales'),
(383, 19, 'Borota'),
(384, 19, 'Bramon'),
(385, 19, 'Capacho'),
(386, 19, 'Colón'),
(387, 19, 'Coloncito'),
(388, 19, 'Cordero'),
(389, 19, 'El Cobre'),
(390, 19, 'El Pinal'),
(391, 19, 'Independencia'),
(392, 19, 'La Fría'),
(393, 19, 'La Grita'),
(394, 19, 'La Pedrera'),
(395, 19, 'La Tendida'),
(396, 19, 'Las Delicias'),
(397, 19, 'Las Hernández'),
(398, 19, 'Lobatera'),
(399, 19, 'Michelena'),
(400, 19, 'Palmira'),
(401, 19, 'Pregonero'),
(402, 19, 'Queniquea'),
(403, 19, 'Rubio'),
(404, 19, 'San Antonio del Tachira'),
(405, 19, 'San Cristobal'),
(406, 19, 'San José de Bolívar'),
(407, 19, 'San Josecito'),
(408, 19, 'San Pedro del Río'),
(409, 19, 'Santa Ana Táchira'),
(410, 19, 'Seboruco'),
(411, 19, 'Táriba'),
(412, 19, 'Umuquena'),
(413, 19, 'Ureña'),
(414, 20, 'Batatal'),
(415, 20, 'Betijoque'),
(416, 20, 'Boconó'),
(417, 20, 'Carache'),
(418, 20, 'Chejende'),
(419, 20, 'Cuicas'),
(420, 20, 'El Dividive'),
(421, 20, 'El Jaguito'),
(422, 20, 'Escuque'),
(423, 20, 'Isnotú'),
(424, 20, 'Jajó'),
(425, 20, 'La Ceiba'),
(426, 20, 'La Concepción de Trujllo'),
(427, 20, 'La Mesa de Esnujaque'),
(428, 20, 'La Puerta'),
(429, 20, 'La Quebrada'),
(430, 20, 'Mendoza Fría'),
(431, 20, 'Meseta de Chimpire'),
(432, 20, 'Monay'),
(433, 20, 'Motatán'),
(434, 20, 'Pampán'),
(435, 20, 'Pampanito'),
(436, 20, 'Sabana de Mendoza'),
(437, 20, 'San Lázaro'),
(438, 20, 'Santa Ana de Trujillo'),
(439, 20, 'Tostós'),
(440, 20, 'Trujillo'),
(441, 20, 'Valera'),
(442, 21, 'Carayaca'),
(443, 21, 'Litoral'),
(444, 25, 'Archipiélago Los Roques'),
(445, 22, 'Aroa'),
(446, 22, 'Boraure'),
(447, 22, 'Campo Elías de Yaracuy'),
(448, 22, 'Chivacoa'),
(449, 22, 'Cocorote'),
(450, 22, 'Farriar'),
(451, 22, 'Guama'),
(452, 22, 'Marín'),
(453, 22, 'Nirgua'),
(454, 22, 'Sabana de Parra'),
(455, 22, 'Salom'),
(456, 22, 'San Felipe'),
(457, 22, 'San Pablo de Yaracuy'),
(458, 22, 'Urachiche'),
(459, 22, 'Yaritagua'),
(460, 22, 'Yumare'),
(461, 23, 'Bachaquero'),
(462, 23, 'Bobures'),
(463, 23, 'Cabimas'),
(464, 23, 'Campo Concepción'),
(465, 23, 'Campo Mara'),
(466, 23, 'Campo Rojo'),
(467, 23, 'Carrasquero'),
(468, 23, 'Casigua'),
(469, 23, 'Chiquinquirá'),
(470, 23, 'Ciudad Ojeda'),
(471, 23, 'El Batey'),
(472, 23, 'El Carmelo'),
(473, 23, 'El Chivo'),
(474, 23, 'El Guayabo'),
(475, 23, 'El Mene'),
(476, 23, 'El Venado'),
(477, 23, 'Encontrados'),
(478, 23, 'Gibraltar'),
(479, 23, 'Isla de Toas'),
(480, 23, 'La Concepción del Zulia'),
(481, 23, 'La Paz'),
(482, 23, 'La Sierrita'),
(483, 23, 'Lagunillas del Zulia'),
(484, 23, 'Las Piedras de Perijá'),
(485, 23, 'Los Cortijos'),
(486, 23, 'Machiques'),
(487, 23, 'Maracaibo'),
(488, 23, 'Mene Grande'),
(489, 23, 'Palmarejo'),
(490, 23, 'Paraguaipoa'),
(491, 23, 'Potrerito'),
(492, 23, 'Pueblo Nuevo del Zulia'),
(493, 23, 'Puertos de Altagracia'),
(494, 23, 'Punta Gorda'),
(495, 23, 'Sabaneta de Palma'),
(496, 23, 'San Francisco'),
(497, 23, 'San José de Perijá'),
(498, 23, 'San Rafael del Moján'),
(499, 23, 'San Timoteo'),
(500, 23, 'Santa Bárbara Del Zulia'),
(501, 23, 'Santa Cruz de Mara'),
(502, 23, 'Santa Cruz del Zulia'),
(503, 23, 'Santa Rita'),
(504, 23, 'Sinamaica'),
(505, 23, 'Tamare'),
(506, 23, 'Tía Juana'),
(507, 23, 'Villa del Rosario'),
(508, 21, 'La Guaira'),
(509, 21, 'Catia La Mar'),
(510, 21, 'Macuto'),
(511, 21, 'Naiguatá'),
(512, 25, 'Archipiélago Los Monjes'),
(513, 25, 'Isla La Tortuga y Cayos adyacentes'),
(514, 25, 'Isla La Sola'),
(515, 25, 'Islas Los Testigos'),
(516, 25, 'Islas Los Frailes'),
(517, 25, 'Isla La Orchila'),
(518, 25, 'Archipiélago Las Aves'),
(519, 25, 'Isla de Aves'),
(520, 25, 'Isla La Blanquilla'),
(521, 25, 'Isla de Patos'),
(522, 25, 'Islas Los Hermanos');
=======
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `clave` varchar(15) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `id_telefono` int(11) DEFAULT NULL,
  `id_rif_cedula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nombre`, `apellido`, `usuario`, `clave`, `direccion`, `id_telefono`, `id_rif_cedula`) VALUES
(1, 'Pedro', 'Perez', 'administrador', 'administrador', 'Guárico', 1, 1);
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `codigo_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(70) DEFAULT NULL,
<<<<<<< HEAD
  `direccion` varchar(200) DEFAULT NULL,
  `direccion_entrega` varchar(200) DEFAULT NULL,
  `id_ciudad` int(100) DEFAULT NULL,
=======
  `ciudad` varchar(40) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `direccion_entrega` varchar(200) DEFAULT NULL,
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
  `id_ubicacion` int(11) DEFAULT NULL,
  `id_telefono` int(11) DEFAULT NULL,
  `id_rif_cedula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

<<<<<<< HEAD
--
-- Disparadores `cliente`
--
DELIMITER $$
CREATE TRIGGER `eliminar_cliente` AFTER DELETE ON `cliente` FOR EACH ROW INSERT INTO bitacora (detalles) VALUES(CONCAT('Detalles del cliente eliminado :( codigo_cliente = ', OLD.codigo_cliente ,' , nombre_cliente = ' ,OLD.nombre_cliente, ' , direccion = ' ,OLD.direccion,' , direccion_entrega = ', OLD.direccion_entrega ,' , id_ciudad = ' ,OLD.id_ciudad, ' , id_rif_cedula = ' , OLD.id_rif_cedula, ' , id_telefono = ' ,OLD.id_telefono, ' , id_ubicacion = ' ,OLD.id_ubicacion,').  Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertar_cliente` AFTER INSERT ON `cliente` FOR EACH ROW INSERT INTO bitacora 
(detalles)VALUES(CONCAT('Detalles del nuevo cliente ingresado: ( codigo_cliente =', NEW.codigo_cliente,' , nombre_cliente = ' , NEW.nombre_cliente ,' , direccion = ', NEW.direccion, ' , direccion_entrega = ', NEW.direccion_entrega, ' , id_ciudad = ', NEW.id_ciudad, ' , id_rif_cedula =  ', NEW.id_rif_cedula, ' , id_telefono = ', NEW.id_telefono , ' , id_ubicacion = ', NEW.id_ubicacion, ').  Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `modificar_cliente` BEFORE UPDATE ON `cliente` FOR EACH ROW INSERT INTO bitacora
(detalles)VALUES(CONCAT('Nuevos detalles del cliente modificado : ( codigo_cliente = ', NEW.codigo_cliente,' , nombre_cliente = ', NEW.nombre_cliente ,' , direccion = ', NEW.direccion, ' , direccion_entrega = ', NEW.direccion_entrega, ' , id_ciudad = ', NEW.id_ciudad, ' , id_rif_cedula = ', NEW.id_rif_cedula, ' , id_telefono = ', NEW.id_telefono , ' , id_ubicacion = ', NEW.id_ubicacion, ').      Antiguos detalles del cliente que se modifico : ( codigo_cliente = ', OLD.codigo_cliente ,' , nombre_cliente = ' ,OLD.nombre_cliente, ' , direccion = ' ,OLD.direccion,' , direccion_entrega = ', OLD.direccion_entrega ,' , id_ciudad = ' ,OLD.id_ciudad, ' , id_rif_cedula = ' , OLD.id_rif_cedula, ' , id_telefono = ' ,OLD.id_telefono, ' , id_ubicacion = ' ,OLD.id_ubicacion,').  Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;

=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `id_envio` int(11) NOT NULL,
  `fecha_envio` varchar(10) DEFAULT NULL,
  `cantidad_enviada` varchar(50) DEFAULT NULL,
  `codigo_cliente` int(11) DEFAULT NULL,
  `codigo_producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

<<<<<<< HEAD
--
-- Disparadores `envio`
--
DELIMITER $$
CREATE TRIGGER `eliminar_envio` AFTER DELETE ON `envio` FOR EACH ROW INSERT INTO bitacora (detalles) VALUES(CONCAT('Detalles del Envio eliminado : ( id_envio = ', OLD.id_envio,' , fecha_envio = ', OLD.fecha_envio ,' , cantidad_enviada = ', OLD.cantidad_enviada, ' , codigo_cliente = ', OLD.codigo_cliente, ' , codigo_producto = ', OLD.codigo_producto, ').  Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertar_envio` AFTER INSERT ON `envio` FOR EACH ROW INSERT INTO bitacora
(detalles)VALUES(CONCAT('Detalles del nuevo Envio ingresado: ( id_envio = ', NEW.id_envio,' , fecha_envio = ', NEW.fecha_envio ,' , cantidad_enviada = ', NEW.cantidad_enviada, ' , codigo_cliente = ', NEW.codigo_cliente, ' , codigo_producto = ', NEW.codigo_producto, '). Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;

=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `codigo_grupo` int(11) NOT NULL,
<<<<<<< HEAD
  `nombre_grupo` varchar(100) DEFAULT NULL
=======
  `nombre_grupo` varchar(50) DEFAULT NULL
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`codigo_grupo`, `nombre_grupo`) VALUES
(1, 'Cremas'),
(2, 'Grasas'),
(3, 'Harinas y Feculas'),
(4, 'Granos y Semillas'),
(5, 'Especias y Condimentos'),
(6, 'Polvos y Quimicos'),
(7, 'Levaduras'),
(8, 'Esencias y Colorantes'),
(9, 'Glucosas y Caramelinas'),
(10, 'Chocolates'),
(11, 'Confites y Mani'),
(12, 'Frutos'),
(13, 'Brillos y Siropes'),
(14, 'Conservas'),
(15, 'Salsas'),
(16, 'Azucar y Derivados'),
(17, 'Leche y Derivados'),
(18, 'Pastas'),
(19, 'Des. Carton'),
(20, 'Des. Plastico'),
(21, 'Des. Anime'),
(22, 'Des. Papel'),
(23, 'Des. Aluminio'),
(24, 'Utensilios'),
(25, 'Prod. Limpieza');

<<<<<<< HEAD
--
-- Disparadores `grupo`
--
DELIMITER $$
CREATE TRIGGER `eliminar_grupo` AFTER DELETE ON `grupo` FOR EACH ROW INSERT INTO bitacora (detalles) VALUES(CONCAT('Detalles del Grupo eliminado :( codigo_grupo = ', OLD.codigo_grupo,' , nombre_grupo = ', OLD.nombre_grupo ,').  Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertar_grupo` AFTER INSERT ON `grupo` FOR EACH ROW INSERT INTO bitacora
(detalles)VALUES(CONCAT('Detalles del nuevo Grupo ingresado: ( codigo_grupo = ', NEW.codigo_grupo,' , nombre_grupo = ', NEW.nombre_grupo ,'). Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `modificar_grupo` BEFORE UPDATE ON `grupo` FOR EACH ROW INSERT INTO bitacora
(detalles)VALUES(CONCAT('Nuevos detalles del Grupo modificado : ( codigo_grupo = ', NEW.codigo_grupo,' , nombre_grupo = ', NEW.nombre_grupo ,').   Antiguos detalles del Grupo que se modifico :( codigo_grupo = ', OLD.codigo_grupo,' , nombre_grupo = ', OLD.nombre_grupo ,').  Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `id_nivel` int(11) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`id_nivel`, `nivel`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo_producto` int(11) NOT NULL,
  `nombre_producto` varchar(70) DEFAULT NULL,
  `marca` varchar(60) DEFAULT NULL,
  `fecha_ingreso` varchar(10) DEFAULT NULL,
  `fecha_vencimiento` varchar(10) DEFAULT NULL,
  `cantidad` varchar(8) NOT NULL,
<<<<<<< HEAD
  `cantidad_minima` varchar(8) NOT NULL,
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
  `presentacion` varchar(60) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `codigo_grupo` int(11) DEFAULT NULL,
  `codigo_proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

<<<<<<< HEAD
--
-- Disparadores `producto`
--
DELIMITER $$
CREATE TRIGGER `eliminar_producto` AFTER DELETE ON `producto` FOR EACH ROW INSERT INTO bitacora (detalles) VALUES(CONCAT('Detalles del Producto eliminado :( codigo_producto = ', OLD.codigo_producto,' , nombre_producto = ', OLD.nombre_producto ,' , marca = ', OLD.marca, ' , \tfecha_vencimiento = ', OLD.	fecha_vencimiento, ' , cantidad = ', OLD.cantidad, ' , cantidad_minima = ', OLD.cantidad_minima, ' , presentacion = ', OLD.presentacion , ' , precio = ', OLD.precio,' , descripcion = ', OLD.descripcion , ' , codigo_grupo = ', OLD.codigo_grupo , ' , codigo_proveedor = ', OLD.codigo_proveedor , ').  Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertar_producto` AFTER INSERT ON `producto` FOR EACH ROW INSERT INTO bitacora
(detalles)VALUES(CONCAT('Detalles del nuevo Producto ingresado: ( codigo_producto = ', NEW.codigo_producto,' , nombre_producto = ', NEW.nombre_producto ,' , marca = ', NEW.marca, ' , \tfecha_vencimiento = ', NEW.	fecha_vencimiento, ' , cantidad = ', NEW.cantidad, ' , cantidad_minima = ', NEW.cantidad_minima, ' , presentacion = ', NEW.presentacion , ' , precio = ', NEW.precio,' , descripcion = ', NEW.descripcion , ' , codigo_grupo = ', NEW.codigo_grupo , ' , codigo_proveedor = ', NEW.codigo_proveedor , '). Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `modificar_producto` BEFORE UPDATE ON `producto` FOR EACH ROW INSERT INTO bitacora
(detalles)VALUES(CONCAT('Nuevos detalles del Producto modificado : ( codigo_producto = ', NEW.codigo_producto,' , nombre_producto = ', NEW.nombre_producto ,' , marca = ', NEW.marca, ' , \tfecha_vencimiento = ', NEW.	fecha_vencimiento, ' , cantidad = ', NEW.cantidad, ' , cantidad_minima = ', NEW.cantidad_minima, ' , presentacion = ', NEW.presentacion , ' , precio = ', NEW.precio,' , descripcion = ', NEW.descripcion , ' , codigo_grupo = ', NEW.codigo_grupo , ' , codigo_proveedor = ', NEW.codigo_proveedor , ').   Antiguos detalles del Producto que se modifico :( codigo_producto = ', OLD.codigo_producto,' , nombre_producto = ', OLD.nombre_producto ,' , marca = ', OLD.marca, ' , \tfecha_vencimiento = ', OLD.	fecha_vencimiento, ' , cantidad = ', OLD.cantidad, ' , cantidad_minima = ', OLD.cantidad_minima, ' , presentacion = ', OLD.presentacion , ' , precio = ', OLD.precio,' , descripcion = ', OLD.descripcion , ' , codigo_grupo = ', OLD.codigo_grupo , ' , codigo_proveedor = ', OLD.codigo_proveedor , ').  Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;

=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `codigo_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(80) DEFAULT NULL,
<<<<<<< HEAD
  `direccion` varchar(200) DEFAULT NULL,
  `nombre_contacto` varchar(70) DEFAULT NULL,
  `id_ciudad` int(100) DEFAULT NULL,
=======
  `ciudad` varchar(40) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `nombre_contacto` varchar(70) DEFAULT NULL,
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
  `id_ubicacion` int(11) DEFAULT NULL,
  `id_telefono` int(11) DEFAULT NULL,
  `id_rif_cedula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

<<<<<<< HEAD
--
-- Disparadores `proveedor`
--
DELIMITER $$
CREATE TRIGGER `eliminar_proveedor` AFTER DELETE ON `proveedor` FOR EACH ROW INSERT INTO bitacora (detalles) VALUES(CONCAT('Detalles del Proveedor eliminado :( codigo_proveedor = ', OLD.codigo_proveedor,' , nombre_proveedor = ', OLD.nombre_proveedor ,' , direccion = ', OLD.direccion, ' , nombre_contacto = ', OLD.nombre_contacto, ' , id_ciudad = ', OLD.id_ciudad, ' , id_rif_cedula = ', OLD.id_rif_cedula, ' , id_telefono = ', OLD.id_telefono , ' , id_ubicacion = ', OLD.id_ubicacion, ').  Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertar_proveedor` AFTER INSERT ON `proveedor` FOR EACH ROW INSERT INTO bitacora
(detalles)VALUES(CONCAT('Detalles del nuevo Proveedor ingresado: ( codigo_proveedor = ', NEW.codigo_proveedor,' , nombre_proveedor = ', NEW.nombre_proveedor ,' , direccion = ', NEW.direccion, ' , nombre_contacto = ', NEW.nombre_contacto, ' , id_ciudad = ', NEW.id_ciudad, ' , id_rif_cedula = ', NEW.id_rif_cedula, ' , id_telefono = ', NEW.id_telefono , ' , id_ubicacion = ', NEW.id_ubicacion, '). Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `modificar_proveedor` BEFORE UPDATE ON `proveedor` FOR EACH ROW INSERT INTO bitacora
(detalles)VALUES(CONCAT('Nuevos detalles del Proveedor modificado : ( codigo_proveedor = ', NEW.codigo_proveedor,' , nombre_proveedor = ', NEW.nombre_proveedor ,' , direccion = ', NEW.direccion, ' , nombre_contacto = ', NEW.nombre_contacto, ' , id_ciudad = ', NEW.id_ciudad, ' , id_rif_cedula = ', NEW.id_rif_cedula, ' , id_telefono = ', NEW.id_telefono , ' , id_ubicacion = ', NEW.id_ubicacion, ').   Antiguos detalles del Proveedor que se modifico :( codigo_proveedor = ', OLD.codigo_proveedor,' , nombre_proveedor = ', OLD.nombre_proveedor ,' , direccion = ', OLD.direccion, ' , nombre_contacto = ', OLD.nombre_contacto, ' , id_ciudad = ', OLD.id_ciudad, ' , id_rif_cedula = ', OLD.id_rif_cedula, ' , id_telefono = ', OLD.id_telefono , ' , id_ubicacion = ', OLD.id_ubicacion, ').  Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;

=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rif_cedula`
--

CREATE TABLE `rif_cedula` (
  `id_rif_cedula` int(11) NOT NULL,
  `tipo_documento` char(1) DEFAULT NULL,
  `numero_documento` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

<<<<<<< HEAD
=======
--
-- Volcado de datos para la tabla `rif_cedula`
--

INSERT INTO `rif_cedula` (`id_rif_cedula`, `tipo_documento`, `numero_documento`) VALUES
(1, 'V', '12345678');

>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `id_telefono` int(11) NOT NULL,
  `codigo_telefono` varchar(6) DEFAULT NULL,
  `numero_telefono` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

<<<<<<< HEAD
=======
--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`id_telefono`, `codigo_telefono`, `numero_telefono`) VALUES
(1, '0212', '1234567');

>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id_ubicacion` int(2) NOT NULL,
  `estado` varchar(40) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id_ubicacion`, `estado`) VALUES
(1, 'Amazonas'),
(2, 'Anzoátegui'),
(3, 'Apure'),
(4, 'Aragua'),
(5, 'Barinas'),
(6, 'Bolívar'),
(7, 'Carabobo'),
(8, 'Cojedes'),
(9, 'Delta Amacuro'),
(10, 'Falcón'),
(11, 'Guárico'),
(12, 'Lara'),
(13, 'Mérida'),
(14, 'Miranda'),
(15, 'Monagas'),
(16, 'Nueva Esparta'),
(17, 'Portuguesa'),
(18, 'Sucre'),
(19, 'Táchira'),
(20, 'Trujillo'),
(21, 'Vargas'),
(22, 'Yaracuy'),
(23, 'Zulia'),
<<<<<<< HEAD
(24, 'Distrito Capital'),
(25, 'Dependencias Federales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(80) DEFAULT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `pregunta_secreta` varchar(150) NOT NULL,
  `respuesta_secreta` varchar(150) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `id_telefono` int(11) DEFAULT NULL,
  `id_rif_cedula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `eliminar_usuario` AFTER DELETE ON `usuarios` FOR EACH ROW INSERT INTO bitacora (detalles) VALUES(CONCAT('Detalles del Usuario eliminado : ( id_usuario = ', OLD.id_usuario ,' , nombre_usuario = ' ,OLD.nombre_usuario, ' , correo = ' ,OLD.correo,' , clave = ', OLD.clave ,' , direccion = ' ,OLD.direccion, ' , pregunta_secreta = ' , OLD.pregunta_secreta, ' , respuesta_secreta = ' ,OLD.respuesta_secreta, ' , id_nivel = ' ,OLD.id_nivel,' , id_telefono = ' ,OLD.id_telefono, ' , id_rif_cedula = ' ,OLD.id_rif_cedula, ').  Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertar_usuario` AFTER INSERT ON `usuarios` FOR EACH ROW INSERT INTO bitacora (detalles) VALUES(CONCAT('Detalles del nuevo Usuario ingresado :( id_usuario = ', NEW.id_usuario ,' , nombre_usuario = ' ,NEW.nombre_usuario, ' , correo = ' ,NEW.correo,' , clave = ', NEW.clave ,' , direccion = ' ,NEW.direccion, ' , pregunta_secreta = ' , NEW.pregunta_secreta, ' , respuesta_secreta = ' ,NEW.respuesta_secreta, ' , id_nivel = ' ,NEW.id_nivel,' , id_telefono = ' ,NEW.id_telefono, ' , id_rif_cedula = ' ,NEW.id_rif_cedula, ').  Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `modificar_usuario` BEFORE UPDATE ON `usuarios` FOR EACH ROW INSERT INTO bitacora
(detalles)VALUES(CONCAT('Nuevos detalles del Usuario modificado : ( id_usuario = ', NEW.id_usuario ,' , nombre_usuario = ' ,NEW.nombre_usuario, ' , correo = ' ,NEW.correo,' , clave = ', NEW.clave ,' , direccion = ' ,NEW.direccion, ' , pregunta_secreta = ' , NEW.pregunta_secreta, ' , respuesta_secreta = ' ,NEW.respuesta_secreta, ' , id_nivel = ' ,NEW.id_nivel,' , id_telefono = ' ,NEW.id_telefono, ' , id_rif_cedula = ' ,NEW.id_rif_cedula, ').   Antiguos detalles del Usuario que se modifico :( id_usuario = ', OLD.id_usuario ,' , nombre_usuario = ' ,OLD.nombre_usuario, ' , correo = ' ,OLD.correo,' , clave = ', OLD.clave ,' , direccion = ' ,OLD.direccion, ' , pregunta_secreta = ' , OLD.pregunta_secreta, ' , respuesta_secreta = ' ,OLD.respuesta_secreta, ' , id_nivel = ' ,OLD.id_nivel,' , id_telefono = ' ,OLD.id_telefono, ' , id_rif_cedula = ' ,OLD.id_rif_cedula, ').  Realizado el dia (', CURDATE(),')' ))
$$
DELIMITER ;
=======
(24, 'Distrito Capital');
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908

--
-- Índices para tablas volcadas
--

--
<<<<<<< HEAD
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_bitacora`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `id_ciudad` (`id_ciudad`),
  ADD KEY `id_ubicacion` (`id_ubicacion`);
=======
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`),
  ADD KEY `id_administrador` (`id_administrador`),
  ADD KEY `id_telefono` (`id_telefono`),
  ADD KEY `id_rif_cedula` (`id_rif_cedula`);
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigo_cliente`),
  ADD KEY `codigo_cliente` (`codigo_cliente`),
  ADD KEY `id_ubicacion` (`id_ubicacion`),
  ADD KEY `id_telefono` (`id_telefono`),
<<<<<<< HEAD
  ADD KEY `id_rif_cedula` (`id_rif_cedula`),
  ADD KEY `id_ciudad` (`id_ciudad`) USING BTREE;
=======
  ADD KEY `id_rif_cedula` (`id_rif_cedula`);
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id_envio`),
  ADD KEY `id_envio` (`id_envio`),
  ADD KEY `codigo_cliente` (`codigo_cliente`),
  ADD KEY `codigo_producto` (`codigo_producto`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`codigo_grupo`),
  ADD KEY `codigo_grupo` (`codigo_grupo`);

--
<<<<<<< HEAD
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`id_nivel`);

--
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo_producto`),
  ADD KEY `codigo_producto` (`codigo_producto`),
  ADD KEY `codigo_grupo` (`codigo_grupo`),
  ADD KEY `codigo_proveedor` (`codigo_proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`codigo_proveedor`),
  ADD KEY `codigo_proveedor` (`codigo_proveedor`),
  ADD KEY `id_ubicacion` (`id_ubicacion`),
  ADD KEY `id_telefono` (`id_telefono`),
<<<<<<< HEAD
  ADD KEY `id_rif_cedula` (`id_rif_cedula`),
  ADD KEY `id_ciudad` (`id_ciudad`) USING BTREE;
=======
  ADD KEY `id_rif_cedula` (`id_rif_cedula`);
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908

--
-- Indices de la tabla `rif_cedula`
--
ALTER TABLE `rif_cedula`
  ADD PRIMARY KEY (`id_rif_cedula`),
  ADD KEY `id_rif_cedula` (`id_rif_cedula`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`id_telefono`),
  ADD KEY `id_telefono` (`id_telefono`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`),
  ADD KEY `id_ubicacion` (`id_ubicacion`);

--
<<<<<<< HEAD
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_administrador` (`id_usuario`),
  ADD KEY `id_telefono` (`id_telefono`),
  ADD KEY `id_rif_cedula` (`id_rif_cedula`),
  ADD KEY `id_nivel` (`id_nivel`) USING BTREE;

--
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
-- AUTO_INCREMENT de las tablas volcadas
--

--
<<<<<<< HEAD
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=523;
=======
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigo_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `codigo_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
<<<<<<< HEAD
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codigo_producto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `codigo_proveedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rif_cedula`
--
ALTER TABLE `rif_cedula`
<<<<<<< HEAD
  MODIFY `id_rif_cedula` int(11) NOT NULL AUTO_INCREMENT;
=======
  MODIFY `id_rif_cedula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
<<<<<<< HEAD
  MODIFY `id_telefono` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
=======
  MODIFY `id_telefono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
--
-- Restricciones para tablas volcadas
--

--
<<<<<<< HEAD
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id_ubicacion`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `adiministrador_rif_cedula` FOREIGN KEY (`id_rif_cedula`) REFERENCES `rif_cedula` (`id_rif_cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `administrador_telefono` FOREIGN KEY (`id_telefono`) REFERENCES `telefono` (`id_telefono`) ON DELETE CASCADE ON UPDATE CASCADE;
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
<<<<<<< HEAD
  ADD CONSTRAINT `cliente_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id_ciudad`),
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
  ADD CONSTRAINT `cliente_rif_cedula` FOREIGN KEY (`id_rif_cedula`) REFERENCES `rif_cedula` (`id_rif_cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente_telefono` FOREIGN KEY (`id_telefono`) REFERENCES `telefono` (`id_telefono`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente_ubicacion` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id_ubicacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `envio_cliente` FOREIGN KEY (`codigo_cliente`) REFERENCES `cliente` (`codigo_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `envio_clientes` FOREIGN KEY (`codigo_cliente`) REFERENCES `cliente` (`codigo_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `envio_producto` FOREIGN KEY (`codigo_producto`) REFERENCES `producto` (`codigo_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `envio_productos` FOREIGN KEY (`codigo_producto`) REFERENCES `producto` (`codigo_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_grupo` FOREIGN KEY (`codigo_grupo`) REFERENCES `grupo` (`codigo_grupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_proveedor` FOREIGN KEY (`codigo_proveedor`) REFERENCES `proveedor` (`codigo_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
<<<<<<< HEAD
  ADD CONSTRAINT `proveedor_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id_ciudad`) ON DELETE CASCADE ON UPDATE CASCADE,
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
  ADD CONSTRAINT `proveedor_rif_cedula` FOREIGN KEY (`id_rif_cedula`) REFERENCES `rif_cedula` (`id_rif_cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proveedor_telefono` FOREIGN KEY (`id_telefono`) REFERENCES `telefono` (`id_telefono`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proveedor_ubicacion` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id_ubicacion`) ON DELETE CASCADE ON UPDATE CASCADE;

<<<<<<< HEAD
--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_rif_cedula` FOREIGN KEY (`id_rif_cedula`) REFERENCES `rif_cedula` (`id_rif_cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_telefono` FOREIGN KEY (`id_telefono`) REFERENCES `telefono` (`id_telefono`) ON DELETE CASCADE ON UPDATE CASCADE;

=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

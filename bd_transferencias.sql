-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para bd_transferencias
CREATE DATABASE IF NOT EXISTS `bd_transferencias` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `bd_transferencias`;

-- Volcando estructura para tabla bd_transferencias.tb_agente
CREATE TABLE IF NOT EXISTS `tb_agente` (
  `id_agente` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_agente` varchar(100) NOT NULL DEFAULT '0',
  `nacionalidad` varchar(100) NOT NULL DEFAULT '0',
  `comision` varchar(100) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_agente`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla bd_transferencias.tb_agente: ~2 rows (aproximadamente)
DELETE FROM `tb_agente`;
INSERT INTO `tb_agente` (`id_agente`, `nombre_agente`, `nacionalidad`, `comision`, `estado`) VALUES
	(1, 'Claudio Pizarro', 'Chileno', '$123.123,23', 1),
	(2, 'Jorge Mendes', 'Portugués ', '$545.300,00', 1),
	(3, 'Pablo Carrascal', 'Eslovaco', '$45.000,00', 1),
	(4, 'Pablo Carrascal', 'Español', '$545.300,00', 1),
	(5, 'Jorge Mendes', 'Portugués ', '$123.123,23', 1);

-- Volcando estructura para tabla bd_transferencias.tb_contrato
CREATE TABLE IF NOT EXISTS `tb_contrato` (
  `id_contrato` int(10) NOT NULL AUTO_INCREMENT,
  `inicio_contrato` date NOT NULL,
  `fin_contrato` date NOT NULL,
  `salario` varchar(50) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_contrato`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla bd_transferencias.tb_contrato: ~2 rows (aproximadamente)
DELETE FROM `tb_contrato`;
INSERT INTO `tb_contrato` (`id_contrato`, `inicio_contrato`, `fin_contrato`, `salario`, `estado`) VALUES
	(1, '2024-02-10', '2028-02-10', '$30.000,00', 1),
	(2, '2016-04-12', '2025-10-13', '$22.000.000,00', 1),
	(3, '2000-12-01', '2012-11-10', '$1.000.000,00', 1),
	(4, '2024-02-10', '2028-02-10', '$20.000.000,00', 1);

-- Volcando estructura para tabla bd_transferencias.tb_equipoa
CREATE TABLE IF NOT EXISTS `tb_equipoa` (
  `id_equipoa` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_equipo` varchar(100) NOT NULL DEFAULT '0',
  `pais` varchar(100) NOT NULL DEFAULT '0',
  `liga` varchar(100) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_equipoa`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla bd_transferencias.tb_equipoa: ~2 rows (aproximadamente)
DELETE FROM `tb_equipoa`;
INSERT INTO `tb_equipoa` (`id_equipoa`, `nombre_equipo`, `pais`, `liga`, `estado`) VALUES
	(1, 'Barcelona SC', 'Ecuador', 'Liga Pro', 1),
	(2, 'FC Barcelona', 'España', 'La liga', 1),
	(3, 'Flamengo', 'Brasil', 'Brasileirao', 1),
	(4, 'Paris Saint Germain', 'Francia', 'Ligue One', 1);

-- Volcando estructura para tabla bd_transferencias.tb_equipod
CREATE TABLE IF NOT EXISTS `tb_equipod` (
  `id_equipod` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_equipo` varchar(100) NOT NULL DEFAULT '0',
  `pais` varchar(100) NOT NULL DEFAULT '0',
  `liga` varchar(100) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_equipod`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla bd_transferencias.tb_equipod: ~2 rows (aproximadamente)
DELETE FROM `tb_equipod`;
INSERT INTO `tb_equipod` (`id_equipod`, `nombre_equipo`, `pais`, `liga`, `estado`) VALUES
	(1, 'Guaraní', 'Paraguay', 'Primera División de Paraguay', 1),
	(2, 'Inter de Milan', 'Italia', 'Serie A', 1),
	(3, 'Peñarol', 'Uruguay', 'Primera División de Uruguay', 1),
	(4, 'Real Vardrid', 'España', 'La liga', 1);

-- Volcando estructura para tabla bd_transferencias.tb_jugador
CREATE TABLE IF NOT EXISTS `tb_jugador` (
  `id_jugador` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `apellido` varchar(50) NOT NULL DEFAULT '0',
  `nacimiento` date NOT NULL,
  `nacionalidad` varchar(50) NOT NULL DEFAULT '0',
  `posicion` varchar(50) NOT NULL DEFAULT '0',
  `pie_dominante` varchar(1) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_jugador`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla bd_transferencias.tb_jugador: ~2 rows (aproximadamente)
DELETE FROM `tb_jugador`;
INSERT INTO `tb_jugador` (`id_jugador`, `nombre`, `apellido`, `nacimiento`, `nacionalidad`, `posicion`, `pie_dominante`, `estado`) VALUES
	(1, 'Paul', 'Alvarado', '2004-01-25', 'Ecuatoriano', 'MCO-DC-DFC', 'A', 1),
	(2, 'Nacho', 'Fernandez', '1990-01-18', 'Español', 'DFC-LI-LD', 'D', 1),
	(3, 'Lionel', 'Messi', '1987-06-24', 'Argentino', 'ED-DC-EI', 'I', 1),
	(4, 'Bryan', 'Zaragoza', '1999-05-27', 'Español', 'ED-EI', 'A', 1),
	(5, 'Kylian', 'Mbappe', '1997-06-28', 'Frances', 'ED-DC-EI', 'D', 1);

-- Volcando estructura para tabla bd_transferencias.tb_liga
CREATE TABLE IF NOT EXISTS `tb_liga` (
  `id_liga` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_liga` varchar(50) NOT NULL DEFAULT '0',
  `pais` varchar(50) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_liga`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla bd_transferencias.tb_liga: ~2 rows (aproximadamente)
DELETE FROM `tb_liga`;
INSERT INTO `tb_liga` (`id_liga`, `nombre_liga`, `pais`, `estado`) VALUES
	(1, 'Bundesliga', 'Alemania', 1),
	(2, 'La Liga', 'España', 1),
	(3, 'Ligue One', 'Francia', 1),
	(4, 'Ligue One', 'Francia', 1);

-- Volcando estructura para tabla bd_transferencias.tb_negociacion
CREATE TABLE IF NOT EXISTS `tb_negociacion` (
  `id_negociacion` int(10) NOT NULL AUTO_INCREMENT,
  `bonus` varchar(400) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_negociacion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla bd_transferencias.tb_negociacion: ~2 rows (aproximadamente)
DELETE FROM `tb_negociacion`;
INSERT INTO `tb_negociacion` (`id_negociacion`, `bonus`, `estado`) VALUES
	(1, 'Prima por Contrato: $510.000,00 , 15 goles en 26 partidos = $1.000.000,00', 1),
	(2, 'Prima por Contrato: $150.000,00 , 30% de ganancias por derechos de imagen', 1),
	(3, 'Renovación creciente: aumento de 20% salario cada vez que vaya a finalizar contrato.', 1),
	(4, 'Prima por Contrato: $120.000,00 , Derechos de imagen = $50.000.000,00', 1);

-- Volcando estructura para tabla bd_transferencias.tb_posicion
CREATE TABLE IF NOT EXISTS `tb_posicion` (
  `id_posicion` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_posicion` varchar(300) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_posicion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla bd_transferencias.tb_posicion: ~2 rows (aproximadamente)
DELETE FROM `tb_posicion`;
INSERT INTO `tb_posicion` (`id_posicion`, `nombre_posicion`, `estado`) VALUES
	(1, 'Medio Campista Ofensivo = MCO, Delantero Centro= DC y Defensa Central = DFC', 1),
	(2, 'Defensa Central = DFC, Lateral Izquierdo = LI y Lateral Derecho = LD', 1),
	(3, 'Extremo Derecho = ED, Delantero Centro = DC y Extremo Izquierdo = EI', 1),
	(4, 'Extremo Derecho = ED, Delantero Centro = DC y Extremo Izquierdo = EI', 1);

-- Volcando estructura para tabla bd_transferencias.tb_transferencia
CREATE TABLE IF NOT EXISTS `tb_transferencia` (
  `id_transferencia` int(10) NOT NULL AUTO_INCREMENT,
  `id_jugador` int(10) NOT NULL DEFAULT 0,
  `id_equipoa` int(10) NOT NULL DEFAULT 0,
  `id_equipod` int(10) NOT NULL DEFAULT 0,
  `id_contrato` int(10) NOT NULL DEFAULT 0,
  `id_agente` int(10) NOT NULL DEFAULT 0,
  `id_liga` int(10) NOT NULL DEFAULT 0,
  `id_posicion` int(10) NOT NULL DEFAULT 0,
  `id_negociacion` int(10) NOT NULL DEFAULT 0,
  `monto_transferencia` varchar(100) NOT NULL DEFAULT '0',
  `años_contrato` int(10) NOT NULL DEFAULT 0,
  `estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_transferencia`),
  KEY `id_jugador` (`id_jugador`),
  KEY `id_equipoa` (`id_equipoa`),
  KEY `id_equipod` (`id_equipod`),
  KEY `id_contrato` (`id_contrato`),
  KEY `id_agente` (`id_agente`),
  KEY `id_liga` (`id_liga`),
  KEY `id_posicion` (`id_posicion`),
  KEY `id_negociacion` (`id_negociacion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla bd_transferencias.tb_transferencia: ~2 rows (aproximadamente)
DELETE FROM `tb_transferencia`;
INSERT INTO `tb_transferencia` (`id_transferencia`, `id_jugador`, `id_equipoa`, `id_equipod`, `id_contrato`, `id_agente`, `id_liga`, `id_posicion`, `id_negociacion`, `monto_transferencia`, `años_contrato`, `estado`) VALUES
	(1, 1, 2, 3, 3, 1, 2, 2, 1, '$10.000.000,00', 4, 1),
	(2, 1, 2, 3, 3, 1, 2, 2, 3, '$600.000,00', 4, 1),
	(3, 3, 3, 1, 3, 2, 2, 1, 2, '$10.000,00', 2, 1),
	(4, 2, 2, 1, 2, 1, 2, 1, 3, '$0', 5, 1);

-- Volcando estructura para tabla bd_transferencias.tb_usuario
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL DEFAULT '0',
  `clave` varchar(100) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla bd_transferencias.tb_usuario: ~0 rows (aproximadamente)
DELETE FROM `tb_usuario`;
INSERT INTO `tb_usuario` (`id_usuario`, `nombre`, `clave`, `estado`) VALUES
	(1, 'admin', '12345', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

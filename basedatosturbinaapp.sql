-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para turbinaapp
CREATE DATABASE IF NOT EXISTS `turbinaapp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `turbinaapp`;

-- Volcando estructura para tabla turbinaapp.turbina
CREATE TABLE IF NOT EXISTS `turbina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `rotor` varchar(255) DEFAULT NULL,
  `estator` varchar(255) DEFAULT NULL,
  `tobera` varchar(255) DEFAULT NULL,
  `potencia_entrada` int(11) DEFAULT NULL,
  `potencia_salida` int(11) DEFAULT NULL,
  `temperatura_entrada` int(11) DEFAULT NULL,
  `velocidad` int(11) DEFAULT NULL,
  `presion_escape` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla turbinaapp.turbina: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `turbina` DISABLE KEYS */;
INSERT IGNORE INTO `turbina` (`id`, `nombre`, `rotor`, `estator`, `tobera`, `potencia_entrada`, `potencia_salida`, `temperatura_entrada`, `velocidad`, `presion_escape`, `created`, `modified`) VALUES
	(2, 'turbina a vapor verde', 'si', 'si', 'si', 10000, 20000, 200, 2000, 1000, '2018-01-03 15:13:42', '2018-01-03 15:13:42');
/*!40000 ALTER TABLE `turbina` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

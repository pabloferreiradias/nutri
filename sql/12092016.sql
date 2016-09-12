-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.21 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela nutri.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(36) CHARACTER SET latin1 NOT NULL,
  `email` varchar(64) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(36) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela nutri.admin: ~0 rows (aproximadamente)
DELETE FROM `admin`;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `nome`, `email`, `senha`) VALUES
	(1, 'Pablo', 'grimbr@gmail.com', '123456'),
	(2, 'Lincoln ', 'lincoln@cremasco.adv.br', '123456');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


-- Copiando estrutura para tabela nutri.cardapio
CREATE TABLE IF NOT EXISTS `cardapio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) CHARACTER SET latin1 NOT NULL,
  `imagem` varchar(128) CHARACTER SET latin1 NOT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela nutri.cardapio: ~0 rows (aproximadamente)
DELETE FROM `cardapio`;
/*!40000 ALTER TABLE `cardapio` DISABLE KEYS */;
INSERT INTO `cardapio` (`id`, `nome`, `imagem`, `status`) VALUES
	(1, 'Cardápio 1', 't1.JPG', 1),
	(2, 'Cardápio 2', 't2.JPG', 1),
	(3, 'Cardápio Vegetariano', 't3.JPG', 1),
	(4, 'Caldos', 't4.jpg', 1),
	(5, 'Cookies', 't5.jpg', 1),
	(6, 'Cardápio Gourmet', 't6.jpg', 1);
/*!40000 ALTER TABLE `cardapio` ENABLE KEYS */;


-- Copiando estrutura para tabela nutri.pratos
CREATE TABLE IF NOT EXISTS `pratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cardapio` int(11) NOT NULL,
  `posicao` varchar(2) CHARACTER SET latin1 NOT NULL,
  `texto` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cardapio` (`id_cardapio`),
  CONSTRAINT `pratos_ibfk_1` FOREIGN KEY (`id_cardapio`) REFERENCES `cardapio` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela nutri.pratos: ~0 rows (aproximadamente)
DELETE FROM `pratos`;
/*!40000 ALTER TABLE `pratos` DISABLE KEYS */;
INSERT INTO `pratos` (`id`, `id_cardapio`, `posicao`, `texto`) VALUES
	(1, 1, 'A', 'Arroz integral com gergelim negro(l)\r\nLombo Suíno Grelhado com molho de abacaxi(l)\r\nCenoura Sautê'),
	(2, 1, 'B', 'Arroz Integral com couve manteiga(l)\r\nSobrecoxa com molho de gorgonzola e castanhas(l)\r\nCouve flor com ervas frescas'),
	(3, 1, 'C', 'Batata doce assada com molho barbecue(l)\r\nCarne magra moída com ervilhas e gergelim(l)\r\nBeterraba cozida no'),
	(4, 1, 'D', 'Arroz integral com cenoura e tomate seco(l)\r\nFilé de tilápia com molho de laranja e gengibre(l)\r\nPurê de mandioquinha com chia'),
	(5, 1, 'E', 'Bolinho de mandioca assado(l)\r\nFilé de frango a parmegiana(l)\r\nVagem e cenoura com gergelim'),
	(6, 1, 'F', 'Risoto de alho poró(l)\r\nBife bovino á rolê ao molho do chef(l)\r\nCreme de milho');
/*!40000 ALTER TABLE `pratos` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `hamburguers` (
  `id_hamb` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `ativo` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id_hamb`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `ingredientes` (
  `id_ing` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id_ing`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `hamburguers` (`id_hamb`, `nome`, `valor`, `ativo`) VALUES
(1, 'Hamburguer Clássico', '20.00', 1);
INSERT INTO `hamburguers` (`id_hamb`, `nome`, `valor`, `ativo`) VALUES
(2, 'Hamburguer Vegetariano', '14.50', 1);
INSERT INTO `hamburguers` (`id_hamb`, `nome`, `valor`, `ativo`) VALUES
(3, 'Hamburguer Duplo', '20.00', 1);
INSERT INTO `hamburguers` (`id_hamb`, `nome`, `valor`, `ativo`) VALUES
(4, 'Hamburguer de Frango', '16.00', 1),
(5, 'Hamburguer Especial', '18.50', 1),
(6, 'Hamburguer de Peixe', '17.50', 1),
(7, 'Hamburguer Picante', '16.50', 1),
(8, 'Hamburguer Vegano', '15.50', 1),
(9, 'Hamburguer Supreme', '22.00', 1),
(10, 'Hamburguer Gourmet', '25.00', 1),
(11, 'Hamburguer de Cordeiro', '21.00', 1),
(12, 'Hamburguer de Picanha', '23.00', 1),
(13, 'Hamburguer de Bacon', '19.50', 1),
(14, 'Hamburguer de Salmão', '24.50', 1),
(15, 'Hamburguer de Camarão', '28.00', 1),
(16, 'Hamburguer Gaudério', '30.00', 1),
(17, 'Hamburguer de Cusco', '50.00', 1),
(18, 'Hamburguer Farroupilha', '20.00', 1);

INSERT INTO `ingredientes` (`id_ing`, `nome`, `quantidade`) VALUES
(3, 'Alface', 30);
INSERT INTO `ingredientes` (`id_ing`, `nome`, `quantidade`) VALUES
(4, 'Tomate', 25);
INSERT INTO `ingredientes` (`id_ing`, `nome`, `quantidade`) VALUES
(5, 'Cebola', 18);
INSERT INTO `ingredientes` (`id_ing`, `nome`, `quantidade`) VALUES
(6, 'Maionese', 40),
(7, 'Picles', 15),
(8, 'Mostarda', 35),
(9, 'Molho Especial', 45),
(10, 'Cogumelos', 18),
(11, 'Abacate', 22),
(12, 'Ovo', 60),
(13, 'Bacon', 40),
(14, 'Salmão', 30),
(15, 'Camarão', 25),
(16, 'Páprica', 9),
(17, 'Queijo Cheddar', 50);


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
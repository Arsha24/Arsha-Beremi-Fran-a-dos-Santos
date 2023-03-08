
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `protagonista` (
  `id_prota` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `prota` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Protagonistas';


INSERT INTO `protagonista` (`id_prota`, `nome`, `prota`) VALUES
(1, 'Gojo', NULL),
(2, 'Yuta', NULL),
(3, 'Yuji', NULL),
(4, 'Megumi', NULL);



CREATE TABLE `vilao` (
  `id_vilao` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Vilao favorito/ mais poderoso';

INSERT INTO `vilao` (`id_vilao`, `nome`) VALUES
(1, 'Kenjaku'),
(2, 'Sukuna'),
(3, 'Mahito');


CREATE TABLE `opiniao` (
  `id_vilao` int(11) NOT NULL,
  `id_nota` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `opiniao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Opiniao';

CREATE TABLE `dados` (
  `id_dados` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `opiniao` text NOT NULL,
  `id_vilao` int(11) NOT NULL,
  `id_nota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='lista de produtos/moveis';

ALTER TABLE `protagonista`
  ADD PRIMARY KEY (`id_prota`);


ALTER TABLE `vilao`
  ADD PRIMARY KEY (`id_vilao`);


ALTER TABLE `opiniao`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `fk_nome_vilao` (`id_vilao`);





ALTER TABLE `protagonista`
  MODIFY `id_prota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `vilao`
  MODIFY `id_vilao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `opiniao`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `dados`
  MODIFY `id_dados` int(11) NOT NULL AUTO_INCREMENT;

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jun-2022 às 04:31
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetophp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `nome` varchar(40) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `usuario_idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`nome`, `telefone`, `email`, `sexo`, `datanasc`, `usuario_idusuario`) VALUES
('Maria', '(61) 4848-48484', 'mary@hotmail.com', 'F', '1997-01-01', 38);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `nome` varchar(40) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `usuario_idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `proteina` varchar(40) DEFAULT NULL,
  `quantidade1` enum('10','20','30') DEFAULT NULL,
  `carboidrato` varchar(40) DEFAULT NULL,
  `quantidade2` enum('10','20','30') DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `horario` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`proteina`, `quantidade1`, `carboidrato`, `quantidade2`, `email`, `endereco`, `horario`) VALUES
('Omelete de Espinafre', '20', 'Salada de Espinafre', '20', 'jobs@hotmail.com', 'Infinite Loop Avenue', '13h à 18h'),
('Omelete de Espinafre', '20', 'Salada de Tomate', '20', 'teste123@hotmail.com', 'Liverpool Street', '19h à 21h');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL,
  `nome_perfil` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`idperfil`, `nome_perfil`) VALUES
(1, 'Administrador'),
(2, 'Funcionário'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `user` varchar(30) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `perfil_idperfil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `user`, `pass`, `perfil_idperfil`) VALUES
(16, 'Block', '123', 1),
(17, 'Felipe', '202cb962ac59075b964b07152d234b70', 1),
(18, 'Paul', '1f3870be274f6c49b3e31a0c6728957f', 2),
(31, 'teste123', '202cb962ac59075b964b07152d234b70', 3),
(32, 'Felipe456', '250cf8b51c773f3f8dc8b4be867a9a02', 1),
(33, 'teste123', '202cb962ac59075b964b07152d234b70', 3),
(36, 'work123', '202cb962ac59075b964b07152d234b70', 2),
(37, 'João478', 'cfee398643cbc3dc5eefc89334cacdc1', 2),
(38, 'Maria454', 'e44fea3bec53bcea3b7513ccef5857ac', 3),
(39, 'João478', 'cfee398643cbc3dc5eefc89334cacdc1', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD KEY `usuario_idusuario` (`usuario_idusuario`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD KEY `usuario_idusuario` (`usuario_idusuario`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idperfil`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `perfil_idperfil` (`perfil_idperfil`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`perfil_idperfil`) REFERENCES `perfil` (`idperfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

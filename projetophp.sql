-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jun-2022 às 19:47
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
('Teste', '(51) 5555-55555', 'teste2@aol.com', 'M', '2001-01-01', 31);

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

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`nome`, `telefone`, `email`, `sexo`, `datanasc`, `usuario_idusuario`) VALUES
('Felipe', '(55) 5555-55555', 'felipe@email.com', 'M', '1997-02-04', 17),
('Paul', '(61) 6161-61616', 'paul_beatle@gmail.com', 'M', '1980-01-01', 18),
('Felipe', '(61) 9859-65995', 'mrfelipesensei@gmail.com', 'M', '1997-02-04', 32);

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
(32, 'Felipe456', '250cf8b51c773f3f8dc8b4be867a9a02', 1);

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
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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

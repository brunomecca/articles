-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Maio-2017 às 00:16
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `articles`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `link` text NOT NULL,
  `categoria` varchar(300) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `data` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `links`
--

INSERT INTO `links` (`id`, `idUser`, `link`, `categoria`, `nome`, `data`) VALUES
(10, 1, 'http://www.devmedia.com.br/curso/curso-online-de-jsf-java-server-faces/393', 'Curso para web', 'Curso de JSF', '23/05/2017'),
(11, 1, 'https://www.caelum.com.br/apostila-java-web/', 'Java web', 'Apostila para Java Web', '23/05/2017'),
(12, 1, 'http://ogres-crypt.com/public/NetFlix-Streaming-Genres2.html', 'Entretenimento', 'Gêneros de filmes para netflix', '23/05/2017'),
(13, 2, 'https://www.ime.usp.br/~pf/analise_de_algoritmos/', 'estudo para prova', 'Projeto e Análise de Algoritmos', '23/05/2017'),
(14, 2, 'https://pt.wikipedia.org/wiki/Universo', 'cosmologia', 'Universo', '23/05/2017'),
(15, 2, 'https://pt.wikipedia.org/wiki/Origem_do_Universo', 'cosmologia', 'Origem do universo', '23/05/2017');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `usuario` text NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `usuario`, `senha`, `email`) VALUES
(1, 'bruno', 'bruno', 'bruno', 'bruno@bruno.bruno'),
(2, 'pedro', 'pedro', 'pedro', 'pedro@pedro.pedro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

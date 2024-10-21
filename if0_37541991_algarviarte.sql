-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql204.infinityfree.com
-- Generation Time: Oct 18, 2024 at 04:12 PM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_37541991_algarviarte`
--

-- --------------------------------------------------------

--
-- Table structure for table `acessos_backoffice`
--

CREATE TABLE `acessos_backoffice` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_acesso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acessos_backoffice`
--

INSERT INTO `acessos_backoffice` (`id`, `nome`, `data_acesso`) VALUES
(1, 'Miguel Martins', '26/08/2024 - 15:46:56'),
(2, 'Miguel Martins', '26/08/2024 - 15:47:19'),
(3, 'Catarina Pereira', '26/08/2024 - 15:48:10'),
(4, 'Miguel Martins', '26/08/2024 - 15:52:21'),
(5, 'Miguel Martins', '26/08/2024 - 15:54:46'),
(6, 'Catarina Pereira', '26/08/2024 - 15:57:37'),
(7, 'Miguel Martins', '26/08/2024 - 15:57:57'),
(8, 'Miguel Martins', '02/09/2024 - 14:28:14'),
(9, 'Miguel Martins', '02/09/2024 - 14:44:37'),
(10, 'Miguel Martins', '02/09/2024 - 14:53:59'),
(11, 'Miguel Martins', '02/09/2024 - 14:58:24'),
(12, 'Miguel Martins', '04/09/2024 - 13:21:48'),
(13, 'Miguel Martins', '04/09/2024 - 13:37:12'),
(14, 'Miguel Martins', '04/09/2024 - 13:45:17'),
(15, 'Miguel Martins', '04/09/2024 - 15:47:46'),
(16, 'Miguel Martins', '01/10/2024 - 14:02:42'),
(17, 'Miguel Martins', '03/10/2024 - 15:58:27'),
(18, 'Miguel Martins', '04/10/2024 - 16:04:57'),
(19, 'Miguel Martins', '11/10/2024 - 15:06:01'),
(20, 'Miguel Martins', '11/10/2024 - 16:28:57'),
(21, 'Miguel Martins', '11/10/2024 - 16:29:38'),
(22, 'Miguel Martins', '11/10/2024 - 16:30:13'),
(23, 'Miguel Martins', '11/10/2024 - 16:31:07'),
(24, 'Miguel Martins', '11/10/2024 - 17:03:10'),
(25, 'Miguel Martins', '14/10/2024 - 15:50:45'),
(26, 'Miguel Martins', '14/10/2024 - 16:57:20'),
(27, 'Miguel Martins', '14/10/2024 - 19:45:21'),
(28, 'Miguel Martins', '14/10/2024 - 19:51:00'),
(29, 'Miguel Martins', '18/10/2024 - 14:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `backoffice`
--

CREATE TABLE `backoffice` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `ultimo_acesso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backoffice`
--

INSERT INTO `backoffice` (`id`, `nome`, `user`, `pass`, `ultimo_acesso`) VALUES
(1, 'Catarina Pereira', 'cper89', 'kat140989', '26/08/2024 - 15:57:37'),
(2, 'Miguel Martins', 'mike123', 'teste123', '18/10/2024 - 14:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `brincos_aco_inoxidavel`
--

CREATE TABLE `brincos_aco_inoxidavel` (
  `id` int(11) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `referencia` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brincos_aco_inoxidavel`
--

INSERT INTO `brincos_aco_inoxidavel` (`id`, `imagem`, `referencia`) VALUES
(1, 'http://algarviarte.great-site.net/img/img3.jpg', 'ref ai 1'),
(3, 'http://algarviarte.great-site.net/img/img4.jpg', 'ref ai 3'),
(5, 'http://algarviarte.great-site.net/img/img8.jpg', 'ref. ai 10'),
(6, 'http://algarviarte.great-site.net/img/img9.jpg', 'ref ai 15'),
(9, 'http://algarviarte.great-site.net/img/img3.jpg', 'ref ai 28');

-- --------------------------------------------------------

--
-- Table structure for table `brincos_curtos`
--

CREATE TABLE `brincos_curtos` (
  `id` int(11) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `referencia` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brincos_curtos`
--

INSERT INTO `brincos_curtos` (`id`, `imagem`, `referencia`) VALUES
(4, 'http://algarviarte.great-site.net/img/img8.jpg', 'ref curtos 8'),
(6, 'http://algarviarte.great-site.net/img/img6.jpg', 'ref curtos 9'),
(8, 'http://algarviarte.great-site.net/img/img5.jpg', 'ref curtos 10');

-- --------------------------------------------------------

--
-- Table structure for table `brincos_pendentes`
--

CREATE TABLE `brincos_pendentes` (
  `id` int(11) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `referencia` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brincos_pendentes`
--

INSERT INTO `brincos_pendentes` (`id`, `imagem`, `referencia`) VALUES
(3, 'http://algarviarte.great-site.net/img/img3.jpg', 'ref pend 3'),
(4, 'http://algarviarte.great-site.net/img/img4.jpg', 'ref pend 4'),
(5, 'http://algarviarte.great-site.net/img/img5.jpg', 'ref pend 5'),
(7, 'http://algarviarte.great-site.net/img/img8.jpg', 'ref pend 10'),
(8, 'http://algarviarte.great-site.net/img/img10.jpg', 'ref pend 12');

-- --------------------------------------------------------

--
-- Table structure for table `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `texto_contactos` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactos`
--

INSERT INTO `contactos` (`id`, `texto_contactos`) VALUES
(1, '<p>Através das nossas páginas no Instagram e no Facebook, poderás enviar-nos mensagem privada. Responderemos tão breve quanto possível.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `home_title` varchar(300) NOT NULL,
  `primary_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `home_title`, `primary_text`) VALUES
(1, 'Coleção de verão 2024', 'Texto da HOME PAGE ALGARVIARTE com edição, sit amet consectetur adipisicing elit. Repellat,\r\nsequi pariatur natus doloribus error commodi vero amet aspernatur\r\nperspiciatis, aut ipsum temporibus provident quibusdam dolorum ab\r\nvel molestias asperiores quisquam ad fugit culpa. Debitis\r\nperferendis consequatur odio dolorem nemo explicabo libero dolorum\r\nsaepe accusamus quod est, maiores quia. Expedita, et?\r\n\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Rem\r\nvoluptas quaerat omnis dolores maiores, dolorem voluptate corrupti\r\nveniam, earum enim, expedita nobis? Atque rem quos officia\r\naccusantium impedit, illum assumenda ex a sit inventore alias\r\ntenetur sunt officiis saepe? Magni, voluptates vitae perferendis\r\nfacere quam beatae dolorem fugiat accusamus nam!');

-- --------------------------------------------------------

--
-- Table structure for table `informacao`
--

CREATE TABLE `informacao` (
  `id` int(11) NOT NULL,
  `texto1` longtext NOT NULL,
  `encomendar` varchar(300) NOT NULL,
  `texto_encomendar` longtext NOT NULL,
  `pagamento` varchar(300) NOT NULL,
  `texto_pagamento` longtext NOT NULL,
  `envio` varchar(300) NOT NULL,
  `texto_envio` longtext NOT NULL,
  `devolver` varchar(300) NOT NULL,
  `texto_devolver` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informacao`
--

INSERT INTO `informacao` (`id`, `texto1`, `encomendar`, `texto_encomendar`, `pagamento`, `texto_pagamento`, `envio`, `texto_envio`, `devolver`, `texto_devolver`) VALUES
(1, '<p>TEXTO DA INFORMAÇÃO Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis cumque commodi alias voluptatibus amet reprehenderit optio cum asperiores ex eaque</p>', 'Como encomendar', '<ul><li>Envia mensagem privada (pelas redes sociais) com o pedido;</li><li>Se o artigo estiver disponível, o envio será feito entre três (03) a cinco (05) dias após a confirmação do pagamento;</li><li>Se quiseres um artigo personalizado, o envio poderá ser feito até sete (07) dias.</li></ul>', 'Como efetuar o pagamento', '<ul><li>MB Way - encomenda enviada entre três (03) a cinco (05) dias após o pagamento;</li><li>Transferência bancária - os itens ficam reservados durante quarenta e oito (48) horas até que seja confirmado o pagamento;</li><li>Dinheiro - para entregas em mãos.</li></ul>', 'Como é feito o envio', '<ul><li>Entregamos em mãos as encomendas da zona de Tavira;</li><li>Correio registado através dos CTT - acresce três (03) euros ao valor total da encomenda;</li><li>Portes grátis para encomendas de valor igual ou superior a vinte e cinco (25) euros.</li></ul>', 'Como é possível devolver', '<ul><li>Realizamos trocas ou devoluções, sem custos adicionais, no prazo de oito (08) dias após receção da encomenda ou em caso de defeito;</li><li>Para efetuar uma troca ou devolução, basta efetuar contacto por mensagem privada (pelas redes sociais).</li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `redes`
--

CREATE TABLE `redes` (
  `id` int(11) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `instagram` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `redes`
--

INSERT INTO `redes` (`id`, `facebook`, `instagram`) VALUES
(1, 'https://www.facebook.com/share/qP8bznvGM4wBac4D/', 'https://www.instagram.com/algarviarte/?igsh=MW1rcDQ5bnZnNzBhbA%3D%3D');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_brincos`
--

CREATE TABLE `tipo_brincos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `pagina` varchar(300) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipo_brincos`
--

INSERT INTO `tipo_brincos` (`id`, `titulo`, `pagina`, `texto`) VALUES
(1, 'pendentes', 'brincos_pendentes', 'Brincos PENDENTES são..., ipsum dolor sit amet consectetur adipisicing elit. Labore aspernatur natus dolorem aut! Ratione, laboriosam cupiditate nulla unde, natus quia eos placeat tempora veniam in nostrum corrupti. Praesentium, dolorem inventore.'),
(2, 'curtos', 'brincos_curtos', 'Brincos CURTOS são..., ipsum dolor sit amet consectetur adipisicing elit. Labore aspernatur natus dolorem aut! Ratione, laboriosam cupiditate nulla unde, natus quia eos placeat tempora veniam in nostrum corrupti. Praesentium, dolorem inventore.'),
(3, 'aço inoxidável', 'brincos_aco_inoxidavel', 'Brincos AÇO INOXIDÁVEL são..., ipsum dolor sit amet consectetur adipisicing elit. Labore aspernatur natus dolorem aut! Ratione, laboriosam cupiditate nulla unde, natus quia eos placeat tempora veniam in nostrum corrupti. Praesentium, dolorem inventore.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acessos_backoffice`
--
ALTER TABLE `acessos_backoffice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backoffice`
--
ALTER TABLE `backoffice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brincos_aco_inoxidavel`
--
ALTER TABLE `brincos_aco_inoxidavel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brincos_curtos`
--
ALTER TABLE `brincos_curtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brincos_pendentes`
--
ALTER TABLE `brincos_pendentes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informacao`
--
ALTER TABLE `informacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_brincos`
--
ALTER TABLE `tipo_brincos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acessos_backoffice`
--
ALTER TABLE `acessos_backoffice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `backoffice`
--
ALTER TABLE `backoffice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brincos_aco_inoxidavel`
--
ALTER TABLE `brincos_aco_inoxidavel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `brincos_curtos`
--
ALTER TABLE `brincos_curtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brincos_pendentes`
--
ALTER TABLE `brincos_pendentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `informacao`
--
ALTER TABLE `informacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipo_brincos`
--
ALTER TABLE `tipo_brincos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

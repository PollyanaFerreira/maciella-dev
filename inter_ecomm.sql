-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/11/2023 às 15:45
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `inter_ecomm`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome_produto` varchar(60) NOT NULL,
  `imagem` varchar(45) NOT NULL,
  `descrição` varchar(500) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `ocupação` varchar(45) NOT NULL,
  `preço` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome_produto`, `imagem`, `descrição`, `categoria`, `ocupação`, `preço`) VALUES
(1, 'Anel Life Ocean Prata Cravejado verde e Incolor', 'img\\produtos\\ANEIS\\anel cristal', 'Sugestão: Para ela\r\nColeção: Ocean\r\nGarantia: 3 meses\r\nMaterial: Prata\r\nLargura: Aproximadamente 1,8 mm\r\nPedras: Zircônia\r\n', 'Anel', 'Geral', 490),
(2, 'Brinco Riviere com pingente', 'img\\produtos\\BRINCOS\\brinco cristal', 'Descrição: Fabricados na Itália, estes brincos sofisticados são feitos de metal banhado a prata e cravejados com strass.\r\n\r\nFecho padrão\r\nLatão banhado a prata\r\nComprimento: 3,81 cm\r\nComposição: 70% vidro, 30% metal\r\nProduzido em: Itália\r\n', 'Brinco', 'Geral', 1550),
(3, 'Colar Riviere com strass', 'img\\produtos\\COLARES\\colar cristal', 'Fabricado na Itália, este colar sofisticado é feito de metal banhado a prata e cravejado com strass.\r\n\r\nFecho lagosta\r\nLatão banhado a prata\r\nDisco com monograma\r\nComprimento: 33 cm mais extensão de 6,98 cm\r\nComposição: 70% vidro, 30% metal\r\nProduzido em: Itália\r\n', 'Colar', 'Geral', 4250),
(4, 'Anel Infinito em Prata 925 e Pérola  	', 'img\\produtos\\ANEIS\\anel perola', 'Sugestão: Para ela\r\nColeção: Infinito Perola Prata\r\nMaterial: Prata\r\nLargura: Aproximadamente 10 mm\r\nPedras: Pérola\r\n', 'Anel', 'Coleção Peróla', 590),
(5, 'Brinco de flor com pérola', 'img\\produtos\\BRINCOS\\brinco perola', 'Adicione um toque feminino aos seus looks com estes brincos de flor de pérola.\r\nPérolas de resina laqueadas\r\nPeças de metal banhado\r\nFecho francês\r\nDiâmetro: 3,81 cm\r\nComposição: 90% acrílico, 10% metal\r\nProduzido em: Itália \r\n', 'Brinco', 'Coleção Pérola', 0),
(6, 'Colar de pérola', 'img\\produtos\\COLARES\\colar perola', 'Este colar de pérolas valoriza qualquer conjunto com sua elegância simples.\r\n\r\nPérolas de resina laqueadas\r\nCorrente de metal banhado\r\nFecho lagosta\r\nComprimento: 41,9 cm mais extensão de 7,62 cm\r\nComposição: 80% acrílico, 20% metal Itália\r\nProduzido em: Itália\r\n', 'Colar', 'Coleção Pérola', 2650),
(7, 'Anel Life Coloré Prata Pedra Preta', 'img\\produtos\\ANEIS\\anel pedra', 'Pedras: Cristal verde\r\nSugestão: Para ela\r\nColeção: Coloré\r\nGarantia: 3 meses\r\nMaterial: Prata\r\nLargura: Aproximadamente 1,8mm\r\n', 'Anel', 'Coleção Pedra', 360),
(8, 'Brinco riviera Alegria com pendente de Pedra Preta', 'img\\produtos\\BRINCOS\\brinco pedra', 'Adicione um toque de glamour vintage com estes brincos riviere longos de cristal.\r\n\r\nComposição: 70% vidro, 30% metal\r\nProduzido em: Itália\r\n', 'Brinco', 'Coleção Pedra', 2100),
(9, 'Colar Alegría Empress de Pedra Preta', 'img\\produtos\\COLARES\\colar pedra', 'Cravejado com cristais facetados e pedras pretas, esta elegante gargantilha é perfeito para uma imperatriz moderna.\r\n\r\nFecho lagosta\r\nComposição: 70% acrílico, 30% metal\r\nProduzido em: Itália\r\n', 'Colar', 'Coleção Pedra', 3700),
(10, 'Anel Life Flora Rosa Liga Prata', 'img\\produtos\\ANEIS\\anel flor', 'Sugestão: Para ela\r\nColeção: Flora\r\nGarantia: 3 meses\r\nMaterial: Liga prata + Banho de prata\r\nLargura: aproximadamente 2 mm\r\n', 'Anel', 'Geral', 350),
(11, 'Brinco Flora com flor grande ', 'img\\produtos\\BRINCOS\\brinco flor', 'Adicione um toque floral ao look com estes brincos de flor esmaltados.\r\n\r\nFecho clip\r\nComposição: 80% metal, 20% vidro\r\nProduzido em: Itália\r\n\r\n', 'Brinco', 'Geral', 2100),
(12, 'Colar com flor de resina', 'img\\produtos\\COLARES\\colar flor', 'Um cacho de flores de resina decora um colar de corrente prata, valorizando o pescoço.\r\n\r\nFlores de resina\r\nCorrente dupla prata\r\nFecho lagosta\r\nComprimento: 38,1 cm mais extensão de 5 cm\r\nComposição: 55% Acrílico, 30% Metal, 10% Alúmen, 5% Vidro\r\nInstruções de lavagem: Lave somente a seco\r\nProduzido em: Itália\r\n', 'Colar', 'Geral', 3700),
(13, 'SERPENTI VIPER ANEL', 'img\\produtos\\ANEIS\\anel serpente', 'Em um tributo a seu espírito animal, a Maciella captura o poder de sedução neste anel Serpenti, camuflando sensualidade e tentação com um design hipnótico. Sofisticada e glamorosa, esta joia se envolve no dedo, encantando com a beleza preciosa de escamas e com a sinuosidade inconfundível da serpente. Anel Serpenti em prata 18K com diamantes cravejados.\r\n	\r\n	Material: 80% metal, 20% vidro\r\n 	Diamantes (Quilates): 0.53\r\nPedra preciosa: Diamonds\r\n 	Tamanho: M\r\n Redimensionável: Não Redimensionável\r', 'Anel', 'Coleção Serpente', 64000),
(14, 'SERPENTI VIPER BRINCOS', 'img\\produtos\\BRINCOS\\brinco serpente', 'Uma interpretação ultramoderna do famoso ícone de glamour e sedução da Maciella, Serpenti Viper encanta com seu design ousado, inovador e cativante. Revelando a mítica serpente por meio de formas geométricas e elegantes, os brincos encontram o equilíbrio perfeito entre a beleza preciosa das escamas e a sinuosidade inconfundível da coleção Serpenti.\r\nBrincos Serpenti Viper em prata 18K com pavê de diamantes.\r\n\r\nMaterial: 80% metal, 20% vidro\r\n Diamantes (Quilates): 0.75\r\n Pedra preciosa: Diamonds', 'Brinco', 'Coleção Serpente', 62000),
(15, 'SERPENTI COLAR', 'img\\produtos\\COLARES\\colar serpente', ': Interpretação inconfundível do ícone de metamorfose infinita e transformação implacável da Maciella, o colar Serpenti em prata 18K representa uma mistura cativante entre técnica artesanal audaciosa, design icônico e criatividade ilimitada. O corpo precioso da serpente é artisticamente feito de pequenas contas de ouro móveis acrescentando movimento e apelo tátil à peça de joalheria, enquanto sua cabeça hipnotizante e cauda sinuosa são elegantemente cravejadas com pavê de diamantes.\r\n\r\n	Material', 'Colar', 'Coleção Serpente', 159000);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(110) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `telefone` int(15) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `data_nasc` date NOT NULL,
  `endereço` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `telefone`, `sexo`, `data_nasc`, `endereço`, `estado`, `cidade`) VALUES
(1, 'Mateus Henrique', 'teushenrique07@hotmail.com', '123', 0, 'masculino', '2023-10-12', 'ali', 'RJ', 'ita'),
(2, 'Mateus Henrique', 'teushenrique0105@gmail.com', '123', 13, 'masculino', '2023-10-12', 'ali', 'RJ', 'ita'),
(3, 'Lucas', 'soraesosvaldo129@gmail.com', '123', 13, 'masculino', '2023-10-08', 'ali', 'RJ', 'ita');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

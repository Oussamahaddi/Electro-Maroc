-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 06 fév. 2023 à 21:50
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `electromaroc`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'oussama@gmail.com', '123'),
(2, 'anasnakh@gmail.com', '123'),
(3, 'anasnakh@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_description` longtext NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `category_description`, `picture`) VALUES
(3, 'turboxx', 'this is a electronique category that accept any electronique', 'p7.png'),
(4, 'Electronique', 'Et quia et sed susci', 'k5.png'),
(5, 'Mouse', 'mousess', 'm4.png');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `full_name`, `mobile`, `address`, `city`, `email`, `password`) VALUES
(1, 'oussamahaddi', '', '', '', 'oussama@gmail.com', '123123'),
(2, 'test', '', '', '', 'test@gmail.com', '123456'),
(4, 'Oussama Haddi', '', '', '', 'oussama.haddi@gmail.com', 'oussama'),
(5, 'test turbo', '', '', '', 'test.test@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `creation_date` varchar(255) DEFAULT NULL,
  `sending_date` varchar(255) DEFAULT NULL,
  `retreving_date` varchar(255) DEFAULT NULL,
  `id_client` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `unit_price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_price_product` int(11) DEFAULT NULL,
  `total_price_commande` int(11) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `creation_date`, `sending_date`, `retreving_date`, `id_client`, `id_product`, `unit_price`, `quantity`, `total_price_product`, `total_price_commande`, `status`) VALUES
(1, '05-02-23 05', '', '', 4, 14, 100, 1, 100, 0, 'refused'),
(2, '05-02-23', '', '', 4, 14, 100, 3, 300, 0, 'Accepted'),
(3, '06-02-23', '', '', 4, 14, 100, 8, 800, 0, 'Accepted'),
(4, '06-02-23', '', '', 4, 14, 100, 5, 500, 0, 'Accepted'),
(5, '06-02-23', '', '', 4, 18, 308, 6, 1848, 0, 'Accepted');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `id_product`, `id_client`, `quantite`) VALUES
(8, 14, 4, 1),
(9, 14, 4, 1),
(10, 14, 4, 1),
(11, 14, 4, 1);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `panier_view`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `panier_view` (
`id` int(11)
,`id_product` int(11)
,`id_client` int(11)
,`quantite` int(11)
,`id_p` int(11)
,`reference` varchar(255)
,`libelle` varchar(255)
,`bar_code` varchar(255)
,`retail_price` float
,`final_price` float
,`selling_price` float
,`description` text
,`category` int(11)
,`image` varchar(255)
,`quantity` int(11)
);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id_p` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `bar_code` varchar(255) NOT NULL,
  `retail_price` float NOT NULL,
  `final_price` float NOT NULL,
  `selling_price` float NOT NULL,
  `description` text NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id_p`, `reference`, `libelle`, `bar_code`, `retail_price`, `final_price`, `selling_price`, `description`, `category`, `image`, `quantity`) VALUES
(14, 'oussama', 'haddi', 'Js', 199.99, 199.99, 99.99, 'hellow my name is oussama and im in love with javascript specialy REACTJS but i know that im working now with vuejs cus it easy and i dont have any time to learn other thing', 3, 'p2.png', 10),
(15, 'abdo', 'ob', '#1111', 199.99, 200, 50.59, 'hellow my name is zrir9', 3, 'p4.png', 11),
(16, 'Inventore qui sit e', 'Davis Myers', 'Enim eos voluptatem', 925, 57, 888, 'In amet aliquam aut', 3, 'p7.png', 967),
(17, 'Et cumque et aliquip', 'Tobias Stanton', 'Architecto aut quasi', 354, 556, 964, 'Deserunt repellendus', 4, 'k3.png', 938),
(18, 'Molestiae illo iure', 'Paul Phillips', 'Odit anim est labori', 894, 240, 308, 'Et ipsum ut praesent', 4, 'm3.png', 566),
(19, 'Et dignissimos nisi', 'Marvin Pugh', 'Nemo eiusmod nulla p', 800, 50, 571, 'Ratione minima elige', 5, 'm8.png', 642),
(20, 'Numquam voluptatum a', 'Kelly Kelly', 'Est quia dicta quae', 769, 722, 572, 'Quod in enim ut quia', 3, 'm1.png', 677);

-- --------------------------------------------------------

--
-- Structure de la vue `panier_view`
--
DROP TABLE IF EXISTS `panier_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `panier_view`  AS SELECT `pa`.`id` AS `id`, `pa`.`id_product` AS `id_product`, `pa`.`id_client` AS `id_client`, `pa`.`quantite` AS `quantite`, `p`.`id_p` AS `id_p`, `p`.`reference` AS `reference`, `p`.`libelle` AS `libelle`, `p`.`bar_code` AS `bar_code`, `p`.`retail_price` AS `retail_price`, `p`.`final_price` AS `final_price`, `p`.`selling_price` AS `selling_price`, `p`.`description` AS `description`, `p`.`category` AS `category`, `p`.`image` AS `image`, `p`.`quantity` AS `quantity` FROM (`panier` `pa` join `product` `p` on(`pa`.`id_product` = `p`.`id_p`))  ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`,`id_client`,`id_product`),
  ADD KEY `commande_ibfk_1` (`id_client`),
  ADD KEY `commande_ibfk_2` (`id_product`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`,`id_product`,`id_client`),
  ADD KEY `panier_ibfk_1` (`id_product`),
  ADD KEY `panier_ibfk_2` (`id_client`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_category` (`category`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `id_category` FOREIGN KEY (`category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

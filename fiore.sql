-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 13 fév. 2020 à 12:45
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fiore`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contact_cord`
--

DROP TABLE IF EXISTS `contact_cord`;
CREATE TABLE IF NOT EXISTS `contact_cord` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact_cord`
--

INSERT INTO `contact_cord` (`id`, `adresse`, `email`, `tel`, `fax`) VALUES
(3, 'Fromagerie Fiore Km 1 Route d\'Azmour 8080 Menzel Temime. Tunisie', 'info@fiorefromage.com', '(+216)72.348.810 <br>\r\n\r\n(+216)72.348.811<br>\r\n\r\n(+216)72.348.812', '(+216)72.348.813');

-- --------------------------------------------------------

--
-- Structure de la table `message_contact`
--

DROP TABLE IF EXISTS `message_contact`;
CREATE TABLE IF NOT EXISTS `message_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message_contact`
--

INSERT INTO `message_contact` (`id`, `email`, `objet`, `message`) VALUES
(1, 'test@gmail.com', 'test', 'lorm');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `produit` varchar(255) NOT NULL,
  `code_produit` varchar(255) NOT NULL,
  `poids` varchar(255) NOT NULL,
  `code_ean` varchar(255) NOT NULL,
  `dlc` varchar(255) NOT NULL,
  `catagorie` varchar(255) NOT NULL,
  `catagorie2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `titre`, `description`, `img`, `produit`, `code_produit`, `poids`, `code_ean`, `dlc`, `catagorie`, `catagorie2`) VALUES
(1, 'RAPE PRIMO GRUYERE 100G ', 'Moelleux et Fondant à la cuisson\r\nPréparation rape Primo au Gruyere - Marque FIORELLA 100g', 'images/a-base-alimentaire/Fiorella_Râpé_Primo_gruyere.png', 'Rapé primo Gruyere', 'FA02F0301', '100 g', '6191581000634', '90 jours', 'PRÉPARATION ALIMENTAIRE', 'a-base-alimentaire'),
(2, 'VECCHIO BASTARDO PORITION', 'Le Vecchio bastardo di fiore c\'est un fromage vieux authentique,genereux, au gout fruité et au parfum inimitable Le vecchio est un fromage qui se marie bien avec les differents gouts.', 'images/presse/VECCHIO-BASTARDO-DI-FIORE-copie_old.png', 'Il Vecchio bastardo di Fiore', 'P04F040602', 'Portion', '2407802XXXXXX', '360 jours', 'PÂTE PRESSÉ', 'pate-presse'),
(3, 'RAPE PRIMO MOZZARELLA 100G', 'Idéal pour les pizzas et Fondant à la cuisson\r\nPréparation rape Primo a la Mozzarella - Marque FIORELLA 100g', 'images/a-base-alimentaire/Fiorella-Râpé-Primo-mozzarella.png', 'Rapé primo Mozzarelle', 'FA02F0302', '100 g', '619158100006', '90 jours', 'PRÉPARATION ALIMENTAIRE', 'a-base-alimentaire'),
(4, 'RAPE 1KG DOLCE', 'Moelleux ,doux, et Fondant a la cuissant\r\nPréparation rape DOLCE - Marque FIORELLA 100g', 'images/a-base-alimentaire/Râpé dolce  fiorella 1 kg1.png', 'Rapé Dolce', 'PDOL', '1 kg', '6191581000696', '90 jours', 'PRÉPARATION ALIMENTAIRE', 'a-base-alimentaire'),
(5, 'GRAN BASTARDO PORITION', 'Le Grand Bastardo di fiore c\'est un fromage affiné avec un goût doux et légèrement aromatique, qui peut varier en fonction de la transformation, du fourrage et du pâturage.', 'images/presse/GRAN BASTARDO DI FIORE1.png', 'Gran Bastardo di Fiores', 'P03F040302', 'Portion', '2407801XXXXXX', '360 jours', 'PÂTE PRESSÉ', 'pate-presse'),
(6, 'RAPE PRIMO GRUYERE 1KG', 'Moelleux et Fondant à la cuisson\r\nPréparation rape Primo au Gruyere - Marque FIORELLA 1 KG', 'images/a-base-alimentaire/Râpé Gruyhere  fiorella 1 kg1.png', 'Rapé primo Gruyere', 'FA02F0301', '1 kg', '6191581000559', '90 jours', 'PRÉPARATION ALIMENTAIRE', 'a-base-alimentaire'),
(7, 'RAPE 1KG SALATO', 'Moelleux ,Salé, et Fondant a la cuissant\r\nPréparation rape SALATO - Marque FIORELLA 100g', 'images/a-base-alimentaire/Râpé salato fiorella 1 kg1.png', 'Rapé Salato', 'SAL1', '1 kg', '6191581000702', '90 jours', 'PRÉPARATION ALIMENTAIRE', 'a-base-alimentaire'),
(8, 'BASTARDO DI FIORE +OLIVES PORITION', 'La note olive fait de lui le plus \"Méditerranéen\" des fromages Fiore, avec sa croûte régulière et fine, sa pâte souple et sa couleur jaune paille, ce fromage jeune et doux a le don de plaire.', 'images/presse/IL-BASTARDO-DI-FIORE1.png', 'Bastardo Olives', '-', 'Portion', '2407808XXXXXX\r\n', '45 jours', 'PÂTE PRESSÉ', 'pate-presse'),
(9, 'FROMAGE RÂPÉ DI FIORE 150G', 'Retrouvez le bon goût généreux et légèrement fruité du mix de 3 fromages à base de lait en format râpé très pratique, ce fromage râpé fait succomber toute la famille au quotidien. Pour ajouter du fondant ou du croustillant à tous vos gratins...', 'images/rape/FROMAGE-RÄPE-DI-FIORE-150G1.png', 'Mix Râpé Fiore', 'P00F020701', '150g', '6191581000047\r\n', '45 jours\r\n', 'FROMAGE RÂPÉ', 'rape'),
(10, 'BARBAROSSA EDAM', 'Barbarossa : Préparation aromatisé au fromage Edam.\r\n\r\n', 'images/a-base-alimentaire/Edam-Barbarossa1.png', 'Barbarossa edam', 'FA01F0402', '2 kg', '2407822XXXXXX', '120 jours\r\n', 'PRÉPARATION ALIMENTAIRE', 'a-base-alimentaire'),
(11, 'GIRASOLE GOUDA', 'Girasol :Préparation aromatisé au fromage Gouda .\r\n\r\n', 'images/a-base-alimentaire/Gouda. Girasole1.png', 'Girasole Gouda', 'FA01F0403', '2 kg', '2407823XXXXXX', '120 jours', 'PRÉPARATION ALIMENTAIRE', 'a-base-alimentaire'),
(12, 'BASTARDO DI FIORE +OLIVES +HARISSA PORITION', 'Seul Fiore peut oser marier le piquant des \"Peperoni\" a la douceur de ce jeune fromage avec une telle harmonie et un tel exotisme. L\'olive en est témoin.', 'images/presse/IL-BASTARDO-DI-FIORE-OLIVE&HARISSA -1.png', 'Bastardo Olives Harissa', '-', 'Portion', '2407809XXXXXX', '45 jours\r\n', 'PÂTE PRESSÉ', 'pate-presse'),
(13, 'VECCHIO BASTARDO DI FIORE', 'Notre prédilection va a ce fromage, il est authentique, généreux, au goût fruité et au parfum inimitable, c\'est le résultat d\'un affinage long et attentif.Prfanes s\'abstenir.', 'images/presse/IL-VECCHIO-BASTARDO1.png', 'Il Vecchio bastardo di Fiore', 'P04F040601', '4.500 kg', '2407810XXXXXX', '360 jours', 'PÂTE PRESSÉ', 'pate-presse'),
(14, 'PIZZA PARTY BOYAUX', 'PIZZA PARTY DI FIORELLA : Mozzarella preparation spécial pour pizza.', 'images/a-base-alimentaire/Fiorella pizza party1.png', 'Pizza party boyaux', 'FA01F0401', '1.5 kg', '6191581000764', '120 jours\r\n', 'PRÉPARATION ALIMENTAIRE', 'a-base-alimentaire'),
(15, 'MOZZARELLA BOCCONE', 'La Mozzarella fraiche est Le fromage italien le plus consommé !\r\nLa Mozzarella BOCONNE DI FIORE la plus courante elle est fabriquée à partir de lait de vache ce qui lui confère un goût frais de lait et de crème. Elle est caractérisée comme toute Mozzarella par sa couleur blanche et une surface lisse ainsi qu’une texture moelleuse, fondante et humide.\r\nLe plus souvent, la mozzarella se consomme en salade (dans la fameuse « Caprese ») ou même nature avec juste un filet d’huile d’olive.\r\n\r\n', 'images/filee/MOZZARELLA-BOCCONE-DI-FIORE1.png', 'Boccone', 'P01F010001', '125 g', '6191581000016', '30 jours', 'PÂTE FILÉ', 'pate-file'),
(16, 'PRIMO SALE DI FIORE', 'Le Primosale est le fromage sicilien par excellence de longue tradition , il est produit en Sicile depuis les temps anciens. Il appartient à la catégorie des fromages de table et il est fabriqué exclusivement à partir de lait entier de vache. Il a un goût fort et caractéristique du à la microflore lactique qui détermine sa saveur unique. Il est indiqué aussi dans nombreuses autres applications pour la préparation de plats traditionnels méditerranéens ou râpé.', 'images/presse/primo-sale-di-fiore1.png', 'Primo sale di fiore', 'P04F030101', '6 kg', '2407806XXXXXX', '60 jours\r\n', 'PÂTE PRESSÉ', 'pate-presse'),
(17, 'RICOTTA FRESCA DOPPIA PANNA PLS', 'C\'est une ricotta trés particulière, elle a une saveur authentique et délicate, faite a l\'italienne. Mais pas besoin d\'être italien pour farcir raviolis, tortellinis et cannellonis. En effet, sa texture crémeuse la rend parfaite aussi bien en cuisine qu\'a table, salée ou sucrée.\r\n\r\n', 'images/fraiche/ricotta-fresca1.png', 'Ricotta PLS', 'P00F020001/P00F010002', '0.330 kg', '2407821XXXXXX', '15 jours', 'PÂTE FRAICHE', 'pate-fraiche'),
(18, 'FROMAGE RÂPÉ DI FIORE 340G', 'Retrouvez le bon goût généreux et légèrement fruité du mix de 3 fromages à base de lait en format râpé très pratique, ce fromage râpé fait succomber toute la famille au quotidien. Pour ajouter du fondant ou du croustillant à tous vos gratins...', 'images/rape/râpé-mix-fiore-340-gr1.png', 'Mix Râpé Fiore', 'P00F020701', '340g', '6191581000047', '45 jours', 'FROMAGE RÂPÉ', 'rape'),
(19, 'MOZZARELLA BOCCONCINI', 'C’est un produit absolument typique , il fait partie de l’entier patrimoine laitier du Sud de l’Italie. Les Bocconcini di Fior présentent une peau brillante et homogène, de couleur blanche avec des reflets jaunâtres. ca pâte est tendre est légèrement élastique, à structure fibreuse, de couleur blanche. Quand l’on coupe, elle libère un liquide laiteux homogène. Ces Bocconcini (« morceaux ») sont parfaits avec de la salade comme entrée.', 'images/filee/MOZZARELLA-BOCCONCINI1.png', 'Bocconcini', 'P01F010002', '200 g', '6191581000023', '6191581000023', 'PÂTE FILÉ', 'pate-file'),
(20, 'GRAN BASTARDO DI FIORE', 'C\'est un fromage affiné. Il décline suivant ses stades d\'affinage. A un mois, sa pâte sera jaune pâle et prend du caracère, il trouve sa pesonalité a partie de 2 mois d\'affinage sa pâte devient alors jaune et assez souple, \"veillé\" par le Maître Affineur Fiore, ce fromage exceptionnel saura séduire tous les goûts.', 'images/presse/IL-BRAN-BASTARDO1.png', 'Gran Bastardo di Fiore', 'P03F040301', '6.000 kg', '2407801XXXXXX', '360 jours', 'PÂTE PRESSÉ', 'pate-presse');

-- --------------------------------------------------------

--
-- Structure de la table `quisommenous`
--

DROP TABLE IF EXISTS `quisommenous`;
CREATE TABLE IF NOT EXISTS `quisommenous` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `quisommenous`
--

INSERT INTO `quisommenous` (`id`, `titre`, `description`) VALUES
(1, 'Qui somme nous', 'La société Fiore suarl a adopté une démarche qualité qui place le client au centre de ses préoccupations et vise à lui offrir un fromage sain et authentique. <br><br>\r\n\r\n                                    Au travers de cet Engagement Qualité, Fiore s’engage à offrir à ses consommateurs des fromages de grande qualité choisis parmi plus de 450 types de fromages italiens, notamment ceux qui sont nés dans les belles vallées montagneuses et verdoyantes du nord de l’Italie, la Vallée d’Aoste, le Piémont, la Lombardie, le Frioul…<br><br>\r\n\r\n                                    A l’image du fromage italien, le fromage Fiore est né dans une des plus belles régions de la Tunisie: le cap bon, un jardin au dessus de la mer. Et chez Fiore comme en Italie, le maître fromager fait son fromage tous les jours (puisque le fromage Fiore se fait et ne se fabrique pas) à partir d’ingrédients naturels : un lait provenant d’élevages traditionnels où les vaches sont nourries sans ensilages dans des prairies fertiles où la diversité de la végétation parfume ce lait d’arômes délicats. <br>D\'ajoutent aussi l’art et le savoir-faire Fiore, enfin, pour son accomplissement le fromage Fiore est confié aux rythmes du temps avec patience et passion…');

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id`, `img`, `titre`, `description`) VALUES
(1, 'images/slide-1.png', 'BISTECCA DI FIORE PANNÉE', '<strong>Ingrédients</strong><br>\r\n											<div style=\"margin-left: 50px;text-align: justify;\">250g de Bistecca Di Fiore<br>\r\n											De la chapelure <br>\r\n											2 oufs.<br>\r\n\r\n											Sel et poivre du moulin <br>\r\n											Huile végétale pour la friture.<br></div>\r\n\r\n											<strong>Préparation</strong><br>\r\n											<div style=\"margin-left: 50px;text-align: justify;\">Coupez la Bistecca Di Fiore en tranche de 1cm.<br>\r\n											Coupez ensuite les tranches de Bistecca Di Fiore en batonnets de 1cm.<br>\r\n											Battez les oufs dans une assiette avec du sel et du poivre selon le gout.<br>\r\n											Répartissez la chapelure dans une autre assiette.<br>\r\n\r\n											Trempez chaque bâtonnet dans l\'ouf puis égouttez pour faire tomber l\'exces.<br>\r\n											Roulez dans la chapelure Refaites l\'opération une deuxieme fois.<br>\r\n\r\n											Laissez sécher 2 minutes. Faites dorer dans l\'huile chaude au fond de la poele a feu vif.<br>\r\n											Servez aussitôt avec une salade verte, une sauce tartare ou tout simplement du ketchup.<br></div>'),
(2, 'images/slide-2.png', 'TIRAMISU', 'Ingrédients\r\n500 g de Mascarpone Di Fiore\r\n5 oeufs\r\n5 c. a s. de sucre en poudre.\r\n500 g de biscuit langue de chat\r\n300 ml de café tres fort\r\n1 c. a soupe de cacao en poudre.\r\nPréparation\r\nFouetter les jaunes d\'oeufs et le sucre jusqu\'a ce que le mélange blanchisse.\r\nAjouter le mascarpone et mélanger délicatement. Monter les blancs d\'oeufs en neige tres ferme et incorporer au mélange.\r\nTremper les biscuits langue de chat dans le café tres fort et tapisser un plat a gateau.\r\nRecouvrir d\'une couche de mascarpone; remettre un rang de biscuits langue de chat trempés dans le café et recouvrir d\'une deuxieme couche de mascarpone.\r\nMettre au réfrigérateur pour au moins trois heures; servir froid, saupoudré de cacao en poudre.'),
(3, 'images/slide-3.png', 'TORTAFIORE', 'Ingrédients\r\n1 pâte brisée\r\n150 g de pépites de chocolat noir\r\n30 g de chocolat noir (pour la déco)\r\ndes zestes d\'une orange.1 kg de Ricotta\r\nDoppia Panna Di Fiore\r\n4 jaunes d\'oeufs\r\n100 g de sucre en poudre\r\n1 cuillere a café de farine.1/2 cuillere a café de sel\r\n1 cuillere a café d\'huile\r\nde tournesol\r\n3 cuilleres a soupe\r\nde pralin.Préparation\r\nLa pâte a tarte\r\n\r\nMettez du papier cuisson puis la pâte brisée dans un moule a tarte de 24 cm de diametre et de 5 de haut. Placez le tout au frigo pendant 15 minutes et\r\nfaites préchauffer le four sur 180°. Pendant ce temps préparez la garniture. N\'hésitez pas a pressez doucement la pâte avec les doigts le long des parois\r\ndu moule en la faisant un peu déborder pour qu\'elle tienne \"debout\". A l\'aide d\'un couteau enlevez l\'exces de pâte si ça dépasse de trop ce sera plus joli.\r\n\r\nLa garniture\r\n\r\nMettez la ricotta dans un grand bol et fouettez-la avec le sucre, la farine et 1/2 cuillere a café de sel. Ajoutez les pépites de chocolat, le zeste\r\nd\'orange et les jaunes d\'oufs. Battez encore tous les ingrédients jusqu\'a ce que le mélange soit parfaitement homogene. Sortez la pâte brisée du frigo,\r\nsaupoudrez le fond d\'une petit couche de pralin et versez la ricotta dessus. Enfournez pour 40 minutes environ. Laissez refroidir la tarte dans le moule.\r\n\r\nPour la déco\r\n\r\nFaites fondre le chocolat au bain-marie en y incorporant une 1/2 cuillere a café d\'huile de tournesol. Plongez les dents d\'une fourchette dans le chocolat\r\net promenez-la assez rapidement au-dessus de la tarte en laissant aller votre imagination.\r\nJuste avant de servir parsemez encore d\'un peu de pralin. Vous pouvez préparer la tarte la veille et la conserver au frais. Les saveurs se mélangeront, et la consistance sera un peu plus crémeuse.'),
(4, 'images/slide-4.png', 'CREME DE STRACCHINO', 'Ingrédients\r\n500g de Stracchino Di Fiore\r\n150g de creme liquide\r\n150g de creme fouettée\r\n50g d\'huile d\'olive\r\n3 c.a s.de vinaigre de pomme.1/2 botte de persil\r\n1 échalote\r\n1 c. a s. d\'origan sec\r\n1/2 botte de basilic frais\r\nSel et poivre du moulin.Préparation\r\nCette recette doit etre réalisée avec une spatule en bois et pas au fouet car on ne doit pas obtenir un mélange lisse.\r\nEgoutter le Stracchino Di Fiore a l\'avance. Hacher les herbes (basilic, persil et l\'échalote), les mélanger au fromage blanc, rajouter l\'huile d\'olive, le vinaigre, le sel, le poivre et la creme liquide.\r\n\r\nMonter légerement la creme fouettée et l\'incorporer délicatement au reste. Garder au frigo et servir frais.\r\n\r\nCette recette peut etre servie sur du pain toasté, ou comme un assaisonnement en remplacement d\'une tapenade ou d\'une anchoiade pour accompagner quelques légumes crus ou cuits a la vapeur.\r\n\r\nLe plus courant est d\'évider en partie une pomme de terre cuite < en robe des champ > et de glisser dans l\'intérieur une cuillerée de cette creme de Stracchino. Vous pouvez également farcir des tomates bien fermes. Un délice.'),
(5, 'images/slide-5.png', 'FIORE DORÉES', 'Ingrédients\r\nIngrédients pour la pâte:\r\n1kg de farine\r\n1 ouf\r\n10g d\'huile\r\n8g de sel\r\nun peu d\'eau.Ingrédients pour la farce:\r\n250g de Cacciotta Di Fiore\r\n50g de Vecchio Bastardo Di Fiore\r\n1 bouquet de persil\r\nsel et poivre du moulin.Préparation\r\nLa veille :\r\n\r\nMélanger les ingrédients de la pâte jusqu\'a former une jolie boule bien lisse. L\'envelopper dans un linge propre et fariné, puis laisser reposer la pâte un minimum de 6 heures, un maximum de 12.\r\n\r\nLe lendemain :\r\n\r\nAllumer votre four a 220° (Thermostat 8) Laver puis hacher grossierement le persil. Râper le Cacciotta Di Fiore et émietter le Vecchio Bastardo Di Fiore.\r\nMélanger les trois ingrédients, saler, poivrer et former 30 petits tas égaux de 10g chacun. Sortir la pâte, l\'étaler a la main et la couper en 30 parties égales.\r\nLes étaler une a une au rouleau en fines galettes plates.\r\nMouiller leurs pourtours avec de l\'eau, placer chaque petit tas de fromages au centre de chacune d\'elles, refermer en deux comme des ravioles, décorer de sésames et les placer l\'une apres l\'autre sur une plaque préalablement beurrée.\r\nEnfourner une vingtaine de minutes les servir soit a l\'apéritif soit autour d\'une jolie salade verte.'),
(6, 'images/slide-6.png', 'GRATIN BASTARDO', 'Ingrédients\r\n250 g de Vecchio Bastardo\r\nDi Fiore râpé\r\n1 kg de pain rassis\r\n75 cl de lait.50 g de beurre fondu\r\nsel et poivre\r\nnoix de muscade\r\n4 oufs.2 cuilleres a soupe de\r\ncreme liquide\r\n150 g de jambon de\r\ndinde fumé.Préparation\r\nCouper le pain en petits morceaux dans un saladier, faire chauffer le lait puis le verser sur le pain, couvrir, laisser reposer 15 minutes.\r\nBattre les oufs avec la creme liquide, le beurre fondu, le sel, le poivre, un pincée de noix de muscade moulue puis ajouter le Vecchio Bastardo Di Fiore râpé (en réserver 50 g).\r\nMélanger le pain et la sauce et verser dans un plat a gratin beurré recouvrir de jambon de dinde fumé coupé en dés et du reste de Vecchio Bastardo Di Fiore râpé. Faire cuire 30 minutes th. 8 (250°). Servir chaud avec une salade verte.');

-- --------------------------------------------------------

--
-- Structure de la table `savez_vous`
--

DROP TABLE IF EXISTS `savez_vous`;
CREATE TABLE IF NOT EXISTS `savez_vous` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `savez_vous`
--

INSERT INTO `savez_vous` (`id`, `img`, `titre`, `description`) VALUES
(5, 'images/sv/001.png', 'COMMENT CONSERVER SON FROMAGE ?', 'La meilleure façon de conserver un fromage et de parfaire son affinage, est de le conserver dans une cave fraîche, sombre, aérée et légerement humide. Si l\'on ne dispose pas d\'un tel endroit, on peut tout a fait conserver les fromages dans le tiroir a légumes au bas du réfrigérateur, mais en prenant quelques précautions : Laissez les fromages dans leur emballage d\'origine, et enveloppez-les avec du film alimentaire, afin qu\'ils n\'absorbent pas les odeurs. Vous pouvez placer, dans le tiroir a fromages, une branche de thym ou de laurier, qui masquera un peu l\'odeur des fromages forts. Avant de les emballer, il faut toujours prendre le temps d\'essuyer les fromages a pâte ferme ou semi-ferme, avec un papier absorbant, afin de freiner le développement de la moisissure. Sortez votre fromage du réfrigérateur une heure avant de le déguster. Savourez-le sans la croute avec un bon pain blanc levé et croustillant et pourquoi pas des fruits (figues, poires, raisins, melons.).'),
(6, 'images/sv/002.png', 'PEUT-ON CONGELER LE FROMAGE ?', 'Comme tous les autres aliments Il est toujours possible de congeler le fromage, mais sans dépasser trois mois, il ne faut surtout pas, bien sur, le recongeler ou le laisser trop longtemps a l\'aire libre avant de le déguster. Le seul souci que vous pouvez rencontrer est l\'aspect extérieur. En effet, un fromage congelé, au contact de l\'air ambiant va subir un choc thermique qui, s\'il est a pâte souple, donc humide, va le faire couler et s\'il est a pâte pressée va le rendre friable. Mais, congelé, le fromage conserve toutes ses qualités nutritionnelles.'),
(4, 'images/sv/003.png', 'QUE SIGNIFIE LE TAUX DE MATIERE GRASSE ?', 'On calcule le taux de matiere grasse du fromage sur l\'extrait sec. En d\'autres termes, c\'est comme si on faisait s\'évaporer toute l\'eau contenue dans le fromage et qu\'on calculait le taux de matiere grasse sur le résidu quand l\'eau a disparu. Or, notre fromage contient, en moyenne, 50% a 70% d\'eau. Donc en réalité si un fromage a un taux d\'humidité de 70% et un taux de matiere grasse sur l\'extrait sec de 50% cela veut dire qu\'il contient en réalité 15% de matiere grasse sur l\'ensemble de son poids. Cela nous permet de mettre fin a des idées reçues : \"Le fromage fait grossir\". Si on en abuse, peut-etre. Mais les hamburgers, pizzas, cacahuetes et autres plats préparés d\'avance font bien plus grossir que le fromage, le remede a tous les maux est la modération.\r\n\"Cette leçon vaut bien un fromage sans doute.\" Jean de La Fontaine.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

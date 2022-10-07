-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 07 Octobre 2022 à 23:21
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `joutesvirus`
--

-- --------------------------------------------------------

--
-- Structure de la table `virus`
--

CREATE TABLE IF NOT EXISTS `virus` (
`idVirus` int(11) NOT NULL,
  `nomVirus` varchar(30) NOT NULL,
  `dateVirus` date NOT NULL,
  `idTypeVirus` int(11) NOT NULL,
  `descriptionVirus` longtext NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `virus`
--

INSERT INTO `virus` (`idVirus`, `nomVirus`, `dateVirus`, `idTypeVirus`, `descriptionVirus`) VALUES
(5, 'PC CYBORG TROJAN', '1989-01-01', 2, 'Premier Ransomware contre la société PC Cyborg Corporation, en essayant de soutirer de l argent.'),
(4, 'JIGSAW', '2016-01-01', 2, 'RansomWare inspiré des films d horreurs SAW, qui cryptent les données et demande une rançon.'),
(3, 'I LOVE YOU', '2000-05-04', 2, 'Virus de type phishing qui envoyait des fausses lettres d amours sur Outlook pour infecter l ordinateur.'),
(2, 'Covid-19', '2019-11-16', 1, 'Pandémie d une maladie infectieuse émergente ayant démarré à Wuhan.'),
(1, 'Stuxnet', '2010-01-01', 2, 'Ver Informatique conçu par la NSA pour s attaquer aux centrifugeuses iraniennes d enrichissement d uranium.'),
(6, 'REGIN', '2008-01-01', 2, 'Logiciel de cyber-espionnage, apparu en 2008, et de retour depuis 2014 dans une version poussé.'),
(10, 'abcdef', '0000-00-00', 2, 'sqgdqsdgqsdg'),
(9, 'abcdef', '0000-00-00', 2, 'sqgdqsdgqsdg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `virus`
--
ALTER TABLE `virus`
 ADD PRIMARY KEY (`idVirus`), ADD KEY `fk_idTypeVirus` (`idTypeVirus`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `virus`
--
ALTER TABLE `virus`
MODIFY `idVirus` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

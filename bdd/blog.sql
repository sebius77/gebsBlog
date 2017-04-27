-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 27 Avril 2017 à 11:23
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(10) UNSIGNED NOT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  `contenu` longtext,
  `date` datetime DEFAULT NULL,
  `idCommentaire` int(11) DEFAULT NULL,
  `idEpisode` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `auteur`, `contenu`, `date`, `idCommentaire`, `idEpisode`) VALUES
(1, 'Sébastien', 'Mon premier commentaire !!!', '2017-04-20 08:19:00', NULL, 3),
(2, 'Toto', 'Un deuxième commentaire !!!!', '2017-04-20 12:25:00', NULL, 3),
(3, 'Titi', 'Une réponse à un commentaire !!!!', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `episode`
--

CREATE TABLE `episode` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` longtext,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `episode`
--

INSERT INTO `episode` (`id`, `titre`, `contenu`, `date`) VALUES
(1, 'episode test 1', 'Duis aute irure dolor in reprehenderit in voluptate velit.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Duis aute irure dolor in reprehenderit in voluptate velit. Eaque ipsa quae ab illo inventore veritatis et quasi.\r\n\r\nUt aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Architecto beatae vitae dicta sunt explicabo.\r\n\r\nItaque earum rerum hic tenetur a sapiente delectus.\r\n\r\nFacere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.\r\n\r\nEt iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.\r\nTemporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.\r\nEsse cillum dolore eu fugiat nulla pariatur.\r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa.\r\n\r\nLaboris nisi ut aliquip ex ea commodo consequat. Non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Laboris nisi ut aliquip ex ea commodo consequat. Non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.\r\n\r\nEsse cillum dolore eu fugiat nulla pariatur.\r\nAt vero eos et accusamus.\r\nTotam rem aperiam.\r\nQui officia deserunt mollit anim id est laborum. Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Laboris nisi ut aliquip ex ea commodo consequat. Nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam.\r\n\r\nEt iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque. Laboris nisi ut aliquip ex ea commodo consequat. Laboris nisi ut aliquip ex ea commodo consequat. Et harum quidem rerum facilis est et expedita distinctio.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit. Qui officia deserunt mollit anim id est laborum. Corrupti quos dolores et quas molestias excepturi sint occaecati. Fugiat quo voluptas nulla pariatur?\r\n\r\nNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. Eaque ipsa quae ab illo inventore veritatis et quasi.\r\n\r\nAccusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo. Duis aute irure dolor in reprehenderit in voluptate velit. Fugiat quo voluptas nulla pariatur? Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.\r\n\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia. Animi, id est laborum et dolorum fuga.\r\n\r\nUt aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Nihil molestiae consequatur, vel illum qui dolorem eum. Duis aute irure dolor in reprehenderit in voluptate velit.\r\n\r\nUt aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Itaque earum rerum hic tenetur a sapiente delectus. Nihil molestiae consequatur, vel illum qui dolorem eum.\r\n\r\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam. Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque. Nihil molestiae consequatur, vel illum qui dolorem eum.\r\n\r\nDo eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa. Itaque earum rerum hic tenetur a sapiente delectus. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.\r\n\r\nUt aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Excepteur sint occaecat cupidatat non proident, sunt in culpa.', '2017-04-10 00:00:00'),
(2, 'episode test 2', 'Duis aute irure dolor in reprehenderit in voluptate velit.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Duis aute irure dolor in reprehenderit in voluptate velit. Eaque ipsa quae ab illo inventore veritatis et quasi.\r\n\r\nUt aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Architecto beatae vitae dicta sunt explicabo.\r\n\r\nItaque earum rerum hic tenetur a sapiente delectus.\r\n\r\nFacere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.\r\n\r\nEt iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.\r\nTemporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.\r\nEsse cillum dolore eu fugiat nulla pariatur.\r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa.\r\n\r\nLaboris nisi ut aliquip ex ea commodo consequat. Non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Laboris nisi ut aliquip ex ea commodo consequat. Non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.\r\n\r\nEsse cillum dolore eu fugiat nulla pariatur.\r\nAt vero eos et accusamus.\r\nTotam rem aperiam.\r\nQui officia deserunt mollit anim id est laborum. Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Laboris nisi ut aliquip ex ea commodo consequat. Nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam.\r\n\r\nEt iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque. Laboris nisi ut aliquip ex ea commodo consequat. Laboris nisi ut aliquip ex ea commodo consequat. Et harum quidem rerum facilis est et expedita distinctio.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit. Qui officia deserunt mollit anim id est laborum. Corrupti quos dolores et quas molestias excepturi sint occaecati. Fugiat quo voluptas nulla pariatur?\r\n\r\nNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. Eaque ipsa quae ab illo inventore veritatis et quasi.\r\n\r\nAccusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo. Duis aute irure dolor in reprehenderit in voluptate velit. Fugiat quo voluptas nulla pariatur? Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.\r\n\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia. Animi, id est laborum et dolorum fuga.\r\n\r\nUt aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Nihil molestiae consequatur, vel illum qui dolorem eum. Duis aute irure dolor in reprehenderit in voluptate velit.\r\n\r\nUt aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Itaque earum rerum hic tenetur a sapiente delectus. Nihil molestiae consequatur, vel illum qui dolorem eum.\r\n\r\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam. Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque. Nihil molestiae consequatur, vel illum qui dolorem eum.\r\n\r\nDo eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa. Itaque earum rerum hic tenetur a sapiente delectus. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.\r\n\r\nUt aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Excepteur sint occaecat cupidatat non proident, sunt in culpa.', '2017-04-19 12:25:11'),
(3, '3ème épisode  : la suite de l''aventure', 'The Internet King? I wonder if he could provide faster nudity…\r\n\r\nThis is the greatest case of false advertising I''ve seen since I sued the movie "The Never Ending Story." Uh, no, they''re saying "Boo-urns, Boo-urns." Homer no function beer well without. Inflammable means flammable? What a country.\r\n\r\nBeer. Now there''s a temporary solution. Ahoy hoy? You don''t win friends with salad. Oh, loneliness and cheeseburgers are a dangerous mix. I''ll keep it short and sweet — Family. Religion. Friendship. These are the three demons you must slay if you wish to succeed in business.\r\n\r\nHi. I''m Troy McClure. You may remember me from such self-help tapes as "Smoke Yourself Thin" and "Get Some Confidence, Stupid!"\r\n\r\nWe started out like Romeo and Juliet, but it ended up in tragedy. But, Aquaman, you cannot marry a woman without gills. You''re from two different worlds… Oh, I''ve wasted my life. Last night''s "Itchy and Scratchy Show" was, without a doubt, the worst episode *ever.* Rest assured, I was on the Internet within minutes, registering my disgust throughout the world.\r\n\r\nDear Mr. President, There are too many states nowadays. Please, eliminate three. P.S. I am not a crackpot.\r\nBut, Aquaman, you cannot marry a woman without gills. You''re from two different worlds… Oh, I''ve wasted my life.\r\nThat''s why I love elementary school, Edna. The children believe anything you tell them.\r\nRemember the time he ate my goldfish? And you lied and said I never had goldfish. Then why did I have the bowl, Bart? *Why did I have the bowl?*\r\n\r\nFame was like a drug. But what was even more like a drug were the drugs. Son, a woman is like a beer. They smell good, they look good, you''d step over your own mother just to get one! But you can''t stop at one. You wanna drink another woman!\r\n\r\nAaah! Natural light! Get it off me! Get it off me!\r\nBart, with $10,000 we''d be millionaires! We could buy all kinds of useful things like…love!\r\nFacts are meaningless. You could use facts to prove anything that''s even remotely true!\r\nUh, no, you got the wrong number. This is 9-1…2. Your questions have become more redundant and annoying than the last three "Highlander" movies. You don''t win friends with salad. You don''t like your job, you don''t strike. You go in every day and do it really half-assed. That''s the American way.\r\n\r\nCan''t you people take the law into your own hands? I mean, we can''t be policing the entire city! Our differences are only skin deep, but our sames go down to the bone. Attempted murder? Now honestly, what is that? Do they give a Nobel Prize for attempted chemistry?\r\n\r\nD''oh. Can''t you people take the law into your own hands? I mean, we can''t be policing the entire city! Hi. I''m Troy McClure. You may remember me from such self-help tapes as "Smoke Yourself Thin" and "Get Some Confidence, Stupid!"\r\n\r\nWhen will I learn? The answers to life''s problems aren''t at the bottom of a bottle, they''re on TV! When will I learn? The answers to life''s problems aren''t at the bottom of a bottle, they''re on TV! Well, he''s kind of had it in for me ever since I accidentally ran over his dog. Actually, replace "accidentally" with "repeatedly" and replace "dog" with "son."\r\n\r\nThis is the greatest case of false advertising I''ve seen since I sued the movie "The Never Ending Story." I hope I didn''t brain my damage. Marge, it takes two to lie. One to lie and one to listen. Kids, kids. I''m not going to die. That only happens to bad people.\r\n\r\nFacts are meaningless. You could use facts to prove anything that''s even remotely true! Son, a woman is like a beer. They smell good, they look good, you''d step over your own mother just to get one! But you can''t stop at one. You wanna drink another woman!\r\n\r\nHow is education supposed to make me feel smarter? Besides, every time I learn something new, it pushes some old stuff out of my brain. Remember when I took that home winemaking course, and I forgot how to drive? Uh, no, they''re saying "Boo-urns, Boo-urns."\r\n\r\nGet ready, skanks! It''s time for the truth train! Mrs. Krabappel and Principal Skinner were in the closet making babies and I saw one of the babies and then the baby looked at me. But, Aquaman, you cannot marry a woman without gills. You''re from two different worlds… Oh, I''ve wasted my life.\r\n\r\nInflammable means flammable? What a country. Old people don''t need companionship. They need to be isolated and studied so it can be determined what nutrients they have that might be extracted for our personal use.\r\n\r\nDuffman can''t breathe! OH NO! Old people don''t need companionship. They need to be isolated and studied so it can be determined what nutrients they have that might be extracted for our personal use. Human contact: the final frontier.\r\n\r\nBooks are useless! I only ever read one book, "To Kill A Mockingbird," and it gave me absolutely no insight on how to kill mockingbirds! Sure it taught me not to judge a man by the color of his skin…but what good does *that* do me? Human contact: the final frontier.', '2017-04-20 15:30:14');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEpisode` (`idEpisode`);

--
-- Index pour la table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `episode`
--
ALTER TABLE `episode`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`idEpisode`) REFERENCES `episode` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

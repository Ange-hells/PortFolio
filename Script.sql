-- CREATE DATABASE portfolio;

-- for sql (wamp)
-- USE 'portfolio';

-- for phpmyadmin (000webhost)
USE 'id8325269_portfolio';

-- for phpmyadmin (1&1 ionos)
-- USE 'dbs290332';

CREATE TABLE `situation` (
	`NumSituation` TINYINT(4) UNSIGNED NOT NULL AUTO_INCREMENT,
	`LibelleSituation` VARCHAR(50) NOT NULL,
	`TypeFiche` TINYINT(3) UNSIGNED NOT NULL,
    `Disponible` TINYINT(1) UNSIGNED NOT NULL,
    `SituationObligatoire` TINYINT UNSIGNED NOT NULL,
    `NomLien` VARCHAR(15) NOT NULL,
	PRIMARY KEY (`NumSituation`)
);

CREATE TABLE `competence` (
	`CodeCompetence` CHAR(7) NOT NULL,
	`LibelleCompetence` VARCHAR(160) NOT NULL,
	PRIMARY KEY (`CodeCompetence`)
);

CREATE TABLE `competencesituation` (
	`NumAsso` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`CodeCompetence` CHAR(7) NOT NULL,
	`NumSituation` TINYINT(4) UNSIGNED NOT NULL,
	PRIMARY KEY (`NumAsso`)
);

CREATE TABLE `typefiche` (
    `IdTypeFiche` TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `LibelleTypeFiche` VARCHAR(10) NOT NULL,
    PRIMARY KEY (`IdTypeFiche`)
);

CREATE TABLE `situationobligatoire` (
	`IdSituation` INT(11) NOT NULL AUTO_INCREMENT,
	`LibelleSituation` VARCHAR(160) NULL DEFAULT NULL,
    PRIMARY KEY (`IdSituation`)
);

CREATE TABLE `reaConfinement`(
  `idRea` TINYINT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `libelleRea` VARCHAR(50) NOT NULL,
  `lienGitRea` VARCHAR(100),
  `lienPageRea` VARCHAR(100),
  `descriRea` TEXT,
  
  );

INSERT INTO competence 
VALUES  ('A1.1.1', `Analyse du cahier des charges d'un service à produire`),
        ('A1.1.2', `Étude de l'impact de l'intégration d'un service sur le système informatique`),
        ('A1.1.3', `Étude des exigences liées à la qualité attendue d'un service`),
        ('A1.2.1', `Élaboration et présentation d'un dossier de choix de solution technique`),
        ('A1.2.2', `Rédaction des spécifications techniques de la solution retenue`),
        ('A1.2.3', `Évaluation des risques liés à l'utilisation d'un service`),
        ('A1.2.4', `Détermination des tests nécessaires à la validation d'un service`),
        ('A1.2.5', `Définition des niveaux d'habilitation associés à un service`),
        ('A1.3.1', `Test d'intégration et d'acceptation d'un service`),
        ('A1.3.2', `Définition des éléments nécessaires à la continuité d'un service`),
        ('A1.3.3', `Accompagnement de la mise en place d'un nouveau service`),
        ('A1.3.4', `Déploiement d'un service`),
        ('A1.4.1', `Participation à un projet`),
        ('A1.4.2', `Évaluation des indicateurs de suivi d'un projet et justification des écarts`),
        ('A1.4.3', `Gestion des ressources`),
        ('A2.1.1', `Accompagnement des utilisateurs dans la prise en main d'un service`),
        ('A2.1.2', `Évaluation et maintien de la qualité d'un service`),
        ('A2.2.1', `Suivi et résolution d'incidents`),
        ('A2.2.2', `Suivi et réponse à des demandes d'assistance`),
        ('A2.2.3', `Réponse à une interruption de service`),
        ('A2.3.1', `Identification, qualification et évaluation d'un problème`),60
        ('A2.3.2', `Proposition d'amélioration d'un service`),
        ('A3.2.1', `Installation et configuration d'éléments d'infrastructure`),
        (`A3.2.2`, `Remplacement ou mise à jour d'éléments défectueux ou obsolètes`),
        (`A4.1.1`, `Proposition d'une solution applicative`),
        (`A4.1.2`, `Conception ou adaptation de l'interface utilisateur d'une solution applicative`),
        (`A4.1.3`, `Conception ou adaptation d'une base de données`),
        (`A4.1.4`, `Définition des caractéristiques d'une solution applicative`),
        (`A4.1.5`, `Prototypage de composants logiciels`),
        (`A4.1.6`, `Gestion d'environnements de développement et de test`),
        (`A4.1.7`, `Développement, utilisation ou adaptation de composants logiciels`),
        (`A4.1.8`, `Réalisation des tests nécessaires à la validation d'éléments adaptés ou développés`),
        (`A4.1.9`, `Rédaction d'une documentation technique`),
        (`A4.1.10`, `Rédaction d'une documentation d'utilisation`),
        (`A4.2.1`, `Analyse et correction d'un dysfonctionnement, d'un problème de qualité de …`),
        (`A4.2.2`, `Adaptation d'une solution applicative aux évolutions de ses composants`),
        (`A4.2.3`, `Réalisation des tests nécessaires à la mise en production d'éléments mis à jour`),
        (`A4.2.4`, `Mise à jour d'une documentation technique`),
        (`A5.1.1`, `Mise en place d'une gestion de configuration`),
        (`A5.1.2`, `Recueil d'informations sur une configuration et ses éléments`),
        (`A5.1.3`, `Suivi d'une configuration et de ses éléments`),
        (`A5.1.4`, `Étude de propositions de contrat de service (client, fournisseur)`),
        (`A5.1.5`, `Évaluation d'un élément de configuration ou d'une configuration`),
        (`A5.1.6`, `Évaluation d'un investissement informatique`),
        (`A5.2.2`, `Exploitation des référentiels, normes et standards adoptés par le prestataire`),
        (`A5.2.1`, `Veille technologique`),
        (`A5.2.3`, `Repérage des compléments de formation ou d'auto-formation ...`),
        (`A5.2.4`, `Étude d'une technologie, d'un composant, d'un outil ou d'une méthode`)
;

INSERT INTO situation (LibelleSituation,TypeFiche,Disponible,SituationObligatoire,NomLien)
VALUES  ('Exel - Cas STEMA',2,1,1,'ExelStema'),
        ('Windows Form - jeux de carte',2,1,4,'Memorie'),
        ('MDI',1,1,5,'MDI'),
        ('Site Web 1er Année ( Stema )',2,0,1,'Stema'),
        ('Site web 2em Année (CinéPassion38 - lot1)',2,1,1,'Cp38Lot1'),
        ('Site web 2em Année (CinéPassion38 - lot2)',2,1,1,'Cp38Lot2'),
        ('CinePassion38',1,1,5,'CinePassion38'),
        ('Windows Phone (Agenda)',2,1,4,'Agenda'),
        ('Service Web',2,1,4,'ServiceWeb'),
        ('Keller2020',1,1,5,'Keller2020'),
        ('Polymorphisme',2,1,5,'Polymorphisme'),
        ('RAID',2,1,5,'RAID'),
        ('Sauvegarde',2,1,5,'Sauvegarde'),
        ('Docker',2,0,5,'Docker'),
        ('Gestion Contact',2,0,1,'GestionContact'),
        ('Genesys',1,1,5,'Genesys'),
        ('Evsion',1,1,5,'Evsion'),
        ('Wi-Fi_Password',2,0,5,'wifiPassword'),
        ('markdown',3,0,4,'markdown')
;

INSERT Into typefiche 
VALUES  (1,'Projet'),
        (2,'Fiche'),
        (3,'Competence')
;

INSERT Into situationobligatoire 
VALUES  (1,'Participation à un projet d’évolution d’un SI (solution applicative et d’infrastructure portant prioritairement sur le domaine de spécialité du candidat)'),
        (2,'Prise en charge d’incidents et de demandes d’assistance liés au domaine de spécialité du candidat '),
        (3,'Elaboration de documents relatifs à la production et à la fourniture de services'),
        (4,'Productions relatives à la mise en place d’un dispositif de veille technologique et à l’étude d’une technologie, d’un composant, d’un outil ou d’une méthode'),
        (5,'')
;

INSERT INTO competencesituation (CodeCompetence,NumSituation)
VALUES  ('A1.1.1',1),
        ('A1.1.3',1),
        ('A2.3.2',1),
        ('A4.1.2',1),
        ('A5.2.4',1),
        ('A4.1.5',2),
        ('A4.1.6',2),
        ('A4.1.7',2),
        ('A5.2.2',2),
        ('A5.2.4',2),
        ('A1.1.1',4),
        ('A1.1.3',4),
        ('A1.2.1',4),
        ('A1.2.2',4),
        ('A1.2.4',4),
        ('A1.4.1',4),
        ('A2.3.1',4),
        ('A4.1.1',4),
        ('A4.1.2',4),
        ('A4.1.4',4),
        ('A4.1.9',4),
        ('A5.1.6',4),
        ('A5.2.4',4),
        ('A1.1.1',5),
        ('A1.1.2',5),
        ('A1.1.3',5),
        ('A1.2.4',5),
        ('A1.3.2',5),
        ('A1.3.3',5),
        ('A1.4.1',5),
        ('A1.4.2',5),
        ('A1.4.3',5),
        ('A4.1.1',5),
        ('A4.1.3',5),
        ('A4.1.6',5),
        ('A5.1.1',5),
        ('A5.2.1',5),
        ('A1.1.1',6),
        ('A1.1.2',6),
        ('A1.1.3',6),
        ('A1.2.4',6),
        ('A1.3.2',6),
        ('A1.3.3',6),
        ('A1.4.1',6),
        ('A4.1.1',6),
        ('A4.1.3',6),
        ('A4.1.6',6),
        ('A5.1.1',6),
        ('A5.2.1',6),
        ('A1.1.1',8),
        ('A1.1.3',8),
        ('A1.3.1',8),
        ('A1.4.1',8),
        ('A2.3.1',8),
        ('A4.1.1',8),
        ('A4.1.2',8),
        ('A4.1.4',8),
        ('A5.2.1',8),
        ('A5.2.4',8),
        ('A1.3.3',9),
        ('A1.3.4',9),        
        ('A1.1.1',11),
        ('A4.1.5',11),
        ('A4.1.6',11),
        ('A4.1.7',11),
        ('A5.2.3',11),
        ('A5.2.4',11),        
        ('A1.3.2',12),
        ('A1.3.4',12),
        ('A2.3.2',12),
        ('A3.2.1',12),
        ('A1.1.2',13),
        ('A1.1.3',13),        
        ('A1.2.3',13),
        ('A1.2.4',13),
        ('A1.3.2',13),
        ('A2.3.2',13),
        ('A5.2.3',13),
        ('A5.2.4',13)    
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),        
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),        
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),        
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),       
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),
        -- (``,),
;

INSERT INTO reaconfinement (libelleRea, lienGitRea, lienPageRea, descriRea)
VALUE ("Dungeon Arena", "", "DungeonArena", "Plonger dans le monde de Prelia decouvrez les secrets des neuf royaumes '???' ! "),
      ("Olympiae Proelium", "", "OlympiaeProelium", "Pokemon fais s'affronter des pokemon, Magig et Yu-Gi-Oh font s'affronter de monstre, BattleTube des youtubeur et Instable Unicorne des Licornes. Allors Olympiae Proelium ce sera des DIEUX ! "),
      ("RPG Battle Chess", "", "RPGBattleChess", "Parmi les plus vieux jeux de plateau au monde et surment parmi ceux qui compte le plus d'adepte au travere du globe. Les echecs n'ons pas vue leur régles millenaire évoluer depuis plus ou moin leur création, ni patch, ni DLC, ni extention. Il est temp que cella change ! "),
      ("Ðragon Game Studio", "", "DragonGameStudio", "Studio de developemnt de jeux video intependent francais"),



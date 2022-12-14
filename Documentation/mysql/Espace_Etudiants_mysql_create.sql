CREATE TABLE `t_Etudiants` (
	`Id_Etudiant` INT(4) NOT NULL AUTO_INCREMENT,
	`Mat_Etd` VARCHAR(9) NOT NULL,
	`Nom_Etd` VARCHAR(24) NOT NULL,
	`Prenoms_Etd` VARCHAR(32) NOT NULL,
	`Date_Naiss_Etd` DATE NOT NULL,
	`Email_Etd` VARCHAR(64) NOT NULL UNIQUE,
	`Login_Etd` VARCHAR(24) NOT NULL UNIQUE,
	`Password_Etd` VARCHAR(64) NOT NULL,
	`Connexion_Status` BOOLEAN NOT NULL,
	`User_Status` BOOLEAN NOT NULL,
	PRIMARY KEY (`Id_Etudiant`)
);

CREATE TABLE `t_Classes` (
	`Code_Classe` VARCHAR(24) NOT NULL UNIQUE,
	`Libelle_Classe` VARCHAR(32) NOT NULL UNIQUE,
	PRIMARY KEY (`Code_Classe`)
);

CREATE TABLE `t_Profils` (
	`Id_Profil` INT(7) NOT NULL AUTO_INCREMENT UNIQUE,
	`Id_Etd_Profil` INT(4) NOT NULL,
	`Photo_Profil` VARCHAR(128),
	`Numero_Tel` VARCHAR(24),
	`Numero_Whatsapp` VARCHAR(24),
	`Code_Classe_Profil` VARCHAR(24) NOT NULL,
	`Code_Spe_Profil` VARCHAR(24) NOT NULL,
	`Bio_Profil` TEXT,
	`Interets_Profil` TEXT,
	`Annee_Entree` VARCHAR(9) NOT NULL,
	`Banniere_Profil` VARCHAR(128) NOT NULL,
	`Couleur_Profil` VARCHAR(16) NOT NULL,
	PRIMARY KEY (`Id_Profil`)
);

CREATE TABLE `t_Specialites` (
	`Code_Specialite` VARCHAR(24) NOT NULL UNIQUE,
	`Libelle_Specialite` VARCHAR(32) NOT NULL UNIQUE,
	PRIMARY KEY (`Code_Specialite`)
);

CREATE TABLE `t_Annees` (
	`Annee` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`Annee`)
);

CREATE TABLE `t_Posts_Etd` (
	`Id_Post` INT(10) NOT NULL AUTO_INCREMENT,
	`Titre_Post` VARCHAR(164) NOT NULL,
	`Message_Post` TEXT NOT NULL,
	`Image_Post` VARCHAR(164),
	`Fichier_Post` VARCHAR(164),
	`Date_Post` DATETIME NOT NULL,
	`Nbre_Like_Post` INT(5) DEFAULT '0',
	`Nbre_Unlike_Post` INT(5) DEFAULT '0',
	`Nbre_Comment_Post` INT(5) DEFAULT '0',
	`Id_Etd_Post` INT(4) NOT NULL,
	PRIMARY KEY (`Id_Post`)
);

CREATE TABLE `t_Sessions` (
	`Id_Session` INT(10) NOT NULL AUTO_INCREMENT,
	`Id_Session_Etd` INT(4) NOT NULL,
	`Session_Start` DATETIME,
	`Session_End` DATETIME,
	`Session_Sys_Id` VARCHAR(164),
	PRIMARY KEY (`Id_Session`)
);

CREATE TABLE `t_Activites_Etd` (
	`Id_Act` INT(10) NOT NULL AUTO_INCREMENT,
	`Titre_Act` VARCHAR(164) NOT NULL,
	`Message_Act` TEXT NOT NULL,
	`Image_Act` VARCHAR(164),
	`Fichier_Act` VARCHAR(164),
	`Date_Act` DATETIME NOT NULL,
	`Nbre_Like_Act` INT(5) DEFAULT '0',
	`Nbre_Unlike_Act` INT(5) DEFAULT '0',
	`Nbre_Comment_Act` INT(5) DEFAULT '0',
	`Id_Etd_Act` INT(4) NOT NULL,
	PRIMARY KEY (`Id_Act`)
);

CREATE TABLE `t_Matricules` (
	`Matricule_Etd` VARCHAR(9) NOT NULL,
	`Nom_Etd_Mat` VARCHAR(24) NOT NULL,
	`Prenom_Etd_Mat` VARCHAR(32) NOT NULL,
	PRIMARY KEY (`Matricule_Etd`)
);

ALTER TABLE `t_Etudiants` ADD CONSTRAINT `t_Etudiants_fk0` FOREIGN KEY (`Mat_Etd`) REFERENCES `t_Matricules`(`Matricule_Etd`);

ALTER TABLE `t_Profils` ADD CONSTRAINT `t_Profils_fk0` FOREIGN KEY (`Id_Etd_Profil`) REFERENCES `t_Etudiants`(`Id_Etudiant`);

ALTER TABLE `t_Profils` ADD CONSTRAINT `t_Profils_fk1` FOREIGN KEY (`Code_Classe_Profil`) REFERENCES `t_Classes`(`Code_Classe`);

ALTER TABLE `t_Profils` ADD CONSTRAINT `t_Profils_fk2` FOREIGN KEY (`Code_Spe_Profil`) REFERENCES `t_Specialites`(`Code_Specialite`);

ALTER TABLE `t_Profils` ADD CONSTRAINT `t_Profils_fk3` FOREIGN KEY (`Annee_Entree`) REFERENCES `t_Annees`(`Annee`);

ALTER TABLE `t_Posts_Etd` ADD CONSTRAINT `t_Posts_Etd_fk0` FOREIGN KEY (`Id_Etd_Post`) REFERENCES `t_Etudiants`(`Id_Etudiant`);

ALTER TABLE `t_Sessions` ADD CONSTRAINT `t_Sessions_fk0` FOREIGN KEY (`Id_Session_Etd`) REFERENCES `t_Etudiants`(`Id_Etudiant`);

ALTER TABLE `t_Activites_Etd` ADD CONSTRAINT `t_Activites_Etd_fk0` FOREIGN KEY (`Id_Etd_Act`) REFERENCES `t_Etudiants`(`Id_Etudiant`);











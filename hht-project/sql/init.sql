-- Structure creation
DROP TABLE HHT_USERS ;
DROP TABLE HHT_ROLES;
DROP TABLE HHT_DOCUMENT;

CREATE TABLE HHT_ROLES (
    code CHAR(1),
    description VARCHAR(250)
);

ALTER TABLE HHT_ROLES ADD PRIMARY KEY(code);


CREATE TABLE HHT_USERS (
	id BIGINT NOT NULL AUTO_INCREMENT,
	firstName VARCHAR(250),
	lastName VARCHAR(250),
	email VARCHAR(250),
	hhtRole CHAR(1),
	password VARCHAR(250) DEFAULT 'AZERTY',
    PRIMARY KEY(id)
);

CREATE TABLE HHT_DOCUMENT (
  id BIGINT NOT NULL AUTO_INCREMENT,
  fileName varchar(250) NOT NULL,
  fileType varchar(30) NOT NULL,
  fileSize int(11) NOT NULL,
  fileDownloadLink CHAR(250) NOT NULL,
  fileUploadDate TIMESTAMP default CURRENT_TIMESTAMP,
  PRIMARY KEY(id)
);

INSERT INTO HHT_ROLES(code, description) VALUES('A','Administrateurs');
INSERT INTO HHT_ROLES(code, description) VALUES('M','Membres');
INSERT INTO HHT_ROLES(code, description) VALUES('V','Visiteurs');


INSERT INTO HHT_USERS(lastName, firstName,  email , hhtRole) VALUES ('Daubresse', 'Olivier', 'oli.daubresse@gmail.com', 'A');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Vandenbossche', 'Daniel', 'daniel.vandenbossche17@gmail.com', 'A');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Marcelis', 'Pierre', 'pierre.marcelis@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Champagne', 'Maurice', 'maurice.champagne@gmail.com', 'A');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Mottart', 'Aline', 'alinemottart@msn.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Tordoir', 'Aurélie', 'ilou_eikishi@hotmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Hoogstoel', 'Xavier', 'xavier.hoogstoel@skynet.be', 'A');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Hoogstoel', 'Claude', 'fb927605@skynet.be', 'A');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Latinne', 'Benoit', 'latinne.osterman@gmail.com', 'A');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Latinne', 'Thibault', 'thibsledips2001@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Anckart', 'Maurice', 'maurice.anckaert@scarlet.be', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Augustijn', 'Kristel', 'kristelaugustijnen@yahoo.fr', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Bare', 'Tatiana', 'tatiana.bare@hotmail.be', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Bortoluzzi', 'Eli', 'elybortoluzzi@gmail.com', 'A');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Bourgois', 'Annick', 'annick.bourgois@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Caspers', 'Sophie', 'sophie.caspers@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Dassargues', 'Bertrand', 'bertranddassargues234@hotmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Daubresse', 'Vincent', 'daubresse.v94@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Dauvrin', 'Marie', 'marie.dauvrin@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('De Hemricourt', 'Erard', 'erardd@yahoo.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Delafontaine', 'Louise', 'delafontaine.louise@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Deleener', 'Caudy', 'claudyi3@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Delestre', 'Marianne', 'mariannedelestre@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Delrock', 'Nadine', 'nadine.delrock@live.be', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Denis', 'Luc', 'denis.luc@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Ekanga', 'Lydia', 'mali-senga@hotmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Fonseca', 'Marcio', 'marciofonseca738@msn.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Fonseca Ribeiro', 'Victor', 'vitorfonsecaribeiro@hotmail.be', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Gerard', 'Maria', 'missmaryj602@hotmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Gheur', 'Dominique', 'dgheur@hotmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Jannin', 'Charlotte', 'charlotte_jannin@hotmail.fr', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Jovanovic', 'Nasta', 'n.jovanovic@hotmail.be', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Lefebvre', 'Jean-François', 'jfl@mafact.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Neut', 'Martine', 'martine.neut.d@hotmail.com', 'A');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Ngoy', 'Céline', 'celinengoy@yahoo.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Olivier', 'Karine', 'pepita.olivier@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Pereira', 'Maria', 'mariajoaopereira511@hotmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Rihoux', 'Olivier', 'olivier_rihoux@hotmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Rommelaere', 'Adeline', 'a.rommelaere@hotmail.com', 'A');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Rosseau', 'Myriam', 'myriam.rosseau@outlook.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Simonin Borgvad', 'Elise', 'elisesimonin@hotmail.be', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Simons', 'Marc', 'marc.simons2@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Souweine', 'Marion', 'marion8429@hotmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Tantrine', 'Catherine', 'tantrine.cat@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Tay', 'Laetitia', 'laetitia.tay@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Tmar', 'Sarah', 'tmsarah@hotmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Van Den Haute', 'Nancy', 'nancy.vandenhaute@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Hottois', 'Stéphane', 'stephane_hottois@hotmail.com', 'A');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Vande Perre', 'Coline', 'coline1110@hotmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Vandewinckel', 'Pascale', 'vd.pascale@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Vosters', 'Aurèle', 'aurele.vosters@gmail.com', 'M');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Devoet', 'Catherine', 'catherine.devoet@gmail.com', 'A');
INSERT INTO HHT_USERS(lastName, firstName, email , hhtRole) VALUES ('Yvan', 'Jorquera', 'jorqueraivan@yahoo.fr', 'A');
commit;
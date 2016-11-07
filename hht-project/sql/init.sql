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
	first_name VARCHAR(250),
	last_name VARCHAR(250),
	email VARCHAR(250),
	hht_role CHAR(1),
	PASSWORD VARCHAR(250) DEFAULT 'AZERTY',
    PRIMARY KEY(id)
);

CREATE TABLE HHT_DOCUMENT (
  id BIGINT NOT NULL AUTO_INCREMENT,
  filename varchar(250) NOT NULL,
  filetype varchar(30) NOT NULL,
  filesize int(11) NOT NULL,
  filedownloadlink CHAR(250) NOT NULL,
  fileUploadDate TIMESTAMP default CURRENT_TIMESTAMP,
  PRIMARY KEY(id)
);

INSERT INTO HHT_ROLES(code, description) VALUES('A','Administrateurs');
INSERT INTO HHT_ROLES(code, description) VALUES('M','Membres');
INSERT INTO HHT_ROLES(code, description) VALUES('V','Visiteurs');


INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Daubresse', 'Olivier', 'oli.daubresse@gmail.com', 'A');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Vandenbossche', 'Daniel', 'daniel.vandenbossche17@gmail.com', 'A');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Marcelis', 'Pierre', 'pierre.marcelis@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Champagne', 'Maurice', 'maurice.champagne@gmail.com', 'A');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Mottart', 'Aline', 'alinemottart@msn.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Tordoir', 'Aurélie', 'ilou_eikishi@hotmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Hoogstoel', 'Xavier', 'xavier.hoogstoel@skynet.be', 'A');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Hoogstoel', 'Claude', 'fb927605@skynet.be', 'A');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Latinne', 'Benoit', 'latinne.osterman@gmail.com', 'A');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Latinne', 'Thibault', 'thibsledips2001@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Anckart', 'Maurice', 'maurice.anckaert@scarlet.be', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Augustijn', 'Kristel', 'kristelaugustijnen@yahoo.fr', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Bare', 'Tatiana', 'tatiana.bare@hotmail.be', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Bortoluzzi', 'Eli', 'elybortoluzzi@gmail.com', 'A');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Bourgois', 'Annick', 'annick.bourgois@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Caspers', 'Sophie', 'sophie.caspers@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Dassargues', 'Bertrand', 'bertranddassargues234@hotmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Daubresse', 'Vincent', 'daubresse.v94@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Dauvrin', 'Marie', 'marie.dauvrin@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('De Hemricourt', 'Erard', 'erardd@yahoo.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Delafontaine', 'Louise', 'delafontaine.louise@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Deleener', 'Caudy', 'claudyi3@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Delestre', 'Marianne', 'mariannedelestre@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Delrock', 'Nadine', 'nadine.delrock@live.be', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Denis', 'Luc', 'denis.luc@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Ekanga', 'Lydia', 'mali-senga@hotmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Fonseca', 'Marcio', 'marciofonseca738@msn.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Fonseca Ribeiro', 'Victor', 'vitorfonsecaribeiro@hotmail.be', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Gerard', 'Maria', 'missmaryj602@hotmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Gheur', 'Dominique', 'dgheur@hotmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Jannin', 'Charlotte', 'charlotte_jannin@hotmail.fr', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Jovanovic', 'Nasta', 'n.jovanovic@hotmail.be', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Lefebvre', 'Jean-François', 'jfl@mafact.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Neut', 'Martine', 'martine.neut.d@hotmail.com', 'A');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Ngoy', 'Céline', 'celinengoy@yahoo.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Olivier', 'Karine', 'pepita.olivier@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Pereira', 'Maria', 'mariajoaopereira511@hotmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Rihoux', 'Olivier', 'olivier_rihoux@hotmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Rommelaere', 'Adeline', 'a.rommelaere@hotmail.com', 'A');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Rosseau', 'Myriam', 'myriam.rosseau@outlook.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Simonin Borgvad', 'Elise', 'elisesimonin@hotmail.be', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Simons', 'Marc', 'marc.simons2@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Souweine', 'Marion', 'marion8429@hotmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Tantrine', 'Catherine', 'tantrine.cat@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Tay', 'Laetitia', 'laetitia.tay@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Tmar', 'Sarah', 'tmsarah@hotmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Van Den Haute', 'Nancy', 'nancy.vandenhaute@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Hottois', 'Stéphane', 'stephane_hottois@hotmail.com', 'A');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Vande Perre', 'Coline', 'coline1110@hotmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Vandewinckel', 'Pascale', 'vd.pascale@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Vosters', 'Aurèle', 'aurele.vosters@gmail.com', 'M');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Devoet', 'Catherine', 'catherine.devoet@gmail.com', 'A');
INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Yvan', 'Jorquera', 'jorqueraivan@yahoo.fr', 'A');
commit;
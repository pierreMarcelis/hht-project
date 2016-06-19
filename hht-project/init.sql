-- Structure creation
DROP HHT_USERS ;
DROP TABLE HHT_ROLES;

CREATE TABLE HHT_ROLES (
	code CHAR(1),
	description VARCHAR2(250)
);

ALTER TABLE HHT_ROLES ADD PRIMARY KEY(code);


CREATE TABLE HHT_USERS (
	ID BIGINT,
	FIRST_NAME VARCHAR2(250),
	LAST_NAME VARCHAR2(250),
	EMAIL VARCHAR2(250),
	HHT_ROLE CHAR(1),
	PASSWORD VARCHAR2(250) DEFAULT 'AZERTY'
);

ALTER TABLE HHT_USERS ADD PRIMARY KEY(ID);


INSERT INTO HHT_ROLES(code, description) VALUES('A','Administrateurs');
INSERT INTO HHT_ROLES(code, description) VALUES('M','Membres');
INSERT INTO HHT_ROLES(code, description) VALUES('V','Visiteurs');

INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (1, 'Daubresse', 'Olivier', 'oli.daubresse@gmail.com', 'A');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (2, 'Vandenbossche', 'Daniel', 'daniel.vandenbossche17@gmail.com', 'A');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (3, 'Marcelis', 'Pierre', 'pierre.marcelis@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (4, 'Champagne', 'Maurice', 'maurice.champagne@gmail.com', 'A');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (5, 'Mottart', 'Aline', 'alinemottart@msn.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (6, 'Tordoir', 'Aurélie', 'ilou_eikishi@hotmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (7, 'Hoogstoel', 'Xavier', 'xavier.hoogstoel@skynet.be', 'A');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (8, 'Hoogstoel', 'Claude', 'fb927605@skynet.be', 'A');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (9, 'Latinne', 'Benoit', 'latinne.osterman@gmail.com', 'A');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (10, 'Latinne', 'Thibault', 'thibsledips2001@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (11, 'Anckart', 'Maurice', 'maurice.anckaert@scarlet.be', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (12, 'Augustijn', 'Kristel', 'kristelaugustijnen@yahoo.fr', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (13, 'Bare', 'Tatiana', 'tatiana.bare@hotmail.be', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (14, 'Bortoluzzi', 'Eli', 'elybortoluzzi@gmail.com', 'A');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (15, 'Bourgois', 'Annick', 'annick.bourgois@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (16, 'Caspers', 'Sophie', 'sophie.caspers@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (17, 'Dassargues', 'Bertrand', 'bertranddassargues234@hotmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (18, 'Daubresse', 'Vincent', 'daubresse.v94@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (19, 'Dauvrin', 'Marie', 'marie.dauvrin@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (20, 'De Hemricourt', 'Erard', 'erardd@yahoo.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (21, 'Delafontaine', 'Louise', 'delafontaine.louise@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (22, 'Deleener', 'Caudy', 'claudyi3@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (23, 'Delestre', 'Marianne', 'mariannedelestre@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (24, 'Delrock', 'Nadine', 'nadine.delrock@live.be', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (25, 'Denis', 'Luc', 'denis.luc@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (26, 'Ekanga', 'Lydia', 'mali-senga@hotmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (27, 'Fonseca', 'Marcio', 'marciofonseca738@msn.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (28, 'Fonseca Ribeiro', 'Victor', 'vitorfonsecaribeiro@hotmail.be', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (29, 'Gerard', 'Maria', 'missmaryj602@hotmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (30, 'Gheur', 'Dominique', 'dgheur@hotmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (31, 'Jannin', 'Charlotte', 'charlotte_jannin@hotmail.fr', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (32, 'Jovanovic', 'Nasta', 'n.jovanovic@hotmail.be', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (33, 'Lefebvre', 'Jean-François', 'jfl@mafact.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (34, 'Neut', 'Martine', 'martine.neut.d@hotmail.com', 'A');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (35, 'Ngoy', 'Céline', 'celinengoy@yahoo.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (36, 'Olivier', 'Karine', 'pepita.olivier@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (37, 'Pereira', 'Maria', 'mariajoaopereira511@hotmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (38, 'Rihoux', 'Olivier', 'olivier_rihoux@hotmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (39, 'Rommelaere', 'Adeline', 'a.rommelaere@hotmail.com', 'A');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (40, 'Rosseau', 'Myriam', 'myriam.rosseau@outlook.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (41, 'Simonin Borgvad', 'Elise', 'elisesimonin@hotmail.be', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (42, 'Simons', 'Marc', 'marc.simons2@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (43, 'Souweine', 'Marion', 'marion8429@hotmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (44, 'Tantrine', 'Catherine', 'tantrine.cat@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (45, 'Tay', 'Laetitia', 'laetitia.tay@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (46, 'Tmar', 'Sarah', 'tmsarah@hotmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (47, 'Van Den Haute', 'Nancy', 'nancy.vandenhaute@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (48, 'Hottois', 'Stéphane', 'stephane_hottois@hotmail.com', 'A');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (49, 'Vande Perre', 'Coline', 'coline1110@hotmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (50, 'Vandewinckel', 'Pascale', 'vd.pascale@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (51, 'Vosters', 'Aurèle', 'aurele.vosters@gmail.com', 'M');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (52, 'Devoet', 'Catherine', 'catherine.devoet@gmail.com', 'A');
INSERT INTO HHT_USERS(ID, FIRST_NAME, LAST_NAME , EMAIL , HHT_ROLE) VALUES (53, 'Yvan', 'Jorquera', 'jorqueraivan@yahoo.fr', 'A');

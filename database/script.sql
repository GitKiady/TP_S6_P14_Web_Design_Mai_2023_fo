CREATE DATABASE site_info_ia;
\c site_info_ia

CREATE TABLE admin(
	pseudo VARCHAR(100) NOT NULL,
	mot_de_passe VARCHAR(100) NOT NULL
);

INSERT INTO admin VALUES('admin','admin');

CREATE TABLE categorie(
	id SERIAL NOT NULL PRIMARY KEY,
	libelle VARCHAR(100) NOT NULL
);

INSERT INTO categorie(libelle) VALUES('Sante');
INSERT INTO categorie(libelle) VALUES('Education');
INSERT INTO categorie(libelle) VALUES('Technologie');

CREATE TABLE article(
	id SERIAL NOT NULL PRIMARY KEY,
	titre VARCHAR(100) NOT NULL,
	image VARCHAR(100) NOT NULL,
	description TEXT NOT NULL,
	keyword VARCHAR(100) NOT NULL,
	date_publication TIMESTAMP DEFAULT current_timestamp,
	idcategorie INT REFERENCES categorie(id),
	contenue TEXT NOT NULL,
	isvalide BOOLEAN DEFAULT true
);

INSERT INTO article(titre,image,description,keyword,idcategorie,contenue) VALUES ('titre','image','description','key, word',1,'contenue');

CREATE OR REPLACE VIEW v_articles AS SELECT titre,description,date_publication,libelle,article.id,categorie.id as idcategorie,keyword,image,contenue  FROM article JOIN categorie ON article.idcategorie=categorie.id ORDER BY date_publication DESC;

CREATE OR REPLACE VIEW v_articles_valide AS SELECT titre,description,date_publication,libelle,article.id,categorie.id as idcategorie,keyword,image,contenue  FROM article JOIN categorie ON article.idcategorie=categorie.id WHERE isvalide=true ORDER BY date_publication DESC;

CREATE OR REPLACE VIEW v_article_recent AS SELECT titre,description,date_publication,libelle,article.id,categorie.id as idcategorie,keyword,image,contenue  FROM article JOIN categorie ON article.idcategorie=categorie.id WHERE isvalide=true ORDER BY date_publication DESC LIMIT 6;

CREATE OR REPLACE VIEW v_article_recent_10 AS SELECT titre,description,date_publication,libelle,article.id,categorie.id as idcategorie,keyword,image,contenue  FROM article JOIN categorie ON article.idcategorie=categorie.id WHERE isvalide=true ORDER BY date_publication DESC LIMIT 10;


------------------- Table pas vraiment utile

CREATE TABLE sous_titre(
	id SERIAL NOT NULL PRIMARY KEY,
	soustitre VARCHAR(100) NOT NULL,
	idarticle INT REFERENCES article(id),
	idh INT REFERENCES h(id)
);

CREATE TABLE contenu(
	idsous_titre INT REFERENCES sous_titre(id),
	contenue TEXT NOT NULL
);

CREATE TABLE h(
	id INT NOT NULL PRIMARY KEY
);

INSERT INTO h VALUES(2);
INSERT INTO h VALUES(3);
INSERT INTO h VALUES(4);
INSERT INTO h VALUES(5);
INSERT INTO h VALUES(6);

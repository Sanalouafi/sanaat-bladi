CREATE DATABASE sanaat_bladi;

CREATE TABLE role(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255)
);

CREATE TABLE utilisateur(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    prenom VARCHAR(255),
    nom VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES role(id)
);

CREATE TABLE materiel(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255)
);

CREATE TABLE categorie(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255)
);

CREATE TABLE produit(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255),
    descreption VARCHAR(255),
    categorie_id INT,
    materiel_id INT,
    FOREIGN KEY (categorie_id) REFERENCES categorie(id),
    FOREIGN KEY (materiel_id) REFERENCES materiel(id),
);
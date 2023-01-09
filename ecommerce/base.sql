CREATE DATABASE ecommerce;
 
\c ecommerce;

-- CREATE TABLE utilisateur (
--     iduser SERIAL PRIMARY KEY
-- )

CREATE TABLE disponibiliter(
    iddisponibiliter SERIAL PRIMARY KEY NOT NULL,
    nom VARCHAR(50)
);

CREATE TABLE marque(
    idmarque SERIAL PRIMARY KEY NOT NULL,
    nomMarque VARCHAR(60)
);

CREATE TABLE produit(
    idproduit VARCHAR(10) PRIMARY KEY NOT NULL,
    nomproduit VARCHAR(30),
    idmarque SERIAL,
    iddisponibiliter SERIAL,
    prixproduit DECIMAL,
    FOREIGN KEY (idmarque) REFERENCES marque(idmarque),
    FOREIGN KEY (iddisponibiliter) REFERENCES disponibiliter(iddisponibiliter)
);

INSERT INTO disponibiliter (nom) VALUES ('Disponible');
INSERT INTO disponibiliter (nom) VALUES ('Non disponible');

INSERT INTO marque (nomMarque) VALUES ('Nike');
INSERT INTO marque (nomMarque) VALUES ('Adidas');



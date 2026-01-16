CREATE table ville(
    id int PRIMARY key AUTO_INCREMENT, 
    name varchar(50)
    );

CREATE table avocate(
id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(30) NOT null,
    specialites ENUM("Droit_penal","civil,famille", "affaires") NOT null,
    annee_Experience int not null,
    consultation_en_ligne bool DEFAULT true,
    ville_id int,
    FOREIGN key (ville_id) REFERENCES ville(id) ON DELETE SET null
);
CREATE table huissier(
id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(30) NOT null,
    types_actes ENUM("Signification", "execution", "constats") NOT null,
    annee_Experience int not null,
    ville_id int,
    FOREIGN key (ville_id) REFERENCES ville(id) ON DELETE SET null
)
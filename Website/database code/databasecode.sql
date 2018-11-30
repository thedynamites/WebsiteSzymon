CREATE TABLE gekocht (
    id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    naam varchar(256) not null,
    email varchar(256) not null,
    adres varchar(256) not null,
    stad varchar(256) not null,
    provincie varchar(256) not null,
    postcode varchar(256) not null
);

INSERT INTO gekocht ( naam, email, adres, stad, provincie, postcode)
    VALUES ('Jan', 'Jan@gmail.com', 'Ooststraat 12', 'Rotterdam', 'zuid-holland', '2030HH');
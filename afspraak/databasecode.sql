CREATE TABLE afspraak (
    id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    datum varchar(256) not null,
    tijd varchar(256) not null,
    afspraak varchar(256) not null,
    adres varchar(256) not null
);

INSERT INTO afspraak ( datum, tijd, afspraak, adres)
    VALUES ('26-11-2018', '14:00', 'kapper', 'Rotterdam');
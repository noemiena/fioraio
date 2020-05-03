create table occasions(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(32) NOT NULL,
    description TEXT,
    created datetime,
    modified datetime
);

CREATE TABLE flowers(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    name varchar(32) not null,
    occasion_id int,
    price float,
    qty int,
    created datetime,
    modified datetime,
    foreign key (occasion_id) references occasions (id) on delete restrict on update cascade
);

INSERT INTO occasions
(`name`,`description`)
VALUES
("Dipigere","Un ottimo modo per diventare Van Gogh"),
("Viaggio","Se vai ad Amsterdam saprai riconoscerli"),
("Appuntamento","Farai bella figura"),
("Festa della mamma","Un bel modo per fare felice la mamma");


INSERT INTO flowers
(`name`,`occasion_id`,`price`,`qty`)
VALUES
("Girasoli",1,100,3),
("Tulipano",2,30,10),
("Rosa",3,50,1),
("Margherita",4,3,1),
("Azalea",4,15,1);


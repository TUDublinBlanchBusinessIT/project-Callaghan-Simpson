drop database if exists Commanders;
 create database Commanders;
 use Commanders;
 
 create table player (
id int auto_increment,
Firstname varchar(30),
Surname varchar(30),
white boolean,
blue boolean,
black boolean,
red boolean,
green boolean,
deck_level varchar(10),
primary key (id)
);

 
 create table Pods (
id int auto_increment,
player_id integer,
deck_level varchar(10),
Pod_1 varchar (30),
Pod_2 varchar (30),
Pod_3 varchar (30),
Pod_4 varchar (30),
Pod_5 varchar (30),
foreign key(player_id) references player(id),
primary key (id)
);

INSERT INTO Pods(player_id)
SELECT (id) from player
INSERT INTO Pods(deck_level)
SELECT deck_level FROM player

drop database if exists Commanders;
 create database Commanders;
 use Commanders;
 
create table deckpowerlevelcount(
id int auto_increment,
lvl_1 integer,
lvl_2 integer,
lvl_3 integer,
lvl_4 integer,
lvl_5 integer,
lvl_6 integer,
lvl_7 integer,
primary key(id)

);


create table player(
id int auto_increment,
Firstname varchar(30),
Surname varchar(30),
white boolean,
blue boolean,
black boolean,
red boolean,
green boolean,
primary key (id)
);



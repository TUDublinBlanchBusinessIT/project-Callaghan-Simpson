drop database if exists Commanders;
 create database Commanders;
 use Commanders;
 
create table deck_powerlevel_count(
id int auto_increment,
lvl_1 integer,
lvl_2 integer,
lvl_3 integer,
lvl_4 integer,
lvl_5 integer,
lvl_6 integer,
lvl_7 integer,
foreign key(id player) references player(id)
primary key(id)

);
/*
create table color (
id int auto_increment,
white boolean,
blue boolean,
black boolean,
red boolean,
green boolean,
primary key(id)
);
*/

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






/*
create table black(
id integer auto_increment,
deathtouch boolean,
menace boolean,
madness boolean,

)

create table red(
id integer auto_increment,
haste boolean,
1st strike boolean,
double strike boolean,

)

create table green(
id integer auto_increment,
trample boolean,
reach boolean,
proliferate boolean,

)
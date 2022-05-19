create database db_site; 

use db_site;


Create table usuarios (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
login Varchar(30),
senha Varchar(40),
Primary Key (ID)) ENGINE = MyISAM;



create table chamados (
id_chamados int auto_increment not null primary key,
email varchar(40)  not null,
nome varchar(40) not null,
nucleo varchar(40) not null,
setor varchar(40) not null,
tel int (10) not null,
descr varchar (100));


select * from usuarios;

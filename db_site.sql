create database db_site; 

use db_site;


create table usuario (
idusuario bigint not null auto_increment primary key,
login varchar (20) not null,
senha varchar (50) not null
);


create table chamados (
id_chamados int auto_increment not null primary key,
email varchar(40)  not null,
nome varchar(40) not null,
nucleo varchar(40) not null,
setor varchar(40) not null,
tel int (10) not null,
descr varchar (100));

create table atendimento (
idatendimento int auto_increment not null primary key,
nome_atend varchar(45),
tipo_chamados varchar(45),
dia_atendimento date,
FK_chamados int,
FK_concluidos int

);

ALTER TABLE concluidos 
ADD FOREIGN KEY  (FK_chamado_conc)  REFERENCES  chamados (id_chamados); 

create table concluidos (
idconcluidos int auto_increment not null primary key,
FK_chamado_conc int

);

select * from chamados;

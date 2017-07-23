create database loja;
use loja;
create table produtos(id integer primary key auto_increment,nome varchar(255),preco decimal(10,2),descricao text,categoria_id integer,Usado boolean);
create table categorias(id integer primary key auto_increment,nome varchar(255));
insert into categorias (nome) values ("esportes"), ("mobilidade"),("escolar");


 




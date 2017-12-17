create database loja;
use loja;
create table produtos
(
	id integer primary key auto_increment,
    nome varchar(255),
    preco decimal(10,2),
    estoque int,
    descricao text,
    categoria_id integer,
    usado boolean
);
create table categorias
(
	id integer primary key auto_increment,
    nome varchar(255)
);
create table usuarios
(
	id integer primary key auto_increment,
    email varchar(255),
    senha varchar(255),
    tipo  varchar(255)
);
insert into categorias (nome) values ("esportes"), ("mobilidade"),("escolar");
create table vendas
(
	id integer primary key auto_increment,
    prod_id int,
    user_id int,
    preco decimal(10,2),
    data date,
    foreign key (prod_id) references produtos(id),
    foreign key (user_id) references usuarios(id)

);


insert into usuarios (email, senha,tipo) values ("brenoo194@gmail.com", "123456","admin");

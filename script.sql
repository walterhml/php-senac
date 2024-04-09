create database if not exists contatos;
use contatos;

create table if not exists contatos_info(
id int auto_increment primary key,
nome varchar(100) not null,
telefone varchar(20),
email varchar(100) not null
);

create user 'usuario_contatos'@'localhost' identified by 'senha123';

grant all privileges on contatos.* to 'usuario_contatos'@'localhost';

insert into contatos_info (nome, telefone, email) values
	('Joao', '123456789', 'joao@gmail.com');
    
    select * from contatos_info;
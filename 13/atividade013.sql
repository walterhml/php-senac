create database Conta;
use Conta;


create table if not exists cliente (
id int auto_increment primary key,
nome varchar(20) not null,
cpf varchar(40)
);

create table if not exists conta (
id int auto_increment not null,
cliente varchar(30) not null,
numero int not null,
saldo boolean not null
);

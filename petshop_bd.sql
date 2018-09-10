create database if not exists petshop_bd 
	default character set utf8 
	default collate utf8_general_ci;

create table if not exists newsletter (
	id int auto_increment not null primary key,
	nome varchar (255) not null,
	email varchar (255) not null
) default charset utf8;
    
create table if not exists agendamento (
	id int auto_increment not null primary key,
	nome varchar (255) not null,
	endereco varchar (255) not null,
	cep varchar (9) not null,
	email varchar (255) not null,
	tel_cel varchar (20) not null,
	nome_animal varchar (20) not null,
	porte_animal enum ('animal_pequeno', 'animal_medio', 'animal_grande') not null,
	tipo_tosa enum ('','padrao','higienica','tesoura','raca','bebe') not null,
	q_obs text,
	semana set ('terca','quarta','quinta','sexta','sabado') not null,
	Pdata date,
	Sdata date
) default charset utf8;
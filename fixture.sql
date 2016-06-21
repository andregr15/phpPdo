create database pdo;

create table pdo.aluno
(
	id int auto_increment primary key,
	nome varchar(255),
	nota int
);

insert into pdo.aluno (nome, nota) values ('André', '10');
insert into pdo.aluno (nome, nota) values ('José', '9');
insert into pdo.aluno (nome, nota) values ('Maria', '3');
insert into pdo.aluno (nome, nota) values ('João', '4');
insert into pdo.aluno (nome, nota) values ('Aline', '5');
insert into pdo.aluno (nome, nota) values ('Juliana', '6');
insert into pdo.aluno (nome, nota) values ('Camila', '8');
insert into pdo.aluno (nome, nota) values ('Ana', '1');
insert into pdo.aluno (nome, nota) values ('Guilherme', '10');
insert into pdo.aluno (nome, nota) values ('Wesley', '8');
insert into pdo.aluno (nome, nota) values ('Willian', '7');
insert into pdo.aluno (nome, nota) values ('Fernando', '3');
insert into pdo.aluno (nome, nota) values ('Gabriel', '5');
insert into pdo.aluno (nome, nota) values ('Carolina', '7');
insert into pdo.aluno (nome, nota) values ('Patricia', '9');
insert into pdo.aluno (nome, nota) values ('Pedro', '2');
insert into pdo.aluno (nome, nota) values ('Sandra', '4');
insert into pdo.aluno (nome, nota) values ('Vitória', '5');
insert into pdo.aluno (nome, nota) values ('Lucas', '7');
insert into pdo.aluno (nome, nota) values ('Mateus', '10');
insert into pdo.aluno (nome, nota) values ('Fernanda', '0');

create table pdo.usuario
(
	nome varchar(255) primary key,
	senha varchar(10)
);

insert into pdo.usuario (nome, senha) values ("admin", 'admin');
insert into pdo.usuario (nome, senha) values ("Andre", '1234');
insert into pdo.usuario (nome, senha) values ("Gabriel", '4321');


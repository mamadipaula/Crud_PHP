create database projetophpf;
use projetophpf;

create table livro (
	id bigint not null,
    titulo varchar(100) not null,
    autor varchar(100) not null,
    paginas int not null,
    editora varchar(100) not null,
    primary key (id)
    );
    
    
    
create table perfil(
	idperfil int primary key,
    nome varchar(100)
    );
    
create table usuario(
	idusuario int primary key auto_increment,
    user varchar(100),
    pass varchar(100),
    perfil_idperfil int,
    foreign key(perfil_idperfil) references perfil(idperfil)
    );
    
insert into perfil values
(1,'Administrador'),
(2,'Funcionario');

insert into usuario values
(default,user1,123,1);



create table funcionario(
	cpf varchar(11) not null primary key,
    nome varchar(100) not null,
    email varchar(100) not null,
    usuario_idusuario int,
    foreign key (usuario_idusuario) references usuario(idusuario)
    );
    
    select * from funcionario;
    
    
